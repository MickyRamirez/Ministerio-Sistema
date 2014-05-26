<?php
/**
* 
*/
class AzucarExistencia extends AppModel
{
    public $useTable = 'azucarexistencia';
    public $primaryKey = 'id';  
    public $belongsTo = array('User', 'Deposito');
    //public $virtualFields = array('name' => 'CONCAT(Deposito.producto, ” “, Deposito.propiedad)'););

    public $validate = array(

        'deposito_id' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Depósito (Seleccione un depósito registrado anteriormente o no podra registrar sus existencias)',
                'allowEmpty' => false
            )
        ),
		'azucar' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La cantidad de deposito de azúcar es requerida',
                'allowEmpty' => false
            )
        ),

        'alcohol' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'El Volumen en Depósito de Alcohol es requerido',
                'allowEmpty' => false
            )
        ),

        
        'refinada' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La Cantidad en Depósito de Azucar Refinada es requerida',
                'allowEmpty' => false
            )
        ),

         'cruda' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La Cantidad en Depósito de Azucar Cruda es requerida',
                'allowEmpty' => false
            )
        ),

        
        'cachaza' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La Cantidad en Depósito de Cachaza es requerida',
                'allowEmpty' => false
            )
        ),

            'malaza' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La Cantidad en Depósito de Melaza es requerida',
                'allowEmpty' => false
            )
        ),

        
        'deposito' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'El Depósito Origen es requerido',
                'allowEmpty' => false
            )
        ),
        'bagaza' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'La Cantidad en Depósito de Bagazo es requerida',
                'allowEmpty' => false
            )
        )
  

    ); 




}
?>