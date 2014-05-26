<?php
class CtcRecepcion extends AppModel {
public function getYears()
    {
        return $this->find('all', array('fields' => 'DISTINCT EXTRACT (YEAR FROM DATE (CtcRecepcion.fecharegistro)) as distinct_year'));
    }
	    public $useTable= 'ctcrecepcion';
	    public $primaryKey = 'id';
	    public $belongsTo ='User';
	     public $validate = array(
		

        'razonsocial' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nombre o Razón Social',
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