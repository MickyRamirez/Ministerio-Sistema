<?php
/**
* 
*/
class Soya extends AppModel
{
    public $name ='User';
    public $useTable = 'users';
    public $primaryKey = 'id';  
    public $belongsTo = 'Grupo';
    public $hasOne = array('Perfil');
    public $hasMany = array(
	'Deposito',
	'SoyaExistencia',
	'SoyaProductorDerivado',
	'SoyaProductorProduccion',
	'SoyaProductorExportacion',
	'SoyaProductorLocal',
	'SoyaProductorCompra',
	'SoyaProductorCompraGrano',
	'SoyaCambioDolar',
	'SoyaPrecioInternacional',
	'SoyaProveedor',
	'SoyaClienteDerivado'
	);
	public function getOleaginosas()
	{
		return $this->find('list', array(
			'fields'=> array('Soya.id', 'Perfil.nombrecomercial'),
			'conditions' => array('Grupo.categoria' => 'Soya','Grupo.subcategoria' => 'Productor de Oleaginosas')
			));
	}
}
?>
