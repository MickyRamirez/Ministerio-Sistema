<?php
/**
* 
*/
class AvicolaController extends AppController
{

	public $components = array('Session','RequestHandler');

	public function add()
	{

	}
	public function index()
	{
		$this->loadModel('Avicola');
		$this->paginate = array(
		'conditions' => array('Grupo.categoria' => 'Avicola'),
        'limit' => 25
    	);
		$this->set('avicolas', $this->paginate('Avicola'));
	}
	public function alarma()
	{
		$this->loadModel('Avicola');	
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Avicola'),
        'limit' => 25
        );
        $this->set('avicolas', $this->paginate('Avicola'));
    }
	
	public function general()
	{
		$this->loadModel('Avicola');	

        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Avicola'),
        'limit' => 25
        );
        $this->set('avicolas', $this->paginate('Avicola'));
	}	
	public function reporte()
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
}
?>