<?php
/**
*
*/
class IngeniosController extends AppController
{
	public $components = array('Session','RequestHandler');
	public function add()
	{
		$this->loadModel('Ingenio');
		$conditions = array(
    	'conditions' => array(
        'user_id' =>  $this->Auth->user('id')
	     	)
		);
		$result = $this->Ingenio->find('first', $conditions);
		$this->set('ingenios', $this->Ingenio->find('first', $conditions));

		if ($this->request->is('post')) {
        $this->request->data['Ingenio']['user_id'] = $this->Auth->user('id');
        $this->request->data['Ingenio']['razonsocial'] = strtoupper($this->request->data['Ingenio']['razonsocial']);
        $this->request->data['Ingenio']['nombrecomercial'] = strtoupper($this->request->data['Ingenio']['nombrecomercial']);
        if ($this->Ingenio->save($this->request->data)) {
            $this->Session->setFlash(__('La informacion fue guardada.'));
            return $this->redirect(array('action' => 'index'));
        	}
  		}
	}
	public function index()
	{
		$this->loadModel('Ingenio');
		$conditions = array(
    	'conditions' => array(
        'user_id' =>  $this->Auth->user('id')
	     	)
		);
		$result = $this->Ingenio->find('first', $conditions);
		
		if (empty($result)){
		    $this->redirect(array('action' => 'add'));
		}else{
			$this->set('ingenios', $this->Ingenio->find('first', $conditions));
		}
	}
	public function delete()
	{
		
	}
	public function view()
	{
		$this->loadModel('Ingenio');
        $this->set('ingenios', $this->Ingenio->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
		
	}
	public function logout() {
        $this->redirect($this->Auth->logout());
    }
}
?>
