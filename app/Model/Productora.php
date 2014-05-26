<?php
/**
* 
*/
class Productora extends AppModel
{
    public $name = 'Perfil';
    public $useTable = 'perfil';
    public $primaryKey = 'id'; 

     
     
    public $validate = array(
        'razonsocial' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Indique la razón social',
                'allowEmpty' => false
            )
        ),
       'nombrecomercial' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Escoja un nombre comercial',
                'allowEmpty' => false
            )
        ),
         
        'nit' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Introduzca su NIT',
                'allowEmpty' => false
            )
        ),



         'nummatricula' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Introduzca el número de su matricula',
                'allowEmpty' => false
            )
        ),
         'direccionempresa' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La zona de la empresa es requerida',
                'allowEmpty' => false
            )
        ),
         'subdireccion' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La calle de la empresa es requerida',
                'allowEmpty' => false
            )
        ),
         'subcalle' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'El numero de la empresa es requerido',
                'allowEmpty' => false
            )
        ),
        'subreferencia' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La direccion de la empresa es requerida',
                'allowEmpty' => false
            )
        ),
          'rai' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Introduzca el número de registro ambiental industrial',
                'allowEmpty' => false
            )
        ),
         
    ); 
}
?>