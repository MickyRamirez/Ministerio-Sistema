<?php
/**
* 
*/
class Soyero extends AppModel
{
    public $name = 'Perfil';
    public $useTable = 'perfil';
    public $primaryKey = 'id';  
    public $validate = array(        
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
                'message' => 'El numero de matricula es requerido',
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
                'message' => 'Se necesita una referencia al menos de la empresa',
                'allowEmpty' => false
            )),
        'subtelefono' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Un numero de contacto es requerido',
                'allowEmpty' => false
            )),
        'rai' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'El Registro Ambiental Industrial es requerido',
                'allowEmpty' => false
            )),
        'descripcion_proceso_azucar' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La descripcion del proceso de azucar es requerida',
                'allowEmpty' => false
            )),
        'descripcion_proceso_alcohol' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La descripcion del proceso directo a alcohol es requerida',
                'allowEmpty' => false
            )),
        'balance_energeticoomasic' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'El balance de los productos es requerido',
                'allowEmpty' => false
            )),
        'productos_obtenidos' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Proporcione el detalle de los productos obtenidos',
                'allowEmpty' => false
            )),
        'capacidad_azuoalco' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La capacidad instalada es requerida',
                'allowEmpty' => false
            )),
        'capacidadreal_azuoalcoho' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La capacidad real es requerida',
                'allowEmpty' => false
            ))
        );
}
?>