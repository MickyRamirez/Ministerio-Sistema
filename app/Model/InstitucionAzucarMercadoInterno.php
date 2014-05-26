<?php
class InstitucionAzucarMercadoInterno extends AppModel {
        public function getYears()
        {
            return $this->find('all', array('fields' => 'DISTINCT EXTRACT (YEAR FROM DATE (InstitucionAzucarMercadoInterno.fecharegistro)) as distinct_year'));
        }
	    public $useTable= 'institucionazucarmercadointerno';
	    public $primaryKey = 'id';
	    public $belongsTo = 'User';
	    public $validate = array(
		'nit' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'CI / NIT',
                'allowEmpty' => false
            )
        ),

        'razonsocial' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nombre o Razón Social',
                'allowEmpty' => false
            )
        ),

        'dptodestino' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Departamento de Destino',
                'allowEmpty' => false
            )
        ),

         'refinada' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Cantidad de Azucar Refinada (Quintal 46 kg)',
                'allowEmpty' => false
            )
        ),

         'cruda' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Cantidad de Azucar Cruda (Quintal 46 kg)',
                'allowEmpty' => false
            )
        ),


         'precio' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Precio (Bs/Litro)',
                'allowEmpty' => false
            )
        ),

        ); 

	     

        


     
               		
	

}
?>