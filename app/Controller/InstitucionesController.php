<?php
/**
* 
*/
class InstitucionesController extends AppController
{
	public $components = array('Session','RequestHandler');
	public function add()
	{
		$this->loadModel('Institucion');
		$conditions = array(
    	'conditions' => array(
        'user_id' =>  $this->Auth->user('id')
	     	)
		);
		$result = $this->Institucion->find('first', $conditions);
		$this->set('instituciones', $this->Institucion->find('first', $conditions));

		if ($this->request->is('post')) {
        $this->request->data['Institucion']['user_id'] = $this->Auth->user('id');
        $this->request->data['Institucion']['razonsocial'] = strtoupper($this->request->data['Institucion']['razonsocial']);
        $this->request->data['Institucion']['nombrecomercial'] = strtoupper($this->request->data['Institucion']['nombrecomercial']);
        if ($this->Institucion->save($this->request->data)) {
            $this->Session->setFlash(__('La informacion fue guardada.'));
            return $this->redirect(array('action' => 'index'));
        	}
  		}
	}
	
	public function index()
	{
		$this->loadModel('Institucion');
		$conditions = array(
    	'conditions' => array(
        'user_id' =>  $this->Auth->user('id')
	     	)
		);
		$result = $this->Institucion->find('first', $conditions);
		if (empty($result)){
		    $this->redirect(array('action' => 'add'));
		}else{
			$this->set('instituciones', $this->Institucion->find('first', $conditions));
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