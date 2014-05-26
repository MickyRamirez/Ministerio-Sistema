
<?php
App::import('Vendor', 'excel_reader2'); 
class IngeniorecepcionesController extends AppController {

	public $components = array('Session','RequestHandler');

	public function add()
	{
		$this->loadModel('IngenioRecepcion');
        
        $this->loadModel('InstitucionRegistro'); 
        $this->loadModel('Ingenio');
        $this->set('ingenios', $this->Ingenio->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
		
        $this->set('institucionregistro', $this->InstitucionRegistro->find('list', array(
            'fields' => array('nombre','nombre'),
            'conditions' => array('user_id' => $this->Auth->user('id'))
            )));
        
        if ($this->request->is('post')) {
        $this->request->data['IngenioRecepcion']['user_id'] = $this->Auth->user('id');
        $this->request->data['IngenioRecepcion']['nombre'] = strtoupper($this->request->data['IngenioRecepcion']['nombre']);
        if ($this->IngenioRecepcion->save($this->request->data)) {
            $this->Session->setFlash(__('La informacion fue guardada.'));
            return $this->redirect(array('action' => 'index'));
        	}
  		}
	}
	public function index()
	{
		$this->loadModel('Ingenio');
        $this->loadModel('IngenioRecepcion');
        $this->set('ingenios', $this->Ingenio->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
		$conditions=$this->paginate = array(
            'limit' => 30,
            'order' => array('IngenioRecepcion.id' => 'asc' ),
            'conditions' => array('IngenioRecepcion.user_id' =>  $this->Auth->user('id'))
        );        
		
        $result = $this->IngenioRecepcion->find('all', $conditions);
		if (empty($result)){
		    $this->redirect(array('action' => 'add'));
		}else{
			$ingeniorecepciones = $this->paginate('IngenioRecepcion');
        	$this->set(compact('ingeniorecepciones'));
		}
	}

    public function proveedor() {
        $this->loadModel('Ingenio');
        $this->loadModel('InstitucionRegistro');
        $this->set('ingenios', $this->Ingenio->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        
        if ($this->request->is('post')) {
        debug($this->request->data);
        $this->request->data['InstitucionRegistro']['user_id'] = $this->Auth->user('id');
        $this->request->data['InstitucionRegistro']['nombre'] = strtoupper($this->request->data['IngenioRecepcion']['nombre']);
        if ($this->InstitucionRegistro->save($this->request->data)) {
            $this->Session->setFlash(__('La informacion fue guardada.'));
            return $this->redirect(array('action' => 'add'));
            }
        }
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

    public function operacion() {
        
    }
    public function excel() {
        $this->loadModel('Ingenio');
        $this->set('ingenios', $this->Ingenio->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $this->loadModel('IngenioRecepcion');
        $count=0;
        $i=0;
        if ($this->request->is('post')) {
            $datos = new Spreadsheet_Excel_Reader();
            $datos->read($this->request->data['IngenioRecepcion']['excel']['tmp_name']);
            for ($i = 2; $i <= $datos->sheets[0]['numRows']; $i++) {

                $this->IngenioRecepcion->create();
                $this->request->data['IngenioRecepcion']['user_id'] = $this->Auth->user('id');
                $this->request->data['IngenioRecepcion']['nombre'] = $datos->sheets[0]['cells'][$i][1];
                $this->request->data['IngenioRecepcion']['viaconvenio'] = $datos->sheets[0]['cells'][$i][2];
                $this->request->data['IngenioRecepcion']['viacompra'] = $datos->sheets[0]['cells'][$i][3];
                $this->request->data['IngenioRecepcion']['total'] = $datos->sheets[0]['cells'][$i][4];
                $this->request->data['IngenioRecepcion']['sacarosa'] = $datos->sheets[0]['cells'][$i][5];
                $this->request->data['IngenioRecepcion']['fecharegistro'] = $datos->sheets[0]['cells'][$i][6];
                if ($this->IngenioRecepcion->save($this->request->data)){
                    $count=$count+1;
                }
            }
            $this->Session->setFlash(__('Se guardaron '.$count.' registros.'));
            return $this->redirect(array('action' => 'index'));
        }
    }
    
}
?>