<?php
class IngenioProduccion extends AppModel {
public function getYears()
    {
        return $this->find('all', array('fields' => 'DISTINCT EXTRACT (YEAR FROM DATE (IngenioEntrega.fecharegistro)) as distinct_year'));
    }
	    public $useTable= 'ingenioproduccion';
	    public $primaryKey = 'id';
	    public $belongsTo = 'User';
	     public $validate = array(
		'refinada' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Cantidad de Azucar Refinada (Quintal 46kg)',
                'allowEmpty' => false
            )
        ),

        'cruda' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Cantidad de Azucar Cruda  (Quintal 46kg',
                'allowEmpty' => false
            )
        ),

        'producciondirecta' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Produccion Directa de Alcohol (Litros)',
                'allowEmpty' => false
            )
        ),

         'subproducto' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Sub-Produccion directa de Alcohol (Litros)',
                'allowEmpty' => false
            )
        ),

         'cachaza' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Cachaza (TM)',
                'allowEmpty' => false
            )
        ),

          'melaza' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Melaza (TM)',
                'allowEmpty' => false
            )
        ),

           'bagaza' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bagazo  (TM)',
                'allowEmpty' => false
            )
        ),

             'perdidafabril' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Porcentaje de Perdida Fabril %',
                'allowEmpty' => false
            )
        ),



     
               		
	
    ); 

}
?>