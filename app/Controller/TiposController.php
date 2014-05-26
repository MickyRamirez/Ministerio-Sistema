<?php
/**
* 
*/
class TiposController extends AppController
{
	public $components = array('Session','RequestHandler');
	public function add()
	{
	}
	public function index()
	{
		$this->loadModel('Ingenio');
		$conditions = array(
    	'conditions' => array(
        'id_user' => $this->Session->read('User.id')
	     	)
		);
		$result = $this->Ingenio->find('first', $conditions);
		if (empty($result)){
		    $this->redirect(array('action' => 'add'));
		}
	}
	public function delete()
	{	
	}
}
?>