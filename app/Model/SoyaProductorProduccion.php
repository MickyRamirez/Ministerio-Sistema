<?php
/**
* 
*/
class SoyaProductorProduccion extends AppModel
{
    public $useTable = 'soyaproductorventa';
    public $primaryKey = 'id';
    public $belongsTo = array('User');
    public function getYears()
	{
		return $this->find('all', array('fields' => 'DISTINCT EXTRACT (YEAR FROM DATE (fecharegistro)) as distinct_year'));
	}

	public $validate = array(
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
                'message' => 'Periodo al que corresponde la declaración',
                'allowEmpty' => false
            )
        ),



    ); 
}
?>