<?php
class ReportesController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index()
 {

 $user = $this->Reporte->find('all');
 $this->set('reportes', $user);

  }
      function Search()

       { 

    $date = $this->request->data['Reporte']['date'];
    $user = $this->Reporte->find('all', array(
        'conditions' => array(
            'reporte.fecharegistro'=> $date,
        ),
    ));
    $this->set('reportes', $user);
}

	}
?>