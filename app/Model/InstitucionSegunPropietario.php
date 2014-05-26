<?php
class InstitucionSegunPropietario extends AppModel {

	    public $useTable= 'institucionsegunpropietario';
	    public $primaryKey = 'id';
	    public $belongsTo = 'User';
	     public $validate = array(
		'nombre' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nombre de Ingenio',
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

          'volumenalcohol' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Volumen de alcohol (Litros)',
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

         'begaza' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Bagazo (TM)',
                'allowEmpty' => false
            )
        ),

        ); 



}
?>