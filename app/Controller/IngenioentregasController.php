
<?php
class IngenioentregasController extends AppController {


	public $components = array('Session','RequestHandler');

	public function add()
	{
		$this->loadModel('IngenioEntrega');
        $this->loadModel('Ingenio');
        $this->loadModel('InstitucionRegistro'); 

        $this->set('ingenios', $this->Ingenio->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        
        $this->set('institucionregistro', $this->InstitucionRegistro->find('list', array(
            'fields' => array('nombre','nombre'),
            'conditions' => array('user_id' => $this->Auth->user('id'))
            )));

		if ($this->request->is('post')) {
        $this->request->data['IngenioEntrega']['user_id'] = $this->Auth->user('id');
        $this->request->data['IngenioEntrega']['total'] = $this->request->data['IngenioEntrega']['refinada']+$this->request->data['IngenioEntrega']['cruda'];
        $this->request->data['IngenioEntrega']['razonsocial'] = strtoupper($this->request->data['IngenioEntrega']['razonsocial']);

        if ($this->IngenioEntrega->save($this->request->data)) {
            $this->Session->setFlash(__('La informacion fue guardada.'));
            return $this->redirect(array('action' => 'index'));
        	}
  		}
	}
	public function index()
	{
        $this->loadModel('Ingenio');
        $this->set('ingenios', $this->Ingenio->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        
		$this->loadModel('IngenioEntrega');
		$conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('IngenioEntrega.id' => 'asc' ),
            'conditions' => array('IngenioEntrega.user_id' =>  $this->Auth->user('id'))
        );
		$result = $this->IngenioEntrega->find('all', $conditions);
		if (empty($result)){
		    $this->redirect(array('action' => 'add'));
		}else{
			$ingenioentregas = $this->paginate('IngenioEntrega');
        	$this->set(compact('ingenioentregas'));
		}
	
	}
	
	public function delete()
	{
		
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
        
    }
    public function excel() {
        $this->loadModel('Ingenio');
        $this->set('ingenios', $this->Ingenio->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        
        $this->loadModel('IngenioEntrega');
        $count=0;
        $i=0;
        if ($this->request->is('post')) {
            $datos = new Spreadsheet_Excel_Reader();
            $datos->read($this->request->data['IngenioEntrega']['excel']['tmp_name']);
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
                if ($this->IngenioEntrega->save($this->request->data)){
                    $count=$count+1;
                }
            }
            $this->Session->setFlash(__('Se guardaron '.$count.' registros.'));
            return $this->redirect(array('action' => 'index'));
        }
    }
    
}
?>