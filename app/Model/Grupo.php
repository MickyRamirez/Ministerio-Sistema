<?php
class Grupo extends AppModel {
	public $scaffold;
	public $useTable = 'grupo';
    public $primaryKey = 'id';
	Public $hasMany = 'User';
}
?>