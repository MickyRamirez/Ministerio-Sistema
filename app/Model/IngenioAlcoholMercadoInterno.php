<?php
class IngenioAlcoholMercadoInterno extends AppModel {

	    public $useTable= 'ingenioalcoholmercadointerno';
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

           'destino' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Departamento de Destino',
                'allowEmpty' => false
            )
        ),

         'cantidad' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Volumen de Alcohol (Litros)',
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