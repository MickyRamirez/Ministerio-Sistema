<?php
/**
* 
*/
class GraficasController extends AppController
{
    public $components = array('Session', 'RequestHandler','HighCharts.HighCharts');
    public $helpers = array('HighCharts.HighCharts');
    public $uses = array();


	public function index()
	{

    }
}
?>
