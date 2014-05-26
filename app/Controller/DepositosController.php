<?php
/**
* 
*/
class DepositosController extends AppController
{

	public function add()
	{
		$this->loadModel('Deposito');
		if ($this->request->is('post')) {

        $this->request->data['Deposito']['user_id'] = $this->Auth->user('id');
        $this->request->data['Deposito']['nombredeposito'] = strtoupper($this->request->data['Deposito']['nombredeposito']);
        $this->request->data['Deposito']['producto'] = strtoupper($this->request->data['Deposito']['producto']);
        $this->request->data['Deposito']['encargado'] = strtoupper($this->request->data['Deposito']['encargado']);

        if ($this->Deposito->save($this->request->data)) {
            $this->Session->setFlash(__('La Información fue Guardada.'));
            return $this->redirect(array('action' => 'index'));
       		}
		}
	}
	public function index()
	{
		$conditions = array(
    	'conditions' => array(
        'user_id' =>  $this->Auth->user('id')
	     	)
		);
		$result = $this->Deposito->find('first', $conditions);
		if (empty($result)){
		    $this->redirect(array('action' => 'add'));
		}else{
			$this->redirect(array('action' => 'view'));
		}

	}

	public function back()
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
	public function view()
	{
		$this->loadModel('Deposito');
		$this->paginate = array(
		'conditions' => array('Deposito.user_id' => $this->Auth->user('id')),
        'limit' => 5
    	);
		$this->set('depositos', $this->paginate('Deposito'));
	}

	public function logout() {
        $this->redirect($this->Auth->logout());
    }
    
}
?>