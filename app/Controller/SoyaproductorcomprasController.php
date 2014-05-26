 
<?php
App::import('Vendor', 'excel_reader2'); 
class SoyaproductorcomprasController extends AppController {
	public $components = array('Session','RequestHandler');
	public function add()
	{
		$this->loadModel('SoyaProductorCompra');
        $this->loadModel('SoyaProveedor');
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $this->set('soyaproveedores', $this->SoyaProveedor->find('list', array(
            'fields' => array('id', 'nombre')
            )));

		if ($this->request->is('post')) {
		$this->request->data['SoyaProductorCompra']['user_id'] = $this->Auth->user('id');
		if ($this->SoyaProductorCompra->save($this->request->data)) {
		$this->Session->setFlash(__('La Información fue Guardada.'));
		return $this->redirect(array('action' => 'index'));
		}
		}
	}
	public function index()
	{
		$this->loadModel('SoyaProductorCompra');
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
		$conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaProductorCompra.id' => 'asc' ),
            'conditions' => array('SoyaProductorCompra.user_id' =>  $this->Auth->user('id'))
        );
		$result = $this->SoyaProductorCompra->find('all', $conditions);
		
		if (empty($result)){
		    $this->redirect(array('action' => 'operacion'));
		}else{
			$soyaproductorcompras = $this->paginate('SoyaProductorCompra');
        	$this->set(compact('soyaproductorcompras'));
		}
	}
	
    public function edit($id = null)
    {
        $this->loadModel('SoyaProductorCompra');
         $this->loadModel('SoyaProveedor');
         $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $this->set('soyaproveedores', $this->SoyaProveedor->find('list', array('fields' => array('id', 'nombre'))));
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
            }
 
            $soyaproductorcompras = $this->SoyaProductorCompra->findById($id);
            if (!$soyaproductorcompras) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
            }
 
            if ($this->request->is('post') || $this->request->is('put')) {
                $this->SoyaProductorCompra->id = $id;
                if ($this->SoyaProductorCompra->save($this->request->data)) {
                    $this->Session->setFlash(__('El usuario fue modificado'));
                    $this->redirect(array('action' => 'edit', $id));
                }else{
                    $this->Session->setFlash(__('El usuario no fue modificado.'));
                }
            }
 
            if (!$this->request->data) {
                $this->request->data = $soyaproductorcompras;
            }
       
    }
    public function proveedor() {
        $this->loadModel('SoyaProveedor');
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $this->set('soyaproveedores', $this->SoyaProveedor->find('list', array('fields' => array('id', 'nombre'))));
        
        if ($this->request->is('post')) {
        $this->request->data['SoyaProveedor']['user_id'] = $this->Auth->user('id');
        $this->request->data['SoyaProveedor']['nombre'] = strtoupper($this->request->data['SoyaProveedor']['nombre']);
        $this->request->data['SoyaProveedor']['codigo'] = strtoupper($this->request->data['SoyaProveedor']['codigo']);
        if ($this->SoyaProveedor->save($this->request->data)) {
            $this->Session->setFlash(__('La Información fue Guardada.'));
            return $this->redirect(array('action' => 'add'));
            }
        }
    }
	public function view()
	{
				if ($this->Auth->user('grupo_id') == '12') {
                    return $this->redirect($this->Auth->redirectUrl());
                }
                if ($this->Auth->user('grupo_id') == '13') {
                    return $this->redirect(array('controller' => 'soyas', 'action' => 'index'));
                }
                if ($this->Auth->user('grupo_id') == '14') {
                    return $this->redirect(array('controller' => 'azucares', 'action' => 'index'));
                }
                if ($this->Auth->user('grupo_id') == '15') {
                    return $this->redirect(array('controller' => 'avicola', 'action' => 'index'));
                }
                if ($this->Auth->user('grupo_id') == '1') {
                    return $this->redirect(array('controller' => 'ingenios', 'action' => 'index'));
                }
                if ($this->Auth->user('grupo_id') == '2') {
                    return $this->redirect(array('controller' => 'ctcs', 'action' => 'index'));
                }
                if ($this->Auth->user('grupo_id') == '3') {
                    return $this->redirect(array('controller' => 'instituciones', 'action' => 'index'));
                }
                if ($this->Auth->user('grupo_id') == '4') {
                    return $this->redirect(array('controller' => 'soyeros', 'action' => 'index'));
                }
                if ($this->Auth->user('grupo_id') == '5') {
                    return $this->redirect(array('controller' => 'productores', 'action' => 'index'));
                }
                if ($this->Auth->user('grupo_id') == '6') {
                    return $this->redirect(array('controller' => 'reproductoras', 'action' => 'index'));
                }
                if ($this->Auth->user('grupo_id') == '7') {
                    return $this->redirect(array('controller' => 'incubadoras', 'action' => 'index'));
                }
                if ($this->Auth->user('grupo_id') == '8') {
                    return $this->redirect(array('controller' => 'engordes', 'action' => 'index'));
                }
                if ($this->Auth->user('grupo_id') == '9') {
                    return $this->redirect(array('controller' => 'ponedora', 'action' => 'index'));
                }
                if ($this->Auth->user('grupo_id') == '10') {
                    return $this->redirect(array('controller' => 'mataderos', 'action' => 'index'));
                }
                if ($this->Auth->user('grupo_id') == '11') {
                    return $this->redirect(array('controller' => 'distribuidoras', 'action' => 'index'));
                }
	}
	public function logout() {
        $this->redirect($this->Auth->logout());
    }
    public function operacion() {
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));         
    }
    public function excel() {
        $this->loadModel('SoyaProductorCompra');
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $count=0;
        if ($this->request->is('post')) {
            $datos = new Spreadsheet_Excel_Reader();
            $datos->read($this->request->data['SoyaProductorCompra']['excel']['tmp_name']);
            for ($i = 2; $i <= $datos->sheets[0]['numRows']; $i++) {

                $this->SoyaProductorCompra->create();
                $this->request->data['SoyaProductorCompra']['user_id'] = $this->Auth->user('id');
                $this->request->data['SoyaProductorCompra']['campana'] = $datos->sheets[0]['cells'][$i][1];
                $this->request->data['SoyaProductorCompra']['nit'] = $datos->sheets[0]['cells'][$i][2];
                $this->request->data['SoyaProductorCompra']['proveedor'] = $datos->sheets[0]['cells'][$i][3];
                $this->request->data['SoyaProductorCompra']['regimengrano'] = $datos->sheets[0]['cells'][$i][4];
                $this->request->data['SoyaProductorCompra']['codigograno'] = $datos->sheets[0]['cells'][$i][5];
                $this->request->data['SoyaProductorCompra']['producto'] = $datos->sheets[0]['cells'][$i][6];
                $this->request->data['SoyaProductorCompra']['toneladas'] =$datos->sheets[0]['cells'][$i][7];
                $this->request->data['SoyaProductorCompra']['preciodolar'] = $datos->sheets[0]['cells'][$i][8];
                $this->request->data['SoyaProductorCompra']['total'] = $datos->sheets[0]['cells'][$i][9];
                $this->request->data['SoyaProductorCompra']['fecharegistro'] = $datos->sheets[0]['cells'][$i][10];
                if ($this->SoyaProductorCompra->save($this->request->data)){
                    $count=$count+1;
                }
            }
            $this->Session->setFlash(__('Se guardaron '.$count.' registros.'));
            return $this->redirect(array('action' => 'index'));
        }
    }

}
?>
