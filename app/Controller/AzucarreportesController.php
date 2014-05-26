<?php
class AzucarreportesController extends AppController {
	public $helpers = array('Html', 'Form');

    public function index() {
    	$this->loadModel("Azucarreporte");
    	 
    	$this->paginate = array(
		'conditions' => array('Grupo.categoria' => 'Azucar'),
        'limit' => 25
    	);
		$this->set('azucarreportes', $this->paginate('Azucarreporte'));
   	}
    
    public function ingenio() {
        $this->loadModel("Azucarreporte");
         
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar', 'Grupo.subcategoria' => 'Ingenio Azucarero'),
        'limit' => 25
        );
        $this->set('azucarreportes', $this->paginate('Azucarreporte'));
    }
    public function reporteingenio($id = null) {
        $this->loadModel("Azucarreporte");
         
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
        }
        $user = $this->Azucarreporte->findById($id);
        if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
                $this->request->data = $user;
        }
    }
    public function institucion() {
        $this->loadModel("Azucarreporte");
         
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar', 'Grupo.subcategoria' => 'Institucion Cañera'),
        'limit' => 25
        );
        $this->set('azucarreportes', $this->paginate('Azucarreporte'));
    }
    public function ctc() {
        $this->loadModel("Azucarreporte");
         
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar', 'Grupo.subcategoria' => 'Control Tecnico Cañero (CTC)'),
        'limit' => 25
        );
        $this->set('azucarreportes', $this->paginate('Azucarreporte'));
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
