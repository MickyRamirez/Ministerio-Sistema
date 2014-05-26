

<?php
/**
* 
*/

class Azucar extends AppModel
{
 	public $name ='User';
    public $useTable = 'users';
    public $primaryKey = 'id';  
    public $belongsTo = 'Grupo';
    public $hasOne = 'Perfil';
    public $hasMany = array(
    	'IngenioAlcoholExportacion',
        'AzucarExistencia',
        'IngenioRecepcion',
        'IngenioEntrega',
        'IngenioProduccion',
        'IngenioAzucarMercadoInterno',
        'IngenioAzucarExportacion',
        'IngenioAlcoholMercadoInterno',
        'IngenioAlcoholExportacion',
        'CtcRecepcion',
        'CtcProduccion',
        'Deposito',
        'InstitucionAzucarMercadoInterno',
        'InstitucionAzucarExportacion',
        'InstitucionSegunPropietario',
        'InstitucionAlcoholMercadoInterno',
        'InstitucionAlcoholExportacion'
        );

}
?>