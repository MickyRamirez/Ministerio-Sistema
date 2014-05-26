
<?php
App::import('Vendor', 'excel_reader2'); 
class SoyaproductorproduccionesController extends AppController {
    public $components = array('Session','RequestHandler');
    public function add()
    {
        $this->loadModel('SoyaProductorProduccion');

        //para obtener cambio de dolar
        $this->loadModel('SoyaCambioDolar');
         $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $conditions = array(
                'limit' => 1,
                'order' => array('SoyaCambioDolar.id' => 'desc' ));
        $this->set('soyacambiodolares',$this->SoyaCambioDolar->find('all',$conditions));
        //hasta aqui cambio de dolar

        if ($this->request->is('post')) {
        $this->request->data['SoyaProductorProduccion']['user_id'] = $this->Auth->user('id');
        $this->request->data['SoyaProductorProduccion']['producto'] = strtoupper($this->request->data['SoyaProductorProduccion']['producto']);
        $this->request->data['SoyaProductorProduccion']['cantidadkg'] = $this->request->data['SoyaProductorProduccion']['cantidadtm']*1000;
        $this->request->data['SoyaProductorProduccion']['preciobs'] = $this->request->data['SoyaProductorProduccion']['preciodolar']*$this->request->data['SoyaProductorProduccion']['cambio'];
        $this->request->data['SoyaProductorProduccion']['totaldolar'] = $this->request->data['SoyaProductorProduccion']['preciodolar']*$this->request->data['SoyaProductorProduccion']['cantidadtm'];
        $this->request->data['SoyaProductorProduccion']['totalbs'] = $this->request->data['SoyaProductorProduccion']['totaldolar']*$this->request->data['SoyaProductorProduccion']['cambio'];
        if ($this->SoyaProductorProduccion->save($this->request->data)) {
            $this->Session->setFlash(__('La Información fue Guardada.'));
            return $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function index()
    {
        $this->loadModel('SoyaProductorProduccion');
         $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaProductorProduccion.id' => 'asc' ),
            'conditions' => array('SoyaProductorProduccion.user_id' =>  $this->Auth->user('id'),'operacion' => 'Produccion')
        );
        $result = $this->SoyaProductorProduccion->find('all', $conditions);
        
        if (empty($result)){
            $this->redirect(array('action' => 'operacion'));
        }else{
            $soyaproductorproducciones = $this->paginate('SoyaProductorProduccion');
            $this->set(compact('soyaproductorproducciones'));
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
        $this->loadModel('SoyaProductorProduccion');
        $this->loadModel('SoyaCambioDolar');
         $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $conditions = array(
                'limit' => 1,
                'order' => array('SoyaCambioDolar.id' => 'desc' ));
        $this->set('soyacambiodolares',$this->SoyaCambioDolar->find('all',$conditions));
         if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
            }
 
            $soyaproductorproducciones = $this->SoyaProductorProduccion->findById($id);
            if (!$soyaproductorproducciones) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
            }
 
            if ($this->request->is('post') || $this->request->is('put')) {
        $this->request->data['SoyaProductorProduccion']['producto'] = strtoupper($this->request->data['SoyaProductorProduccion']['producto']);
        $this->request->data['SoyaProductorProduccion']['cantidadkg'] = $this->request->data['SoyaProductorProduccion']['cantidadtm']*1000;
        $this->request->data['SoyaProductorProduccion']['preciobs'] = $this->request->data['SoyaProductorProduccion']['preciodolar']*$this->request->data['SoyaProductorProduccion']['cambio'];
        $this->request->data['SoyaProductorProduccion']['totaldolar'] = $this->request->data['SoyaProductorProduccion']['preciodolar']*$this->request->data['SoyaProductorProduccion']['cantidadtm'];
        $this->request->data['SoyaProductorProduccion']['totalbs'] = $this->request->data['SoyaProductorProduccion']['totaldolar']*$this->request->data['SoyaProductorProduccion']['cambio'];
                $this->SoyaProductorProduccion->id = $id;
                if ($this->SoyaProductorProduccion->save($this->request->data)) {
                    $this->Session->setFlash(__('El usuario fue modificado'));
                    $this->redirect(array('action' => 'edit', $id));
                }else{
                    $this->Session->setFlash(__('El usuario no fue modificado.'));
                }
            }
 
            if (!$this->request->data) {
                $this->request->data = $soyaproductorproducciones;
            }
    }
    public function excel() {
        $this->loadModel('SoyaProductorProduccion');
         $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $count=0;
        $i=0;
        if ($this->request->is('post')) {
            $datos = new Spreadsheet_Excel_Reader();
            $datos->read($this->request->data['SoyaProductorProduccion']['excel']['tmp_name']);
            for ($i = 2; $i <= $datos->sheets[0]['numRows']; $i++) {

                $this->SoyaProductorProduccion->create();
                $this->request->data['SoyaProductorProduccion']['user_id'] = $this->Auth->user('id');
                $this->request->data['SoyaProductorProduccion']['producto'] = $datos->sheets[0]['cells'][$i][1];
                $this->request->data['SoyaProductorProduccion']['operacion'] = $datos->sheets[0]['cells'][$i][2];
                $this->request->data['SoyaProductorProduccion']['cantidadkg'] = $datos->sheets[0]['cells'][$i][3];
                $this->request->data['SoyaProductorProduccion']['cantidadtm'] = $datos->sheets[0]['cells'][$i][4];
                $this->request->data['SoyaProductorProduccion']['preciodolar'] = $datos->sheets[0]['cells'][$i][5];
                $this->request->data['SoyaProductorProduccion']['preciobs'] = $datos->sheets[0]['cells'][$i][6];
                $this->request->data['SoyaProductorProduccion']['totaldolar'] =$datos->sheets[0]['cells'][$i][7];
                $this->request->data['SoyaProductorProduccion']['totalbs'] = $datos->sheets[0]['cells'][$i][8];
                $this->request->data['SoyaProductorProduccion']['fecharegistro'] = $datos->sheets[0]['cells'][$i][9];
                if ($this->SoyaProductorProduccion->save($this->request->data)){
                    $count=$count+1;
                }
            }
            $this->Session->setFlash(__('Se guardaron '.$count.' registros.'));
            return $this->redirect(array('action' => 'index'));
        }
    }
}
?>