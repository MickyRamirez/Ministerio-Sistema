
<?php
App::import('Vendor', 'excel_reader2'); 
class SoyaproductorlocalesController extends AppController {
    public $components = array('Session','RequestHandler');
    public function add()
    {
        $this->loadModel('SoyaProductorLocal');

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
        $this->request->data['SoyaProductorLocal']['user_id'] = $this->Auth->user('id');
        $this->request->data['SoyaProductorLocal']['producto'] = strtoupper($this->request->data['SoyaProductorLocal']['producto']);
        $this->request->data['SoyaProductorLocal']['cantidadkg'] = $this->request->data['SoyaProductorLocal']['cantidadtm']*1000;
        $this->request->data['SoyaProductorLocal']['preciobs'] = $this->request->data['SoyaProductorLocal']['preciodolar']*$this->request->data['SoyaProductorLocal']['cambio'];
        $this->request->data['SoyaProductorLocal']['totaldolar'] = $this->request->data['SoyaProductorLocal']['preciodolar']*$this->request->data['SoyaProductorLocal']['cantidadtm'];
        $this->request->data['SoyaProductorLocal']['totalbs'] = $this->request->data['SoyaProductorLocal']['totaldolar']*$this->request->data['SoyaProductorLocal']['cambio'];
        if ($this->SoyaProductorLocal->save($this->request->data)) {
            $this->Session->setFlash(__('La Información fue Guardada.'));
            return $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function index()
    {
        $this->loadModel('SoyaProductorLocal');
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaProductorLocal.id' => 'asc' ),
            'conditions' => array('SoyaProductorLocal.user_id' =>  $this->Auth->user('id'),'operacion' => 'Venta Local')
        );
        $result = $this->SoyaProductorLocal->find('all', $conditions);
        
        if (empty($result)){
            $this->redirect(array('action' => 'operacion'));
        }else{
            $soyaproductorlocales = $this->paginate('SoyaProductorLocal');
            $this->set(compact('soyaproductorlocales'));
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
        $this->loadModel('SoyaProductorLocal');
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
            }
 
            $soyaproductorlocales = $this->SoyaProductorLocal->findById($id);
            if (!$soyaproductorlocales) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
            }
 
            if ($this->request->is('post') || $this->request->is('put')) {
        $this->request->data['SoyaProductorLocal']['producto'] = strtoupper($this->request->data['SoyaProductorLocal']['producto']);
        $this->request->data['SoyaProductorLocal']['cantidadkg'] = $this->request->data['SoyaProductorLocal']['cantidadtm']*1000;
        $this->request->data['SoyaProductorLocal']['preciobs'] = $this->request->data['SoyaProductorLocal']['preciodolar']*$this->request->data['SoyaProductorLocal']['cambio'];
        $this->request->data['SoyaProductorLocal']['totaldolar'] = $this->request->data['SoyaProductorLocal']['preciodolar']*$this->request->data['SoyaProductorLocal']['cantidadtm'];
        $this->request->data['SoyaProductorLocal']['totalbs'] = $this->request->data['SoyaProductorLocal']['totaldolar']*$this->request->data['SoyaProductorLocal']['cambio'];
                $this->SoyaProductorLocal->id = $id;
                if ($this->SoyaProductorLocal->save($this->request->data)) {
                    $this->Session->setFlash(__('El usuario fue modificado'));
                    $this->redirect(array('action' => 'edit', $id));
                }else{
                    $this->Session->setFlash(__('El usuario no fue modificado.'));
                }
            }
 
            if (!$this->request->data) {
                $this->request->data = $soyaproductorlocales;
            }
    }

    public function excel() {
        $this->loadModel('SoyaProductorLocal');
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $count=0;
        $i=0;
        if ($this->request->is('post')) {
            $datos = new Spreadsheet_Excel_Reader();
            $datos->read($this->request->data['SoyaProductorLocal']['excel']['tmp_name']);
            for ($i = 2; $i <= $datos->sheets[0]['numRows']; $i++) {

                $this->SoyaProductorLocal->create();
                $this->request->data['SoyaProductorLocal']['user_id'] = $this->Auth->user('id');
                $this->request->data['SoyaProductorLocal']['producto'] = $datos->sheets[0]['cells'][$i][1];
                $this->request->data['SoyaProductorLocal']['operacion'] = $datos->sheets[0]['cells'][$i][2];
                $this->request->data['SoyaProductorLocal']['cantidadkg'] = $datos->sheets[0]['cells'][$i][3];
                $this->request->data['SoyaProductorLocal']['cantidadtm'] = $datos->sheets[0]['cells'][$i][4];
                $this->request->data['SoyaProductorLocal']['preciodolar'] = $datos->sheets[0]['cells'][$i][5];
                $this->request->data['SoyaProductorLocal']['preciobs'] = $datos->sheets[0]['cells'][$i][6];
                $this->request->data['SoyaProductorLocal']['totaldolar'] =$datos->sheets[0]['cells'][$i][7];
                $this->request->data['SoyaProductorLocal']['totalbs'] = $datos->sheets[0]['cells'][$i][8];
                $this->request->data['SoyaProductorLocal']['fecharegistro'] = $datos->sheets[0]['cells'][$i][9];
                if ($this->SoyaProductorLocal->save($this->request->data)){
                    $count=$count+1;
                }
            }
            $this->Session->setFlash(__('Se guardaron '.$count.' registros.'));
            return $this->redirect(array('action' => 'index'));
        }
    }
}
?>