<?php
class InstitucionAlcoholMercadoInterno extends AppModel {

	    public $useTable= 'institucionalcoholmercadointerno';
	    public $primaryKey = 'id';
	    public $belongsTo ='User';
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

         'alcohollitro' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Volumen de Alcohol (Litros)',
                'allowEmpty' => false
            )
        ),

         'precio' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Precio (Bs/Litros)',
                'allowEmpty' => false
            )
        ),


        
        ); 


}
?>