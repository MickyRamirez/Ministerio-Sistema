<?php
/**
* 
*/
class SoyaProductorDerivado extends AppModel
{
    public $useTable = 'soyaproductorderivados';
    
    public $primaryKey = 'id';  
    public $belongsTo = array('SoyaClienteDerivado','User');
    public function getYears()
	{
		return $this->find('all', array('fields' => 'DISTINCT EXTRACT (YEAR FROM DATE (SoyaProductorDerivado.fecharegistro)) as distinct_year'));
	}
    public function getIdis()
    {
        return $this->find('all', array('fields' => 'DISTINCT user_id'));
    }
    public function getVentas()
    {
        return $this->find('all', array(
         'joins' => array(
            array(
                'table' => 'users',
                'alias' => 'User',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProductorCompra.user_id = User.id'
                )
            ),   
            array(
                'table' => 'soyaproveedor',
                'alias' => 'SoyaProveedor',
                'type' => 'LEFT',
                'conditions' => array(
                'SoyaProveedor.user_id = SoyaProductorCompra.user_id'
                )
            ),
              array(
                'table' => 'perfil',
                'alias' => 'Perfil',
                'type' => 'LEFT',
                'conditions' => array(
                'Perfil.user_id = SoyaProductorCompra.user_id'
                )
            ),
            array(
                'table' => 'grupo',
                'alias' => 'Grupo',
                'type' => 'LEFT',
                'conditions' => array(
                'User.grupo_id = Grupo.id'
                )
            )
        ),
            'conditions' => array(
            'Grupo.id' => 5
        ),
            'order' => array(
            'SoyaProveedor.regimen' => 'ASC'
        ),
            'fields' => array('SoyaProductorCompra.*', 'SoyaProveedor.*','Perfil.nombrecomercial','Perfil.razonsocial','Perfil.user_id'),
            'conditions'=>array('SoyaProductorCompra.soya_proveedor_id = SoyaProveedor.id'),
            'recursive' => -1
        )); 
    }
	public $validate = array(
		'producto' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Producto',
                'allowEmpty' => false
            )
        ),
      	'soya_cliente_derivado_id' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Por Favor Seleccione a algun cliente de la lista',
                'allowEmpty' => false
            )
        ),
      
      	'rubro' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Rubro al que pertenece',
                'allowEmpty' => false
            )
        ),   

        'subrubro' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Subrubro',
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
    ); 

}
?>