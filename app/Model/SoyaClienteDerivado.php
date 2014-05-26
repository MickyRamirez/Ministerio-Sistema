<?php
/**
* 
*/
class SoyaClienteDerivado extends AppModel
{
    public $useTable = 'soyaclientederivado';
    public $primaryKey = 'id';  
    public $belongsTo = array(
    	'SoyaAsociaciones', 'User');

    public $validate = array(
		'razonsocial' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Razón Social del Cliente o Empresa para que Trabaja',
                'allowEmpty' => false
            )
        ),
        'nit' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese su CI o NIT',
                'allowEmpty' => false
            )
        ),
         'grupo' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Seleccioné Empresa o Asociación',
                'allowEmpty' => false
            )
        ),
         'soya_asociaciones_id' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Seleccione Asociación',
                'allowEmpty' => false
            )
        
        ),
      
    ); 
}
?>
