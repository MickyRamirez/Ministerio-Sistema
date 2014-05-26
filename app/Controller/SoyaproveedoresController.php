<?php
/**
*
*/
class SoyaproveedoresController extends AppController
{
	public $components = array('Session','RequestHandler');
	public function add()
	{
	$this->loadModel('SoyaProveedor');
    $this->loadModel('Soya');
	$this->loadModel("Perfil");
	$oleagis = $this->Perfil->getOleaginosas();
    
    $this->set('oleaginosas', $oleagis);

    if ($this->request->is('post')) {
    $this->request->data['SoyaProveedor']['nombre'] = strtoupper($this->request->data['SoyaProveedor']['nombre']);
    $this->request->data['SoyaProveedor']['codigo'] = strtoupper($this->request->data['SoyaProveedor']['codigo']);
    if ($this->SoyaProveedor->save($this->request->data)) {
        $this->Session->setFlash(__('La Información fue Guardada.'));
        return $this->redirect(array('action' => 'index'));
        }
    }
		if ($this->request->is('post')) {
        $this->request->data['SoyaProveedor']['nombre'] = strtoupper($this->request->data['SoyaProveedor']['nombre']);
        $this->request->data['SoyaProveedor']['codigo'] = strtoupper($this->request->data['SoyaProveedor']['codigo']);
        if ($this->SoyaProveedor->save($this->request->data)) {
            $this->Session->setFlash(__('La Información fue Guardada.'));
            return $this->redirect(array('action' => 'index'));
        	}
  		}
	}
	public function index()
	{
		$this->loadModel('SoyaProveedor');

		$conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaProveedor.id' => 'asc')
        );
		$result = $this->SoyaProveedor->find('all', $conditions);
		
		if (empty($result)){
		    $this->redirect(array('action' => 'add'));
		}else{
			$soyaproveedores = $this->paginate('SoyaProveedor');
        	$this->set(compact('soyaproveedores'));
		}
	}
    public function reporteproveedores()
    {
        $this->loadModel('SoyaProveedor');

        $conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('SoyaProveedor.id' => 'asc')
        );
        $result = $this->SoyaProveedor->find('all', $conditions);
        $this->SoyaProveedor->recursive = 1;
            
        if (empty($result)){
            $this->redirect(array('action' => 'add'));
        }else{
            $soyaproveedores = $this->paginate('SoyaProveedor');
            $this->set(compact('soyaproveedores'));
        }
        $this->render('reporteproveedores','export_xls');
    }
	public function edit($id = null )
	{
		 $this->loadModel('SoyaProveedor');
         $this->loadModel('Soya');
    $this->loadModel("Perfil");
    $oleagis = $this->Perfil->getOleaginosas();
    
    $this->set('oleaginosas', $oleagis);
        
        $this->set('soyaproveedores', $this->SoyaProveedor->find('list', array('fields' => array('id', 'nombre'))));
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
            }
 
            $soyaproveedores = $this->SoyaProveedor->findById($id);
            if (!$soyaproveedores) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
            }
 
            if ($this->request->is('post') || $this->request->is('put')) {
                $this->SoyaProveedor->id = $id;
                if ($this->SoyaProveedor->save($this->request->data)) {
                    $this->Session->setFlash(__('El usuario fue modificado'));
                    $this->redirect(array('action' => 'edit', $id));
                }else{
                    $this->Session->setFlash(__('El usuario no fue modificado.'));
                }
            }
 
            if (!$this->request->data) {
                $this->request->data = $soyaproveedores;
            }

	}
	public function delete()
	{
		
	}
	public function view()
	{
		
	}
	public function logout() {
        $this->redirect($this->Auth->logout());
    }
}
?>
