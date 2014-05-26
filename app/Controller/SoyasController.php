<?php
/**
* 
*/

App::uses('CakeEmail', 'Network/Email');

class SoyasController extends AppController
{
    public $components = array('Session', 'RequestHandler','HighCharts.HighCharts');
    public $helpers = array('HighCharts.HighCharts');
    public $uses = array();
    public $layout = 'chart.demo'; 

	public function index()
	{
        $this->loadModel('Soya');
        $this->set('soyasnombre', $this->Soya->find('first', array('conditions' => array('user_id' =>  $this->Auth->user('id')))));
        
		$this->loadModel('Soya');
        $this->loadModel("SoyaProductorCompra");
        
        $years = $this->SoyaProductorCompra->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));

		$this->paginate = array(
		'conditions' => array('Grupo.categoria' => 'Soya'),
        'limit' => 25
    	);
		$this->set('soyas', $this->paginate('Soya'));

	}
	public function controlmensual()
	{
		$this->loadModel('Soya');
		$this->paginate = array(
		'conditions' => array('Grupo.categoria' => 'Soya'),
        'limit' => 25
    	);
		$this->set('soyas', $this->paginate('Soya'));
	}
	public function operaciones()
	{
		$this->loadModel('Soya');
		$this->paginate = array(
		'conditions' => array('Grupo.categoria' => 'Soya'),
        'limit' => 25
    	);
		$this->set('soyas', $this->paginate('Soya'));
	}
    public function depositos()
	{
		$this->loadModel('Soya');
		$this->paginate = array(
		'conditions' => array('Grupo.categoria' => 'Soya'),
        'limit' => 25
    	);
		$this->set('soyas', $this->paginate('Soya'));
	}
	public function alarma()
	{
		$this->loadModel('Soya');
		$this->paginate = array(
		'conditions' => array('Grupo.categoria' => 'Soya'),
        'limit' => 25
    	);
		$this->set('soyas', $this->paginate('Soya'));
	}
	public function general()
	{
		$this->loadModel('Soya');
		$this->paginate = array(
		'conditions' => array('Grupo.categoria' => 'Soya'),
        'limit' => 25
    	);
		$this->set('soyas', $this->paginate('Soya'));
	}
        
    public function alarmasoya()
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorCompra");
        $years = $this->SoyaProductorCompra->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya', 'Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));
    }      
    public function ventas()
    {
        $this->loadModel('Soya');
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));
    }
    public function compras()
    {
        $this->loadModel('Soya');
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));
                                
    }

    public function empresasoya()
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
        
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));
    }
    public function empresagirasol()
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
        
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));
    }
    public function produccion()
    {
        $this->loadModel('Soya');
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));
    }
    public function exportacion()
    {
        $this->loadModel('Soya');
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));
    }
    public function compragrano()
    {
        $this->loadModel('Soya');
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));
    }
    public function ventalocal()
    {
        $this->loadModel('Soya');
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));
    }
    public function seleccionventa()
    {
        $this->loadModel("SoyaProductorDerivado");
        $this->loadModel("User");
        $years = $this->SoyaProductorDerivado->getYears();
        $compra = $this->SoyaProductorDerivado->getVentas();
        $user_ids = $this->SoyaProductorDerivado->getIdis();
        $user_ids = $this->User->find('list', array(

         'joins' => array(
              array(
                'table' => 'perfil',
                'alias' => 'Perfil',
                'type' => 'LEFT',
                'conditions' => array(
                'Perfil.user_id = User.id'
                )
            ),
            array(
                'table' => 'grupo',
                'alias' => 'Grupo',
                'type' => 'LEFT',
                'conditions' => array(
                'User.grupo_id = Grupo.id'
                )
            )
        ),
            'conditions' => array(
            'Grupo.id' => 5
        ),
            'order' => array(
            'User.id' => 'ASC'
        ),
            'fields' => array('Perfil.user_id','Perfil.nombrecomercial'),
         
            'recursive' => -1
        ));
        $this->set('ids', $user_ids);   
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }

        $this->set(compact('distinct_years'));

        $this->set('soyas', $compra);   
    }
    public function seleccionregimen()
    {
        $this->loadModel("SoyaProductorCompra");
        $this->loadModel("User");
        $years = $this->SoyaProductorCompra->getYears();
        $compra = $this->SoyaProductorCompra->getCompras();
        $user_ids = $this->SoyaProductorCompra->getIdis();

        $user_ids = $this->User->find('list', array(
         'joins' => array(
              array(
                'table' => 'perfil',
                'alias' => 'Perfil',
                'type' => 'LEFT',
                'conditions' => array(
                'Perfil.user_id = User.id'
                )
            ),
            array(
                'table' => 'grupo',
                'alias' => 'Grupo',
                'type' => 'LEFT',
                'conditions' => array(
                'User.grupo_id = Grupo.id'
                )
            )
        ),
            'conditions' => array(
            'Grupo.id' => 5
        ),
            'order' => array(
            'User.id' => 'ASC'
        ),
            'fields' => array('Perfil.user_id','Perfil.nombrecomercial'),
         
            'recursive' => -1
        ));
        $this->set('ids', $user_ids);   
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
                $this->set(compact('distinct_years'));

        $this->set('soyas', $compra);   
    }

    public function filtrocampana()
    {
        $this->loadModel("SoyaCampana");
        $campanas = $this->SoyaCampana->getCampana();        
        $this->set('soyas', $campanas);   
    }

    public function reporteseleccioncampana()
    {
        $this->loadModel("SoyaCampana");
        $this->loadModel("SoyaProductorCompra");
        $id_campana=$this->data['Soya']['nomcampana'][0];
        $data_campana=$this->SoyaCampana->find('all', array('conditions'=>array('SoyaCampana.id'
            =>$id_campana)));

        $this->set('actual', $data_campana); 
        $actual = $data_campana;

        $fecha_inicio=$actual[0]['SoyaCampana']['fechaini'];
        $fecha_fin=$actual[0]['SoyaCampana']['fechafin'];

        $years = $this->SoyaProductorCompra->getYears();
         $user_ids = $this->SoyaProductorCompra->getIdis();
        
        $ids = array();
        foreach($user_ids as $var) {
            $ids[] = $var['SoyaProductorCompra']['user_id'];
        }
        $compra = $this->SoyaProductorCompra->find('all', array(
         'joins' => array(
            array(
                'table' => 'users',
                'alias' => 'User',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProductorCompra.user_id = User.id'
                )
            ),   
            array(
                'table' => 'soyaproveedor',
                'alias' => 'SoyaProveedor',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProveedor.user_id = SoyaProductorCompra.user_id'
                )
            ),
              array(
                'table' => 'perfil',
                'alias' => 'Perfil',
                'type' => 'LEFT',
                'conditions' => array(
                'Perfil.user_id = SoyaProductorCompra.user_id'
                )
            ),
            array(
                'table' => 'grupo',
                'alias' => 'Grupo',
                'type' => 'LEFT',
                'conditions' => array(
                'User.grupo_id = Grupo.id'
                )
            )
        ),
            'conditions' => array(
            'Grupo.id' => 5
        ),
            'order' => array(
            'SoyaProveedor.regimen' => 'ASC'
        ),
            'fields' => array('SoyaProductorCompra.*', 'SoyaProveedor.*','Perfil.nombrecomercial','Perfil.razonsocial','Perfil.user_id'),

            'conditions'=>array(
                'AND'=>array(
                //'SoyaProductorCompra.fecharegistro BETWEEN '.$fecha_inicio.' AND '.$fecha_fin.'',
                array('SoyaProductorCompra.fecharegistro >=' => $fecha_inicio, 'SoyaProductorCompra.fecharegistro <=' => $fecha_fin),
                'SoyaProductorCompra.soya_proveedor_id = SoyaProveedor.id'
                )),
            'recursive' => -1
        ));
       
        $this->set(compact('ids'));
        

        $this->set('soyas', $compra);

     }

    
 
    public function reporteseleccioinregimen()
    {
        $this->loadModel("SoyaProductorCompra");
        $years = $this->SoyaProductorCompra->getYears();
        $compra = $this->SoyaProductorCompra->getCompras();
        $user_ids = $this->SoyaProductorCompra->getIdis();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $ids = array();
        foreach($user_ids as $var) {
            $ids[] = $var['SoyaProductorCompra']['user_id'];
        }
        $this->set(compact('ids'));
        $this->set(compact('distinct_years'));

        $this->set('soyas', $compra);   
    }
    
    public function regimengeneral() 
    {
        $this->loadModel("SoyaProductorCompra");
        $years = $this->SoyaProductorCompra->getYears();
        $compra = $this->SoyaProductorCompra->getCompras();
        $user_ids = $this->SoyaProductorCompra->getIdis();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $ids = array();
        foreach($user_ids as $var) {
            $ids[] = $var['SoyaProductorCompra']['user_id'];
        }
        $this->set(compact('ids'));
        $this->set(compact('distinct_years'));

        $this->set('soyas', $compra);	
	}

    public function filtroregimengeneral()
    {
        $this->loadModel("SoyaProductorCompra");
        $this->loadModel("User");
        $years = $this->SoyaProductorCompra->getYears();
        $compra = $this->SoyaProductorCompra->getCompras();
        $user_ids = $this->SoyaProductorCompra->getIdis();

        $user_ids = $this->User->find('list', array(
         'joins' => array(
              array(
                'table' => 'perfil',
                'alias' => 'Perfil',
                'type' => 'LEFT',
                'conditions' => array(
                'Perfil.user_id = User.id'
                )
            ),
            array(
                'table' => 'grupo',
                'alias' => 'Grupo',
                'type' => 'LEFT',
                'conditions' => array(
                'User.grupo_id = Grupo.id'
                )
            )
        ),
            'conditions' => array(
            'Grupo.id' => 5
        ),
            'order' => array(
            'User.id' => 'ASC'
        ),
            'fields' => array('Perfil.user_id','Perfil.nombrecomercial'),
         
            'recursive' => -1
        ));
        $this->set('ids', $user_ids);   
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
                $this->set(compact('distinct_years'));

        $this->set('soyas', $compra);   

        $this->loadModel("SoyaCampana");
        $campanas = $this->SoyaCampana->getCampana();        
        $this->set('soyascamp', $campanas);   
    }

    public function reporteregimengeneral()
    {
        $this->loadModel("SoyaProductorCompra");
        $years = $this->SoyaProductorCompra->getYears();
        $compra = $this->SoyaProductorCompra->getCompras();
        $user_ids = $this->SoyaProductorCompra->getIdis();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $ids = array();
        foreach($user_ids as $var) {
            $ids[] = $var['SoyaProductorCompra']['user_id'];
        }
        $this->set(compact('ids'));
        $this->set(compact('distinct_years'));

        //--------------------------------------------------
        $this->loadModel("SoyaCampana");
        $id_campana=$this->data['Soya']['nomcampana'][0];
        $data_campana=$this->SoyaCampana->find('all', array('conditions'=>array('SoyaCampana.id'
            =>$id_campana)));

        $this->set('actual', $data_campana); 
        $actual = $data_campana;

        $fecha_inicio=$actual[0]['SoyaCampana']['fechaini'];
        $fecha_fin=$actual[0]['SoyaCampana']['fechafin'];

        $years = $this->SoyaProductorCompra->getYears();
        $camp_ids = $this->SoyaCampana->getCampana();
        
        $compra = $this->SoyaProductorCompra->find('all', array(
         'joins' => array(
            array(
                'table' => 'users',
                'alias' => 'User',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProductorCompra.user_id = User.id'
                )
            ),   
            array(
                'table' => 'soyaproveedor',
                'alias' => 'SoyaProveedor',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProveedor.user_id = SoyaProductorCompra.user_id'
                )
            ),
              array(
                'table' => 'perfil',
                'alias' => 'Perfil',
                'type' => 'LEFT',
                'conditions' => array(
                'Perfil.user_id = SoyaProductorCompra.user_id'
                )
            ),
            array(
                'table' => 'grupo',
                'alias' => 'Grupo',
                'type' => 'LEFT',
                'conditions' => array(
                'User.grupo_id = Grupo.id'
                )
            )
        ),
            'conditions' => array(
            'Grupo.id' => 5
        ),
            'order' => array(
            'SoyaProveedor.regimen' => 'ASC'
        ),
            'fields' => array('SoyaProductorCompra.*', 'SoyaProveedor.*','Perfil.nombrecomercial','Perfil.razonsocial','Perfil.user_id'),

            'conditions'=>array(
                'AND'=>array(
                //'SoyaProductorCompra.fecharegistro BETWEEN '.$fecha_inicio.' AND '.$fecha_fin.'',
                array('SoyaProductorCompra.fecharegistro >=' => $fecha_inicio, 'SoyaProductorCompra.fecharegistro <=' => $fecha_fin),
                'SoyaProductorCompra.soya_proveedor_id = SoyaProveedor.id'
                )),
            'recursive' => -1
        ));
       
        $this->set(compact('ids'));
        

        
        //--------------------------------------------------

        $this->set('soyas', $compra);   
    }

    public function regimengeneralmes()
    {
        $this->loadModel("SoyaProductorCompra");
        $years = $this->SoyaProductorCompra->getYears();
        $compra = $this->SoyaProductorCompra->getCompras();
        $user_ids = $this->SoyaProductorCompra->getIdis();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $ids = array();
        foreach($user_ids as $var) {
            $ids[] = $var['SoyaProductorCompra']['user_id'];
        }
        $this->set(compact('ids'));
        $this->set(compact('distinct_years'));

        $this->set('soyas', $compra);   
    }
    public function compravsproduccion()
    {
        $this->loadModel('Soya');
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));
    }

    public function alarmacompraz($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
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

    public function vano($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
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
    public function vmes($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
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

    public function vsemestre($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
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
 


    public function vproductos($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
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
    public function ccampana($id = null)
    {
        $this->loadModel('Soya');

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
    public function regimenmes($id = null)
    {
        $this->loadModel('Soya');
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

        $user = $this->SoyaProductorCompra->find('all', array(
         'joins' => array(
            array(
                'table' => 'users',
                'alias' => 'User',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProductorCompra.user_id = User.id'
                )
            ),   
            array(
                'table' => 'soyaproveedor',
                'alias' => 'SoyaProveedor',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProveedor.user_id = SoyaProductorCompra.user_id'
                )
            ),
              array(
                'table' => 'perfil',
                'alias' => 'Perfil',
                'type' => 'LEFT',
                'conditions' => array(
                'Perfil.user_id = SoyaProductorCompra.user_id'
                )
            ),
            array(
                'table' => 'grupo',
                'alias' => 'Grupo',
                'type' => 'LEFT',
                'conditions' => array(
                'User.grupo_id = Grupo.id'
                )
            )
        ),
            'conditions' => array(
            'Grupo.id' => 5
        ),
            'order' => array(
            'SoyaProveedor.regimen' => 'ASC'
        ),
            'fields' => array('SoyaProductorCompra.*', 'SoyaProveedor.*','Perfil.nombrecomercial','Perfil.razonsocial','Perfil.user_id'),
            'conditions'=>array('SoyaProductorCompra.soya_proveedor_id = SoyaProveedor.id','SoyaProductorCompra.user_id = '.$id.''),
            'recursive' => -1
        ));
        if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
                $this->request->data = $user;
        }
        
    }
        public function regimenpormes($id = null)
    {
        $this->loadModel('Soya');
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

        $user = $this->SoyaProductorCompra->find('all', array(
         'joins' => array(
            array(
                'table' => 'users',
                'alias' => 'User',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProductorCompra.user_id = User.id'
                )
            ),   
            array(
                'table' => 'soyaproveedor',
                'alias' => 'SoyaProveedor',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProveedor.user_id = SoyaProductorCompra.user_id'
                )
            ),
              array(
                'table' => 'perfil',
                'alias' => 'Perfil',
                'type' => 'LEFT',
                'conditions' => array(
                'Perfil.user_id = SoyaProductorCompra.user_id'
                )
            ),
            array(
                'table' => 'grupo',
                'alias' => 'Grupo',
                'type' => 'LEFT',
                'conditions' => array(
                'User.grupo_id = Grupo.id'
                )
            )
        ),
            'conditions' => array(
            'Grupo.id' => 5
        ),
            'order' => array(
            'SoyaProveedor.regimen' => 'ASC'
        ),
            'fields' => array('SoyaProductorCompra.*', 'SoyaProveedor.*','Perfil.nombrecomercial','Perfil.razonsocial','Perfil.user_id'),
            'conditions'=>array('SoyaProductorCompra.soya_proveedor_id = SoyaProveedor.id','SoyaProductorCompra.user_id = '.$id.''),
            'recursive' => -1
        ));
        if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
                $this->request->data = $user;
        }
        
    }

    public function reporteregimenpormes($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorCompra");
        $this->Soya->recursive = 1;

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

        $user = $this->SoyaProductorCompra->find('all', array(
         'joins' => array(
            array(
                'table' => 'users',
                'alias' => 'User',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProductorCompra.user_id = User.id'
                )
            ),   
            array(
                'table' => 'soyaproveedor',
                'alias' => 'SoyaProveedor',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProveedor.user_id = SoyaProductorCompra.user_id'
                )
            ),
              array(
                'table' => 'perfil',
                'alias' => 'Perfil',
                'type' => 'LEFT',
                'conditions' => array(
                'Perfil.user_id = SoyaProductorCompra.user_id'
                )
            ),
            array(
                'table' => 'grupo',
                'alias' => 'Grupo',
                'type' => 'LEFT',
                'conditions' => array(
                'User.grupo_id = Grupo.id'
                )
            )
        ),
            'conditions' => array(
            'Grupo.id' => 5
        ),
            'order' => array(
            'SoyaProveedor.regimen' => 'ASC'
        ),
            'fields' => array('SoyaProductorCompra.*', 'SoyaProveedor.*','Perfil.nombrecomercial','Perfil.razonsocial','Perfil.user_id'),
            'conditions'=>array('SoyaProductorCompra.soya_proveedor_id = SoyaProveedor.id','SoyaProductorCompra.user_id = '.$id.''),
            'recursive' => -1
        ));
        if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
                $this->request->data = $user;
        }
        $this->render('reporteregimenpormes','export_xls');
    }

    public function cano($id = null)
    {
        $this->loadModel('Soya');

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
    public function cmes($id = null)
    {
        $this->loadModel('Soya');        
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
    public function csemestre($id = null)
    {
        $this->loadModel('Soya');

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
    public function produccionano($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorProduccion");
        $years = $this->SoyaProductorProduccion->getYears();
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
    public function produccionmes($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorProduccion");
        $years = $this->SoyaProductorProduccion->getYears();
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
    public function produccionsemestre($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorProduccion");
        $years = $this->SoyaProductorProduccion->getYears();
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

    public function exportsemestre($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorProduccion");
        $years = $this->SoyaProductorProduccion->getYears();
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
    public function exportano($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorProduccion");
        $years = $this->SoyaProductorProduccion->getYears();
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
    public function exportmes($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorProduccion");
        $years = $this->SoyaProductorProduccion->getYears();
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
    public function localmes($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorProduccion");
        $years = $this->SoyaProductorProduccion->getYears();
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
    public function localano($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorProduccion");
        $years = $this->SoyaProductorProduccion->getYears();
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
    public function localsemestre($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorProduccion");
        $years = $this->SoyaProductorProduccion->getYears();
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
    public function granosemestre($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorProduccion");
        $years = $this->SoyaProductorProduccion->getYears();
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
    public function granoano($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorProduccion");
        $years = $this->SoyaProductorProduccion->getYears();
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
    public function granomes($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorProduccion");
        $years = $this->SoyaProductorProduccion->getYears();
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
       //$this->Session->destroy();
$this->Session->setFlash('Usted cerro sesion');
        $this->redirect($this->Auth->logout());
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////    
///////////////////////////////////////////////////////////////////////soyasreportesproduccion///////////
 public function soyareportes()
    {
        $this->loadModel('Soya');
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));

    }
/////////////////////////////////////////////////////////////
    public function reportsoyaexistencias ($id = null)
    {   
        $this->loadModel('Soya');
        $this->loadModel('SoyaExistencia');
        $this->Soya->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Soya->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportsoyaexistencias','export_xls');
    }
/////////////////////////////////////////////////////////////
    public function reportsoyaproductorcompras ($id = null)
    {   
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorCompra');
        $this->loadModel('SoyaProveedor');
        //$this->Soya->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Soya->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        //$this->render('reportsoyaproductorcompras','export_xls');


    }
///////////////////////////////////////////////////////
    public function reportesoyaproductorderivados ($id = null)
    {   
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorDerivado');
        $this->Soya->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Soya->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportesoyaproductorderivados','export_xls');
    }
/////////////////////////////////////////////////////
    public function reportesoyaproducciones ($id = null)
    {   
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorProduccion');
        $this->Soya->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }

        $data = $this->Soya->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportesoyaproducciones','export_xls');
    }
////////////////////////////////////////////////////////    
    public function reportesoyaexportaciones ($id = null)
    {   
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorExportacion');
        $this->Soya->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Soya->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportesoyaexportaciones','export_xls');
    }
////////////////////////////////////////////////////////
    public function reportesoyaventaslocales ($id = null)
    {   
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorLocal');
        $this->Soya->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Soya->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportesoyaventaslocales','export_xls');
    }
//////////////////////////////////////////////////////    
    public function reportesoyacomprasgranos ($id = null)
    {   
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorCompraGrano');
        $this->Soya->recursive = 1;
        if (!$id) {
                $this->Session->setFlash('Porfavor provea un id de usuario');
                $this->redirect(array('action'=>'error'));
        }
        $data = $this->Soya->findById($id);
        if (!$data) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'error'));
        }
        if (!$this->request->data) {
                $this->request->data = $data;
        }
        $this->render('reportesoyacomprasgranos','export_xls');
    }
    public function reportevmes($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportevmes','export_xls');
        
    }

    public function reportevano($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportevano','export_xls');
        
    }

    public function reportevsemestre($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportevsemestre','export_xls');
        
    }

    public function reportevproducto($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportevproducto','export_xls');
        
    }


    public function reportepano($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportepano','export_xls');
        
    }

    public function reportepmes($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportepmes','export_xls');
        
    }
     public function reportepsemestre($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportepsemestre','export_xls');
        
    }
     public function reportevlano($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportevlano','export_xls');
        
    }

     public function reportevlmes($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportevlmes','export_xls');
        
    }


     public function reportevlsemestre($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportevlsemestre','export_xls');
        
    }

      public function reportecgano($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportecgano','export_xls');
        
    }

 public function reportecgmes($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportecgmes','export_xls');
        
    }


 public function reportecgsemestre($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportecgsemestre','export_xls');
        
    }

 public function reportecano($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportecano','export_xls');
        
    }

 public function reportecmes($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportecmes','export_xls');
        
    }
   

 public function reportecsemestre($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportecsemestre','export_xls');
        
    }

 public function reporteproduccionano($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reporteproduccionano','export_xls');
        
    }
    public function reporteproduccionmes($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reporteproduccionmes','export_xls');
        
    }

    public function reporteproduccionsemestre($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reporteproduccionsemestre','export_xls');
        
    }

    public function reporteccampana($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $this->Soya->recursive = 1;
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reporteccampana','export_xls');        
    }

    public function alarmacompraventa($id = null)
    {
        $this->loadModel('Soya');

        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
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

//////////////////////////////////////////////////
    public function reportealarmacompraventa($id = null)
    {
        $this->loadModel('Soya');
        $this->Soya->recursive = 1;
        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
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
        $this->render('reportealarmacompraventa','export_xls');
    }
    public function reportempresasoya()
    {
        $this->loadModel('Soya');
        $this->Soya->recursive = 1;
        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
        
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));

        $this->render('reportempresasoya','export_xls');
    }
    public function reportempresagirasol()
    {
        $this->loadModel('Soya');
        $this->Soya->recursive = 1;
        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
        
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));

        $this->render('reportempresagirasol','export_xls');
    }
    public function reporteregimengeneralsoya()
    {
        $this->loadModel('Soya');
        $this->Soya->recursive = 1;
        $this->loadModel("SoyaProductorCompra");
        $years = $this->SoyaProductorCompra->getYears();
        $compra = $this->SoyaProductorCompra->getCompras();
        $user_ids = $this->SoyaProductorCompra->getIdis();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $ids = array();
        foreach($user_ids as $var) {
            $ids[] = $var['SoyaProductorCompra']['user_id'];
        }
        $this->set(compact('ids'));
        $this->set(compact('distinct_years'));
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        //$this->set('soyas', $this->paginate('Soya'));	
        $this->set('soyas', $compra); 
        $this->render('reporteregimengeneralsoya','export_xls');         
    }

    public function reportecompacompra($id = null)
    {

        $this->loadModel('Soya');
        $this->Soya->recursive = 1;
        $this->loadModel("SoyaProductorCompra");
         $this->set('datos', $user = $this->Soya->findById($id));
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
        $this->render('reportecompacompra','export_xls');
    }

    public function reportecompaventa($id = null)
    {

        $this->loadModel('Soya');
        $this->Soya->recursive = 1;
        $this->loadModel("SoyaProductorCompra");
         $this->set('datos', $user = $this->Soya->findById($id));
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
        $this->render('reportecompaventa','export_xls');
    }

     public function reporteregimenmes($id = null)
    {
        $this->loadModel('Soya');
        $this->Soya->recursive = 1;
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
        $user = $this->SoyaProductorCompra->find('all', array(
         'joins' => array(
            array(
                'table' => 'users',
                'alias' => 'User',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProductorCompra.user_id = User.id'
                )
            ),   
            array(
                'table' => 'soyaproveedor',
                'alias' => 'SoyaProveedor',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProveedor.user_id = SoyaProductorCompra.user_id'
                )
            ),
              array(
                'table' => 'perfil',
                'alias' => 'Perfil',
                'type' => 'LEFT',
                'conditions' => array(
                'Perfil.user_id = SoyaProductorCompra.user_id'
                )
            ),
            array(
                'table' => 'grupo',
                'alias' => 'Grupo',
                'type' => 'LEFT',
                'conditions' => array(
                'User.grupo_id = Grupo.id'
                )
            )
        ),
            'conditions' => array(
            'Grupo.id' => 5
        ),
            'order' => array(
            'SoyaProveedor.regimen' => 'ASC'
        ),
            'fields' => array('SoyaProductorCompra.*', 'SoyaProveedor.*','Perfil.nombrecomercial','Perfil.razonsocial','Perfil.user_id'),
            'conditions'=>array('SoyaProductorCompra.soya_proveedor_id = SoyaProveedor.id','SoyaProductorCompra.user_id = '.$id.''),
            'recursive' => -1
        ));
        if (!$user) {
                $this->Session->setFlash('El id proporcionado no es valido');
                $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
                $this->request->data = $user;
        }
        $this->render('reporteregimenmes','export_xls');
    }
    public function reportealarmasoya()
    {
        $this->loadModel('Soya');
        $this->Soya->recursive = 1;
        $this->loadModel("SoyaProductorCompra");
        $years = $this->SoyaProductorCompra->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));
        $this->render('reportealarmasoya','export_xls');
    }
    public function reporteregimengeneralmes()
    {
        $this->loadModel("SoyaProductorCompra");
        $this->SoyaProductorCompra->recursive = 1;
        $years = $this->SoyaProductorCompra->getYears();
        $compra = $this->SoyaProductorCompra->getCompras();
        $user_ids = $this->SoyaProductorCompra->getIdis();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $ids = array();
        foreach($user_ids as $var) {
            $ids[] = $var['SoyaProductorCompra']['user_id'];
        }
        $this->set(compact('ids'));
        $this->set(compact('distinct_years'));

        $this->set('soyas', $compra);  
        $this->render('reporteregimengeneralmes','export_xls'); 
    }
    public function reporteseleccion($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorCompra");
        $years = $this->SoyaProductorCompra->getYears();
        $distinct_years = array();
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
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
    } 

    public function compopcion($id = null)
    {
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

    public function reportefiltrocompacompra($id = null)
    {
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

    public function reportefiltrocompaventa($id = null)
    {
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

    public function ventopcion($id = null)
    {
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

    public function compainforme($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorCompra");
        $years = $this->SoyaProductorCompra->getYears();
        $distinct_years = array();
        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Soya->findById($id));
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }

        $this->set(compact('distinct_years'));
    } 

    public function ventinforme($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorCompra");
        $years = $this->SoyaProductorCompra->getYears();
        $distinct_years = array();
        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Soya->findById($id));
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }

        $this->set(compact('distinct_years'));
    }

    public function reportecomprafiltro($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorCompra");
        $years = $this->SoyaProductorCompra->getYears();
        $distinct_years = array();
        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Soya->findById($id));
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }

        $this->set(compact('distinct_years'));
    }
    public function reporteseleccionuno($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorDerivado');
        $years = $this->SoyaProductorDerivado->getYears();

        $distinct_years = array();
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
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
    } 
    public function reporteventafiltro($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorDerivado');
        $years = $this->SoyaProductorDerivado->getYears();
       
        $distinct_years = array();
        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Soya->findById($id));
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }

        $this->set(compact('distinct_years'));
    }
    public function produccionfiltro($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorProduccion');
        $years = $this->SoyaProductorProduccion->getYears();

        $distinct_years = array();
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
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
    } 
    public function produccionseleccion($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorProduccion');
        $years = $this->SoyaProductorProduccion->getYears();
        $distinct_years = array();
        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Soya->findById($id));
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
    }
    public function exportseleccion($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorProduccion');
        $years = $this->SoyaProductorProduccion->getYears();
        $distinct_years = array();
        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Soya->findById($id));
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
    }
    public function exportfiltro($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorProduccion');
        $years = $this->SoyaProductorProduccion->getYears();
        $distinct_years = array();
        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Soya->findById($id));
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
    }
    public function ventafiltro($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorProduccion');
        $years = $this->SoyaProductorProduccion->getYears();
        $distinct_years = array();
        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Soya->findById($id));
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
    }
    public function ventaseleccion($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel('SoyaProductorProduccion');
        $years = $this->SoyaProductorProduccion->getYears();
        $distinct_years = array();
        if (!$id) {
            $this->Session->setFlash('Porfavor provea un id de usuario');
            $this->redirect(array('action'=>'index'));
        }
        $this->set('datos', $user = $this->Soya->findById($id));
        if (!$user) {
            $this->Session->setFlash('El id proporcionado no es valido');
            $this->redirect(array('action'=>'index'));
        }
        if (!$this->request->data) {
            $this->request->data = $user;
        }
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
    }
    public function compaventa($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
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
    public function compavmes($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
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
    public function compavsemestre($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
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
    public function compavanual($id = null)
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorDerivado");
        $years = $this->SoyaProductorDerivado->getYears();
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
    public function compacompra($id = null)
    {
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
    public function compames($id = null)
    {
        $this->loadModel('Soya');
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
    public function graficas($id = null)
    {
        $this->loadModel('Soya');
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
    public function combinationcompra($id = null)
    {
        $this->loadModel('Soya');
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
        $GranoSoyakg=0;
        $GranoSoyatm=0;
        $GranoSoyadolar=0;
        $GranoSoyabs=0;
        $GranoSoyatotaldolar=0;
        $GranoSoyatotalbs=0;

        $GranoGirasolkg=0;
        $GranoGirasoltm=0;
        $GranoGirasoldolar=0;
        $GranoGirasolbs=0;
        $GranoGirasoltotaldolar=0;
        $GranoGirasoltotalbs=0;

        $GranoSoyakg1=0;
        $GranoSoyatm1=0;
        $GranoSoyadolar1=0;
        $GranoSoyabs1=0;
        $GranoSoyatotaldolar1=0;
        $GranoSoyatotalbs1=0;

        $GranoGirasolkg1=0;
        $GranoGirasoltm1=0;
        $GranoGirasoldolar1=0;
        $GranoGirasolbs1=0;
        $GranoGirasoltotaldolar1=0;
        $GranoGirasoltotalbs1=0;

        $count=0;
        $count1=0;
        $count2=0;
        $count3=0;
        foreach ($distinct_years as $var)  {  
            for ($i=1; $i <= 12 ; $i++) { 
            foreach ($this->data['SoyaProductorCompra'] as $soyaproductorcompra): 
            $year = strtotime($soyaproductorcompra['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$i) { 
                if (date("Y", $year)==$var) { 
                    if ($soyaproductorcompra['producto']=='GRANO DE SOYA') { 
                        $GranoSoyatm=$GranoSoyatm+$soyaproductorcompra['toneladas'];
                        $GranoSoyadolar=$GranoSoyadolar+$soyaproductorcompra['preciodolar'];
                        $GranoSoyatotaldolar=$GranoSoyatotaldolar+$soyaproductorcompra['total'];
                        $count++;
                    }
                    if ($soyaproductorcompra['producto']=='GRANO DE GIRASOL') { ?>    
                        <?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorcompra['toneladas'];?>
                        <?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorcompra['preciodolar'];?>
                        <?php $GranoGirasoltotaldolar=$GranoGirasoltotaldolar+$soyaproductorcompra['total'];?>
                        <?php $count1++;?>
                    <?php } ?>
                    
                <?php } ?>
            <?php } ?>
        <?php endforeach;?>
        <?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
        <?php 
            if($soyaproductorproduccion['operacion']=='Compra Grano'){
                $year = strtotime($soyaproductorproduccion['fecharegistro']);
                if (date("m", $year)==$i) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorproduccion['producto']=='GRANO DE SOYA') { ?>
                        <?php $GranoSoyakg1=$GranoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $GranoSoyatm1=$GranoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $GranoSoyadolar1=$GranoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $GranoSoyabs1=$GranoSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $GranoSoyatotaldolar1=$GranoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $GranoSoyatotalbs1=$GranoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                        <?php $count2++;?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='GRANO DE GIRASOL') { ?>
                        <?php $GranoGirasolkg1=$GranoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $GranoGirasoltm1=$GranoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $GranoGirasoldolar1=$GranoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $GranoGirasolbs1=$GranoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $GranoGirasoltotaldolar1=$GranoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $GranoGirasoltotalbs1=$GranoGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
                        <?php $count3++;
                        } 
                    } 
                }
            } 
        endforeach;  

            $SoyaMensual[] = $GranoSoyatm1;
            $SoyaDiario[] = $GranoSoyatm; 
            $GranoSoyakg=0;
            $GranoSoyatm=0;
            $GranoSoyadolar=0;
            $GranoSoyabs=0;
            $GranoSoyatotaldolar=0;
            $GranoSoyatotalbs=0;

            $GranoSoyakg1=0;
            $GranoSoyatm1=0;
            $GranoSoyadolar1=0;
            $GranoSoyabs1=0;
            $GranoSoyatotaldolar1=0;
            $GranoSoyatotalbs1=0;

            $GranoGirasolkg=0;
            $GranoGirasoltm=0;
            $GranoGirasoldolar=0;
            $GranoGirasolbs=0;
            $GranoGirasoltotaldolar=0;
            $GranoGirasoltotalbs=0;

            $GranoGirasolkg1=0;
            $GranoGirasoltm1=0;
            $GranoGirasoldolar1=0;
            $GranoGirasolbs1=0;
            $GranoGirasoltotaldolar1=0;
            $GranoGirasoltotalbs1=0;

            $count=0;
            $count1=0;
            $count2=0;
            $count3=0;
            }
        } 

        $janeData = array();
        $johnData = array();
        
        $janeData=$SoyaDiario;
        $johnData=$SoyaMensual;

        $a=array_sum($janeData);
        $b=array_sum($johnData);

        $avgData  = $SoyaDiario;
        $avdData  = $SoyaMensual;

        $pieData = array(   
                    array(
                        'name' => 'Diario',
                        'y' => $a,
                        'sliced' => true,
                        'selected' => true
                ),
            array('Mensual', $b)
            );
                
        $chartName = 'Combination Chart';
        $mychart = $this->HighCharts->create( $chartName,'column' );
    
        $this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'              => 'combowrapper',  // div to display chart inside
                    'chartWidth'            => 1200,
                    'chartHeight'           => 700,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,100),
                    'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),              
                    'title'             => 'Gráfica comparativa',
                    'subtitle'              => 'Cantidad comprada de soya',
                    'xAxisLabelsEnabled'        => TRUE,                
                    'xAxisCategories'           => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),                
                    'yAxisTitleText'        => 'Cantidad en (TM)',                                 
                    'enableAutoStep'        => FALSE,
                    'creditsEnabled'        => FALSE                        
                ) 
            );
    
        $janeSeries = $this->HighCharts->addChartSeries();
        $janeSeries->type = 'column';
        $janeSeries->addName('Diario')
            ->addData($janeData);

        $johnSeries = $this->HighCharts->addChartSeries();
        $johnSeries->type = 'column';
        $johnSeries->addName('Mensual')
            ->addData($johnData);       


        $avgSeries  = $this->HighCharts->addChartSeries();
        $avgSeries->type = 'spline';
        $avgSeries->addName('Diario')
            ->addData($avgData);

        $avdSeries  = $this->HighCharts->addChartSeries();
        $avdSeries->type = 'spline';
        $avdSeries->addName('Mensual')
            ->addData($avdData);

        $pieSeries  = $this->HighCharts->addChartSeries();
        $pieSeries->type = 'pie';
        $pieSeries->center = array(900,150);

        $pieSeries->size = 250;
        $pieSeries->showInLegend = FALSE;
        $pieSeries->addName('Total consumption')->addData($pieData);    

        $mychart->addSeries($janeSeries);
        $mychart->addSeries($johnSeries);


        $mychart->addSeries($avgSeries);
        $mychart->addSeries($avdSeries);
        $mychart->addSeries($pieSeries);    
    }

    
    public function selecciongraficaventas($id = null)
    {
        $this->loadModel('Soya');
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
    public function combinationventa($id = null)
    {
        $this->loadModel('Soya');
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

        $TortaSolventeSoyakg=0;
        $TortaSolventeSoyatm=0;
        $TortaSolventeSoyadolar=0;
        $TortaSolventeSoyabs=0;
        $TortaSolventeSoyatotaldolar=0;
        $TortaSolventeSoyatotalbs=0;


        $TortaSolventeGirasolkg=0;
        $TortaSolventeGirasoltm=0;
        $TortaSolventeGirasoldolar=0;
        $TortaSolventeGirasolbs=0;
        $TortaSolventeGirasoltotaldolar=0;
        $TortaSolventeGirasoltotalbs=0;

        $HarinaIntegralSoyakg=0;
        $HarinaIntegralSoyatm=0;
        $HarinaIntegralSoyadolar=0;
        $HarinaIntegralSoyabs=0;
        $HarinaIntegralSoyatotaldolar=0;
        $HarinaIntegralSoyatotalbs=0;

        $HarinaIntegralGirasolkg=0;
        $HarinaIntegralGirasoltm=0;
        $HarinaIntegralGirasoldolar=0;
        $HarinaIntegralGirasolbs=0;
        $HarinaIntegralGirasoltotaldolar=0;
        $HarinaIntegralGirasoltotalbs=0;

        $CascarillaSoyakg=0;
        $CascarillaSoyatm=0;
        $CascarillaSoyadolar=0;
        $CascarillaSoyabs=0;
        $CascarillaSoyatotaldolar=0;
        $CascarillaSoyatotalbs=0;

        $CascarillaGirasolkg=0;
        $CascarillaGirasoltm=0;
        $CascarillaGirasoldolar=0;
        $CascarillaGirasolbs=0;
        $CascarillaGirasoltotaldolar=0;
        $CascarillaGirasoltotalbs=0;

        $GranoSoyakg=0;
        $GranoSoyatm=0;
        $GranoSoyadolar=0;
        $GranoSoyabs=0;
        $GranoSoyatotaldolar=0;
        $GranoSoyatotalbs=0;

        $GranoGirasolkg=0;
        $GranoGirasoltm=0;
        $GranoGirasoldolar=0;
        $GranoGirasolbs=0;
        $GranoGirasoltotaldolar=0;
        $GranoGirasoltotalbs=0;


        $AceiteRefinadoSoyakg=0;
        $AceiteRefinadoSoyatm=0;
        $AceiteRefinadoSoyadolar=0;
        $AceiteRefinadoSoyabs=0;
        $AceiteRefinadoSoyatotaldolar=0;
        $AceiteRefinadoSoyatotalbs=0;
        $AceiteCrudoSoyakg=0;
        $AceiteCrudoSoyatm=0;
        $AceiteCrudoSoyadolar=0;
        $AceiteCrudoSoyabs=0;
        $AceiteCrudoSoyatotaldolar=0;
        $AceiteCrudoSoyatotalbs=0;

        $AceiteRefinadoGirasolkg=0;
        $AceiteRefinadoGirasoltm=0;
        $AceiteRefinadoGirasoldolar=0;
        $AceiteRefinadoGirasolbs=0;
        $AceiteRefinadoGirasoltotaldolar=0;
        $AceiteRefinadoGirasoltotalbs=0;

        $AceiteCrudoGirasolkg=0;
        $AceiteCrudoGirasoltm=0;
        $AceiteCrudoGirasoldolar=0;
        $AceiteCrudoGirasolbs=0;
        $AceiteCrudoGirasoltotaldolar=0;
        $AceiteCrudoGirasoltotalbs=0;

        $tortasoya=array();
        $cascarillasoya=array();
        $harinasoya=array();
        $aceiterefisoya=array();
        $aceitecrudosoya=array();

        $tortagirasol=array();
        $cascarillagirasol=array();
        $harinagirasol=array();
        $aceiterefigirasol=array();
        $aceitecrudogirasol=array();

    foreach ($distinct_years as $var)  { ?>
    <?php for ($i=1; $i <= 12 ; $i++) { ?>
        <?php foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): ?>
            <?php
            $year = strtotime($soyaproductorderivado['fecharegistro']);
             if (date("m", $year)==$i) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE SOYA') { ?>
                        <?php $TortaSolventeSoyakg=$TortaSolventeSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $TortaSolventeSoyatm=$TortaSolventeSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $TortaSolventeSoyadolar=$TortaSolventeSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $TortaSolventeSoyabs=$TortaSolventeSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $TortaSolventeSoyatotaldolar=$TortaSolventeSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $TortaSolventeSoyatotalbs=$TortaSolventeSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE GIRASOL') { ?>
                        
                        <?php $TortaSolventeGirasolkg=$TortaSolventeGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $TortaSolventeGirasoltm=$TortaSolventeGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $TortaSolventeGirasoldolar=$TortaSolventeGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $TortaSolventeGirasolbs=$TortaSolventeGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $TortaSolventeGirasoltotaldolar=$TortaSolventeGirasolbs+$soyaproductorderivado['totaldolar'];?>
                        <?php $TortaSolventeGirasoltotalbs=$TortaSolventeGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
                        
                        <?php $HarinaIntegralSoyakg=$HarinaIntegralSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $HarinaIntegralSoyatm=$HarinaIntegralSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $HarinaIntegralSoyadolar=$HarinaIntegralSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $HarinaIntegralSoyabs=$HarinaIntegralSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $HarinaIntegralSoyatotaldolar=$HarinaIntegralSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $HarinaIntegralSoyatotalbs=$HarinaIntegralSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE GIRASOL') { ?>
                        
                        <?php $HarinaIntegralGirasolkg=$HarinaIntegralGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $HarinaIntegralGirasoltm=$HarinaIntegralGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $HarinaIntegralGirasoldolar=$HarinaIntegralGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $HarinaIntegralGirasolbs=$HarinaIntegralGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $HarinaIntegralGirasoltotaldolar=$HarinaIntegralGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $HarinaIntegralGirasoltotalbs=$HarinaIntegralGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='CASCARILLA DE SOYA') { ?>
                        
                        <?php $CascarillaSoyakg=$CascarillaSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $CascarillaSoyatm=$CascarillaSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $CascarillaSoyadolar=$CascarillaSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $CascarillaSoyabs=$CascarillaSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $CascarillaSoyatotaldolar=$CascarillaSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $CascarillaSoyatotalbs=$CascarillaSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='CASCARILLA DE GIRASOL') { ?>
                        
                        <?php $CascarillaGirasolkg=$CascarillaGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $CascarillaGirasoltm=$CascarillaGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $CascarillaGirasoldolar=$CascarillaGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $CascarillaGirasolbs=$CascarillaGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $CascarillaGirasoltotaldolar=$CascarillaGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $CascarillaGirasoltotalbs=$CascarillaGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='GRANO DE SOYA') { ?>
                        
                        <?php $GranoSoyakg=$GranoSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $GranoSoyatm=$GranoSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $GranoSoyabs=$GranoSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $GranoSoyatotaldolar=$CascarillaGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $GranoSoyatotalbs=$GranoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='GRANO DE GIRASOL') { ?>
                    
                        <?php $GranoGirasolkg=$GranoGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $GranoGirasolbs=$GranoGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $GranoGirasoltotaldolar=$GranoGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $GranoGirasoltotalbs=$GranoGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA REFINADO') { ?>
                    
                        <?php $AceiteRefinadoSoyakg=$AceiteRefinadoSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteRefinadoSoyatm=$AceiteRefinadoSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteRefinadoSoyadolar=$AceiteRefinadoSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteRefinadoSoyabs=$AceiteRefinadoSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteRefinadoSoyatotaldolar=$AceiteRefinadoSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteRefinadoSoyatotalbs=$AceiteRefinadoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA CRUDO') { ?>
                        
                        <?php $AceiteCrudoSoyakg=$AceiteCrudoSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteCrudoSoyatm=$AceiteCrudoSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteCrudoSoyadolar=$AceiteCrudoSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteCrudoSoyabs=$AceiteCrudoSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteCrudoSoyatotaldolar=$AceiteCrudoSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteCrudoSoyatotalbs=$AceiteCrudoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL REFINADO') { ?>
                    
                        <?php $AceiteRefinadoGirasolkg=$AceiteRefinadoGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteRefinadoGirasoltm=$AceiteRefinadoGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteRefinadoGirasoldolar=$AceiteRefinadoGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteRefinadoGirasolbs=$AceiteRefinadoGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteRefinadoGirasoltotaldolar=$AceiteRefinadoGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteRefinadoGirasoltotalbs=$AceiteRefinadoGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL CRUDO') { ?>
                        
                        <?php $AceiteCrudoGirasolkg=$AceiteCrudoGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteCrudoGirasoltm=$AceiteCrudoGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteCrudoGirasoldolar=$AceiteCrudoGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteCrudoGirasolbs=$AceiteCrudoGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteCrudoGirasoltotaldolar=$AceiteCrudoGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteCrudoGirasoltotalbs=$AceiteCrudoGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php endforeach;

            $tortasoya[] = $TortaSolventeSoyatm;
            $cascarillasoya[] = $HarinaIntegralSoyakg;
            $harinasoya[] = $CascarillaSoyatm;
            $aceiterefisoya[] = $AceiteRefinadoSoyatm;
            $aceitecrudosoya[] = $AceiteCrudoSoyatm;

            $tortagirasol[] = $TortaSolventeGirasoltm;
            $cascarillagirasol[] = $HarinaIntegralGirasoltm;
            $harinagirasol[] = $CascarillaGirasoltm;
            $aceiterefigirasol[] = $AceiteRefinadoGirasoltm;
            $aceitecrudogirasol[] = $AceiteCrudoGirasoltm;


            $TortaSolventeSoyakg=0;
            $TortaSolventeSoyatm=0;
            $TortaSolventeSoyadolar=0;
            $TortaSolventeSoyabs=0;
            $TortaSolventeSoyatotaldolar=0;
            $TortaSolventeSoyatotalbs=0;
 
            $HarinaIntegralSoyakg=0;
            $HarinaIntegralSoyatm=0;
            $HarinaIntegralSoyadolar=0;
            $HarinaIntegralSoyabs=0;
            $HarinaIntegralSoyatotaldolar=0;
            $HarinaIntegralSoyatotalbs=0;

            $CascarillaSoyakg=0;
            $CascarillaSoyatm=0;
            $CascarillaSoyadolar=0;
            $CascarillaSoyabs=0;
            $CascarillaSoyatotaldolar=0;
            $CascarillaSoyatotalbs=0;

            $GranoSoyakg=0;
            $GranoSoyatm=0;
            $GranoSoyadolar=0;
            $GranoSoyabs=0;
            $GranoSoyatotaldolar=0;
            $GranoSoyatotalbs=0;

            $AceiteRefinadoSoyakg=0;
            $AceiteRefinadoSoyatm=0;
            $AceiteRefinadoSoyadolar=0;
            $AceiteRefinadoSoyabs=0;
            $AceiteRefinadoSoyatotaldolar=0;
            $AceiteRefinadoSoyatotalbs=0;

            $AceiteCrudoSoyakg=0;
            $AceiteCrudoSoyatm=0;
            $AceiteCrudoSoyadolar=0;
            $AceiteCrudoSoyabs=0;
            $AceiteCrudoSoyatotaldolar=0;
            $AceiteCrudoSoyatotalbs=0;

            $TortaSolventeGirasolkg=0;
            $TortaSolventeGirasoltm=0;
            $TortaSolventeGirasoldolar=0;
            $TortaSolventeGirasolbs=0;
            $TortaSolventeGirasoltotaldolar=0;
            $TortaSolventeGirasoltotalbs=0;

            $HarinaIntegralGirasolkg=0;
            $HarinaIntegralGirasoltm=0;
            $HarinaIntegralGirasoldolar=0;
            $HarinaIntegralGirasolbs=0;
            $HarinaIntegralGirasoltotaldolar=0;
            $HarinaIntegralGirasoltotalbs=0;

            $CascarillaGirasolkg=0;
            $CascarillaGirasoltm=0;
            $CascarillaGirasoldolar=0;
            $CascarillaGirasolbs=0;
            $CascarillaGirasoltotaldolar=0;
            $CascarillaGirasoltotalbs=0;

            $GranoGirasolkg=0;
            $GranoGirasoltm=0;
            $GranoGirasoldolar=0;
            $GranoGirasolbs=0;
            $GranoGirasoltotaldolar=0;
            $GranoGirasoltotalbs=0;

            $AceiteRefinadoGirasolkg=0;
            $AceiteRefinadoGirasoltm=0;
            $AceiteRefinadoGirasoldolar=0;
            $AceiteRefinadoGirasolbs=0;
            $AceiteRefinadoGirasoltotaldolar=0;
            $AceiteRefinadoGirasoltotalbs=0;

            $AceiteCrudoGirasolkg=0;
            $AceiteCrudoGirasoltm=0;
            $AceiteCrudoGirasoldolar=0;
            $AceiteCrudoGirasolbs=0;
            $AceiteCrudoGirasoltotaldolar=0;
            $AceiteCrudoGirasoltotalbs=0;
            } 
        } 


            $line1Data  = $tortasoya;
            $line2Data  = $cascarillasoya;
            $line3Data  = $harinasoya;
            $line4Data  = $aceiterefisoya;
            $line5Data  = $aceitecrudosoya;

            $line6Data  = $tortagirasol;
            $line7Data  = $cascarillagirasol;
            $line8Data  = $harinagirasol;
            $line9Data  = $aceiterefigirasol;
            $line10Data  = $aceitecrudogirasol;


            $a=array_sum($tortasoya);
            $b=array_sum($cascarillasoya);
            $c=array_sum($harinasoya);
            $d=array_sum($aceiterefisoya);
            $e=array_sum($aceitecrudosoya);

            $f=array_sum($tortagirasol);
            $g=array_sum($cascarillagirasol); 
            $h=array_sum($harinagirasol);
            $i=array_sum($aceiterefigirasol);
            $j=array_sum($aceitecrudogirasol);
            

            $pieData = array(   
                    array(
                        'name' => 'Torta solverte de soya',
                        'y' => $a,
                        'sliced' => true,
                        'selected' => true
                ),
            array('Harina integral de soya', $b),
            array('Cascarilla de soya', $c),
            array('Aceite Refinado de soya', $e),
            array('Aceite crudo de soya', $d),
            array('Torta solvente de girasol', $f),
            array('Harina de girasol', $g),
            array('Cascarilla de girasol', $h),
            array('Aceite Refinado de girasol', $i),
            array('Aceite Crudo de girasol', $j)
            );
                
            $chartName = 'Combination Chart';
            $mychart = $this->HighCharts->create( $chartName,'column' );
    
            $this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'              => 'combowrapper',  // div to display chart inside
                    'chartWidth'            => 1700,
                    'chartHeight'           => 700,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,300),
                    'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),              
                    'title'             => 'Tabla Comparativa',
                    'subtitle'              => 'Soya Compras',
                    'xAxisLabelsEnabled'        => TRUE,                
                    'xAxisCategories'           => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'
                                        ),                
                    'yAxisTitleText'        => 'Cantidad en (TM)',                                 
                    'enableAutoStep'        => FALSE,
                    'creditsEnabled'        => FALSE                        
                ) 
            );
            $tortasoyaSeries = $this->HighCharts->addChartSeries();
            $tortasoyaSeries->type = 'column';
            $tortasoyaSeries->addName('Torta solverte de soya')
            ->addData($tortasoya);


            $cascarillasoyaSeries = $this->HighCharts->addChartSeries();
            $cascarillasoyaSeries->type = 'column';
            $cascarillasoyaSeries->addName('Harina integral de soya')
            ->addData($cascarillasoya);

            $harinasoyaSeries = $this->HighCharts->addChartSeries();
            $harinasoyaSeries->type = 'column';
            $harinasoyaSeries->addName('Cascarilla de soya')
            ->addData($harinasoya);

            $aceiterefisoyaSeries = $this->HighCharts->addChartSeries();
            $aceiterefisoyaSeries->type = 'column';
            $aceiterefisoyaSeries->addName('Aceite Refinado de soya')
            ->addData($aceiterefisoya);

            $aceitecrudosoyaSeries = $this->HighCharts->addChartSeries();
            $aceitecrudosoyaSeries->type = 'column';
            $aceitecrudosoyaSeries->addName('Aceite crudo de soya')
            ->addData($aceitecrudosoya);




            $tortagirasolSeries = $this->HighCharts->addChartSeries();
            $tortagirasolSeries->type = 'column';
            $tortagirasolSeries->addName('Torta solvente de girasol')
            ->addData($tortagirasol);

            $cascarillagirasolSeries = $this->HighCharts->addChartSeries();
            $cascarillagirasolSeries->type = 'column';
            $cascarillagirasolSeries->addName('Harina de girasol')
            ->addData($cascarillagirasol);

            $harinagirasolSeries = $this->HighCharts->addChartSeries();
            $harinagirasolSeries->type = 'column';
            $harinagirasolSeries->addName('Cascarilla de girasol')
            ->addData($harinagirasol);

            $aceiterefigirasolSeries = $this->HighCharts->addChartSeries();
            $aceiterefigirasolSeries->type = 'column';
            $aceiterefigirasolSeries->addName('Aceite Refinado de girasol')
            ->addData($aceiterefigirasol);

            $aceitecrudogirasolSeries = $this->HighCharts->addChartSeries();
            $aceitecrudogirasolSeries->type = 'column';
            $aceitecrudogirasolSeries->addName('Aceite Crudo de girasol')
            ->addData($aceitecrudogirasol);   






            $line1Series  = $this->HighCharts->addChartSeries();
            $line1Series->type = 'spline';
            $line1Series->addName('Torta solverte de soya')
            ->addData($line1Data);

            $line2Series  = $this->HighCharts->addChartSeries();
            $line2Series->type = 'spline';
            $line2Series->addName('Harina integral de soya')
            ->addData($line2Data);

            $line3Series  = $this->HighCharts->addChartSeries();
            $line3Series->type = 'spline';
            $line3Series->addName('Cascarilla de soya')
            ->addData($line3Data);

            $line4Series  = $this->HighCharts->addChartSeries();
            $line4Series->type = 'spline';
            $line4Series->addName('Aceite Refinado de soya')
            ->addData($line4Data);

            $line5Series  = $this->HighCharts->addChartSeries();
            $line5Series->type = 'spline';
            $line5Series->addName('Aceite crudo de soya')
            ->addData($line5Data);



            $line6Series  = $this->HighCharts->addChartSeries();
            $line6Series->type = 'spline';
            $line6Series->addName('Torta solvente de girasol')
            ->addData($line6Data);

            $line7Series  = $this->HighCharts->addChartSeries();
            $line7Series->type = 'spline';
            $line7Series->addName('Harina integral de soya')
            ->addData($line7Data);

            $line8Series  = $this->HighCharts->addChartSeries();
            $line8Series->type = 'spline';
            $line8Series->addName('Cascarilla de girasol')
            ->addData($line8Data);

            $line9Series  = $this->HighCharts->addChartSeries();
            $line9Series->type = 'spline';
            $line9Series->addName('Aceite Refinado de girasol')
            ->addData($line9Data);

            $line10Series  = $this->HighCharts->addChartSeries();
            $line10Series->type = 'spline';
            $line10Series->addName('Aceite crudo de girasol')
            ->addData($line10Data);


            $pieSeries  = $this->HighCharts->addChartSeries();
            $pieSeries->type = 'pie';
            $pieSeries->center = array(900,150);

            $pieSeries->size = 250;
            $pieSeries->showInLegend = FALSE;
            $pieSeries->addName('Total consumption')->addData($pieData);               


            $mychart->addSeries($tortasoyaSeries);
            $mychart->addSeries($cascarillasoyaSeries);
            $mychart->addSeries($harinasoyaSeries);
            $mychart->addSeries($aceiterefisoyaSeries);
            $mychart->addSeries($aceitecrudosoyaSeries);
            
            $mychart->addSeries($tortagirasolSeries);
            $mychart->addSeries($cascarillagirasolSeries);
            $mychart->addSeries($harinagirasolSeries);
            $mychart->addSeries($aceiterefigirasolSeries);
            $mychart->addSeries($aceitecrudogirasolSeries);


            $mychart->addSeries($line1Series);
            $mychart->addSeries($line2Series);
            $mychart->addSeries($line3Series);
            $mychart->addSeries($line4Series);
            $mychart->addSeries($line5Series);
            
            $mychart->addSeries($line6Series);
            $mychart->addSeries($line7Series);
            $mychart->addSeries($line8Series);
            $mychart->addSeries($line9Series);
            $mychart->addSeries($line10Series);

            $mychart->addSeries($pieSeries);    
    }
    public function columnacompra($id = null)
    {
        $this->loadModel('Soya');
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
        $GranoSoyakg=0;
        $GranoSoyatm=0;
        $GranoSoyadolar=0;
        $GranoSoyabs=0;
        $GranoSoyatotaldolar=0;
        $GranoSoyatotalbs=0;

        $GranoGirasolkg=0;
        $GranoGirasoltm=0;
        $GranoGirasoldolar=0;
        $GranoGirasolbs=0;
        $GranoGirasoltotaldolar=0;
        $GranoGirasoltotalbs=0;

        $GranoSoyakg1=0;
        $GranoSoyatm1=0;
        $GranoSoyadolar1=0;
        $GranoSoyabs1=0;
        $GranoSoyatotaldolar1=0;
        $GranoSoyatotalbs1=0;

        $GranoGirasolkg1=0;
        $GranoGirasoltm1=0;
        $GranoGirasoldolar1=0;
        $GranoGirasolbs1=0;
        $GranoGirasoltotaldolar1=0;
        $GranoGirasoltotalbs1=0;

        $count=0;
        $count1=0;
        $count2=0;
        $count3=0;
    foreach ($distinct_years as $var)  {  
        for ($i=1; $i <= 12 ; $i++) { 
                     foreach ($this->data['SoyaProductorCompra'] as $soyaproductorcompra): 
            $year = strtotime($soyaproductorcompra['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$i) { 
                if (date("Y", $year)==$var) { 
                    if ($soyaproductorcompra['producto']=='GRANO DE SOYA') { 
                        $GranoSoyatm=$GranoSoyatm+$soyaproductorcompra['toneladas'];
                        $GranoSoyadolar=$GranoSoyadolar+$soyaproductorcompra['preciodolar'];
                        $GranoSoyatotaldolar=$GranoSoyatotaldolar+$soyaproductorcompra['total'];
                        $count++;
                    }
                    if ($soyaproductorcompra['producto']=='GRANO DE GIRASOL') { ?>    
                        <?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorcompra['toneladas'];?>
                        <?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorcompra['preciodolar'];?>
                        <?php $GranoGirasoltotaldolar=$GranoGirasoltotaldolar+$soyaproductorcompra['total'];?>
                        <?php $count1++;?>
                    <?php } ?>
                    
                <?php } ?>
            <?php } ?>
        <?php endforeach;?>
        <?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
        <?php 
            if($soyaproductorproduccion['operacion']=='Compra Grano'){
                $year = strtotime($soyaproductorproduccion['fecharegistro']);
                if (date("m", $year)==$i) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorproduccion['producto']=='GRANO DE SOYA') { ?>
                        <?php $GranoSoyakg1=$GranoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $GranoSoyatm1=$GranoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $GranoSoyadolar1=$GranoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $GranoSoyabs1=$GranoSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $GranoSoyatotaldolar1=$GranoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $GranoSoyatotalbs1=$GranoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                        <?php $count2++;?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='GRANO DE GIRASOL') { ?>
                        <?php $GranoGirasolkg1=$GranoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $GranoGirasoltm1=$GranoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $GranoGirasoldolar1=$GranoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $GranoGirasolbs1=$GranoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $GranoGirasoltotaldolar1=$GranoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $GranoGirasoltotalbs1=$GranoGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
                        <?php $count3++;
                        } 
                    } 
                }
            } 
        endforeach;  
            $SoyaMensual[] = $GranoSoyatm1;
            $SoyaDiario[] = $GranoSoyatm; 

            $GranoSoyakg=0;
            $GranoSoyatm=0;
            $GranoSoyadolar=0;
            $GranoSoyabs=0;
            $GranoSoyatotaldolar=0;
            $GranoSoyatotalbs=0;

            $GranoSoyakg1=0;
            $GranoSoyatm1=0;
            $GranoSoyadolar1=0;
            $GranoSoyabs1=0;
            $GranoSoyatotaldolar1=0;
            $GranoSoyatotalbs1=0;

            $GranoGirasolkg=0;
            $GranoGirasoltm=0;
            $GranoGirasoldolar=0;
            $GranoGirasolbs=0;
            $GranoGirasoltotaldolar=0;
            $GranoGirasoltotalbs=0;

            $GranoGirasolkg1=0;
            $GranoGirasoltm1=0;
            $GranoGirasoldolar1=0;
            $GranoGirasolbs1=0;
            $GranoGirasoltotaldolar1=0;
            $GranoGirasoltotalbs1=0;

            $count=0;
            $count1=0;
            $count2=0;
            $count3=0;
            }
        } 

        $janeData = array();
        $johnData = array();

        $chartName = 'Stacked Grouped Column Chart';

        $mychart = $this->HighCharts->create( $chartName, 'column' );

        $this->HighCharts->setChartParams(
            $chartName,
            array(
                'renderTo'          => 'columnwrapper',  // div to display chart inside
                'options3dEnabled' => true, //not found
                'chartWidth'            => 1000,
                'chartHeight'           => 750,
                'chartBackgroundColorLinearGradient'    => array(0,0,0,300),
                'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),
                'title'             => 'Gráfica comparativa',
                'subtitle'              => 'Cantidad comprada de soya',
                'xAxisLabelsEnabled'        => TRUE,
                'xAxisCategories'           => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),
                'yAxisTitleText'        => 'Cantidad en (TM)',
                'enableAutoStep'        => FALSE,
                'creditsEnabled'        => FALSE,
                'plotOptionsSeriesStacking'     => 'normal'

            )
        );

        $johnSeries = $this->HighCharts->addChartSeries();
        $janeSeries = $this->HighCharts->addChartSeries();

        $johnSeries->addName('Mensual')
            ->addData($SoyaMensual)
            ->stack = '1';

        $janeSeries->addName('Diario')
            ->addData($SoyaDiario)
            ->stack = '2';
        $mychart->addSeries($johnSeries);
        $mychart->addSeries($janeSeries);
    }

    public function columnaventa($id = null)
    {
        $this->loadModel('Soya');
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

        $TortaSolventeSoyakg=0;
        $TortaSolventeSoyatm=0;
        $TortaSolventeSoyadolar=0;
        $TortaSolventeSoyabs=0;
        $TortaSolventeSoyatotaldolar=0;
        $TortaSolventeSoyatotalbs=0;


        $TortaSolventeGirasolkg=0;
        $TortaSolventeGirasoltm=0;
        $TortaSolventeGirasoldolar=0;
        $TortaSolventeGirasolbs=0;
        $TortaSolventeGirasoltotaldolar=0;
        $TortaSolventeGirasoltotalbs=0;

        $HarinaIntegralSoyakg=0;
        $HarinaIntegralSoyatm=0;
        $HarinaIntegralSoyadolar=0;
        $HarinaIntegralSoyabs=0;
        $HarinaIntegralSoyatotaldolar=0;
        $HarinaIntegralSoyatotalbs=0;

        $HarinaIntegralGirasolkg=0;
        $HarinaIntegralGirasoltm=0;
        $HarinaIntegralGirasoldolar=0;
        $HarinaIntegralGirasolbs=0;
        $HarinaIntegralGirasoltotaldolar=0;
        $HarinaIntegralGirasoltotalbs=0;

        $CascarillaSoyakg=0;
        $CascarillaSoyatm=0;
        $CascarillaSoyadolar=0;
        $CascarillaSoyabs=0;
        $CascarillaSoyatotaldolar=0;
        $CascarillaSoyatotalbs=0;

        $CascarillaGirasolkg=0;
        $CascarillaGirasoltm=0;
        $CascarillaGirasoldolar=0;
        $CascarillaGirasolbs=0;
        $CascarillaGirasoltotaldolar=0;
        $CascarillaGirasoltotalbs=0;

        $GranoSoyakg=0;
        $GranoSoyatm=0;
        $GranoSoyadolar=0;
        $GranoSoyabs=0;
        $GranoSoyatotaldolar=0;
        $GranoSoyatotalbs=0;

        $GranoGirasolkg=0;
        $GranoGirasoltm=0;
        $GranoGirasoldolar=0;
        $GranoGirasolbs=0;
        $GranoGirasoltotaldolar=0;
        $GranoGirasoltotalbs=0;


        $AceiteRefinadoSoyakg=0;
        $AceiteRefinadoSoyatm=0;
        $AceiteRefinadoSoyadolar=0;
        $AceiteRefinadoSoyabs=0;
        $AceiteRefinadoSoyatotaldolar=0;
        $AceiteRefinadoSoyatotalbs=0;
        $AceiteCrudoSoyakg=0;
        $AceiteCrudoSoyatm=0;
        $AceiteCrudoSoyadolar=0;
        $AceiteCrudoSoyabs=0;
        $AceiteCrudoSoyatotaldolar=0;
        $AceiteCrudoSoyatotalbs=0;

        $AceiteRefinadoGirasolkg=0;
        $AceiteRefinadoGirasoltm=0;
        $AceiteRefinadoGirasoldolar=0;
        $AceiteRefinadoGirasolbs=0;
        $AceiteRefinadoGirasoltotaldolar=0;
        $AceiteRefinadoGirasoltotalbs=0;

        $AceiteCrudoGirasolkg=0;
        $AceiteCrudoGirasoltm=0;
        $AceiteCrudoGirasoldolar=0;
        $AceiteCrudoGirasolbs=0;
        $AceiteCrudoGirasoltotaldolar=0;
        $AceiteCrudoGirasoltotalbs=0;

        $tortasoya=array();
        $cascarillasoya=array();
        $harinasoya=array();
        $aceiterefisoya=array();
        $aceitecrudosoya=array();

        $tortagirasol=array();
        $cascarillagirasol=array();
        $harinagirasol=array();
        $aceiterefigirasol=array();
        $aceitecrudogirasol=array();

    foreach ($distinct_years as $var)  { ?>
    <?php for ($i=1; $i <= 12 ; $i++) { ?>
        <?php foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): ?>
            <?php
            $year = strtotime($soyaproductorderivado['fecharegistro']);
             if (date("m", $year)==$i) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE SOYA') { ?>
                        <?php $TortaSolventeSoyakg=$TortaSolventeSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $TortaSolventeSoyatm=$TortaSolventeSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $TortaSolventeSoyadolar=$TortaSolventeSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $TortaSolventeSoyabs=$TortaSolventeSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $TortaSolventeSoyatotaldolar=$TortaSolventeSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $TortaSolventeSoyatotalbs=$TortaSolventeSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE GIRASOL') { ?>
                        
                        <?php $TortaSolventeGirasolkg=$TortaSolventeGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $TortaSolventeGirasoltm=$TortaSolventeGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $TortaSolventeGirasoldolar=$TortaSolventeGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $TortaSolventeGirasolbs=$TortaSolventeGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $TortaSolventeGirasoltotaldolar=$TortaSolventeGirasolbs+$soyaproductorderivado['totaldolar'];?>
                        <?php $TortaSolventeGirasoltotalbs=$TortaSolventeGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
                        
                        <?php $HarinaIntegralSoyakg=$HarinaIntegralSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $HarinaIntegralSoyatm=$HarinaIntegralSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $HarinaIntegralSoyadolar=$HarinaIntegralSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $HarinaIntegralSoyabs=$HarinaIntegralSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $HarinaIntegralSoyatotaldolar=$HarinaIntegralSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $HarinaIntegralSoyatotalbs=$HarinaIntegralSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE GIRASOL') { ?>
                        
                        <?php $HarinaIntegralGirasolkg=$HarinaIntegralGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $HarinaIntegralGirasoltm=$HarinaIntegralGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $HarinaIntegralGirasoldolar=$HarinaIntegralGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $HarinaIntegralGirasolbs=$HarinaIntegralGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $HarinaIntegralGirasoltotaldolar=$HarinaIntegralGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $HarinaIntegralGirasoltotalbs=$HarinaIntegralGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='CASCARILLA DE SOYA') { ?>
                        
                        <?php $CascarillaSoyakg=$CascarillaSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $CascarillaSoyatm=$CascarillaSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $CascarillaSoyadolar=$CascarillaSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $CascarillaSoyabs=$CascarillaSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $CascarillaSoyatotaldolar=$CascarillaSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $CascarillaSoyatotalbs=$CascarillaSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='CASCARILLA DE GIRASOL') { ?>
                        
                        <?php $CascarillaGirasolkg=$CascarillaGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $CascarillaGirasoltm=$CascarillaGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $CascarillaGirasoldolar=$CascarillaGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $CascarillaGirasolbs=$CascarillaGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $CascarillaGirasoltotaldolar=$CascarillaGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $CascarillaGirasoltotalbs=$CascarillaGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='GRANO DE SOYA') { ?>
                        
                        <?php $GranoSoyakg=$GranoSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $GranoSoyatm=$GranoSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $GranoSoyabs=$GranoSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $GranoSoyatotaldolar=$CascarillaGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $GranoSoyatotalbs=$GranoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='GRANO DE GIRASOL') { ?>
                    
                        <?php $GranoGirasolkg=$GranoGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $GranoGirasolbs=$GranoGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $GranoGirasoltotaldolar=$GranoGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $GranoGirasoltotalbs=$GranoGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA REFINADO') { ?>
                    
                        <?php $AceiteRefinadoSoyakg=$AceiteRefinadoSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteRefinadoSoyatm=$AceiteRefinadoSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteRefinadoSoyadolar=$AceiteRefinadoSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteRefinadoSoyabs=$AceiteRefinadoSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteRefinadoSoyatotaldolar=$AceiteRefinadoSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteRefinadoSoyatotalbs=$AceiteRefinadoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA CRUDO') { ?>
                        
                        <?php $AceiteCrudoSoyakg=$AceiteCrudoSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteCrudoSoyatm=$AceiteCrudoSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteCrudoSoyadolar=$AceiteCrudoSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteCrudoSoyabs=$AceiteCrudoSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteCrudoSoyatotaldolar=$AceiteCrudoSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteCrudoSoyatotalbs=$AceiteCrudoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL REFINADO') { ?>
                    
                        <?php $AceiteRefinadoGirasolkg=$AceiteRefinadoGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteRefinadoGirasoltm=$AceiteRefinadoGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteRefinadoGirasoldolar=$AceiteRefinadoGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteRefinadoGirasolbs=$AceiteRefinadoGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteRefinadoGirasoltotaldolar=$AceiteRefinadoGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteRefinadoGirasoltotalbs=$AceiteRefinadoGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL CRUDO') { ?>
                        
                        <?php $AceiteCrudoGirasolkg=$AceiteCrudoGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteCrudoGirasoltm=$AceiteCrudoGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteCrudoGirasoldolar=$AceiteCrudoGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteCrudoGirasolbs=$AceiteCrudoGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteCrudoGirasoltotaldolar=$AceiteCrudoGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteCrudoGirasoltotalbs=$AceiteCrudoGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php endforeach;

            $tortasoya[] = $TortaSolventeSoyatm;
            $cascarillasoya[] = $HarinaIntegralSoyakg;
            $harinasoya[] = $CascarillaSoyatm;
            $aceiterefisoya[] = $AceiteRefinadoSoyatm;
            $aceitecrudosoya[] = $AceiteCrudoSoyatm;

            $tortagirasol[] = $TortaSolventeGirasoltm;
            $cascarillagirasol[] = $HarinaIntegralGirasoltm;
            $harinagirasol[] = $CascarillaGirasoltm;
            $aceiterefigirasol[] = $AceiteRefinadoGirasoltm;
            $aceitecrudogirasol[] = $AceiteCrudoGirasoltm;


            $TortaSolventeSoyakg=0;
            $TortaSolventeSoyatm=0;
            $TortaSolventeSoyadolar=0;
            $TortaSolventeSoyabs=0;
            $TortaSolventeSoyatotaldolar=0;
            $TortaSolventeSoyatotalbs=0;
 
            $HarinaIntegralSoyakg=0;
            $HarinaIntegralSoyatm=0;
            $HarinaIntegralSoyadolar=0;
            $HarinaIntegralSoyabs=0;
            $HarinaIntegralSoyatotaldolar=0;
            $HarinaIntegralSoyatotalbs=0;

            $CascarillaSoyakg=0;
            $CascarillaSoyatm=0;
            $CascarillaSoyadolar=0;
            $CascarillaSoyabs=0;
            $CascarillaSoyatotaldolar=0;
            $CascarillaSoyatotalbs=0;

            $GranoSoyakg=0;
            $GranoSoyatm=0;
            $GranoSoyadolar=0;
            $GranoSoyabs=0;
            $GranoSoyatotaldolar=0;
            $GranoSoyatotalbs=0;

            $AceiteRefinadoSoyakg=0;
            $AceiteRefinadoSoyatm=0;
            $AceiteRefinadoSoyadolar=0;
            $AceiteRefinadoSoyabs=0;
            $AceiteRefinadoSoyatotaldolar=0;
            $AceiteRefinadoSoyatotalbs=0;

            $AceiteCrudoSoyakg=0;
            $AceiteCrudoSoyatm=0;
            $AceiteCrudoSoyadolar=0;
            $AceiteCrudoSoyabs=0;
            $AceiteCrudoSoyatotaldolar=0;
            $AceiteCrudoSoyatotalbs=0;

            $TortaSolventeGirasolkg=0;
            $TortaSolventeGirasoltm=0;
            $TortaSolventeGirasoldolar=0;
            $TortaSolventeGirasolbs=0;
            $TortaSolventeGirasoltotaldolar=0;
            $TortaSolventeGirasoltotalbs=0;

            $HarinaIntegralGirasolkg=0;
            $HarinaIntegralGirasoltm=0;
            $HarinaIntegralGirasoldolar=0;
            $HarinaIntegralGirasolbs=0;
            $HarinaIntegralGirasoltotaldolar=0;
            $HarinaIntegralGirasoltotalbs=0;

            $CascarillaGirasolkg=0;
            $CascarillaGirasoltm=0;
            $CascarillaGirasoldolar=0;
            $CascarillaGirasolbs=0;
            $CascarillaGirasoltotaldolar=0;
            $CascarillaGirasoltotalbs=0;

            $GranoGirasolkg=0;
            $GranoGirasoltm=0;
            $GranoGirasoldolar=0;
            $GranoGirasolbs=0;
            $GranoGirasoltotaldolar=0;
            $GranoGirasoltotalbs=0;

            $AceiteRefinadoGirasolkg=0;
            $AceiteRefinadoGirasoltm=0;
            $AceiteRefinadoGirasoldolar=0;
            $AceiteRefinadoGirasolbs=0;
            $AceiteRefinadoGirasoltotaldolar=0;
            $AceiteRefinadoGirasoltotalbs=0;

            $AceiteCrudoGirasolkg=0;
            $AceiteCrudoGirasoltm=0;
            $AceiteCrudoGirasoldolar=0;
            $AceiteCrudoGirasolbs=0;
            $AceiteCrudoGirasoltotaldolar=0;
            $AceiteCrudoGirasoltotalbs=0;
            } 
        } 


            $line1Data  = $tortasoya;
            $line2Data  = $cascarillasoya;
            $line3Data  = $harinasoya;
            $line4Data  = $aceiterefisoya;
            $line5Data  = $aceitecrudosoya;

            $line6Data  = $tortagirasol;
            $line7Data  = $cascarillagirasol;
            $line8Data  = $harinagirasol;
            $line9Data  = $aceiterefigirasol;
            $line10Data  = $aceitecrudogirasol;


            $a=array_sum($tortasoya);
            $b=array_sum($cascarillasoya);
            $c=array_sum($harinasoya);
            $d=array_sum($aceiterefisoya);
            $e=array_sum($aceitecrudosoya);

            $f=array_sum($tortagirasol);
            $g=array_sum($cascarillagirasol); 
            $h=array_sum($harinagirasol);
            $i=array_sum($aceiterefigirasol);
            $j=array_sum($aceitecrudogirasol);
            

        $chartName = 'Stacked Grouped Column Chart';

        $mychart = $this->HighCharts->create( $chartName, 'column' );

        $this->HighCharts->setChartParams(
            $chartName,
            array(
                'renderTo'          => 'columnwrapper',  // div to display chart inside
                'options3dEnabled' => true, //not found
                'chartWidth'            => 1700,
                'chartHeight'           => 750,
                'chartBackgroundColorLinearGradient'    => array(0,0,0,300),
                'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),
                'title'             => 'Tabla Comparativa',
                'subtitle'              => 'Soya Compras',
                'xAxisLabelsEnabled'        => TRUE,
                'xAxisCategories'           => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),
                'yAxisTitleText'        => 'Cantidad en (TM)',
                'enableAutoStep'        => FALSE,
                'creditsEnabled'        => FALSE,
                'plotOptionsSeriesStacking'     => 'normal'

            )
        );

            $tortasoyaSeries = $this->HighCharts->addChartSeries();
            $tortasoyaSeries->addName('Torta solverte de soya')
            ->addData($tortasoya)
            ->stack = 'Torta Solvente de Soya';

            $cascarillasoyaSeries = $this->HighCharts->addChartSeries();
            $cascarillasoyaSeries->addName('Harina integral de soya')
            ->addData($cascarillasoya)
            ->stack = 'Torta Solvente de Soya';

            $harinasoyaSeries = $this->HighCharts->addChartSeries();
            $harinasoyaSeries->addName('Cascarilla de soya')
            ->addData($harinasoya)
            ->stack = 'Torta Solvente de Soya';

            $aceiterefisoyaSeries = $this->HighCharts->addChartSeries();
            $aceiterefisoyaSeries->addName('Aceite Refinado de soya')
            ->addData($aceiterefisoya)
            ->stack = 'Torta Solvente de Soya';

            $aceitecrudosoyaSeries = $this->HighCharts->addChartSeries();
            $aceitecrudosoyaSeries->addName('Aceite crudo de soya')
            ->addData($aceitecrudosoya)
            ->stack = 'Torta Solvente de Soya';



            $tortagirasolSeries = $this->HighCharts->addChartSeries();
            $tortagirasolSeries->addName('Torta solvente de girasol')
            ->addData($tortagirasol)
            ->stack = 'Torta Solvente de girasol';

            $cascarillagirasolSeries = $this->HighCharts->addChartSeries();
            $cascarillagirasolSeries->addName('Harina de girasol')
            ->addData($cascarillagirasol)
            ->stack = 'Torta Solvente de girasol';

            $harinagirasolSeries = $this->HighCharts->addChartSeries();
            $harinagirasolSeries->addName('Cascarilla de girasol')
            ->addData($harinagirasol)
            ->stack = 'Torta Solvente de girasol';

            $aceiterefigirasolSeries = $this->HighCharts->addChartSeries();
            $aceiterefigirasolSeries->addName('Aceite Refinado de girasol')
            ->addData($aceiterefigirasol)
            ->stack = 'Torta Solvente de girasol';

            $aceitecrudogirasolSeries = $this->HighCharts->addChartSeries();
            $aceitecrudogirasolSeries->addName('Aceite Crudo de girasol')
            ->addData($aceitecrudogirasol)
            ->stack = 'Torta Solvente de girasol';            


            $mychart->addSeries($tortasoyaSeries);
            $mychart->addSeries($cascarillasoyaSeries);
            $mychart->addSeries($harinasoyaSeries);
            $mychart->addSeries($aceiterefisoyaSeries);
            $mychart->addSeries($aceitecrudosoyaSeries);
            
            $mychart->addSeries($tortagirasolSeries);
            $mychart->addSeries($cascarillagirasolSeries);
            $mychart->addSeries($harinagirasolSeries);
            $mychart->addSeries($aceiterefigirasolSeries);
            $mychart->addSeries($aceitecrudogirasolSeries);
    }

    public function areacompra($id = null)
    {
        $this->loadModel('Soya');
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
        $GranoSoyakg=0;
        $GranoSoyatm=0;
        $GranoSoyadolar=0;
        $GranoSoyabs=0;
        $GranoSoyatotaldolar=0;
        $GranoSoyatotalbs=0;

        $GranoGirasolkg=0;
        $GranoGirasoltm=0;
        $GranoGirasoldolar=0;
        $GranoGirasolbs=0;
        $GranoGirasoltotaldolar=0;
        $GranoGirasoltotalbs=0;

        $GranoSoyakg1=0;
        $GranoSoyatm1=0;
        $GranoSoyadolar1=0;
        $GranoSoyabs1=0;
        $GranoSoyatotaldolar1=0;
        $GranoSoyatotalbs1=0;

        $GranoGirasolkg1=0;
        $GranoGirasoltm1=0;
        $GranoGirasoldolar1=0;
        $GranoGirasolbs1=0;
        $GranoGirasoltotaldolar1=0;
        $GranoGirasoltotalbs1=0;

        $count=0;
        $count1=0;
        $count2=0;
        $count3=0;
    foreach ($distinct_years as $var)  {  
        for ($i=1; $i <= 12 ; $i++) { 
                      foreach ($this->data['SoyaProductorCompra'] as $soyaproductorcompra): 
            $year = strtotime($soyaproductorcompra['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$i) { 
                if (date("Y", $year)==$var) { 
                    if ($soyaproductorcompra['producto']=='GRANO DE SOYA') { 
                        $GranoSoyatm=$GranoSoyatm+$soyaproductorcompra['toneladas'];
                        $GranoSoyadolar=$GranoSoyadolar+$soyaproductorcompra['preciodolar'];
                        $GranoSoyatotaldolar=$GranoSoyatotaldolar+$soyaproductorcompra['total'];
                        $count++;
                    }
                    if ($soyaproductorcompra['producto']=='GRANO DE GIRASOL') { ?>    
                        <?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorcompra['toneladas'];?>
                        <?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorcompra['preciodolar'];?>
                        <?php $GranoGirasoltotaldolar=$GranoGirasoltotaldolar+$soyaproductorcompra['total'];?>
                        <?php $count1++;?>
                    <?php } ?>
                    
                <?php } ?>
            <?php } ?>
        <?php endforeach;?>
        <?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
        <?php 
            if($soyaproductorproduccion['operacion']=='Compra Grano'){
                $year = strtotime($soyaproductorproduccion['fecharegistro']);
                if (date("m", $year)==$i) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorproduccion['producto']=='GRANO DE SOYA') { ?>
                        <?php $GranoSoyakg1=$GranoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $GranoSoyatm1=$GranoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $GranoSoyadolar1=$GranoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $GranoSoyabs1=$GranoSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $GranoSoyatotaldolar1=$GranoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $GranoSoyatotalbs1=$GranoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                        <?php $count2++;?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='GRANO DE GIRASOL') { ?>
                        <?php $GranoGirasolkg1=$GranoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $GranoGirasoltm1=$GranoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $GranoGirasoldolar1=$GranoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $GranoGirasolbs1=$GranoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $GranoGirasoltotaldolar1=$GranoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $GranoGirasoltotalbs1=$GranoGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
                        <?php $count3++;
                        } 
                    } 
                }
            } 
        endforeach;  
            $SoyaMensual[] = $GranoSoyatm1;
            $SoyaDiario[] = $GranoSoyatm; 

            $GranoSoyakg=0;
            $GranoSoyatm=0;
            $GranoSoyadolar=0;
            $GranoSoyabs=0;
            $GranoSoyatotaldolar=0;
            $GranoSoyatotalbs=0;

            $GranoSoyakg1=0;
            $GranoSoyatm1=0;
            $GranoSoyadolar1=0;
            $GranoSoyabs1=0;
            $GranoSoyatotaldolar1=0;
            $GranoSoyatotalbs1=0;

            $GranoGirasolkg=0;
            $GranoGirasoltm=0;
            $GranoGirasoldolar=0; 
            $GranoGirasolbs=0;
            $GranoGirasoltotaldolar=0;
            $GranoGirasoltotalbs=0;

            $GranoGirasolkg1=0;
            $GranoGirasoltm1=0;
            $GranoGirasoldolar1=0;
            $GranoGirasolbs1=0;
            $GranoGirasoltotaldolar1=0;
            $GranoGirasoltotalbs1=0;

            $count=0;
            $count1=0;
            $count2=0;
            $count3=0;
            }
        } 

        $janeData = array();
        $johnData = array();


        $chartName = 'Area Chart';
        $mychart = $this->HighCharts->create( $chartName, 'area' );
        $this->HighCharts->setChartParams(
                        $chartName,
                        array(
                                'renderTo'              => 'areawrapper',  // div to display chart inside
                                'chartWidth'                => 1400,
                                'chartHeight'               => 700,
                                'chartMarginTop'            => 60,
                                'chartMarginLeft'           => 90,
                                'chartMarginRight'          => 30,
                                'chartMarginBottom'         => 110,
                                'chartSpacingRight'         => 10,
                                'chartSpacingBottom'            => 15,
                                'chartSpacingLeft'          => 0,
                                'chartAlignTicks'           => FALSE,
                                'chartBackgroundColorLinearGradient'    => array(0,0,0,300),
                                'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

                                'title'                 => 'Gráfica comparativa',
                                'titleAlign'                => 'left',
                                'titleFloating'             => TRUE,
                                'titleStyleFont'            => '18px Metrophobic, Arial, sans-serif',
                                'titleStyleColor'           => '#0099ff',
                                'titleX'                => 20,
                                'titleY'                => 20,

                                'legendEnabled'             => TRUE,
                                'legendLayout'              => 'horizontal',
                                'legendAlign'               => 'center',
                                'legendVerticalAlign '          => 'bottom',
                                'legendItemStyle'           => array('color' => '#222'),
                                'legendBackgroundColorLinearGradient'   => array(0,0,0,25),
                                'legendBackgroundColorStops' => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

                                'tooltipEnabled'            => FALSE,
                                // 'tooltipBackgroundColorLinearGradient' => array(0,0,0,50),   // triggers js error
                                // 'tooltipBackgroundColorStops' => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

                                //'plotOptionsLinePointStart'   => strtotime('-30 day') * 1000,
                                //'plotOptionsLinePointInterval'=> 24 * 3600 * 1000,

                                //'xAxisType'           => 'datetime',
                                //'xAxisTickInterval'       => 10,
                                //'xAxisStartOnTick'        => TRUE,
                                //'xAxisTickmarkPlacement'  => 'on',
                                //'xAxisTickLength'         => 10,
                                //'xAxisMinorTickLength'    => 5,

                                'xAxisLabelsEnabled'        => TRUE,
                                'xAxisLabelsAlign'      => 'right',
                                'xAxisLabelsStep'       => 1,
                                'xAxisLabelsRotation'       => -35,
                                'xAxislabelsX'          => 5,
                                'xAxisLabelsY'          => 20,
                                'xAxisCategories'               => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'
                                                                   ),

                                //'yAxisMin'            => 0,
                                //'yAxisMaxPadding'     => 0.2,
                                //'yAxisEndOnTick'      => FALSE,
                                //'yAxisMinorGridLineWidth'     => 0,
                                //'yAxisMinorTickInterval'  => 'auto',
                                //'yAxisMinorTickLength'    => 1,
                                //'yAxisTickLength'     => 2,
                                //'yAxisMinorTickWidth'     => 1,


                                'yAxisTitleText'        => 'Cantidad en (TM)',
                                //'yAxisTitleAlign'         => 'high',
                                //'yAxisTitleStyleFont'     => '14px Metrophobic, Arial, sans-serif',
                                //'yAxisTitleRotation'      => 0,
                                //'yAxisTitleX'         => 0,
                                //'yAxisTitleY'         => -10,
                                //'yAxisPlotLines'      => array( array('color' => '#808080', 'width' => 1, 'value' => 0 )),

                                // autostep options
                                'enableAutoStep'        => FALSE,

                                // credits setting  [HighCharts.com  displayed on chart]
                                'creditsEnabled' => FALSE,
                                'creditsText'    => 'AMILKAR SHEGRID CONTRERAS CASTRO',
                                'creditsURL'     => 'http://example.com'
                        )
                );
                    $johnSeries = $this->HighCharts->addChartSeries();
        $janeSeries = $this->HighCharts->addChartSeries();

        $johnSeries->addName('Mensual')
            ->addData($SoyaMensual);

        $janeSeries->addName('Diario')
            ->addData($SoyaDiario);
        $mychart->addSeries($johnSeries);
        $mychart->addSeries($janeSeries);




    }
    public function areaventa($id = null)
    {
        $this->loadModel('Soya');
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

        $TortaSolventeSoyakg=0;
        $TortaSolventeSoyatm=0;
        $TortaSolventeSoyadolar=0;
        $TortaSolventeSoyabs=0;
        $TortaSolventeSoyatotaldolar=0;
        $TortaSolventeSoyatotalbs=0;


        $TortaSolventeGirasolkg=0;
        $TortaSolventeGirasoltm=0;
        $TortaSolventeGirasoldolar=0;
        $TortaSolventeGirasolbs=0;
        $TortaSolventeGirasoltotaldolar=0;
        $TortaSolventeGirasoltotalbs=0;

        $HarinaIntegralSoyakg=0;
        $HarinaIntegralSoyatm=0;
        $HarinaIntegralSoyadolar=0;
        $HarinaIntegralSoyabs=0;
        $HarinaIntegralSoyatotaldolar=0;
        $HarinaIntegralSoyatotalbs=0;

        $HarinaIntegralGirasolkg=0;
        $HarinaIntegralGirasoltm=0;
        $HarinaIntegralGirasoldolar=0;
        $HarinaIntegralGirasolbs=0;
        $HarinaIntegralGirasoltotaldolar=0;
        $HarinaIntegralGirasoltotalbs=0;

        $CascarillaSoyakg=0;
        $CascarillaSoyatm=0;
        $CascarillaSoyadolar=0;
        $CascarillaSoyabs=0;
        $CascarillaSoyatotaldolar=0;
        $CascarillaSoyatotalbs=0;

        $CascarillaGirasolkg=0;
        $CascarillaGirasoltm=0;
        $CascarillaGirasoldolar=0;
        $CascarillaGirasolbs=0;
        $CascarillaGirasoltotaldolar=0;
        $CascarillaGirasoltotalbs=0;

        $GranoSoyakg=0;
        $GranoSoyatm=0;
        $GranoSoyadolar=0;
        $GranoSoyabs=0;
        $GranoSoyatotaldolar=0;
        $GranoSoyatotalbs=0;

        $GranoGirasolkg=0;
        $GranoGirasoltm=0;
        $GranoGirasoldolar=0;
        $GranoGirasolbs=0;
        $GranoGirasoltotaldolar=0;
        $GranoGirasoltotalbs=0;


        $AceiteRefinadoSoyakg=0;
        $AceiteRefinadoSoyatm=0;
        $AceiteRefinadoSoyadolar=0;
        $AceiteRefinadoSoyabs=0;
        $AceiteRefinadoSoyatotaldolar=0;
        $AceiteRefinadoSoyatotalbs=0;
        $AceiteCrudoSoyakg=0;
        $AceiteCrudoSoyatm=0;
        $AceiteCrudoSoyadolar=0;
        $AceiteCrudoSoyabs=0;
        $AceiteCrudoSoyatotaldolar=0;
        $AceiteCrudoSoyatotalbs=0;

        $AceiteRefinadoGirasolkg=0;
        $AceiteRefinadoGirasoltm=0;
        $AceiteRefinadoGirasoldolar=0;
        $AceiteRefinadoGirasolbs=0;
        $AceiteRefinadoGirasoltotaldolar=0;
        $AceiteRefinadoGirasoltotalbs=0;

        $AceiteCrudoGirasolkg=0;
        $AceiteCrudoGirasoltm=0;
        $AceiteCrudoGirasoldolar=0;
        $AceiteCrudoGirasolbs=0;
        $AceiteCrudoGirasoltotaldolar=0;
        $AceiteCrudoGirasoltotalbs=0;

        $tortasoya=array();
        $cascarillasoya=array();
        $harinasoya=array();
        $aceiterefisoya=array();
        $aceitecrudosoya=array();

        $tortagirasol=array();
        $cascarillagirasol=array();
        $harinagirasol=array();
        $aceiterefigirasol=array();
        $aceitecrudogirasol=array();

    foreach ($distinct_years as $var)  { ?>
    <?php for ($i=1; $i <= 12 ; $i++) { ?>
        <?php foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): ?>
            <?php
            $year = strtotime($soyaproductorderivado['fecharegistro']);
             if (date("m", $year)==$i) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE SOYA') { ?>
                        <?php $TortaSolventeSoyakg=$TortaSolventeSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $TortaSolventeSoyatm=$TortaSolventeSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $TortaSolventeSoyadolar=$TortaSolventeSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $TortaSolventeSoyabs=$TortaSolventeSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $TortaSolventeSoyatotaldolar=$TortaSolventeSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $TortaSolventeSoyatotalbs=$TortaSolventeSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE GIRASOL') { ?>
                        
                        <?php $TortaSolventeGirasolkg=$TortaSolventeGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $TortaSolventeGirasoltm=$TortaSolventeGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $TortaSolventeGirasoldolar=$TortaSolventeGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $TortaSolventeGirasolbs=$TortaSolventeGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $TortaSolventeGirasoltotaldolar=$TortaSolventeGirasolbs+$soyaproductorderivado['totaldolar'];?>
                        <?php $TortaSolventeGirasoltotalbs=$TortaSolventeGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
                        
                        <?php $HarinaIntegralSoyakg=$HarinaIntegralSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $HarinaIntegralSoyatm=$HarinaIntegralSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $HarinaIntegralSoyadolar=$HarinaIntegralSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $HarinaIntegralSoyabs=$HarinaIntegralSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $HarinaIntegralSoyatotaldolar=$HarinaIntegralSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $HarinaIntegralSoyatotalbs=$HarinaIntegralSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE GIRASOL') { ?>
                        
                        <?php $HarinaIntegralGirasolkg=$HarinaIntegralGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $HarinaIntegralGirasoltm=$HarinaIntegralGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $HarinaIntegralGirasoldolar=$HarinaIntegralGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $HarinaIntegralGirasolbs=$HarinaIntegralGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $HarinaIntegralGirasoltotaldolar=$HarinaIntegralGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $HarinaIntegralGirasoltotalbs=$HarinaIntegralGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='CASCARILLA DE SOYA') { ?>
                        
                        <?php $CascarillaSoyakg=$CascarillaSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $CascarillaSoyatm=$CascarillaSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $CascarillaSoyadolar=$CascarillaSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $CascarillaSoyabs=$CascarillaSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $CascarillaSoyatotaldolar=$CascarillaSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $CascarillaSoyatotalbs=$CascarillaSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='CASCARILLA DE GIRASOL') { ?>
                        
                        <?php $CascarillaGirasolkg=$CascarillaGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $CascarillaGirasoltm=$CascarillaGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $CascarillaGirasoldolar=$CascarillaGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $CascarillaGirasolbs=$CascarillaGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $CascarillaGirasoltotaldolar=$CascarillaGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $CascarillaGirasoltotalbs=$CascarillaGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='GRANO DE SOYA') { ?>
                        
                        <?php $GranoSoyakg=$GranoSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $GranoSoyatm=$GranoSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $GranoSoyabs=$GranoSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $GranoSoyatotaldolar=$CascarillaGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $GranoSoyatotalbs=$GranoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='GRANO DE GIRASOL') { ?>
                    
                        <?php $GranoGirasolkg=$GranoGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $GranoGirasolbs=$GranoGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $GranoGirasoltotaldolar=$GranoGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $GranoGirasoltotalbs=$GranoGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA REFINADO') { ?>
                    
                        <?php $AceiteRefinadoSoyakg=$AceiteRefinadoSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteRefinadoSoyatm=$AceiteRefinadoSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteRefinadoSoyadolar=$AceiteRefinadoSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteRefinadoSoyabs=$AceiteRefinadoSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteRefinadoSoyatotaldolar=$AceiteRefinadoSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteRefinadoSoyatotalbs=$AceiteRefinadoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA CRUDO') { ?>
                        
                        <?php $AceiteCrudoSoyakg=$AceiteCrudoSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteCrudoSoyatm=$AceiteCrudoSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteCrudoSoyadolar=$AceiteCrudoSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteCrudoSoyabs=$AceiteCrudoSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteCrudoSoyatotaldolar=$AceiteCrudoSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteCrudoSoyatotalbs=$AceiteCrudoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL REFINADO') { ?>
                    
                        <?php $AceiteRefinadoGirasolkg=$AceiteRefinadoGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteRefinadoGirasoltm=$AceiteRefinadoGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteRefinadoGirasoldolar=$AceiteRefinadoGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteRefinadoGirasolbs=$AceiteRefinadoGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteRefinadoGirasoltotaldolar=$AceiteRefinadoGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteRefinadoGirasoltotalbs=$AceiteRefinadoGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL CRUDO') { ?>
                        
                        <?php $AceiteCrudoGirasolkg=$AceiteCrudoGirasolkg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteCrudoGirasoltm=$AceiteCrudoGirasoltm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteCrudoGirasoldolar=$AceiteCrudoGirasoldolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteCrudoGirasolbs=$AceiteCrudoGirasolbs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteCrudoGirasoltotaldolar=$AceiteCrudoGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteCrudoGirasoltotalbs=$AceiteCrudoGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php endforeach;

            $tortasoya[] = $TortaSolventeSoyatm;
            $cascarillasoya[] = $HarinaIntegralSoyakg;
            $harinasoya[] = $CascarillaSoyatm;
            $aceiterefisoya[] = $AceiteRefinadoSoyatm;
            $aceitecrudosoya[] = $AceiteCrudoSoyatm;

            $tortagirasol[] = $TortaSolventeGirasoltm;
            $cascarillagirasol[] = $HarinaIntegralGirasoltm;
            $harinagirasol[] = $CascarillaGirasoltm;
            $aceiterefigirasol[] = $AceiteRefinadoGirasoltm;
            $aceitecrudogirasol[] = $AceiteCrudoGirasoltm;


            $TortaSolventeSoyakg=0;
            $TortaSolventeSoyatm=0;
            $TortaSolventeSoyadolar=0;
            $TortaSolventeSoyabs=0;
            $TortaSolventeSoyatotaldolar=0;
            $TortaSolventeSoyatotalbs=0;
 
            $HarinaIntegralSoyakg=0;
            $HarinaIntegralSoyatm=0;
            $HarinaIntegralSoyadolar=0;
            $HarinaIntegralSoyabs=0;
            $HarinaIntegralSoyatotaldolar=0;
            $HarinaIntegralSoyatotalbs=0;

            $CascarillaSoyakg=0;
            $CascarillaSoyatm=0;
            $CascarillaSoyadolar=0;
            $CascarillaSoyabs=0;
            $CascarillaSoyatotaldolar=0;
            $CascarillaSoyatotalbs=0;

            $GranoSoyakg=0;
            $GranoSoyatm=0;
            $GranoSoyadolar=0;
            $GranoSoyabs=0;
            $GranoSoyatotaldolar=0;
            $GranoSoyatotalbs=0;

            $AceiteRefinadoSoyakg=0;
            $AceiteRefinadoSoyatm=0;
            $AceiteRefinadoSoyadolar=0;
            $AceiteRefinadoSoyabs=0;
            $AceiteRefinadoSoyatotaldolar=0;
            $AceiteRefinadoSoyatotalbs=0;

            $AceiteCrudoSoyakg=0;
            $AceiteCrudoSoyatm=0;
            $AceiteCrudoSoyadolar=0;
            $AceiteCrudoSoyabs=0;
            $AceiteCrudoSoyatotaldolar=0;
            $AceiteCrudoSoyatotalbs=0;

            $TortaSolventeGirasolkg=0;
            $TortaSolventeGirasoltm=0;
            $TortaSolventeGirasoldolar=0;
            $TortaSolventeGirasolbs=0;
            $TortaSolventeGirasoltotaldolar=0;
            $TortaSolventeGirasoltotalbs=0;

            $HarinaIntegralGirasolkg=0;
            $HarinaIntegralGirasoltm=0;
            $HarinaIntegralGirasoldolar=0;
            $HarinaIntegralGirasolbs=0;
            $HarinaIntegralGirasoltotaldolar=0;
            $HarinaIntegralGirasoltotalbs=0;

            $CascarillaGirasolkg=0;
            $CascarillaGirasoltm=0;
            $CascarillaGirasoldolar=0;
            $CascarillaGirasolbs=0;
            $CascarillaGirasoltotaldolar=0;
            $CascarillaGirasoltotalbs=0;

            $GranoGirasolkg=0;
            $GranoGirasoltm=0;
            $GranoGirasoldolar=0;
            $GranoGirasolbs=0;
            $GranoGirasoltotaldolar=0;
            $GranoGirasoltotalbs=0;

            $AceiteRefinadoGirasolkg=0;
            $AceiteRefinadoGirasoltm=0;
            $AceiteRefinadoGirasoldolar=0;
            $AceiteRefinadoGirasolbs=0;
            $AceiteRefinadoGirasoltotaldolar=0;
            $AceiteRefinadoGirasoltotalbs=0;

            $AceiteCrudoGirasolkg=0;
            $AceiteCrudoGirasoltm=0;
            $AceiteCrudoGirasoldolar=0;
            $AceiteCrudoGirasolbs=0;
            $AceiteCrudoGirasoltotaldolar=0;
            $AceiteCrudoGirasoltotalbs=0;
            } 
        } 



        $chartName = 'Area Chart';
        $mychart = $this->HighCharts->create( $chartName, 'area' );
        $this->HighCharts->setChartParams(
                        $chartName,
                        array(
                                'renderTo'              => 'areawrapper',  // div to display chart inside
                                'chartWidth'                => 1400,
                                'chartHeight'               => 700,
                                'chartMarginTop'            => 60,
                                'chartMarginLeft'           => 90,
                                'chartMarginRight'          => 30,
                                'chartMarginBottom'         => 110,
                                'chartSpacingRight'         => 10,
                                'chartSpacingBottom'            => 15,
                                'chartSpacingLeft'          => 0,
                                'chartAlignTicks'           => FALSE,
                                'chartBackgroundColorLinearGradient'    => array(0,0,0,300),
                                'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

                                'title'                 => 'Tabla Comparativa',
                                'titleAlign'                => 'left',
                                'titleFloating'             => TRUE,
                                'titleStyleFont'            => '18px Metrophobic, Arial, sans-serif',
                                'titleStyleColor'           => '#0099ff',
                                'titleX'                => 20,
                                'titleY'                => 20,

                                'legendEnabled'             => TRUE,
                                'legendLayout'              => 'horizontal',
                                'legendAlign'               => 'center',
                                'legendVerticalAlign '          => 'bottom',
                                'legendItemStyle'           => array('color' => '#222'),
                                'legendBackgroundColorLinearGradient'   => array(0,0,0,25),
                                'legendBackgroundColorStops' => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

                                'tooltipEnabled'            => FALSE,
                                // 'tooltipBackgroundColorLinearGradient' => array(0,0,0,50),   // triggers js error
                                // 'tooltipBackgroundColorStops' => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

                                //'plotOptionsLinePointStart'   => strtotime('-30 day') * 1000,
                                //'plotOptionsLinePointInterval'=> 24 * 3600 * 1000,

                                //'xAxisType'           => 'datetime',
                                //'xAxisTickInterval'       => 10,
                                //'xAxisStartOnTick'        => TRUE,
                                //'xAxisTickmarkPlacement'  => 'on',
                                //'xAxisTickLength'         => 10,
                                //'xAxisMinorTickLength'    => 5,

                                'xAxisLabelsEnabled'        => TRUE,
                                'xAxisLabelsAlign'      => 'right',
                                'xAxisLabelsStep'       => 1,
                                'xAxisLabelsRotation'       => -35,
                                'xAxislabelsX'          => 5,
                                'xAxisLabelsY'          => 20,
                                'xAxisCategories'               => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'
                                                                   ),

                                //'yAxisMin'            => 0,
                                //'yAxisMaxPadding'     => 0.2,
                                //'yAxisEndOnTick'      => FALSE,
                                //'yAxisMinorGridLineWidth'     => 0,
                                //'yAxisMinorTickInterval'  => 'auto',
                                //'yAxisMinorTickLength'    => 1,
                                //'yAxisTickLength'     => 2,
                                //'yAxisMinorTickWidth'     => 1,


                                'yAxisTitleText'        => 'Cantidad en (TM)',
                                //'yAxisTitleAlign'         => 'high',
                                //'yAxisTitleStyleFont'     => '14px Metrophobic, Arial, sans-serif',
                                //'yAxisTitleRotation'      => 0,
                                //'yAxisTitleX'         => 0,
                                //'yAxisTitleY'         => -10,
                                //'yAxisPlotLines'      => array( array('color' => '#808080', 'width' => 1, 'value' => 0 )),

                                // autostep options
                                'enableAutoStep'        => FALSE,

                                // credits setting  [HighCharts.com  displayed on chart]
                                'creditsEnabled' => FALSE,
                                'creditsText'    => 'AMILKAR SHEGRID CONTRERAS CASTRO',
                                'creditsURL'     => ''
                        )
                );


            $tortasoyaSeries = $this->HighCharts->addChartSeries();
            $tortasoyaSeries->addName('Torta solverte de soya')
            ->addData($tortasoya);

            $cascarillasoyaSeries = $this->HighCharts->addChartSeries();
            $cascarillasoyaSeries->addName('Harina integral de soya')
            ->addData($cascarillasoya);

            $harinasoyaSeries = $this->HighCharts->addChartSeries();
            $harinasoyaSeries->addName('Cascarilla de soya')
            ->addData($harinasoya);

            $aceiterefisoyaSeries = $this->HighCharts->addChartSeries();
            $aceiterefisoyaSeries->addName('Aceite Refinado de soya')
            ->addData($aceiterefisoya);

            $aceitecrudosoyaSeries = $this->HighCharts->addChartSeries();
            $aceitecrudosoyaSeries->addName('Aceite crudo de soya')
            ->addData($aceitecrudosoya);



            $tortagirasolSeries = $this->HighCharts->addChartSeries();
            $tortagirasolSeries->addName('Torta solvente de girasol')
            ->addData($tortagirasol);

            $cascarillagirasolSeries = $this->HighCharts->addChartSeries();
            $cascarillagirasolSeries->addName('Harina de girasol')
            ->addData($cascarillagirasol);

            $harinagirasolSeries = $this->HighCharts->addChartSeries();
            $harinagirasolSeries->addName('Cascarilla de girasol')
            ->addData($harinagirasol);

            $aceiterefigirasolSeries = $this->HighCharts->addChartSeries();
            $aceiterefigirasolSeries->addName('Aceite Refinado de girasol')
            ->addData($aceiterefigirasol);

            $aceitecrudogirasolSeries = $this->HighCharts->addChartSeries();
            $aceitecrudogirasolSeries->addName('Aceite Crudo de girasol')
            ->addData($aceitecrudogirasol);            


            $mychart->addSeries($tortasoyaSeries);
            $mychart->addSeries($cascarillasoyaSeries);
            $mychart->addSeries($harinasoyaSeries);
            $mychart->addSeries($aceiterefisoyaSeries);
            $mychart->addSeries($aceitecrudosoyaSeries);
            
            $mychart->addSeries($tortagirasolSeries);
            $mychart->addSeries($cascarillagirasolSeries);
            $mychart->addSeries($harinagirasolSeries);
            $mychart->addSeries($aceiterefigirasolSeries);
            $mychart->addSeries($aceitecrudogirasolSeries);
    }
    public function compaanual($id = null)
    {
        $this->loadModel('Soya');
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
    public function compasemestre($id = null)
    {
        $this->loadModel('Soya');
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
    public function comparacion()
    {
        $this->loadModel('Soya');
        $this->loadModel("SoyaProductorCompra");
        
        $years = $this->SoyaProductorCompra->getYears();
        $distinct_years = array();
        foreach($years as $year) {
            $distinct_years[] = $year[0]['distinct_year'];
        }
        $this->set(compact('distinct_years'));
        $this->paginate = array(
        'conditions' => array('Grupo.categoria' => 'Soya'),
        'limit' => 25
        );
        $this->set('soyas', $this->paginate('Soya'));
    }
    public function combinaciontorta($id = null)
    {
        $meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre');

        $this->loadModel('Soya');
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
        $TortaSolventeSoyakg=0;
        $TortaSolventeSoyatm=0;
        $TortaSolventeSoyadolar=0;
        $TortaSolventeSoyabs=0;
        $TortaSolventeSoyatotaldolar=0;
        $TortaSolventeSoyatotalbs=0;

        //para comparacion

        $TortaSolventeSoyakg1=0;
        $TortaSolventeSoyatm1=0;
        $TortaSolventeSoyadolar1=0;
        $TortaSolventeSoyabs1=0;
        $TortaSolventeSoyatotaldolar1=0;
        $TortaSolventeSoyatotalbs1=0;


        $SoyaMensual=array();
        $SoyaDiario=array();
     foreach($distinct_years as $camp => $var): 


        foreach($meses as $tar => $das): 

            foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): 
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) {  
                if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE SOYA') { ?>
                        <?php $TortaSolventeSoyakg=$TortaSolventeSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $TortaSolventeSoyatm=$TortaSolventeSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $TortaSolventeSoyadolar=$TortaSolventeSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $TortaSolventeSoyabs=$TortaSolventeSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $TortaSolventeSoyatotaldolar=$TortaSolventeSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $TortaSolventeSoyatotalbs=$TortaSolventeSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                <?php } ?>
            <?php } 
            endforeach; ?>

    <?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
            <?php 
        if($soyaproductorproduccion['operacion']=='Compra Grano'){
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE SOYA') { ?>
                        <?php $TortaSolventeSoyakg1=$TortaSolventeSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $TortaSolventeSoyatm1=$TortaSolventeSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $TortaSolventeSoyadolar1=$TortaSolventeSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $TortaSolventeSoyabs1=$TortaSolventeSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $TortaSolventeSoyatotaldolar1=$TortaSolventeSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $TortaSolventeSoyatotalbs1=$TortaSolventeSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php endforeach;
        $SoyaMensual[]=$TortaSolventeSoyatm1;
        $SoyaDiario[]=$TortaSolventeSoyatm;

        $TortaSolventeSoyakg=0;
        $TortaSolventeSoyatm=0;
        $TortaSolventeSoyadolar=0;
        $TortaSolventeSoyabs=0;
        $TortaSolventeSoyatotaldolar=0;
        $TortaSolventeSoyatotalbs=0;

        //para comparacion

        $TortaSolventeSoyakg1=0;
        $TortaSolventeSoyatm1=0;
        $TortaSolventeSoyadolar1=0;
        $TortaSolventeSoyabs1=0;
        $TortaSolventeSoyatotaldolar1=0;
        $TortaSolventeSoyatotalbs1=0;

        endforeach; 
      
     endforeach;

        $janeData = array();
        $johnData = array();
        
        $janeData=$SoyaDiario;
        $johnData=$SoyaMensual;

        $a=array_sum($janeData);
        $b=array_sum($johnData);

        $avgData  = $SoyaDiario;
        $avdData  = $SoyaMensual;

        $pieData = array(   
                    array(
                        'name' => 'Diario',
                        'y' => $a,
                        'sliced' => true,
                        'selected' => true
                ),
            array('Mensual', $b)
            );
                
        $chartName = 'Combination Chart';
        $mychart = $this->HighCharts->create( $chartName,'column' );
    
        $this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'              => 'combowrapper',  // div to display chart inside
                    'chartWidth'            => 1200,
                    'chartHeight'           => 700,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,100),
                    'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),              
                    'title'                 => 'Gráfica comparativa',
                    'subtitle'              => 'Cantidad comprada de Torta',
                    'xAxisLabelsEnabled'    => TRUE,                
                    'xAxisCategories'       => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),                
                    'yAxisTitleText'        => 'Cantidad en (TM)',                                 
                    'enableAutoStep'        => FALSE,
                    'creditsEnabled'        => FALSE                        
                ) 
            );
    
        $janeSeries = $this->HighCharts->addChartSeries();
        $janeSeries->type = 'column';
        $janeSeries->addName('Diario')
            ->addData($janeData);

        $johnSeries = $this->HighCharts->addChartSeries();
        $johnSeries->type = 'column';
        $johnSeries->addName('Mensual')
            ->addData($johnData);       


        $avgSeries  = $this->HighCharts->addChartSeries();
        $avgSeries->type = 'spline';
        $avgSeries->addName('Diario')
            ->addData($avgData);

        $avdSeries  = $this->HighCharts->addChartSeries();
        $avdSeries->type = 'spline';
        $avdSeries->addName('Mensual')
            ->addData($avdData);

        $pieSeries  = $this->HighCharts->addChartSeries();
        $pieSeries->type = 'pie';
        $pieSeries->center = array(900,150);

        $pieSeries->size = 250;
        $pieSeries->showInLegend = FALSE;
        $pieSeries->addName('Total consumption')->addData($pieData);    

        $mychart->addSeries($janeSeries);
        $mychart->addSeries($johnSeries);


        $mychart->addSeries($avgSeries);
        $mychart->addSeries($avdSeries);
        $mychart->addSeries($pieSeries); 
        
    }
    public function combinacionharina($id = null)
    {
        $meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre');
        $this->loadModel('Soya');
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

        $HarinaIntegralSoyakg=0;
        $HarinaIntegralSoyatm=0;
        $HarinaIntegralSoyadolar=0;
        $HarinaIntegralSoyabs=0;
        $HarinaIntegralSoyatotaldolar=0;
        $HarinaIntegralSoyatotalbs=0;

        //para comparacion

        $HarinaIntegralSoyakg1=0;
        $HarinaIntegralSoyatm1=0;
        $HarinaIntegralSoyadolar1=0;
        $HarinaIntegralSoyabs1=0;
        $HarinaIntegralSoyatotaldolar1=0;
        $HarinaIntegralSoyatotalbs1=0;

        $SoyaMensual=array();
        $SoyaDiario=array();

        foreach($distinct_years as $camp => $var): 
        foreach($meses as $tar => $das): 
        foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): 
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) {  
                if (date("Y", $year)==$var) { ?>

                    <?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
                        
                        <?php $HarinaIntegralSoyakg=$HarinaIntegralSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $HarinaIntegralSoyatm=$HarinaIntegralSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $HarinaIntegralSoyadolar=$HarinaIntegralSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $HarinaIntegralSoyabs=$HarinaIntegralSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $HarinaIntegralSoyatotaldolar=$HarinaIntegralSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $HarinaIntegralSoyatotalbs=$HarinaIntegralSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>

                <?php } ?>
            <?php } ?>
    <?php endforeach; ?>
    <?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
            <?php 
        if($soyaproductorproduccion['operacion']=='Compra Grano'){
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
                        <?php $HarinaIntegralSoyakg1=$HarinaIntegralSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $HarinaIntegralSoyatm1=$HarinaIntegralSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $HarinaIntegralSoyadolar1=$HarinaIntegralSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $HarinaIntegralSoyabs1=$HarinaIntegralSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $HarinaIntegralSoyatotaldolar1=$HarinaIntegralSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $HarinaIntegralSoyatotalbs1=$HarinaIntegralSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php endforeach;
        $SoyaMensual[]= $HarinaIntegralSoyatm1;
        $SoyaDiario[]= $HarinaIntegralSoyatm;

        $HarinaIntegralSoyakg=0;
        $HarinaIntegralSoyatm=0;
        $HarinaIntegralSoyadolar=0;
        $HarinaIntegralSoyabs=0;
        $HarinaIntegralSoyatotaldolar=0;
        $HarinaIntegralSoyatotalbs=0;

        //para comparacion

        $HarinaIntegralSoyakg1=0;
        $HarinaIntegralSoyatm1=0;
        $HarinaIntegralSoyadolar1=0;
        $HarinaIntegralSoyabs1=0;
        $HarinaIntegralSoyatotaldolar1=0;
        $HarinaIntegralSoyatotalbs1=0;

        endforeach; 
    endforeach; 


        $janeData = array();
        $johnData = array();
        
        $janeData=$SoyaDiario;
        $johnData=$SoyaMensual;

        $a=array_sum($janeData);
        $b=array_sum($johnData);

        $avgData  = $SoyaDiario;
        $avdData  = $SoyaMensual;

        $pieData = array(   
                    array(
                        'name' => 'Diario',
                        'y' => $a,
                        'sliced' => true,
                        'selected' => true
                ),
            array('Mensual', $b)
            );
                
        $chartName = 'Combination Chart';
        $mychart = $this->HighCharts->create( $chartName,'column' );
    
        $this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'              => 'combowrapper',  // div to display chart inside
                    'chartWidth'            => 1200,
                    'chartHeight'           => 700,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,100),
                    'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),              
                    'title'                 => 'Gráfica comparativa',
                    'subtitle'              => 'Cantidad comprada de soya',
                    'xAxisLabelsEnabled'    => TRUE,                
                    'xAxisCategories'       => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),                
                    'yAxisTitleText'        => 'Cantidad en (TM)',                                 
                    'enableAutoStep'        => FALSE,
                    'creditsEnabled'        => FALSE                        
                ) 
            );
    
        $janeSeries = $this->HighCharts->addChartSeries();
        $janeSeries->type = 'column';
        $janeSeries->addName('Diario')
            ->addData($janeData);

        $johnSeries = $this->HighCharts->addChartSeries();
        $johnSeries->type = 'column';
        $johnSeries->addName('Mensual')
            ->addData($johnData);       


        $avgSeries  = $this->HighCharts->addChartSeries();
        $avgSeries->type = 'spline';
        $avgSeries->addName('Diario')
            ->addData($avgData);

        $avdSeries  = $this->HighCharts->addChartSeries();
        $avdSeries->type = 'spline';
        $avdSeries->addName('Mensual')
            ->addData($avdData);

        $pieSeries  = $this->HighCharts->addChartSeries();
        $pieSeries->type = 'pie';
        $pieSeries->center = array(900,150);

        $pieSeries->size = 250;
        $pieSeries->showInLegend = FALSE;
        $pieSeries->addName('Total consumption')->addData($pieData);    

        $mychart->addSeries($janeSeries);
        $mychart->addSeries($johnSeries);


        $mychart->addSeries($avgSeries);
        $mychart->addSeries($avdSeries);
        $mychart->addSeries($pieSeries); 
    }
    public function combinacionrefinado($id = null)
    {
        $this->loadModel('Soya');
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

        $meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre',);


        $AceiteRefinadoSoyakg=0;
        $AceiteRefinadoSoyatm=0;
        $AceiteRefinadoSoyadolar=0;
        $AceiteRefinadoSoyabs=0;
        $AceiteRefinadoSoyatotaldolar=0;
        $AceiteRefinadoSoyatotalbs=0;

        //para comparacion

        $AceiteRefinadoSoyakg1=0;
        $AceiteRefinadoSoyatm1=0;
        $AceiteRefinadoSoyadolar1=0;
        $AceiteRefinadoSoyabs1=0;
        $AceiteRefinadoSoyatotaldolar1=0;
        $AceiteRefinadoSoyatotalbs1=0;


        $SoyaMensual=array();
        $SoyaDiario=array();

        foreach($distinct_years as $camp => $var): 
        foreach($meses as $tar => $das): 
        foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): 
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) {  
                if (date("Y", $year)==$var) { ?>
                   
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA REFINADO') { ?>
                    
                        <?php $AceiteRefinadoSoyakg=$AceiteRefinadoSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteRefinadoSoyatm=$AceiteRefinadoSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteRefinadoSoyadolar=$AceiteRefinadoSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteRefinadoSoyabs=$AceiteRefinadoSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteRefinadoSoyatotaldolar=$AceiteRefinadoSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteRefinadoSoyatotalbs=$AceiteRefinadoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    
                <?php } ?>
            <?php } ?>
    <?php endforeach; ?>


    <?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
            <?php 
        if($soyaproductorproduccion['operacion']=='Compra Grano'){
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA REFINADO') { ?>
                    
                        <?php $AceiteRefinadoSoyakg1=$AceiteRefinadoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $AceiteRefinadoSoyatm1=$AceiteRefinadoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $AceiteRefinadoSoyadolar1=$AceiteRefinadoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $AceiteRefinadoSoyabs1=$AceiteRefinadoSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $AceiteRefinadoSoyatotaldolar1=$AceiteRefinadoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $AceiteRefinadoSoyatotalbs1=$AceiteRefinadoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                  
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php endforeach;
        $SoyaMensual[]=$AceiteRefinadoSoyatm1;
        $SoyaDiario[]=$AceiteRefinadoSoyatm;

        $AceiteRefinadoSoyakg=0;
        $AceiteRefinadoSoyatm=0;
        $AceiteRefinadoSoyadolar=0;
        $AceiteRefinadoSoyabs=0;
        $AceiteRefinadoSoyatotaldolar=0;
        $AceiteRefinadoSoyatotalbs=0;

        //para comparacion

        $AceiteRefinadoSoyakg1=0;
        $AceiteRefinadoSoyatm1=0;
        $AceiteRefinadoSoyadolar1=0;
        $AceiteRefinadoSoyabs1=0;
        $AceiteRefinadoSoyatotaldolar1=0;
        $AceiteRefinadoSoyatotalbs1=0;


        endforeach; 
    endforeach; 

        $janeData = array();
        $johnData = array();
        
        $janeData=$SoyaDiario;
        $johnData=$SoyaMensual;

        $a=array_sum($janeData);
        $b=array_sum($johnData);

        $avgData  = $SoyaDiario;
        $avdData  = $SoyaMensual;

        $pieData = array(   
                    array(
                        'name' => 'Diario',
                        'y' => $a,
                        'sliced' => true,
                        'selected' => true
                ),
            array('Mensual', $b)
            );
                
        $chartName = 'Combination Chart';
        $mychart = $this->HighCharts->create( $chartName,'column' );
    
        $this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'              => 'combowrapper',  // div to display chart inside
                    'chartWidth'            => 1200,
                    'chartHeight'           => 700,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,100),
                    'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),              
                    'title'                 => 'Gráfica comparativa',
                    'subtitle'              => 'Cantidad comprada de soya',
                    'xAxisLabelsEnabled'    => TRUE,                
                    'xAxisCategories'       => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),                
                    'yAxisTitleText'        => 'Cantidad en (TM)',                                 
                    'enableAutoStep'        => FALSE,
                    'creditsEnabled'        => FALSE                        
                ) 
            );
    
        $janeSeries = $this->HighCharts->addChartSeries();
        $janeSeries->type = 'column';
        $janeSeries->addName('Diario')
            ->addData($janeData);

        $johnSeries = $this->HighCharts->addChartSeries();
        $johnSeries->type = 'column';
        $johnSeries->addName('Mensual')
            ->addData($johnData);       


        $avgSeries  = $this->HighCharts->addChartSeries();
        $avgSeries->type = 'spline';
        $avgSeries->addName('Diario')
            ->addData($avgData);

        $avdSeries  = $this->HighCharts->addChartSeries();
        $avdSeries->type = 'spline';
        $avdSeries->addName('Mensual')
            ->addData($avdData);

        $pieSeries  = $this->HighCharts->addChartSeries();
        $pieSeries->type = 'pie';
        $pieSeries->center = array(900,150);

        $pieSeries->size = 250;
        $pieSeries->showInLegend = FALSE;
        $pieSeries->addName('Total consumption')->addData($pieData);    

        $mychart->addSeries($janeSeries);
        $mychart->addSeries($johnSeries);


        $mychart->addSeries($avgSeries);
        $mychart->addSeries($avdSeries);
        $mychart->addSeries($pieSeries); 

    }
    public function combinacioncascarilla($id = null)
    {
        $this->loadModel('Soya');
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

        $meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre',);

        $CascarillaSoyakg=0;
        $CascarillaSoyatm=0;
        $CascarillaSoyadolar=0;
        $CascarillaSoyabs=0;
        $CascarillaSoyatotaldolar=0;
        $CascarillaSoyatotalbs=0;

        //para comparacion

        $CascarillaSoyakg1=0;
        $CascarillaSoyatm1=0;
        $CascarillaSoyadolar1=0;
        $CascarillaSoyabs1=0;
        $CascarillaSoyatotaldolar1=0;
        $CascarillaSoyatotalbs1=0;


        $SoyaMensual=array();
        $SoyaDiario=array();

        foreach($distinct_years as $camp => $var): 
        foreach($meses as $tar => $das): 
        foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): 
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) {  
                if (date("Y", $year)==$var) { ?>

                    <?php if ($soyaproductorderivado['producto']=='CASCARILLA DE SOYA') { ?>
                        
                        <?php $CascarillaSoyakg=$CascarillaSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $CascarillaSoyatm=$CascarillaSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $CascarillaSoyadolar=$CascarillaSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $CascarillaSoyabs=$CascarillaSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $CascarillaSoyatotaldolar=$CascarillaSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $CascarillaSoyatotalbs=$CascarillaSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
         
                <?php } ?>
            <?php } ?>
    <?php endforeach; ?>


    <?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
            <?php 
        if($soyaproductorproduccion['operacion']=='Compra Grano'){
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) { ?>
                <?php if (date("Y", $year)==$var) { ?>
   
                    <?php if ($soyaproductorderivado['producto']=='CASCARILLA DE SOYA') { ?>
                        
                        <?php $CascarillaSoyakg1=$CascarillaSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $CascarillaSoyatm1=$CascarillaSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $CascarillaSoyadolar1=$CascarillaSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $CascarillaSoyabs1=$CascarillaSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $CascarillaSoyatotaldolar1=$CascarillaSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $CascarillaSoyatotalbs1=$CascarillaSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                   
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php endforeach;
        $SoyaMensual[]=$CascarillaSoyatm1;
        $SoyaDiario[]=$CascarillaSoyatm;
        $CascarillaSoyakg=0;
        $CascarillaSoyatm=0;
        $CascarillaSoyadolar=0;
        $CascarillaSoyabs=0;
        $CascarillaSoyatotaldolar=0;
        $CascarillaSoyatotalbs=0;

        //para comparacion

        $CascarillaSoyakg1=0;
        $CascarillaSoyatm1=0;
        $CascarillaSoyadolar1=0;
        $CascarillaSoyabs1=0;
        $CascarillaSoyatotaldolar1=0;
        $CascarillaSoyatotalbs1=0;


        endforeach; 
    endforeach; 


        $janeData = array();
        $johnData = array();
        
        $janeData=$SoyaDiario;
        $johnData=$SoyaMensual;

        $a=array_sum($janeData);
        $b=array_sum($johnData);

        $avgData  = $SoyaDiario;
        $avdData  = $SoyaMensual;

        $pieData = array(   
                    array(
                        'name' => 'Diario',
                        'y' => $a,
                        'sliced' => true,
                        'selected' => true
                ),
            array('Mensual', $b)
            );
                
        $chartName = 'Combination Chart';
        $mychart = $this->HighCharts->create( $chartName,'column' );
    
        $this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'              => 'combowrapper',  // div to display chart inside
                    'chartWidth'            => 1200,
                    'chartHeight'           => 700,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,100),
                    'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),              
                    'title'                 => 'Gráfica comparativa',
                    'subtitle'              => 'Cantidad comprada de soya',
                    'xAxisLabelsEnabled'    => TRUE,                
                    'xAxisCategories'       => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),                
                    'yAxisTitleText'        => 'Cantidad en (TM)',                                 
                    'enableAutoStep'        => FALSE,
                    'creditsEnabled'        => FALSE                        
                ) 
            );
    
        $janeSeries = $this->HighCharts->addChartSeries();
        $janeSeries->type = 'column';
        $janeSeries->addName('Diario')
            ->addData($janeData);

        $johnSeries = $this->HighCharts->addChartSeries();
        $johnSeries->type = 'column';
        $johnSeries->addName('Mensual')
            ->addData($johnData);       


        $avgSeries  = $this->HighCharts->addChartSeries();
        $avgSeries->type = 'spline';
        $avgSeries->addName('Diario')
            ->addData($avgData);

        $avdSeries  = $this->HighCharts->addChartSeries();
        $avdSeries->type = 'spline';
        $avdSeries->addName('Mensual')
            ->addData($avdData);

        $pieSeries  = $this->HighCharts->addChartSeries();
        $pieSeries->type = 'pie';
        $pieSeries->center = array(900,150);

        $pieSeries->size = 250;
        $pieSeries->showInLegend = FALSE;
        $pieSeries->addName('Total consumption')->addData($pieData);    

        $mychart->addSeries($janeSeries);
        $mychart->addSeries($johnSeries);


        $mychart->addSeries($avgSeries);
        $mychart->addSeries($avdSeries);
        $mychart->addSeries($pieSeries); 
    }
    public function combinacioncrudo($id = null)
    {
        $this->loadModel('Soya');
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

        $meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre',);

        $AceiteCrudoSoyakg=0;
        $AceiteCrudoSoyatm=0;
        $AceiteCrudoSoyadolar=0;
        $AceiteCrudoSoyabs=0;
        $AceiteCrudoSoyatotaldolar=0;
        $AceiteCrudoSoyatotalbs=0;

        //para comparacion

        $AceiteCrudoSoyakg1=0;
        $AceiteCrudoSoyatm1=0;
        $AceiteCrudoSoyadolar1=0;
        $AceiteCrudoSoyabs1=0;
        $AceiteCrudoSoyatotaldolar1=0;
        $AceiteCrudoSoyatotalbs1=0;

        $SoyaMensual=array();
        $SoyaDiario=array();

        foreach($distinct_years as $camp => $var): 
        foreach($meses as $tar => $das): 
        foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): 
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) {  
                if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA CRUDO') { ?>
                        <?php $AceiteCrudoSoyakg=$AceiteCrudoSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteCrudoSoyatm=$AceiteCrudoSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteCrudoSoyadolar=$AceiteCrudoSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteCrudoSoyabs=$AceiteCrudoSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteCrudoSoyatotaldolar=$AceiteCrudoSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteCrudoSoyatotalbs=$AceiteCrudoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
    <?php endforeach; ?>


    <?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
            <?php 
        if($soyaproductorproduccion['operacion']=='Compra Grano'){
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA CRUDO') { ?>
                        <?php $AceiteCrudoSoyakg1=$AceiteCrudoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $AceiteCrudoSoyatm1=$AceiteCrudoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $AceiteCrudoSoyadolar1=$AceiteCrudoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $AceiteCrudoSoyabs1=$AceiteCrudoSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $AceiteCrudoSoyatotaldolar1=$AceiteCrudoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $AceiteCrudoSoyatotalbs1=$AceiteCrudoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                   
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php endforeach;
        $SoyaMensual[]=$AceiteCrudoSoyatm1;
        $SoyaDiario[]=$AceiteCrudoSoyatm;
        $AceiteCrudoSoyakg=0;
        $AceiteCrudoSoyatm=0;
        $AceiteCrudoSoyadolar=0;
        $AceiteCrudoSoyabs=0;
        $AceiteCrudoSoyatotaldolar=0;
        $AceiteCrudoSoyatotalbs=0;

        //para comparacion

        $AceiteCrudoSoyakg1=0;
        $AceiteCrudoSoyatm1=0;
        $AceiteCrudoSoyadolar1=0;
        $AceiteCrudoSoyabs1=0;
        $AceiteCrudoSoyatotaldolar1=0;
        $AceiteCrudoSoyatotalbs1=0;
     endforeach; 
    endforeach; 

        $janeData = array();
        $johnData = array();
        
        $janeData=$SoyaDiario;
        $johnData=$SoyaMensual;

        $a=array_sum($janeData);
        $b=array_sum($johnData);

        $avgData  = $SoyaDiario;
        $avdData  = $SoyaMensual;

        $pieData = array(   
                    array(
                        'name' => 'Diario',
                        'y' => $a,
                        'sliced' => true,
                        'selected' => true
                ),
            array('Mensual', $b)
            );
                
        $chartName = 'Combination Chart';
        $mychart = $this->HighCharts->create( $chartName,'column' );
    
        $this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'              => 'combowrapper',  // div to display chart inside
                    'chartWidth'            => 1200,
                    'chartHeight'           => 700,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,100),
                    'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),              
                    'title'                 => 'Gráfica comparativa',
                    'subtitle'              => 'Cantidad comprada de soya',
                    'xAxisLabelsEnabled'    => TRUE,                
                    'xAxisCategories'       => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),                
                    'yAxisTitleText'        => 'Cantidad en (TM)',                                 
                    'enableAutoStep'        => FALSE,
                    'creditsEnabled'        => FALSE                        
                ) 
            );
    
        $janeSeries = $this->HighCharts->addChartSeries();
        $janeSeries->type = 'column';
        $janeSeries->addName('Diario')
            ->addData($janeData);

        $johnSeries = $this->HighCharts->addChartSeries();
        $johnSeries->type = 'column';
        $johnSeries->addName('Mensual')
            ->addData($johnData);       


        $avgSeries  = $this->HighCharts->addChartSeries();
        $avgSeries->type = 'spline';
        $avgSeries->addName('Diario')
            ->addData($avgData);

        $avdSeries  = $this->HighCharts->addChartSeries();
        $avdSeries->type = 'spline';
        $avdSeries->addName('Mensual')
            ->addData($avdData);

        $pieSeries  = $this->HighCharts->addChartSeries();
        $pieSeries->type = 'pie';
        $pieSeries->center = array(900,150);

        $pieSeries->size = 250;
        $pieSeries->showInLegend = FALSE;
        $pieSeries->addName('Total consumption')->addData($pieData);    

        $mychart->addSeries($janeSeries);
        $mychart->addSeries($johnSeries);


        $mychart->addSeries($avgSeries);
        $mychart->addSeries($avdSeries);
        $mychart->addSeries($pieSeries); 
    }













    public function columnatorta($id = null)
    {
        $meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre');

        $this->loadModel('Soya');
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
        $TortaSolventeSoyakg=0;
        $TortaSolventeSoyatm=0;
        $TortaSolventeSoyadolar=0;
        $TortaSolventeSoyabs=0;
        $TortaSolventeSoyatotaldolar=0;
        $TortaSolventeSoyatotalbs=0;

        //para comparacion

        $TortaSolventeSoyakg1=0;
        $TortaSolventeSoyatm1=0;
        $TortaSolventeSoyadolar1=0;
        $TortaSolventeSoyabs1=0;
        $TortaSolventeSoyatotaldolar1=0;
        $TortaSolventeSoyatotalbs1=0;


        $SoyaMensual=array();
        $SoyaDiario=array();
     foreach($distinct_years as $camp => $var): 


        foreach($meses as $tar => $das): 

            foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): 
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) {  
                if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE SOYA') { ?>
                        <?php $TortaSolventeSoyakg=$TortaSolventeSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $TortaSolventeSoyatm=$TortaSolventeSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $TortaSolventeSoyadolar=$TortaSolventeSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $TortaSolventeSoyabs=$TortaSolventeSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $TortaSolventeSoyatotaldolar=$TortaSolventeSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $TortaSolventeSoyatotalbs=$TortaSolventeSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                <?php } ?>
            <?php } 
            endforeach; ?>

    <?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
            <?php 
        if($soyaproductorproduccion['operacion']=='Compra Grano'){
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE SOYA') { ?>
                        <?php $TortaSolventeSoyakg1=$TortaSolventeSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $TortaSolventeSoyatm1=$TortaSolventeSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $TortaSolventeSoyadolar1=$TortaSolventeSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $TortaSolventeSoyabs1=$TortaSolventeSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $TortaSolventeSoyatotaldolar1=$TortaSolventeSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $TortaSolventeSoyatotalbs1=$TortaSolventeSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php endforeach;
        $SoyaMensual[]=$TortaSolventeSoyatm1;
        $SoyaDiario[]=$TortaSolventeSoyatm;

        $TortaSolventeSoyakg=0;
        $TortaSolventeSoyatm=0;
        $TortaSolventeSoyadolar=0;
        $TortaSolventeSoyabs=0;
        $TortaSolventeSoyatotaldolar=0;
        $TortaSolventeSoyatotalbs=0;

        //para comparacion

        $TortaSolventeSoyakg1=0;
        $TortaSolventeSoyatm1=0;
        $TortaSolventeSoyadolar1=0;
        $TortaSolventeSoyabs1=0;
        $TortaSolventeSoyatotaldolar1=0;
        $TortaSolventeSoyatotalbs1=0;

        endforeach; 
      
     endforeach;

        $janeData = array();
        $johnData = array();
        
        $janeData=$SoyaDiario;
        $johnData=$SoyaMensual;

        $a=array_sum($janeData);
        $b=array_sum($johnData);

        $avgData  = $SoyaDiario;
        $avdData  = $SoyaMensual;

        $pieData = array(   
                    array(
                        'name' => 'Diario',
                        'y' => $a,
                        'sliced' => true,
                        'selected' => true
                ),
            array('Mensual', $b)
            );
                
        $chartName = 'Combination Chart';
        $mychart = $this->HighCharts->create( $chartName,'column' );
    
        $this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'              => 'combowrapper',  // div to display chart inside
                    'chartWidth'            => 1200,
                    'chartHeight'           => 700,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,100),
                    'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),              
                    'title'                 => 'Gráfica comparativa',
                    'subtitle'              => 'Cantidad comprada de soya',
                    'xAxisLabelsEnabled'    => TRUE,                
                    'xAxisCategories'       => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),                
                    'yAxisTitleText'        => 'Cantidad en (TM)',                                 
                    'enableAutoStep'        => FALSE,
                    'creditsEnabled'        => FALSE                        
                ) 
            );
    
        $janeSeries = $this->HighCharts->addChartSeries();
        $janeSeries->type = 'column';
        $janeSeries->addName('Diario')
            ->addData($janeData);

        $johnSeries = $this->HighCharts->addChartSeries();
        $johnSeries->type = 'column';
        $johnSeries->addName('Mensual')
            ->addData($johnData);       



        $mychart->addSeries($janeSeries);
        $mychart->addSeries($johnSeries);


        
    }
    public function columnaharina($id = null)
    {
        $meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre');
        $this->loadModel('Soya');
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

        $HarinaIntegralSoyakg=0;
        $HarinaIntegralSoyatm=0;
        $HarinaIntegralSoyadolar=0;
        $HarinaIntegralSoyabs=0;
        $HarinaIntegralSoyatotaldolar=0;
        $HarinaIntegralSoyatotalbs=0;

        //para comparacion

        $HarinaIntegralSoyakg1=0;
        $HarinaIntegralSoyatm1=0;
        $HarinaIntegralSoyadolar1=0;
        $HarinaIntegralSoyabs1=0;
        $HarinaIntegralSoyatotaldolar1=0;
        $HarinaIntegralSoyatotalbs1=0;

        $SoyaMensual=array();
        $SoyaDiario=array();

        foreach($distinct_years as $camp => $var): 
        foreach($meses as $tar => $das): 
        foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): 
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) {  
                if (date("Y", $year)==$var) { ?>

                    <?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
                        
                        <?php $HarinaIntegralSoyakg=$HarinaIntegralSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $HarinaIntegralSoyatm=$HarinaIntegralSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $HarinaIntegralSoyadolar=$HarinaIntegralSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $HarinaIntegralSoyabs=$HarinaIntegralSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $HarinaIntegralSoyatotaldolar=$HarinaIntegralSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $HarinaIntegralSoyatotalbs=$HarinaIntegralSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>

                <?php } ?>
            <?php } ?>
    <?php endforeach; ?>
    <?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
            <?php 
        if($soyaproductorproduccion['operacion']=='Compra Grano'){
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
                        <?php $HarinaIntegralSoyakg1=$HarinaIntegralSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $HarinaIntegralSoyatm1=$HarinaIntegralSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $HarinaIntegralSoyadolar1=$HarinaIntegralSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $HarinaIntegralSoyabs1=$HarinaIntegralSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $HarinaIntegralSoyatotaldolar1=$HarinaIntegralSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $HarinaIntegralSoyatotalbs1=$HarinaIntegralSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php endforeach;
        $SoyaMensual[]= $HarinaIntegralSoyatm1;
        $SoyaDiario[]= $HarinaIntegralSoyatm;

        $HarinaIntegralSoyakg=0;
        $HarinaIntegralSoyatm=0;
        $HarinaIntegralSoyadolar=0;
        $HarinaIntegralSoyabs=0;
        $HarinaIntegralSoyatotaldolar=0;
        $HarinaIntegralSoyatotalbs=0;

        //para comparacion

        $HarinaIntegralSoyakg1=0;
        $HarinaIntegralSoyatm1=0;
        $HarinaIntegralSoyadolar1=0;
        $HarinaIntegralSoyabs1=0;
        $HarinaIntegralSoyatotaldolar1=0;
        $HarinaIntegralSoyatotalbs1=0;

        endforeach; 
    endforeach; 


        $janeData = array();
        $johnData = array();
        
        $janeData=$SoyaDiario;
        $johnData=$SoyaMensual;

        $a=array_sum($janeData);
        $b=array_sum($johnData);

        $avgData  = $SoyaDiario;
        $avdData  = $SoyaMensual;

        $pieData = array(   
                    array(
                        'name' => 'Diario',
                        'y' => $a,
                        'sliced' => true,
                        'selected' => true
                ),
            array('Mensual', $b)
            );
                
        $chartName = 'Combination Chart';
        $mychart = $this->HighCharts->create( $chartName,'column' );
    
        $this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'              => 'combowrapper',  // div to display chart inside
                    'chartWidth'            => 1200,
                    'chartHeight'           => 700,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,100),
                    'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),              
                    'title'                 => 'Gráfica comparativa',
                    'subtitle'              => 'Cantidad comprada de soya',
                    'xAxisLabelsEnabled'    => TRUE,                
                    'xAxisCategories'       => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),                
                    'yAxisTitleText'        => 'Cantidad en (TM)',                                 
                    'enableAutoStep'        => FALSE,
                    'creditsEnabled'        => FALSE                        
                ) 
            );
    
        $janeSeries = $this->HighCharts->addChartSeries();
        $janeSeries->type = 'column';
        $janeSeries->addName('Diario')
            ->addData($janeData);

        $johnSeries = $this->HighCharts->addChartSeries();
        $johnSeries->type = 'column';
        $johnSeries->addName('Mensual')
            ->addData($johnData);       



        $mychart->addSeries($janeSeries);
        $mychart->addSeries($johnSeries);


    }
    public function columnarefinado($id = null)
    {
        $this->loadModel('Soya');
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

        $meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre',);


        $AceiteRefinadoSoyakg=0;
        $AceiteRefinadoSoyatm=0;
        $AceiteRefinadoSoyadolar=0;
        $AceiteRefinadoSoyabs=0;
        $AceiteRefinadoSoyatotaldolar=0;
        $AceiteRefinadoSoyatotalbs=0;

        //para comparacion

        $AceiteRefinadoSoyakg1=0;
        $AceiteRefinadoSoyatm1=0;
        $AceiteRefinadoSoyadolar1=0;
        $AceiteRefinadoSoyabs1=0;
        $AceiteRefinadoSoyatotaldolar1=0;
        $AceiteRefinadoSoyatotalbs1=0;


        $SoyaMensual=array();
        $SoyaDiario=array();

        foreach($distinct_years as $camp => $var): 
        foreach($meses as $tar => $das): 
        foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): 
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) {  
                if (date("Y", $year)==$var) { ?>
                   
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA REFINADO') { ?>
                    
                        <?php $AceiteRefinadoSoyakg=$AceiteRefinadoSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteRefinadoSoyatm=$AceiteRefinadoSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteRefinadoSoyadolar=$AceiteRefinadoSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteRefinadoSoyabs=$AceiteRefinadoSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteRefinadoSoyatotaldolar=$AceiteRefinadoSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteRefinadoSoyatotalbs=$AceiteRefinadoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                    
                <?php } ?>
            <?php } ?>
    <?php endforeach; ?>


    <?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
            <?php 
        if($soyaproductorproduccion['operacion']=='Compra Grano'){
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA REFINADO') { ?>
                    
                        <?php $AceiteRefinadoSoyakg1=$AceiteRefinadoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $AceiteRefinadoSoyatm1=$AceiteRefinadoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $AceiteRefinadoSoyadolar1=$AceiteRefinadoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $AceiteRefinadoSoyabs1=$AceiteRefinadoSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $AceiteRefinadoSoyatotaldolar1=$AceiteRefinadoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $AceiteRefinadoSoyatotalbs1=$AceiteRefinadoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                  
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php endforeach;
        $SoyaMensual[]=$AceiteRefinadoSoyatm1;
        $SoyaDiario[]=$AceiteRefinadoSoyatm;

        $AceiteRefinadoSoyakg=0;
        $AceiteRefinadoSoyatm=0;
        $AceiteRefinadoSoyadolar=0;
        $AceiteRefinadoSoyabs=0;
        $AceiteRefinadoSoyatotaldolar=0;
        $AceiteRefinadoSoyatotalbs=0;

        //para comparacion

        $AceiteRefinadoSoyakg1=0;
        $AceiteRefinadoSoyatm1=0;
        $AceiteRefinadoSoyadolar1=0;
        $AceiteRefinadoSoyabs1=0;
        $AceiteRefinadoSoyatotaldolar1=0;
        $AceiteRefinadoSoyatotalbs1=0;


        endforeach; 
    endforeach; 

        $janeData = array();
        $johnData = array();
        
        $janeData=$SoyaDiario;
        $johnData=$SoyaMensual;

        $a=array_sum($janeData);
        $b=array_sum($johnData);

        $avgData  = $SoyaDiario;
        $avdData  = $SoyaMensual;

        $pieData = array(   
                    array(
                        'name' => 'Diario',
                        'y' => $a,
                        'sliced' => true,
                        'selected' => true
                ),
            array('Mensual', $b)
            );
                
        $chartName = 'Combination Chart';
        $mychart = $this->HighCharts->create( $chartName,'column' );
    
        $this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'              => 'combowrapper',  // div to display chart inside
                    'chartWidth'            => 1200,
                    'chartHeight'           => 700,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,100),
                    'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),              
                    'title'                 => 'Gráfica comparativa',
                    'subtitle'              => 'Cantidad comprada de soya',
                    'xAxisLabelsEnabled'    => TRUE,                
                    'xAxisCategories'       => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),                
                    'yAxisTitleText'        => 'Cantidad en (TM)',                                 
                    'enableAutoStep'        => FALSE,
                    'creditsEnabled'        => FALSE                        
                ) 
            );
    
        $janeSeries = $this->HighCharts->addChartSeries();
        $janeSeries->type = 'column';
        $janeSeries->addName('Diario')
            ->addData($janeData);

        $johnSeries = $this->HighCharts->addChartSeries();
        $johnSeries->type = 'column';
        $johnSeries->addName('Mensual')
            ->addData($johnData);       




        $mychart->addSeries($janeSeries);
        $mychart->addSeries($johnSeries);


    }
    public function columnacascarilla($id = null)
    {
        $this->loadModel('Soya');
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

        $meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre',);

        $CascarillaSoyakg=0;
        $CascarillaSoyatm=0;
        $CascarillaSoyadolar=0;
        $CascarillaSoyabs=0;
        $CascarillaSoyatotaldolar=0;
        $CascarillaSoyatotalbs=0;

        //para comparacion

        $CascarillaSoyakg1=0;
        $CascarillaSoyatm1=0;
        $CascarillaSoyadolar1=0;
        $CascarillaSoyabs1=0;
        $CascarillaSoyatotaldolar1=0;
        $CascarillaSoyatotalbs1=0;


        $SoyaMensual=array();
        $SoyaDiario=array();

        foreach($distinct_years as $camp => $var): 
        foreach($meses as $tar => $das): 
        foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): 
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) {  
                if (date("Y", $year)==$var) { ?>

                    <?php if ($soyaproductorderivado['producto']=='CASCARILLA DE SOYA') { ?>
                        
                        <?php $CascarillaSoyakg=$CascarillaSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $CascarillaSoyatm=$CascarillaSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $CascarillaSoyadolar=$CascarillaSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $CascarillaSoyabs=$CascarillaSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $CascarillaSoyatotaldolar=$CascarillaSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $CascarillaSoyatotalbs=$CascarillaSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
         
                <?php } ?>
            <?php } ?>
    <?php endforeach; ?>


    <?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
            <?php 
        if($soyaproductorproduccion['operacion']=='Compra Grano'){
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) { ?>
                <?php if (date("Y", $year)==$var) { ?>
   
                    <?php if ($soyaproductorderivado['producto']=='CASCARILLA DE SOYA') { ?>
                        
                        <?php $CascarillaSoyakg1=$CascarillaSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $CascarillaSoyatm1=$CascarillaSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $CascarillaSoyadolar1=$CascarillaSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $CascarillaSoyabs1=$CascarillaSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $CascarillaSoyatotaldolar1=$CascarillaSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $CascarillaSoyatotalbs1=$CascarillaSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                   
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php endforeach;
        $SoyaMensual[]=$CascarillaSoyatm1;
        $SoyaDiario[]=$CascarillaSoyatm;
        $CascarillaSoyakg=0;
        $CascarillaSoyatm=0;
        $CascarillaSoyadolar=0;
        $CascarillaSoyabs=0;
        $CascarillaSoyatotaldolar=0;
        $CascarillaSoyatotalbs=0;

        //para comparacion

        $CascarillaSoyakg1=0;
        $CascarillaSoyatm1=0;
        $CascarillaSoyadolar1=0;
        $CascarillaSoyabs1=0;
        $CascarillaSoyatotaldolar1=0;
        $CascarillaSoyatotalbs1=0;


        endforeach; 
    endforeach; 


        $janeData = array();
        $johnData = array();
        
        $janeData=$SoyaDiario;
        $johnData=$SoyaMensual;

        $a=array_sum($janeData);
        $b=array_sum($johnData);

        $avgData  = $SoyaDiario;
        $avdData  = $SoyaMensual;

        $pieData = array(   
                    array(
                        'name' => 'Diario',
                        'y' => $a,
                        'sliced' => true,
                        'selected' => true
                ),
            array('Mensual', $b)
            );
                
        $chartName = 'Combination Chart';
        $mychart = $this->HighCharts->create( $chartName,'column' );
    
        $this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'              => 'combowrapper',  // div to display chart inside
                    'chartWidth'            => 1200,
                    'chartHeight'           => 700,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,100),
                    'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),              
                    'title'                 => 'Gráfica comparativa',
                    'subtitle'              => 'Cantidad comprada de soya',
                    'xAxisLabelsEnabled'    => TRUE,                
                    'xAxisCategories'       => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),                
                    'yAxisTitleText'        => 'Cantidad en (TM)',                                 
                    'enableAutoStep'        => FALSE,
                    'creditsEnabled'        => FALSE                        
                ) 
            );
    
        $janeSeries = $this->HighCharts->addChartSeries();
        $janeSeries->type = 'column';
        $janeSeries->addName('Diario')
            ->addData($janeData);

        $johnSeries = $this->HighCharts->addChartSeries();
        $johnSeries->type = 'column';
        $johnSeries->addName('Mensual')
            ->addData($johnData);       


        $mychart->addSeries($janeSeries);
        $mychart->addSeries($johnSeries);


    }
    public function columnacrudo($id = null)
    {
        $this->loadModel('Soya');
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

        $meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre',);

        $AceiteCrudoSoyakg=0;
        $AceiteCrudoSoyatm=0;
        $AceiteCrudoSoyadolar=0;
        $AceiteCrudoSoyabs=0;
        $AceiteCrudoSoyatotaldolar=0;
        $AceiteCrudoSoyatotalbs=0;

        //para comparacion

        $AceiteCrudoSoyakg1=0;
        $AceiteCrudoSoyatm1=0;
        $AceiteCrudoSoyadolar1=0;
        $AceiteCrudoSoyabs1=0;
        $AceiteCrudoSoyatotaldolar1=0;
        $AceiteCrudoSoyatotalbs1=0;

        $SoyaMensual=array();
        $SoyaDiario=array();

        foreach($distinct_years as $camp => $var): 
        foreach($meses as $tar => $das): 
        foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): 
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) {  
                if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA CRUDO') { ?>
                        <?php $AceiteCrudoSoyakg=$AceiteCrudoSoyakg+$soyaproductorderivado['cantidadkg'];?>
                        <?php $AceiteCrudoSoyatm=$AceiteCrudoSoyatm+$soyaproductorderivado['cantidadtm'];?>
                        <?php $AceiteCrudoSoyadolar=$AceiteCrudoSoyadolar+$soyaproductorderivado['preciodolar'];?>
                        <?php $AceiteCrudoSoyabs=$AceiteCrudoSoyabs+$soyaproductorderivado['preciobs'];?>
                        <?php $AceiteCrudoSoyatotaldolar=$AceiteCrudoSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
                        <?php $AceiteCrudoSoyatotalbs=$AceiteCrudoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
    <?php endforeach; ?>


    <?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
            <?php 
        if($soyaproductorproduccion['operacion']=='Compra Grano'){
            $year = strtotime($soyaproductorderivado['fecharegistro']);
            date("Y", $year);
            if (date("m", $year)==$tar) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA CRUDO') { ?>
                        <?php $AceiteCrudoSoyakg1=$AceiteCrudoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $AceiteCrudoSoyatm1=$AceiteCrudoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $AceiteCrudoSoyadolar1=$AceiteCrudoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $AceiteCrudoSoyabs1=$AceiteCrudoSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $AceiteCrudoSoyatotaldolar1=$AceiteCrudoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $AceiteCrudoSoyatotalbs1=$AceiteCrudoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                   
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php endforeach;
        $SoyaMensual[]=$AceiteCrudoSoyatm1;
        $SoyaDiario[]=$AceiteCrudoSoyatm;
        $AceiteCrudoSoyakg=0;
        $AceiteCrudoSoyatm=0;
        $AceiteCrudoSoyadolar=0;
        $AceiteCrudoSoyabs=0;
        $AceiteCrudoSoyatotaldolar=0;
        $AceiteCrudoSoyatotalbs=0;

        //para comparacion

        $AceiteCrudoSoyakg1=0;
        $AceiteCrudoSoyatm1=0;
        $AceiteCrudoSoyadolar1=0;
        $AceiteCrudoSoyabs1=0;
        $AceiteCrudoSoyatotaldolar1=0;
        $AceiteCrudoSoyatotalbs1=0;
     endforeach; 
    endforeach; 

        $janeData = array();
        $johnData = array();
        
        $janeData=$SoyaDiario;
        $johnData=$SoyaMensual;

        $a=array_sum($janeData);
        $b=array_sum($johnData);

        $avgData  = $SoyaDiario;
        $avdData  = $SoyaMensual;

        $pieData = array(   
                    array(
                        'name' => 'Diario',
                        'y' => $a,
                        'sliced' => true,
                        'selected' => true
                ),
            array('Mensual', $b)
            );
                
        $chartName = 'Combination Chart';
        $mychart = $this->HighCharts->create( $chartName,'column' );
    
        $this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'              => 'combowrapper',  // div to display chart inside
                    'chartWidth'            => 1200,
                    'chartHeight'           => 700,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,100),
                    'chartBackgroundColorStops'     => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),              
                    'title'                 => 'Gráfica comparativa',
                    'subtitle'              => 'Cantidad comprada de soya',
                    'xAxisLabelsEnabled'    => TRUE,                
                    'xAxisCategories'       => array( 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),                
                    'yAxisTitleText'        => 'Cantidad en (TM)',                                 
                    'enableAutoStep'        => FALSE,
                    'creditsEnabled'        => FALSE                        
                ) 
            );
    
        $janeSeries = $this->HighCharts->addChartSeries();
        $janeSeries->type = 'column';
        $janeSeries->addName('Diario')
            ->addData($janeData);

        $johnSeries = $this->HighCharts->addChartSeries();
        $johnSeries->type = 'column';
        $johnSeries->addName('Mensual')
            ->addData($johnData);       



        $mychart->addSeries($janeSeries);
        $mychart->addSeries($johnSeries);


    }
}
?>
