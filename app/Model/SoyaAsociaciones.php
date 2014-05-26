<?php
/**
* 
*/
class SoyaAsociaciones extends AppModel
{
	public $useTable = 'soyaasociaciones';
	public $primaryKey = 'id'; 
	public $belongsTo =array('User','SoyaRubro','SoyaSubrubro','Ciudad');
	public $validate = array(
		'nombre' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese Nombre del Rubro',
                'allowEmpty' => false
            )
        ),
    ); 
}

