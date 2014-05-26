
<?php
/**
* 
*/
class IngenioAzucarExportacion extends AppModel
{
    public function getYears()
    {
        return $this->find('all', array('fields' => 'DISTINCT EXTRACT (YEAR FROM DATE (IngenioAzucarExportacion.fecharegistro)) as distinct_year'));
    }
	public $useTable = 'ingenioazucarexportacion';
	public $primaryKey = 'id';
	public $belongsTo ='User';

	public $validate = array(

        'destino' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Pais de Destino',
                'allowEmpty' => false
            )
        ),
		'refinada' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Cantidad de Azucar Refinada (Quintal 46kg)',
                'allowEmpty' => false
            )
        ),

        'cruda' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Cantidad de Azucar Cruda (TM)',
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
                'message' => 'Depósito Origen',
                'allowEmpty' => false
            )
        ),


        


     
               		
	
    ); 


}
?>