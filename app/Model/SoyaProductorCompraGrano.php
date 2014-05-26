<?php
/**
* 
*/
class SoyaProductorCompraGrano extends AppModel
{
    public $useTable = 'soyaproductorventa';
    public $primaryKey = 'id';
    public $belongsTo = array('User');
    public $validate = array(
		'producto' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Producto',
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

        'preciodolar' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Precio en Dolares Americanos por tonelada métrica (TM / $us)',
                'allowEmpty' => false
            )
        ),
      	
      	'fecharegistro' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Fecha',
                'allowEmpty' => false
            )
        ),



    ); 

}
?>