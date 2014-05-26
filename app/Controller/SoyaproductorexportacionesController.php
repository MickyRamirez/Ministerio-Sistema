
<?php
App::import('Vendor', 'excel_reader2'); 
class SoyaproductorexportacionesController extends AppController {
    public $components = array('Session','RequestHandler');
    public function add()
    {
        $this->loadModel('SoyaProductorExportacion');
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));

        //para obtener cambio de dolar
        $this->loadModel('SoyaCambioDolar');
        $conditions = array(
                'limit' => 1,
                'order' => array('SoyaCambioDolar.id' => 'desc' ));
        $this->set('soyacambiodolares',$this->SoyaCambioDolar->find('all',$conditions));
        //hasta aqui cambio de dolar




        if ($this->request->is('post')) {
        $this->request->data['SoyaProductorExportacion']['user_id'] = $this->Auth->user('id');
        $this->request->data['SoyaProductorExportacion']['producto'] = strtoupper( $this->request->data['SoyaProductorExportacion']['producto']);
        $this->request->data['SoyaProductorExportacion']['cantidadkg'] = $this->request->data['SoyaProductorExportacion']['cantidadtm']*1000;
        $this->request->data['SoyaProductorExportacion']['preciobs'] = $this->request->data['SoyaProductorExportacion']['preciodolar']*$this->request->data['SoyaProductorExportacion']['cambio'];
        $this->request->data['SoyaProductorExportacion']['totaldolar'] = $this->request->data['SoyaProductorExportacion']['preciodolar']*$this->request->data['SoyaProductorExportacion']['cantidadtm'];
        $this->request->data['SoyaProductorExportacion']['totalbs'] = $this->request->data['SoyaProductorExportacion']['totaldolar']*$this->request->data['SoyaProductorExportacion']['cambio'];

        if ($this->SoyaProductorExportacion->save($this->request->data)) {
            $this->Session->setFlash(__('La Información fue Guardada.'));
            return $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function index()
    {

        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));

        $this->loadModel('SoyaProductorExportacion');
        $conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaProductorExportacion.id' => 'asc' ),
            'conditions' => array('SoyaProductorExportacion.user_id' =>  $this->Auth->user('id'),'operacion' => 'Exportacion')
        );
        $result = $this->SoyaProductorExportacion->find('all', $conditions);
        
        if (empty($result)){
            $this->redirect(array('action' => 'operacion'));
        }else{
            $soyaproductorexportaciones = $this->paginate('SoyaProductorExportacion');
            $this->set(compact('soyaproductorexportaciones'));
        }
    }
    

    public function logout() {
        $this->redirect($this->Auth->logout());
    }
    public function operacion() {

        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));

    }
    
    public function edit($id = null)
    {
        $this->loadModel('SoyaCambioDolar');        
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));

        $conditions = array(
                'limit' => 1,
                'order' => array('SoyaCambioDolar.id' => 'desc' ));
        $this->set('soyacambiodolares',$this->SoyaCambioDolar->find('all',$conditions));
        $this->loadModel('SoyaProductorExportacion');
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
            }
 
            $soyaproductorexportaciones = $this->SoyaProductorExportacion->findById($id);
            if (!$soyaproductorexportaciones) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
            }
 
            if ($this->request->is('post') || $this->request->is('put')) {
                $this->request->data['SoyaProductorExportacion']['producto'] = strtoupper( $this->request->data['SoyaProductorExportacion']['producto']);
                $this->request->data['SoyaProductorExportacion']['cantidadkg'] = $this->request->data['SoyaProductorExportacion']['cantidadtm']*1000;
                $this->request->data['SoyaProductorExportacion']['preciobs'] = $this->request->data['SoyaProductorExportacion']['preciodolar']*$this->request->data['SoyaProductorExportacion']['cambio'];
                $this->request->data['SoyaProductorExportacion']['totaldolar'] = $this->request->data['SoyaProductorExportacion']['preciodolar']*$this->request->data['SoyaProductorExportacion']['cantidadtm'];
                $this->request->data['SoyaProductorExportacion']['totalbs'] = $this->request->data['SoyaProductorExportacion']['totaldolar']*$this->request->data['SoyaProductorExportacion']['cambio'];
                $this->SoyaProductorExportacion->id = $id;
                if ($this->SoyaProductorExportacion->save($this->request->data)) {
                    $this->Session->setFlash(__('El usuario fue modificado'));
                    $this->redirect(array('action' => 'edit', $id));
                }else{
                    $this->Session->setFlash(__('El usuario no fue modificado.'));
                }
            }
 
            if (!$this->request->data) {
                $this->request->data = $soyaproductorexportaciones;
            }
    }
    public function excel() {
        $this->loadModel('SoyaProductorExportacion');
        
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));

        $count=0;
        if ($this->request->is('post')) {
            $datos = new Spreadsheet_Excel_Reader();
            $datos->read($this->request->data['SoyaProductorExportacion']['excel']['tmp_name']);
            for ($i = 2; $i <= $datos->sheets[0]['numRows']; $i++) {

                $this->SoyaProductorExportacion->create();
                $this->request->data['SoyaProductorExportacion']['user_id'] = $this->Auth->user('id');
                $this->request->data['SoyaProductorExportacion']['producto'] = $datos->sheets[0]['cells'][$i][1];
                $this->request->data['SoyaProductorExportacion']['operacion'] = $datos->sheets[0]['cells'][$i][2];
                $this->request->data['SoyaProductorExportacion']['cantidadkg'] = $datos->sheets[0]['cells'][$i][3];
                $this->request->data['SoyaProductorExportacion']['cantidadtm'] = $datos->sheets[0]['cells'][$i][4];
                $this->request->data['SoyaProductorExportacion']['preciodolar'] = $datos->sheets[0]['cells'][$i][5];
                $this->request->data['SoyaProductorExportacion']['preciobs'] = $datos->sheets[0]['cells'][$i][6];
                $this->request->data['SoyaProductorExportacion']['totaldolar'] =$datos->sheets[0]['cells'][$i][7];
                $this->request->data['SoyaProductorExportacion']['totalbs'] = $datos->sheets[0]['cells'][$i][8];
                $this->request->data['SoyaProductorExportacion']['fecharegistro'] = $datos->sheets[0]['cells'][$i][9];
                if ($this->SoyaProductorExportacion->save($this->request->data)){
                    $count=$count+1;
                }
            }
            $this->Session->setFlash(__('Se guardaron '.$count.' registros.'));
            return $this->redirect(array('action' => 'index'));
        }
    }
}
?>