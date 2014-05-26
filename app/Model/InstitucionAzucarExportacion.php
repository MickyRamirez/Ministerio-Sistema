<?php
class InstitucionAzucarExportacion extends AppModel {
        public function getYears()
        {
            return $this->find('all', array('fields' => 'DISTINCT EXTRACT (YEAR FROM DATE (InstitucionAzucarExportacion.fecharegistro)) as distinct_year'));
        }
	    public $useTable = 'institucionazucarexportacion';
	    public $primaryKey = 'id';
	    public $belongsTo = 'User';
	     public $validate = array(

            'destino' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'País de Destino',
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
          'preciofob' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Precio FOB (Bs/TM)',
                'allowEmpty' => false
            )
        ),
          'deposito' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Deposito Origen',
                'allowEmpty' => false
            )
        ),



       
       
        ); 

}
?>