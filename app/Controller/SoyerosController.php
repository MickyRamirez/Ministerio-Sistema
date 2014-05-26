<?php
/**
* 
*/
class SoyerosController extends AppController
{

	public $components = array('Session','RequestHandler');

	public function add()
	{
		$this->loadModel('Soyero');
		$this->set('soyeros', $this->Soyero->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));

		if ($this->request->is('post')) {
         $this->request->data['Soyero']['user_id'] = $this->Auth->user('id');
        if ($this->Soyero->save($this->request->data)) {
            $this->Session->setFlash(__('La informacion fue guardada.'));
            return $this->redirect(array('action' => 'index'));
        	}
  		}
	}
	public function index()
	{
		
		$this->loadModel('Soyero');
		$conditions = array(
    	'conditions' => array(
        'user_id' =>  $this->Auth->user('id')
	     	)
		);
		$result = $this->Soyero->find('first', $conditions);
		if (empty($result)){
		    $this->redirect(array('action' => 'add'));
		}else{
			$this->set('soyeros', $this->Soyero->find('first', $conditions));
		}
	}
	
	public function delete()
	{
		
	}
	public function logout() {
        $this->redirect($this->Auth->logout());
    }
    
}
?>