<?php
class Grafica extends AppModel {
	public $useTable = 'grupo';
    public $primaryKey = 'id';
	Public $hasMany = 'User';
}
?>