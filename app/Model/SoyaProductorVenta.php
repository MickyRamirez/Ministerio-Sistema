<?php
/**
* 
*/
class SoyaProductorVenta extends AppModel
{
    public $useTable = 'soyaproductorventa';
    public $primaryKey = 'id';
    public $belongsTo = array('User');
    public function getYears()
	{
		return $this->find('all', array('fields' => 'DISTINCT EXTRACT (YEAR FROM DATE (fecharegistro)) as distinct_year'));
	}

}
?>