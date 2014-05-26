
<?php

class SoyaproductorventasController extends AppController {

    public $components = array('Session', 'RequestHandler');

    public function add() {
        $this->loadModel('SoyaProductorVenta');
        $this->loadModel('SoyaOperacion');

        $this->set('soyaoperaciones', $this->SoyaOperacion->find('list', array(
                    'fields' => array('id', 'nombreproducto'),
                    'conditions' => array(
                        'Deposito.tipouso' => 'Produccion')
                        )
        ));
        if ($this->request->is('post')) {
            $this->request->data['AzucarExistencia']['user_id'] = $this->Auth->user('id');
            if ($this->AzucarExistencia->save($this->request->data)) {
                $this->Session->setFlash(__('La informacion fue guardada.'));
                return $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function index() {
        $this->loadModel('SoyaProductorVenta');
    }

    public function delete() {
        
    }

    public function view() {
        
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

}

?>