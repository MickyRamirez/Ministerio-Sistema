<?php
class SoyacampanasController extends AppController {
	public $components = array('Session','RequestHandler');

	public function add() 
	{
        $this->loadModel('SoyaCampana');

        $this->request->data['SoyaCampana']['user_id'] = $this->Auth->user('id');   
        if ($this->request->is('post')) {                
            if ($this->SoyaCampana->save($this->request->data)) {
                  $this->Session->setFlash(__('La Informacion fue Guardada.'));
                  return $this->redirect(array('action' => 'index'));
            }
        }
	} 

    public function getByRubro() {
        $this->loadModel('SoyaSubrubro');

        $soya_rubro_id = $this->request->data['SoyaAsociaciones']['soya_rubro_id'];
        debug($soya_rubro_id);
        $subcategories = $this->SoyaSubrubro->find('list', array(
            'conditions' => array('SoyaSubrubro.soya_rubro_id' => $soya_rubro_id),
            'fields'=>'subrubro',
            'recursive' => -1
            ));
        debug($this->set('subcategories',$subcategories));
        $this->set('subcategories',$subcategories);
        $this->layout = 'ajax';
    }
	public function index()
	{
        $this->loadModel('SoyaCampana');
            $conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaCampana.id' => 'asc' )
            );
            $result = $this->SoyaCampana->find('all', $conditions); 
        if (empty($result)){
            $this->redirect(array('action' => 'add'));
        }else{    
            $soyacampana = $this->paginate('SoyaCampana');
            $this->set(compact('soyacampana'));
        }
	}
    public function reportecampana()
    {
        $this->loadModel('SoyaCampana');
            $conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaCampana.id' => 'asc' )
            );
        $result = $this->SoyaCampana->find('all', $conditions); 
        $this->SoyaCampana->recursive = 1;
        if (empty($result)){
            $this->redirect(array('action' => 'add'));
        }else{    
            $soyacampana = $this->paginate('SoyaCampana');
            $this->set(compact('soyacampana'));
        }        
        $this->render('reportecampana','export_xls');
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