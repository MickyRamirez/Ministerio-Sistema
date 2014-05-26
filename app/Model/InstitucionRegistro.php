<?php
class InstitucionRegistro extends AppModel {

	    public $useTable= 'institucionregistro';
	    public $primaryKey = 'id';
                
	     public $validate = array(
		'nombre' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nombre Completo o Razón Social del Proveedor',
                'allowEmpty' => false
            )
        )       
        
    ); 

}
?>