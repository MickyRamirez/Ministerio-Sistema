<?php 
class IngenioRecepcion extends AppModel {
public function getYears()
    {
        return $this->find('all', array('fields' => 'DISTINCT EXTRACT (YEAR FROM DATE (IngenioRecepcion.fecharegistro)) as distinct_year'));
    }
	    public $useTable= 'ingeniorecepcion';
	    public $primaryKey = 'id';
	    public $belongsTo = array('User', 'InstitucionRegistro');

	    public $validate = array(
		'nombre' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nombre de la Institución Cañera',
                'allowEmpty' => false
            )
        ),
       
        'total' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Total Caña Recepcionada (TM)',
                'allowEmpty' => false
            )
        ), 
        
          'sacarosa' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Porcentaje de Sacarosa (%)',
                'allowEmpty' => false
            )
        ), 
     
               		
	
    ); 

}
?>