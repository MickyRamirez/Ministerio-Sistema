<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class SoyaRubro extends AppModel
{
    
    public $useTable = 'soyarubro';
    public $primaryKey = 'id';    
  // public $hasMany = array('SoyaSubrubro');

    public $validate = array(
            'rubro' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese Nombre de la Asociacion',
                'allowEmpty' => false
            )
        ),
    ); 
}
