<?php
/**
* 
*/
class Deposito extends AppModel
{
    public $name = 'Deposito';
    public $useTable = 'deposito';
    public $belongsTo = 'User';
    public $hasMany = array(
    	'AzucarExistencia',
    	'SoyaExistencia',
    	'AvicolaExistencia'
    	);
    public $primaryKey = 'id';
    public $validate = array(
		'nombredeposito' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nombre de su deposito',
                'allowEmpty' => false
            )
        ),

        'producto' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Tipo de producto que almacena',
                'allowEmpty' => false
            )
        ),

        'propiedad' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'propiedad',
                'allowEmpty' => false
            )
        ),

         'encargado' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nombre completo de encargado',
                'allowEmpty' => false
            )
        ),

         'departamento' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Departamento',
                'allowEmpty' => false
            )
        ),

         'zona' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Zona',
                'allowEmpty' => false
            )
        ),

         'calle' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Calle',
                'allowEmpty' => false
            )
        ),

           'telefono' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Telefono',
                'allowEmpty' => false
            )
        ),

              'capacidadalmacena' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Capacidad de almacenamiento',
                'allowEmpty' => false
            )
        ),



        




    ); 
}
?>