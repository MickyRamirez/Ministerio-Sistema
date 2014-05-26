
<?php
class SoyapreciointernacionalesController extends AppController {
	public $components = array('Session','RequestHandler');
	public $helpers = array('Html', 'Form','countryList');
	public function add()
	{
		$this->loadModel('SoyaPrecioInternacional');
        $this->request->data['SoyaPrecioInternacional']['user_id'] = $this->Auth->user('id');
            if ($this->request->is('post')) {
                $count=0;
            foreach($this->request->data['SoyaPrecioInternacional'] as $precios){
                $count++;
                $this->SoyaPrecioInternacional->create();
                $this->request->data['SoyaPrecioInternacional']['precio']=$precios['precio'];
                $this->request->data['SoyaPrecioInternacional']['pais']=$precios['pais'];
                
                $this->SoyaPrecioInternacional->save($this->request->data);
            }
  		return $this->redirect(array('action' => 'index'));
        }       
        
	}
	public function index()
	{
		$this->loadModel('SoyaPrecioInternacional');
		$conditions=$this->paginate = array(
			'limit' => 30,
			'order' => array('SoyaPrecioInternacional.id' => 'DESC' )
		);
		$result = $this->SoyaPrecioInternacional->find('all', $conditions);
		
		if (empty($result)){
			$this->redirect(array('action' => 'add'));
		}else{
			$soyapreciointernacionales = $this->paginate('SoyaPrecioInternacional');
			$this->set(compact('soyapreciointernacionales'));
		}
	}
    public function reporteprecio()
    {
        $this->loadModel('SoyaPrecioInternacional');
        $this->SoyaPrecioInternacional->recursive = 1;
        $conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaPrecioInternacional.id' => 'DESC' )
        );
        $result = $this->SoyaPrecioInternacional->find('all', $conditions);
        
        if (empty($result)){
            $this->redirect(array('action' => 'add'));
        }else{
            $soyapreciointernacionales = $this->paginate('SoyaPrecioInternacional');
            $this->set(compact('soyapreciointernacionales'));
        }
        $this->render('reporteprecio','export_xls');
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
