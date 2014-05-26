
<?php
App::import('Vendor', 'excel_reader2'); 
class SoyaproductorcompragranosController extends AppController {
    public $components = array('Session','RequestHandler');
    public function add()
    {
        $this->loadModel('SoyaProductorCompraGrano');

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
        $this->request->data['SoyaProductorCompraGrano']['user_id'] = $this->Auth->user('id');
        $this->request->data['SoyaProductorCompraGrano']['producto'] = strtoupper($this->request->data['SoyaProductorCompraGrano']['producto']);
        $this->request->data['SoyaProductorCompraGrano']['cantidadkg'] = $this->request->data['SoyaProductorCompraGrano']['cantidadtm']*1000;
        $this->request->data['SoyaProductorCompraGrano']['preciobs'] = $this->request->data['SoyaProductorCompraGrano']['preciodolar']*$this->request->data['SoyaProductorCompraGrano']['cambio'];
        $this->request->data['SoyaProductorCompraGrano']['totaldolar'] = $this->request->data['SoyaProductorCompraGrano']['preciodolar']*$this->request->data['SoyaProductorCompraGrano']['cantidadtm'];
        $this->request->data['SoyaProductorCompraGrano']['totalbs'] = $this->request->data['SoyaProductorCompraGrano']['totaldolar']*$this->request->data['SoyaProductorCompraGrano']['cambio'];
        if ($this->SoyaProductorCompraGrano->save($this->request->data)) {
            $this->Session->setFlash(__('La Información fue Guardada.'));
            return $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function index()
    {
        $this->loadModel('SoyaProductorCompraGrano');
         $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaProductorCompraGrano.id' => 'asc' ),
            'conditions' => array('SoyaProductorCompraGrano.user_id' =>  $this->Auth->user('id'),'operacion' => 'Compra Grano')
        );
        $result = $this->SoyaProductorCompraGrano->find('all', $conditions);
        
        if (empty($result)){
            $this->redirect(array('action' => 'operacion'));
        }else{
            $soyaproductorcompragranos = $this->paginate('SoyaProductorCompraGrano');
            $this->set(compact('soyaproductorcompragranos'));
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
        $this->loadModel('SoyaProductorCompraGrano');
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
            }
 
            $soyaproductorcompragranos = $this->SoyaProductorCompraGrano->findById($id);
            if (!$soyaproductorcompragranos) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
            }
 
            if ($this->request->is('post') || $this->request->is('put')) {
                $this->request->data['SoyaProductorCompraGrano']['producto'] = strtoupper($this->request->data['SoyaProductorCompraGrano']['producto']);
        $this->request->data['SoyaProductorCompraGrano']['cantidadkg'] = $this->request->data['SoyaProductorCompraGrano']['cantidadtm']*1000;
        $this->request->data['SoyaProductorCompraGrano']['preciobs'] = $this->request->data['SoyaProductorCompraGrano']['preciodolar']*$this->request->data['SoyaProductorCompraGrano']['cambio'];
        $this->request->data['SoyaProductorCompraGrano']['totaldolar'] = $this->request->data['SoyaProductorCompraGrano']['preciodolar']*$this->request->data['SoyaProductorCompraGrano']['cantidadtm'];
        $this->request->data['SoyaProductorCompraGrano']['totalbs'] = $this->request->data['SoyaProductorCompraGrano']['totaldolar']*$this->request->data['SoyaProductorCompraGrano']['cambio'];
                $this->SoyaProductorCompraGrano->id = $id;
                if ($this->SoyaProductorCompraGrano->save($this->request->data)) {
                    $this->Session->setFlash(__('El usuario fue modificado'));
                    $this->redirect(array('action' => 'edit', $id));
                }else{
                    $this->Session->setFlash(__('El usuario no fue modificado.'));
                }
            }
 
            if (!$this->request->data) {
                $this->request->data = $soyaproductorcompragranos;
            }
    }

    public function excel() {
        $this->loadModel('SoyaProductorCompraGrano');
         $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id'))))); 
        $count=0;
        if ($this->request->is('post')) {
            $datos = new Spreadsheet_Excel_Reader();
            $datos->read($this->request->data['SoyaProductorCompraGrano']['excel']['tmp_name']);
            for ($i = 2; $i <= $datos->sheets[0]['numRows']; $i++) {

                $this->SoyaProductorCompraGrano->create();
                $this->request->data['SoyaProductorCompraGrano']['user_id'] = $this->Auth->user('id');
                $this->request->data['SoyaProductorCompraGrano']['producto'] = $datos->sheets[0]['cells'][$i][1];
                $this->request->data['SoyaProductorCompraGrano']['operacion'] = $datos->sheets[0]['cells'][$i][2];
                $this->request->data['SoyaProductorCompraGrano']['cantidadtm'] = $datos->sheets[0]['cells'][$i][4];
                $this->request->data['SoyaProductorCompraGrano']['cantidadkg'] = $datos->sheets[0]['cells'][$i][3];
                $this->request->data['SoyaProductorCompraGrano']['preciodolar'] = $datos->sheets[0]['cells'][$i][5];
                $this->request->data['SoyaProductorCompraGrano']['preciobs'] = $datos->sheets[0]['cells'][$i][6];
                $this->request->data['SoyaProductorCompraGrano']['totaldolar'] =$datos->sheets[0]['cells'][$i][7];
                $this->request->data['SoyaProductorCompraGrano']['totalbs'] = $datos->sheets[0]['cells'][$i][8];
                $this->request->data['SoyaProductorCompraGrano']['fecharegistro'] = $datos->sheets[0]['cells'][$i][9];
                if ($this->SoyaProductorCompraGrano->save($this->request->data)){
                    $count=$count+1;
                }
            }
            $this->Session->setFlash(__('Se guardaron '.$count.' registros.'));
            return $this->redirect(array('action' => 'index'));
        }
    }
}
?>