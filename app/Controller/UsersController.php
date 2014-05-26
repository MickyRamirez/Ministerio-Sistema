<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class UsersController extends AppController {
    public $helpers = array('Html','Form');

    public $paginate = array(
        'limit' => 25,
        'conditions' => array('aprobacion' => '1'),
        'order' => array('User.username' => 'asc' ) 
    );
    public function beforeFilter() {
        parent::beforeFilter();
    }
    public function login() {

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                if($this->Auth->user('aprobacion')==1){
                    $this->Session->setFlash(__('Bienvenido, '. $this->Auth->user('username')));
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
                }else{
                    $this->Session->setFlash(__('Usted necesita aprobacion de su usario para ingresar en el sistema'));
                    $this->redirect($this->Auth->logout());
                }
            } else {
                $this->Session->setFlash(__('Invalido nombre de usuario o contraseña'));
            }
        } 
    }
    public function logout() {
        $this->redirect($this->Auth->logout());
    }
 
    public function index() {
        $this->paginate = array(
            'limit' => 15,
            'order' => array('User.username' => 'asc' )
        );
        $users = $this->paginate('User');
        $this->set(compact('users'));
    }
    public function add() {
        $Email = new CakeEmail();
        $Email->config('gmail');
        if ($this->request->is('post')) {

            $this->request->data['User']['apellido'] = strtoupper($this->request->data['User']['apellido']);
            $this->request->data['User']['nombre'] = strtoupper($this->request->data['User']['nombre']);
            //principio de envio de email
            
            $Email->from(array('jmickyramirez@gmail.com' => 'Sistema de Alerta Temprana para Prevenir y Controlar la Escases en Produccion de Soya, Azucar y Avicola'));
            $Email->to($this->request->data['User']['email']);
            $Email->subject('Correo de verificación de cuenta');
            $Email->emailFormat('html');
            $Email->template('mytemplate');
            //$this->Soya('first', array('order'=>'DESC'));
            $Email->viewVars(array(
                'value' => ($this->request->data['User']['password']), 
                'value2' =>  ($this->request->data['User']['username'])));
            if ($Email->send())   
                {
                $this->User->create();
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(__('El usuario fue creado. Debe esperar su habilitacion'));         
                    $this->redirect(array('action' => 'login'));
                } else {
                    $this->Session->setFlash(__('Posiblemente el usuario no fue creado. Intente de nuevo'));
                }
                } else {
                echo $Email->smtpError;
                } 
            //fin de envio de email
            
        }
    }
    public function edit($id = null) {
 
         	if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
            }
 
            $user = $this->User->findById($id);
            if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
            }
 
            if ($this->request->is('post') || $this->request->is('put')) {
                $this->User->id = $id;
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(__('El usuario fue modificado'));
                    $this->redirect(array('action' => 'edit', $id));
                }else{
                    $this->Session->setFlash(__('El usuario no fue modificado.'));
                }
            }
 
            if (!$this->request->data) {
                $this->request->data = $user;
            }
    }
 
    public function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('aprobacion', 0)) {
            $this->Session->setFlash(__('Usuario borrado'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Usuario no fue borrado'));
        $this->redirect(array('action' => 'index'));
    }
     
    public function activate($id = null) {
        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('aprobacion', 1)) {
            $this->Session->setFlash(__('Usuario re-activado'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Usuario no fue re-activado'));
        $this->redirect(array('action' => 'index'));
    }
}
?>