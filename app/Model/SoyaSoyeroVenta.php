<?php
/**
* 
*/
class SoyaSoyeroVenta extends AppModel
{
    public $useTable = 'soyasoyeroventa';
    public $primaryKey = 'id';
    public $belongsTo = 'User';
    public $validate = array(
		'razonsocial' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Razon Social o nombre',
                'allowEmpty' => false
            )
        ),
      	
      	'nit' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'CI / NIT',
                'allowEmpty' => false
            )
        ),

        'fecha' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Fecha',
                'allowEmpty' => false
            )
        ),

         'toneladas' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Cantidad Vendido (TM)',
                'allowEmpty' => false
            )
        ),

         'preciodolar' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Precio $ / TM',
                'allowEmpty' => false
            )
        ),

         'totalgrano' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Cantidad Total adquirido',
                'allowEmpty' => false
            )
        ),



    ); 

}
?>