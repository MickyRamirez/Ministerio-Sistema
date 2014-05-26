
<?php
/**
* 
*/
class IngenioAzucarMercadoInterno extends AppModel
{

    public function getYears()
    {
        return $this->find('all', array('fields' => 'DISTINCT EXTRACT (YEAR FROM DATE (IngenioAzucarMercadoInterno.fecharegistro)) as distinct_year'));
    }
	public $useTable = 'ingenioazucarmercadointerno';
	public $primaryKey = 'id';
	public $belongsTo = 'User';

	public $validate = array(
		'nit' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'CI/NIT',
                'allowEmpty' => false
            )
        ),

        'razonsocial' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nombre o Razón Social',
                'allowEmpty' => false
            )
        ),
        'dptodestino' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Departamento de Destino',
                'allowEmpty' => false
            )
        ),

         'refinada' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Cantidad de Azucar Refinada (Quintal 46 kg)',
                'allowEmpty' => false
            )
        ),

           'cruda' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Cantidad de Azucar Cruda (Quintal 46 kg) ',
                'allowEmpty' => false
            )
        ),

          'precioxqq' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Precio (Bs./QQ de 46 ',
                'allowEmpty' => false
            )
        ),




     
               		
	
    ); 

}
?>