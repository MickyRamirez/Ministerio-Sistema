<?php


class GruposController extends AppController {
	public $scaffold;
	public $helpers = array ('Html','Form');
    function index() {
        $this->set('grupos', $this->Grupo->find('all'));
    }

}
?>