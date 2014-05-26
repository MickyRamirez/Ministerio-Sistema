<?php
class Soyareporte extends AppModel {
	public $name ='User';
    public $useTable = 'users';
    public $primaryKey = 'id';  
    public $belongsTo = 'Grupo';
    public $hasOne = 'Perfil';
    public $hasMany = array('Deposito','SoyaExistencia');
	

}
?>