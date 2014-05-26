  <?php
/**
* 
*/
class Perfil extends AppModel
{
    public $name = 'Perfil';
    public $useTable = 'perfil';
    public $primaryKey = 'id';
    public $belongsTo = array('User','Soya');

    public function getOleaginosas()
    {
		return $this->find('list', array(
 		 'joins' => array(
    		array(
      			'table' => 'users',
      			'alias' => 'User',
      			'type' => 'LEFT',
      			'conditions' => array(
        		'Perfil.user_id = User.id'
      			)
    		),          
    		array(
      			'table' => 'grupo',
      			'alias' => 'Grupo',
      			'type' => 'LEFT',
      			'conditions' => array(
        		'User.grupo_id = Grupo.id'
      			)
	    	)
  		),
  			'conditions' => array(
    		'Grupo.id' => 5
  		),
  			'order' => array(
    		'Perfil.nombrecomercial' => 'ASC'
  		),
  			'fields' => array(
    		'User.id', 'Perfil.nombrecomercial'
  		),
  			'recursive' => -1
		)); 
	}
}
?>