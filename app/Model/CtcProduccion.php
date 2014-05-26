<?php
class CtcProduccion extends AppModel {
public function getYears()
    {
        return $this->find('all', array('fields' => 'DISTINCT EXTRACT (YEAR FROM DATE (CtcProduccion.fecharegistro)) as distinct_year'));
    }
	    public $useTable= 'ctcproduccion';
	    public $primaryKey = 'id';
	    public $belongsTo = 'User';
	     public $validate = array(
		

        'razonsocial' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Nombre o Razón Social',
                'allowEmpty' => false
            )
        ),

         'perdidacachaza' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Porcentaje de Pérdida Cachaza %',
                'allowEmpty' => false
            )
        ),

         'perdidamelaza' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Porcentaje de Pérdida Melaza %',
                'allowEmpty' => false
            )
        ),


         'perdidabagaza' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Porcentaje de Pérdida Bagazo %',
                'allowEmpty' => false
            )
        ),

           'perdidaindet' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Porcentaje de Pérdida Indeterminada %',
                'allowEmpty' => false
            )
        ),

           'perdidafabril' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Porcentaje de Pérdida Fabril %',
                'allowEmpty' => false
            )
        ),


         


        ); 


}
?>