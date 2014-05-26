<?php
/**
* 
*/
class AzucaresController extends AppController
{
	public $components = array('Session','RequestHandler');
	public function index()
	{
		$this->loadModel('Azucar');	
		$this->paginate = array(
		'conditions' => array('Grupo.categoria' => 'Azucar'),
        'limit' => 25
    	);
		$this->set('azucares', $this->paginate('Azucar'));
	}
    public function recepcion()
    {
        $this->loadModel('Azucar'); 
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar',
                              'Grupo.subcategoria !=' => 'Institucion Cañera'                              
        ),
        'limit' => 25
        );         
        $this->set('azucares', $this->paginate('Azucar'));
    }
    public function alarmas()
    {
        $this->loadModel('Azucar'); 
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar'),
        'limit' => 25
        );
        $this->set('azucares', $this->paginate('Azucar'));
    }
    public function ventas()
    {
       $this->loadModel('Azucar'); 
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar',
                              'Grupo.subcategoria !=' => 'Control Tecnico Cañero (CTC)'                              
        ),
        'limit' => 25
        );         
        $this->set('azucares', $this->paginate('Azucar'));
    }
    public function depositos()
    {
        $this->loadModel('Azucar'); 
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar'),
        'limit' => 25
        );
        $this->set('azucares', $this->paginate('Azucar'));
    }
    public function operaciones()
    {
        $this->loadModel('Azucar'); 
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar'),
        'limit' => 25
        );
        $this->set('azucares', $this->paginate('Azucar'));
    }
    public function produccion()
    {
        $this->loadModel('Azucar'); 
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar', 'Grupo.subcategoria' => 'Ingenio Azucarero' ),
        'limit' => 25
        );
        $this->set('azucares', $this->paginate('Azucar'));
    }
    public function comparaciones()
    {
        $this->loadModel('Azucar'); 
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar'),
        'limit' => 25
        );
        $this->set('azucares', $this->paginate('Azucar'));
    }
    public function entregas()
    {        
        $this->loadModel('Azucar'); 
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar',
                              'Grupo.subcategoria !=' => 'Institucion Cañera'                              
        ),
        'limit' => 25
        );         
        $this->set('azucares', $this->paginate('Azucar'));
    }
    
    public function produccioningenioano($id = null) {
        $this->loadModel('Azucar');
        $this->set('soyasnombre', $this->Azucar->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $this->loadModel("IngenioEntrega");
        $years = $this->IngenioEntrega->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Azucar->findById($id));
        if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
                $this->request->data = $user;
        }
    }
    public function produccioningeniomes ($id = null) {
        $this->loadModel('Azucar');
        $this->set('soyasnombre', $this->Azucar->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $this->loadModel("IngenioEntrega");
        $years = $this->IngenioEntrega->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Azucar->findById($id));
        if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
                $this->request->data = $user;
        }
    }
    public function combinacioningenio($id = null) {

        $this->loadModel('Azucar');
        $this->set('soyasnombre', $this->Azucar->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $this->loadModel("IngenioEntrega");
        $years = $this->IngenioEntrega->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Azucar->findById($id));
        if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
                $this->request->data = $user;
        }
            $meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre',);
            $TotalAzucarRefinadakg=0;
            $TotalAzucarCrudakg=0;
            $TotalAzucarCrudaRefinadakg=0;
            $TotalVolumenAlchollts=0;
            $TotalCachazatm=0;
            $TotalMelazatm=0;
            $TotalBagazotm=0;
            $Totalrecepcion=0;
            $comparacionCachaza= array();
            $comparacionMelaza= array();
            $comparacionBagazo= array();
            $comparacionRecepcion= array();
        foreach ($distinct_years as $var)  { 
        for ($i=1; $i <= 12 ; $i++) { 
        foreach ($this->data['IngenioEntrega'] as $ingenioentrega): 
            $year = strtotime($ingenioentrega['fecharegistro']);
            if (date("m", $year)==$i) { 
                if (date("Y", $year)==$var) { 
                    $TotalAzucarRefinadakg = $TotalAzucarRefinadakg + $ingenioentrega['refinada']; 
                    $TotalAzucarCrudakg = $TotalAzucarCrudakg + $ingenioentrega['cruda'];
                    $TotalAzucarCrudaRefinadakg = $TotalAzucarCrudaRefinadakg + $ingenioentrega['refinada'] + $ingenioentrega['cruda'];
                    $TotalVolumenAlchollts = $TotalVolumenAlchollts + $ingenioentrega['volumenlitros'];
                    $TotalCachazatm = $TotalCachazatm + $ingenioentrega['cachaza'];
                    $TotalMelazatm = $TotalMelazatm + $ingenioentrega['melaza'];
                    $TotalBagazotm = $TotalBagazotm + $ingenioentrega['bagaza'];
                }
            } 
        endforeach;

        foreach ($this->data['IngenioRecepcion'] as $ingeniorecepcion): 
            $year = strtotime($ingeniorecepcion['fecharegistro']);
            if (date("m", $year)==$i) { 
                if (date("Y", $year)==$var) { 
                    $Totalrecepcion = $Totalrecepcion + $ingeniorecepcion['total']; 
                }
            } 
        endforeach;

            $TotalAzucarRefinadakg=0;
            $TotalAzucarCrudakg=0;
            $TotalAzucarCrudaRefinadakg=0;
            $TotalVolumenAlchollts=0;
            $TotalCachazatm=0;
            $TotalMelazatm=0;
            $TotalBagazotm=0;
            $Totalrecepcion=0;
            $comparacionCachaza[]= $TotalCachazatm;
            $comparacionMelaza[]= $TotalMelazatm;
            $comparacionBagazo[]= $TotalBagazotm ;
            $comparacionRecepcion[]= $Totalrecepcion;

            }
        }
        $a=array_sum($comparacionCachaza);
        $b=array_sum($comparacionMelaza);
        $c=array_sum($comparacionBagazo);
        $d=array_sum($comparacionRecepcion);
        $avgData  = $comparacionCachaza;
        $avdData  = $comparacionMelaza;
        $aveData  = $comparacionBagazo;
        $avfData  = $comparacionRecepcion;
        $pieData = array(   
                    array(
                        'name' => 'Cachaza',
                        'y' => $a,
                        'sliced' => true,
                        'selected' => true
                ),
            array('Melaza', $b),
            array('Bagazo', $c),
            array('Recepcion', $d)
            );
        $chartName = 'Combination Chart';
        $mychart = $this->HighCharts->create($chartName, 'column');
        $this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'              => 'combowrapper',  // div to display chart inside
                    'chartWidth'            => 1200,
                    'chartHeight'           => 700,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,300),
                    'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),              
                    'title'             => 'Tabla Comparativa',
                    'subtitle'              => 'Azucar',
                    'xAxisLabelsEnabled'        => TRUE,                
                    'xAxisCategories'           => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),                
                    'yAxisTitleText'        => 'Cantidad en (TM)',                                 
                    'enableAutoStep'        => FALSE,
                    'creditsEnabled'        => FALSE                        
                ) 
            );
        $cachazaSeries = $this->HighCharts->addChartSeries();
        $cachazaSeries->type = 'column';
        $cachazaSeries->addName('Cachaza')
            ->addData($comparacionCachaza);

        $MelazaSeries = $this->HighCharts->addChartSeries();
        $MelazaSeries->type = 'column';
        $MelazaSeries->addName('Melaza')
            ->addData($comparacionMelaza);    

        $BagazaSeries = $this->HighCharts->addChartSeries();
        $BagazaSeries->type = 'column';
        $BagazaSeries->addName('Bagazo')
            ->addData($comparacionBagazo);

        $recepcionSeries = $this->HighCharts->addChartSeries();
        $recepcionSeries->type = 'column';
        $recepcionSeries->addName('Recepcion Caña')
            ->addData($comparacionRecepcion);       

        $avgSeries  = $this->HighCharts->addChartSeries();
        $avgSeries->type = 'spline';
        $avgSeries->addName('Cachaza')
            ->addData($avgData);

        $avdSeries  = $this->HighCharts->addChartSeries();
        $avdSeries->type = 'spline';
        $avdSeries->addName('Melaza')
            ->addData($avdData);

        $aveSeries  = $this->HighCharts->addChartSeries();
        $aveSeries->type = 'spline';
        $aveSeries->addName('Bagazo')
            ->addData($aveData);

        $avfSeries  = $this->HighCharts->addChartSeries();
        $avfSeries->type = 'spline';
        $avfSeries->addName('Recepcion Caña')
            ->addData($avfData);

        $pieSeries  = $this->HighCharts->addChartSeries();
        $pieSeries->type = 'pie';
        $pieSeries->center = array(900,150);

        $pieSeries->size = 250;
        $pieSeries->showInLegend = FALSE;
        $pieSeries->addName('Total consumption')->addData($pieData);    

        $mychart->addSeries($cachazaSeries);
        $mychart->addSeries($MelazaSeries);
        $mychart->addSeries($BagazaSeries);
        $mychart->addSeries($recepcionSeries);


        $mychart->addSeries($avgSeries);
        $mychart->addSeries($avdSeries);
        $mychart->addSeries($aveSeries);
        $mychart->addSeries($avfSeries);


        $mychart->addSeries($pieSeries);    
    }
    public function produccioningeniosemestre ($id = null) {
        $this->loadModel('Azucar');
        $this->set('soyasnombre', $this->Azucar->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $this->loadModel("IngenioEntrega");
        $years = $this->IngenioEntrega->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Azucar->findById($id));
        if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
                $this->request->data = $user;
        }
    }
    public function compainformeingenio($id = null) {
        $this->loadModel('Azucar');
        $this->set('soyasnombre', $this->Azucar->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $this->loadModel("IngenioEntrega");
        $years = $this->IngenioEntrega->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Azucar->findById($id));
        if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
                $this->request->data = $user;
        }
    }
    public function compaseleccioningenio($id = null) {
        $this->loadModel('Azucar');
        $this->set('soyasnombre', $this->Azucar->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $this->loadModel("IngenioEntrega");
        $years = $this->IngenioEntrega->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
        
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
        }
        $user = $this->Azucar->findById($id);
        if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
                $this->request->data = $user;
        }
    }
    public function compaseleccioninstitucion($id = null) {
        $this->loadModel('Soya');
        $this->set('soyasnombre', $this->Soya->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));

        $this->loadModel("SoyaProductorCompra");
        $years = $this->SoyaProductorCompra->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));

        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
        }
        $user = $this->Soya->findById($id);
        if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
                $this->request->data = $user;
        }
    }
    public function compaseleccionctc($id = null) {
        $this->loadModel('Soya');
        $this->set('soyasnombre', $this->Soya->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        $this->loadModel("SoyaProductorCompra");
        $years = $this->SoyaProductorCompra->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));

        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'index'));
        }
        $user = $this->Soya->findById($id);
        if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
                $this->request->data = $user;
        }
    }


    public function canoingenio($id = null)
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioEntrega");
        $years = $this->IngenioEntrega->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function reportecano($id = null)  
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioEntrega");
        $years = $this->IngenioEntrega->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportecano','export_xls');
    }

    public function reportecsemestre($id = null)  
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioEntrega");
        $years = $this->IngenioEntrega->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportecsemestre','export_xls');
    }

    public function reportecmes($id = null)  
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioEntrega");
        $years = $this->IngenioEntrega->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportecmes','export_xls');
    }

    public function reportecsemestrectc($id = null)  
    {
        $this->loadModel("Azucar");
        $this->loadModel("CtcProduccion");
        $years = $this->CtcProduccion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportecsemestrectc','export_xls');
    }

    public function reportecmesctc($id = null)  
    {
        $this->loadModel("Azucar");
        $this->loadModel("CtcProduccion");
        $years = $this->CtcProduccion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportecmesctc','export_xls');
    }


    public function ranoctc($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("CtcRecepcion");
        $years = $this->CtcRecepcion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function reporteranoctc($id = null)  
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioRecepcion");
        $years = $this->IngenioRecepcion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reporteranoctc','export_xls');
    }

    public function ranoingenio($id = null) 
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioRecepcion");
        $years = $this->IngenioRecepcion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function reporteranoingenio($id = null)  
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioRecepcion");
        $years = $this->IngenioRecepcion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reporteranoingenio','export_xls');
    }

    public function rsemestrectc($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("CtcRecepcion");
        $years = $this->CtcRecepcion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function reportersemestrectc($id = null)  
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioRecepcion");
        $years = $this->IngenioRecepcion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportersemestrectc','export_xls');
    }

    public function rsemestreingenio($id = null)
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioRecepcion");
        $years = $this->IngenioRecepcion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function reportersemestreingenio($id = null)  
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioRecepcion");
        $years = $this->IngenioRecepcion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportersemestreingenio','export_xls');
    }

public function rmesctc($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("CtcRecepcion");
        $years = $this->CtcRecepcion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function reportermesctc($id = null)  
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioRecepcion");
        $years = $this->IngenioRecepcion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportermesctc','export_xls');
    }

    public function rmesingenio($id = null)
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioRecepcion");
        $years = $this->IngenioRecepcion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function reportermesingenio($id = null)  
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioRecepcion");
        $years = $this->IngenioRecepcion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportermesingenio','export_xls');
    }

    public function vanoexportacioningenio($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("IngenioAzucarExportacion");
        $years = $this->IngenioAzucarExportacion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function reportevanoexportacioningenio($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("IngenioAzucarExportacion");
        $years = $this->IngenioAzucarExportacion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportevanoexportacioningenio','export_xls');
    }

    public function vanomercadoingenio($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("IngenioAzucarMercadoInterno");
        $years = $this->IngenioAzucarMercadoInterno->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function reportevanomercadoingenio($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("IngenioAzucarMercadoInterno");
        $years = $this->IngenioAzucarMercadoInterno->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportevanomercadoingenio','export_xls');
    }

    public function reportevsemestremercadoingenio($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("IngenioAzucarMercadoInterno");
        $years = $this->IngenioAzucarMercadoInterno->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportevsemestremercadoingenio','export_xls');
    }

    public function reportevsemestreexportacioningenio($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("IngenioAzucarExportacion");
        $years = $this->IngenioAzucarExportacion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportevsemestreexportacioningenio','export_xls');
    }

    public function reportevmesexportacioningenio($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("IngenioAzucarExportacion");
        $years = $this->IngenioAzucarExportacion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportevmesexportacioningenio','export_xls');
    }

    public function reportevmesmercadoingenio($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("IngenioAzucarMercadoInterno");
        $years = $this->IngenioAzucarMercadoInterno->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportevmesmercadoingenio','export_xls');
    }

    public function reportevanoexportacioninstitucion($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("InstitucionAzucarExportacion");
        $years = $this->InstitucionAzucarExportacion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportevanoexportacioninstitucion','export_xls');
    }

    public function reportevanomercadoinstitucion($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("InstitucionAzucarMercadoInterno");
        $years = $this->InstitucionAzucarMercadoInterno->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportevanomercadoinstitucion','export_xls');
    }

    public function reportevsemestreexportacioninstitucion($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("InstitucionAzucarExportacion");
        $years = $this->InstitucionAzucarExportacion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportevsemestreexportacioninstitucion','export_xls');
    }

    public function reportevsemestremercadoinstitucion($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("InstitucionAzucarMercadoInterno");
        $years = $this->InstitucionAzucarMercadoInterno->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportevsemestremercadoinstitucion','export_xls');
    }
    public function reportevmesexportacioninstitucion($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("InstitucionAzucarExportacion");
        $years = $this->InstitucionAzucarExportacion->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportevmesexportacioninstitucion','export_xls');
    }

    public function reportevmesmercadoinstitucion($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("InstitucionAzucarMercadoInterno");
        $years = $this->InstitucionAzucarMercadoInterno->getYears();
        $this->Azucar->recursive = 1;
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        $this->render('reportevmesmercadoinstitucion','export_xls');
    }

public function vsemestreexportacioningenio($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("IngenioAzucarExportacion");
        $years = $this->IngenioAzucarExportacion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

public function vsemestremercadoingenio($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("IngenioAzucarMercadoInterno");
        $years = $this->IngenioAzucarMercadoInterno->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function vmesexportacioningenio($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("IngenioAzucarExportacion");
        $years = $this->IngenioAzucarExportacion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

public function vmesmercadoingenio($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("IngenioAzucarMercadoInterno");
        $years = $this->IngenioAzucarMercadoInterno->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function vanoexportacioninstitucion($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("InstitucionAzucarExportacion");
        $years = $this->InstitucionAzucarExportacion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function vanomercadoinstitucion($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("InstitucionAzucarMercadoInterno");
        $years = $this->InstitucionAzucarMercadoInterno->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function vsemestreexportacioninstitucion($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("InstitucionAzucarExportacion");
        $years = $this->InstitucionAzucarExportacion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function vsemestremercadoinstitucion($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("InstitucionAzucarMercadoInterno");
        $years = $this->InstitucionAzucarMercadoInterno->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function vmesexportacioninstitucion($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("InstitucionAzucarExportacion");
        $years = $this->InstitucionAzucarExportacion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function vmesmercadoinstitucion($id = null)
    { 
        $this->loadModel("Azucar");
        $this->loadModel("InstitucionAzucarMercadoInterno");
        $years = $this->InstitucionAzucarMercadoInterno->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function canoctc($id = null)
    {
        $this->loadModel("Azucar");
        $this->loadModel("CtcProduccion");
        $years = $this->CtcProduccion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function csemestreingenio($id = null)
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioEntrega");
        $years = $this->IngenioEntrega->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function csemestrectc($id = null)
    {
        $this->loadModel("Azucar");
        $this->loadModel("CtcProduccion");
        $years = $this->CtcProduccion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function cmesingenio($id = null)
    {
        $this->loadModel("Azucar");
        $this->loadModel("IngenioEntrega");
        $years = $this->IngenioEntrega->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    public function cmesctc($id = null)
    {
        $this->loadModel("Azucar");
        $this->loadModel("CtcProduccion");
        $years = $this->CtcProduccion->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));


        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        
        $user = $this->Azucar->findById($id);
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

	public function alarma()
	{
		$this->loadModel('Azucar');	
		$this->paginate = array(
		'conditions' => array('Grupo.categoria' => 'Azucar','Grupo.subcategoria' => 'Ingenio Azucarero'),
        'limit' => 25
    	);
		$this->set('azucares', $this->paginate('Azucar'));
	}
	public function alarmauno()
	{
		$this->loadModel('Azucar');	
		$this->paginate = array(
		'conditions' => array('Grupo.categoria' => 'Azucar','Grupo.subcategoria' => 'Institucion Cañera'),
        'limit' => 25
    	);
		$this->set('azucares', $this->paginate('Azucar'));
	}
	public function general()
	{
		$this->loadModel('Azucar');	
		$this->paginate = array(
		'conditions' => array('Grupo.categoria' => 'Azucar','Grupo.subcategoria' => 'Ingenio Azucarero'),
        'limit' => 25
    	);
		$this->set('azucares', $this->paginate('Azucar'));
	}
	public function generaluno()
	{
		$this->loadModel('Azucar');	
		$this->paginate = array(
		'conditions' => array('Grupo.categoria' => 'Azucar','Grupo.subcategoria' => 'Institucion Cañera'),
        'limit' => 25
    	);
		$this->set('azucares', $this->paginate('Azucar'));
	}	
	public function reporte()
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
/////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////reportes azucar/////////////////////////
    public function reporteuno()
    {
        $this->loadModel('Azucar');
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar','Grupo.subcategoria' => 'Ingenio Azucarero'),
        'limit' => 25
        );
        $this->set('azucares', $this->paginate('Azucar'));

    }


//////////////////////////////////////////////////reportes produccion de azucar ingenios/////////////////////
    public function reportalcoholexportaciones ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('IngenioAlcoholExportacion');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportalcoholexportaciones','export_xls');
    }
/////////////////////////////////////////////////

    public function reportalcoholmercadosinternos ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('IngenioAlcoholMercadoInterno');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportalcoholmercadosinternos','export_xls');
    }
////////////////////////////////////////////////////
    public function reportazucarexportaciones ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('IngenioAzucarExportacion');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportazucarexportaciones','export_xls');
    }   
////////////////////////////////////////////////////
    public function reportazucarmercadosinternos ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('IngenioAzucarMercadoInterno');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportazucarmercadosinternos','export_xls');
    } 
////////////////////////////////////////////////////
    public function reportazucarentregas ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('IngenioEntrega');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportazucarentregas','export_xls');
    } 
////////////////////////////////////////////////////
    public function reportazucaringenioproducciones ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('IngenioProduccion');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportazucaringenioproducciones','export_xls');
    } 

////////////////////////////////////////////////////////
    public function reportazucaringeniorecepciones ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('IngenioRecepcion');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportazucaringeniorecepciones','export_xls');
    } 
/////////////////////////////////////////////////////////
    public function reportazucarexistencias ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('AzucarExistencia');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportazucarexistencias','export_xls');
    } 
//////////////////////////////////////////////////////////




////////////////////////////////////////    
    public function reportedos()
    {
        $this->loadModel('Azucar');
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar','Grupo.subcategoria' => 'Institucion Cañera'),
        'limit' => 25
        );
        $this->set('azucares', $this->paginate('Azucar'));

    }
 ///////////////////////////////////
    public function reportinstitucionalcoholexportaciones ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('InstitucionAlcoholExportacion');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportinstitucionalcoholexportaciones','export_xls');
    } 
///////////////////////////////////////////// 
    public function reportinstitucionalcoholmercadosinternos ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('InstitucionAlcoholMercadoInterno');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportinstitucionalcoholmercadosinternos','export_xls');
    } 
////////////////////////////////////////////
    public function reportinstitucionazucarexportaciones ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('InstitucionAzucarExportacion');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportinstitucionazucarexportaciones','export_xls');
    } 
/////////////////////////////////////////////
    public function reportinstitucionazucarmercadosinternos ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('InstitucionAzucarMercadoInterno');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportinstitucionazucarmercadosinternos','export_xls');
    } 
//////////////////////////////////////////////
    public function reportinstitucionsegunderechospropietarios ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('InstitucionSegunPropietario');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportinstitucionsegunderechospropietarios','export_xls');
    } 
///////////////////////////////////////////////

///////////////////////////////////   
    public function reportetres()
    {
        $this->loadModel('Azucar');
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Azucar','Grupo.subcategoria' => 'Control Tecnico Cañero (CTC)'),
        'limit' => 25
        );
        $this->set('azucares', $this->paginate('Azucar'));

    }
////////////////////////////////////////////////////////////////////////////////////////////////////
    public function reportctcproducciones ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('CtcProduccion');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportctcproducciones','export_xls');
    }
///////////////////////////////////////////////////
    public function reportctcrecepciones ($id = null)
    {   
        $this->loadModel('Azucar');
        $this->loadModel('CtcRecepcion');
        $this->Azucar->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Azucar->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportctcrecepciones','export_xls');
    } 
}
?>
