 <?php
/**
* 
*/
class SoyaCampana extends AppModel
{
    public $useTable = 'soyacampana';
    public $primaryKey = 'id';     
 	public $belongsTo ='User';
    public function getYears()
	{
		return $this->find('all', array('fields' => 'DISTINCT EXTRACT (YEAR FROM DATE (SoyaCampana.fecharegistro)) as distinct_year'));
	} 

    public function getCampana()
	{
		return $this->find('list', array('fields' => array('SoyaCampana.id','SoyaCampana.nomcampana'))); 		
	} 

    public function getIdis()
    {
        return $this->find('all', array('fields' => 'DISTINCT user_id'));
    }

  	public $validate = array(		
         'catcampana' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Seleccione Categoría',
                'allowEmpty' => false
            )
        
        ),
         'nomcampana' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Provea un nombre de campaña',
                'allowEmpty' => false
            )
        
        ),
      
    ); 
	
}

?>