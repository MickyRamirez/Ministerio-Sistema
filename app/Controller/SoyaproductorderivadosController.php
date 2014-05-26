
<?php
App::import('Vendor', 'excel_reader2'); 
class SoyaproductorderivadosController extends AppController {
	public $components = array('Session','RequestHandler');
    public function cliente()
    {
        $this->loadModel('SoyaClienteDerivado');
        $this->loadModel('SoyaAsociaciones');
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $this->set('asociaciones', $this->SoyaAsociaciones->find('list', array('fields'=>array('id','nombre'))));
        if ($this->request->is('post')) {
            $this->SoyaClienteDerivado->create();
            $this->request->data['SoyaClienteDerivado']['user_id'] = $this->Auth->user('id');
            $this->request->data['SoyaClienteDerivado']['razonsocial'] = strtoupper($this->request->data['SoyaProductorDerivado']['razonsocial']);
            $this->request->data['SoyaClienteDerivado']['nit'] = $this->request->data['SoyaProductorDerivado']['nit'];
            $this->request->data['SoyaClienteDerivado']['soya_asociaciones_id'] = $this->request->data['SoyaProductorDerivado']['soya_asociaciones_id'];
        if ($this->SoyaClienteDerivado->saveAll($this->request->data)) {
            $this->Session->setFlash(__('La Información fue Guardada.'));
            return $this->redirect(array('action' => 'add'));
            }
        }
    }
	public function add()
	{
		$this->loadModel('SoyaProductorDerivado');
		//para obtener cambio de dolar
		$this->loadModel('SoyaCambioDolar');
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
		$conditions = array(
	            'limit' => 1,
	            'order' => array('SoyaCambioDolar.id' => 'desc' ));
		$this->set('soyacambiodolares',$this->SoyaCambioDolar->find('all',$conditions));
		//hasta aqui cambio de dolar
        $this->loadModel('SoyaClienteDerivado');
        $this->set('clientes', $this->SoyaClienteDerivado->find('list',array(
                                                'fields'=>array('id','razonsocial')
            )
        ));
	if ($this->request->is('post')) {
            $this->request->data['SoyaProductorDerivado']['user_id'] =    $this->Auth->user('id');
            $this->request->data['SoyaProductorDerivado']['cantidadkg'] = $this->request->data['SoyaProductorDerivado']['cantidadtm']*1000;
            $this->request->data['SoyaProductorDerivado']['preciobs'] =   $this->request->data['SoyaProductorDerivado']['preciodolar']*$this->request->data['SoyaProductorDerivado']['cambio'];
            $this->request->data['SoyaProductorDerivado']['totaldolar'] = $this->request->data['SoyaProductorDerivado']['preciodolar']*$this->request->data['SoyaProductorDerivado']['cantidadtm'];
            $this->request->data['SoyaProductorDerivado']['totalbs'] =    $this->request->data['SoyaProductorDerivado']['totaldolar']*$this->request->data['SoyaProductorDerivado']['cambio'];
        if ($this->SoyaProductorDerivado->save($this->request->data)) {
            $this->Session->setFlash(__('La Información fue Guardada.'));
            return $this->redirect(array('action' => 'index'));
        	}
  		}
	}
	public function index()
	{
		$this->loadModel('SoyaProductorDerivado');
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
		$conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaProductorDerivado.id' => 'asc' ),
            'conditions' => array('SoyaProductorDerivado.user_id' =>  $this->Auth->user('id'))
        );
		$result = $this->SoyaProductorDerivado->find('all', $conditions);
		
		if (empty($result)){
		    $this->redirect(array('action' => 'operacion'));
		}else{
			$soyaproductorderivados = $this->paginate('SoyaProductorDerivado');
        	$this->set(compact('soyaproductorderivados'));
		}
	}
    public function edit($id = null)
    {
        //para obtener cambio de dolar
        $this->loadModel('SoyaCambioDolar');
        $conditions = array(
                'limit' => 1,
                'order' => array('SoyaCambioDolar.id' => 'desc' ));
        $this->set('soyacambiodolares',$this->SoyaCambioDolar->find('all',$conditions));
        //hasta aqui cambio de dolar

        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));

        $this->loadModel('SoyaClienteDerivado');
        $this->set('clientes', $this->SoyaClienteDerivado->find('list',array(
                                                'fields'=>array('id','razonsocial')
            )
        ));
        $this->loadModel('SoyaProductorDerivado');
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
            }
 
            $soyaproductorderivados = $this->SoyaProductorDerivado->findById($id);
            if (!$soyaproductorderivados) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
            }
 
            if ($this->request->is('post') || $this->request->is('put')) {
                $this->SoyaProductorDerivado->id = $id;
                if ($this->SoyaProductorDerivado->save($this->request->data)) {
                    $this->Session->setFlash(__('El usuario fue modificado'));
                    $this->redirect(array('action' => 'edit', $id));
                }else{
                    $this->Session->setFlash(__('El usuario no fue modificado.'));
                }
            }
 
            if (!$this->request->data) {
                $this->request->data = $soyaproductorderivados;
            }
    }
    public function operacion()
    {   
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
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
    public function excel() {
        $this->loadModel('SoyaProductorDerivado');
        $this->loadModel('Productora');
        $this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $count=0;
        if ($this->request->is('post')) {
            $datos = new Spreadsheet_Excel_Reader();
            $datos->read($this->request->data['SoyaProductorDerivado']['excel']['tmp_name']);
            for ($i = 2; $i <= $datos->sheets[0]['numRows']; $i++) {

                $this->SoyaProductorDerivado->create();
                $this->request->data['SoyaProductorDerivado']['user_id'] = $this->Auth->user('id');
                $this->request->data['SoyaProductorDerivado']['soya_cliente_derivado_id'] = $datos->sheets[0]['cells'][$i][1];
                $this->request->data['SoyaProductorDerivado']['rubro'] = $datos->sheets[0]['cells'][$i][2];
                $this->request->data['SoyaProductorDerivado']['subrubro'] = $datos->sheets[0]['cells'][$i][3];
                $this->request->data['SoyaProductorDerivado']['producto'] = $datos->sheets[0]['cells'][$i][4];
                $this->request->data['SoyaProductorDerivado']['cantidadkg'] = $datos->sheets[0]['cells'][$i][5];
                $this->request->data['SoyaProductorDerivado']['cantidadtm'] = $datos->sheets[0]['cells'][$i][6];
                $this->request->data['SoyaProductorDerivado']['preciodolar'] =$datos->sheets[0]['cells'][$i][7];
                $this->request->data['SoyaProductorDerivado']['preciobs'] = $datos->sheets[0]['cells'][$i][8];
                $this->request->data['SoyaProductorDerivado']['totaldolar'] = $datos->sheets[0]['cells'][$i][9];
                $this->request->data['SoyaProductorDerivado']['totalbs'] = $datos->sheets[0]['cells'][$i][10];
                $this->request->data['SoyaProductorDerivado']['fecharegistro'] = $datos->sheets[0]['cells'][$i][11];
                if ($this->SoyaProductorDerivado->save($this->request->data)){
                    $count=$count+1;
                }
            }
            $this->Session->setFlash(__('Se guardaron '.$count.' registros.'));
            return $this->redirect(array('action' => 'index'));
        }
    }
}
?>