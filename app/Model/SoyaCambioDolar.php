<?php
/**
* 
*/
class SoyaCambioDolar extends AppModel
{
    public $useTable = 'soyacambiodolar';
    public $primaryKey = 'id'; 
    public $belongsTo ='User';
     public $validate = array(
		'cambio' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese Cambio Para el Dolar $us',
                'allowEmpty' => false
            )
        ),

    ); 

	public function getDolar()
	{
		return $this->find('first');
	}
	//SELECT * FROM tabla ORDER BY oid DESC LIMIT 1;
}
?>
