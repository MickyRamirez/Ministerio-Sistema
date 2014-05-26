<?php
/**
* 
*/
class Ctc extends AppModel
{
    public $name = 'Perfil';
    public $useTable = 'perfil';
    public $primaryKey = 'id';
    public $validate = array(
        'codigogeneral' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'El codigo general es requerido',
                'allowEmpty' => false
            )),
        'razonsocial' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La razon social es requerida',
                'allowEmpty' => false
            )),
        'nombrecomercial' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'El nombre comercial es requerido',
                'allowEmpty' => false
            )),
        'nit' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'El nit es requerido',
                'allowEmpty' => false
            )),
        'nummatricula' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'El numero de matricula de comercio es requerido',
                'allowEmpty' => false
            )),
        'direccionempresa' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La direccion de la empresa es requerida',
                'allowEmpty' => false
            )),
        'subreferencia' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Debe proporcionar una referencia de la empresa',
                'allowEmpty' => false
            )),
        'subtelefono' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Debe proporcionar un número de contacto de la empresa',
                'allowEmpty' => false
            ))        
        );
}
?>