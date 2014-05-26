<?php
/**
* 
*/
class SoyaPrecioInternacional extends AppModel
{
    public $useTable = 'soyapreciointernacional';
    public $primaryKey = 'id'; 
    public $belongsTo ='User';
    public $validate = array(
		'pais' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Pais',
                'allowEmpty' => false
            )
        ),

        'precio' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),                
                'message' => 'Ingrese en Dolares $us',
                'allowEmpty' => false
            )
        )        

    ); 
}
?>
