<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class SoyaSubrubro extends AppModel
{
    
    public $useTable = 'soyasubrubro';
    public $primaryKey = 'id';
    public $belongsTo= array('SoyaRubro');
    
    
    public $validate = array(
            'subrubro' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese Nombre del Subrubro',
                'allowEmpty' => false
            )),
                
            'soya_rubro_id' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Selecione un Rubro',
                'allowEmpty' => false
            )
        ),
    ); 
}
