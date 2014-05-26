<?php
/**
*
* 
*/
class CtcsController extends AppController
{
	public $components = array('Session','RequestHandler');
	public function add()
	{
		$this->loadModel('Ctc');
		$conditions = array(
    	'conditions' => array(
        'user_id' =>  $this->Auth->user('id')
	     	)
		);
		$result = $this->Ctc->find('first', $conditions);
		$this->set('ctcs', $this->Ctc->find('first', $conditions));
		if ($this->request->is('post')) {
        $this->request->data['Ctc']['user_id'] = $this->Auth->user('id');
        if ($this->Ctc->save($this->request->data)) {
            $this->Session->setFlash(__('La informacion fue guardada.'));
            return $this->redirect(array('action' => 'index'));
   			}
  		}
	}
	public function index()
	{
		$this->loadModel('Ctc');
		$conditions = array(
    	'conditions' => array(
        'user_id' =>  $this->Auth->user('id')
	     	)
		);
		$result = $this->Ctc->find('first', $conditions);
		if (empty($result)){
		    $this->redirect(array('action' => 'add'));
		}else{
			$this->set('ctcs', $this->Ctc->find('first', $conditions));
		}	
	}
	
	public function delete()
	{
		
	}
	public function view()
	{
		$this->loadModel('Ctc');
		$conditions = array(
    	'conditions' => array(
        'user_id' =>  $this->Auth->user('id')
	     	)
		);
		$result = $this->Ctc->find('first', $conditions);
		$this->set('ctcs', $this->Ctc->find('first', $conditions));
	}
	public function logout() {
        $this->redirect($this->Auth->logout());
    }
    
}
?>