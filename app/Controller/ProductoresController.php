<?php
/**
* 
*/
class ProductoresController extends AppController
{

	public $components = array('Session','RequestHandler');

	public function add()
	{
		$this->loadModel('Productora');
		if ($this->request->is('post')) {
    	     $this->request->data['Productora']['user_id'] = $this->Auth->user('id');
    	     $this->request->data['Productora']['razonsocial'] = strtoupper($this->request->data['Productora']['razonsocial']);
    	     $this->request->data['Productora']['direccionempresa'] = strtoupper($this->request->data['Productora']['direccionempresa']);
    	     $this->request->data['Productora']['subdireccion'] = strtoupper($this->request->data['Productora']['subdireccion']);
    	     $this->request->data['Productora']['subcalle'] = strtoupper($this->request->data['Productora']['subcalle']);
    	     $this->request->data['Productora']['subreferencia'] = strtoupper($this->request->data['Productora']['subreferencia']);
   	     if ($this->Productora->save($this->request->data)) {
            $this->Session->setFlash(__('La informacion fue guardada.'));
            return $this->redirect(array('action' => 'index'));
        	}
  		}
	}
	public function index()
	{
		$this->loadModel('Productora');
		$conditions = array(
    	'conditions' => array(
        'user_id' =>  $this->Auth->user('id')
	     	)
		);

		$result = $this->Productora->find('first', $conditions);
		if (empty($result)){
		    $this->redirect(array('action' => 'add'));
		}else{
			$this->set('productores', $this->Productora->find('first', $conditions));
		}
	}
	
	public function delete()
	{
		
	}
	public function view()
	{
		$this->loadModel('Productora');
		$this->set('productores', $this->Productora->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
	}
	public function logout() {
        $this->redirect($this->Auth->logout());
    }
    
}
?>