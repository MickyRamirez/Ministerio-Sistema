
<?php
class SoyaclientederivadosController extends AppController {
	public $components = array('Session','RequestHandler');
	public function add()
	{
        $this->loadModel('SoyaClienteDerivado');
        $this->loadModel('SoyaAsociaciones');
        $this->loadModel("Perfil");
        $this->set('asociaciones', $this->SoyaAsociaciones->find('list', array('fields'=>array('id','nombre'))));
        $oleagis = $this->Perfil->getOleaginosas();
        $this->set('oleaginosas', $oleagis);
        if ($this->request->is('post')) {
            $this->SoyaClienteDerivado->create();
            $this->request->data['SoyaClienteDerivado']['razonsocial'] = strtoupper($this->request->data['SoyaClienteDerivado']['razonsocial']);
        if ($this->SoyaClienteDerivado->saveAll($this->request->data)) {
            $this->Session->setFlash(__('La Información fue Guardada.'));
            return $this->redirect(array('action' => 'index'));
            }
        }

	}
	public function index()
	{
            $this->loadModel('SoyaClienteDerivado');
            $conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaClienteDerivado.id' => 'asc' )
            );
            $result = $this->SoyaClienteDerivado->find('all', $conditions);	
            if (empty($result)){
                $this->redirect(array('action' => 'add'));
            }else{
		$soyaclientederivados = $this->paginate('SoyaClienteDerivado');
        	$this->set(compact('soyaclientederivados'));
            }
	}

    public function reporteclientes()
    {
            $this->loadModel('SoyaClienteDerivado');
            $conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaClienteDerivado.id' => 'asc' )
            );
            $this->Soya->recursive = 1;
            $result = $this->SoyaClienteDerivado->find('all', $conditions); 
            if (empty($result)){
                $this->redirect(array('action' => 'add'));
            }else{
        $soyaclientederivados = $this->paginate('SoyaClienteDerivado');
            $this->set(compact('soyaclientederivados'));
            }
            $this->render('reporteclientes','export_xls');
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
}
?>
