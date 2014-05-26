<?php
class IngenioEntrega extends AppModel {

	    public $useTable= 'ingenioentrega';
	    public $primaryKey = 'id';
	    public $belongsTo = 'User';


public function getYears()
    {
        return $this->find('all', array('fields' => 'DISTINCT EXTRACT (YEAR FROM DATE (IngenioEntrega.fecharegistro)) as distinct_year'));
    }
	     public $validate = array(
		'razonsocial' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nombre de la Institución Cañera',
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

          'volumenlitros' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Volumen de Alcohol (Litros)',
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
                'message' => 'Bagazo (TM)',
                'allowEmpty' => false
            )
        ),
     
     
               		
	
    ); 

}
?>