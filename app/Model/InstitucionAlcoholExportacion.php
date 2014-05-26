<?php
class InstitucionAlcoholExportacion extends AppModel {

	    public $useTable= 'institucionalcoholexportacion';
	    public $primaryKey = 'id';
	    public $belongsTo = 'User';
	     public $validate = array(
		'destino' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'País de Destino',
                'allowEmpty' => false
            )
        ),
        
        'volumenalcohol' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Volumen de Alcohol (Litros)',
                'allowEmpty' => false
            )
        ),

        'preciofob' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Precio FOB (Bs/TM)',
                'allowEmpty' => false
            )
        ),

         'deposito' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Depósito de Origen',
                'allowEmpty' => false
            )
        ),

        

        ); 


}
?>