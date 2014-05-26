<?php
/**
* 
*/
class SoyaExistencia extends AppModel
{
    public $useTable = 'soyaexistencia';
    public $primaryKey = 'id';  
    public $belongsTo = array('User', 'Deposito');
    public $validate = array(
		'deposito_id' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => '<h2>Deposito (Selecciones un deposito registrado anteriormente o no podra registrar sus existencias)</h2>',
                'allowEmpty' => false
            )
        ),

        'producto' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Tipo de Producto',
                'allowEmpty' => false
            )
        ),

        'cantidadtm' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Cantidad en tonelada(s) metrica(s) del producto  (TM)',
                'allowEmpty' => false
            )
        ),




    ); 
 
}
?>