<?php
class IngenioAlcoholExportacion extends AppModel {

	    public $useTable= 'ingenioalcoholexportacion';
	    public $primaryKey = 'id';
	    public $belongsTo = 'User';
	    public $validate = array(

        'paisdestino' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Pais de Destino',
                'allowEmpty' => false
            )
        ),
		'volumenlitros' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Volumen de Alcohol (Litros)',
                'allowEmpty' => false
            )
        ),

        'preciofob' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Precio FOB (Bs/Litro)',
                'allowEmpty' => false
            )
        ),

        
        'deposito' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Depósito Origen',
                'allowEmpty' => false
            )
        ),

  

    ); 

}
?>