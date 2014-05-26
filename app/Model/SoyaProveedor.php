<?php
class SoyaProveedor extends AppModel {

	    public $useTable= 'soyaproveedor';
	    public $primaryKey = 'id';
        public $hasMany = array('SoyaProductorCompra' => array(
                'className' => 'SoyaProductorCompra',
                'foreignKey' => 'soya_proveedor_id'
        ));
        public $belongsTo = array(
            'Soya' => array(
                'className' => 'Soya',
                'foreignKey' => 'user_id'
        )
        );
        
	     public $validate = array(
		'nombre' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nombre Completo o Razón Social del Proveedor',
                'allowEmpty' => false
            )
        ),
        'cionit' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese su CI o NIT',
                'allowEmpty' => false
            )
        ),
         'codigo' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Codigo (numérico o alfanumérico)',
                'allowEmpty' => false
            )
        ),
        
    ); 

}
?>