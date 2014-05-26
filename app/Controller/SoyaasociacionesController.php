
<?php
class SoyaasociacionesController extends AppController {
	public $components = array('Session','RequestHandler');
    public $uses = array('SoyaAsociaciones','SoyaRubro','SoyaSubrubro');  
	public function add()
	{
        $this->loadModel('SoyaAsociaciones');
        $this->loadModel('SoyaRubro');
        $this->set('rubros', $this->SoyaRubro->find('list', array('fields'=>array('rubro'))));
        $this->loadModel('Ciudad');
        $this->set('ciudades', $this->Ciudad->find('list', array('fields'=>array('id','nom_ciudad'))));
		if ($this->request->is('post')) {
			$this->request->data['SoyaAsociaciones']['user_id'] = $this->Auth->user('id');
			$this->request->data['SoyaAsociaciones']['nombre']=strtoupper($this->request->data['SoyaAsociaciones']['nombre']);
			if ($this->SoyaAsociaciones->save($this->request->data)) {
				$this->Session->setFlash(__('La Información fue Guardada.'));
				return $this->redirect(array('action' => 'index'));
			}
  		}
	}

	public function index()
	{
		$this->loadModel('SoyaAsociaciones');
		$conditions=$this->paginate = array(
			'limit' => 30,
			'order' => array('SoyaAsociaciones.id' => 'asc' )
		);
		$result = $this->SoyaAsociaciones->find('all', $conditions);
		
		if (empty($result)){
			$this->redirect(array('action' => 'add'));
		}else{
			$soyaasociacioneses = $this->paginate('SoyaAsociaciones');
			$this->set(compact('soyaasociacioneses'));
		}
	}

    public function reporteasociaciones()
    {
        $this->loadModel('SoyaAsociaciones');
        $conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaAsociaciones.id' => 'asc' )
        );
        $result = $this->SoyaAsociaciones->find('all', $conditions);
        $this->SoyaAsociaciones->recursive = 1;
        if (empty($result)){
            $this->redirect(array('action' => 'add'));
        }else{
            $soyaasociacioneses = $this->paginate('SoyaAsociaciones');
            $this->set(compact('soyaasociacioneses'));
        }
        $this->render('reporteasociaciones','export_xls');
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
