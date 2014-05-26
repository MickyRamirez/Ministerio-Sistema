<div id="contenedorr10" style="right:20px; float: right;">
    <h3 align="right"><?php echo $soyeros['Soyero']['razonsocial']; ?></h3> 
</div>
<h1>Area de registro de Soyeros</h1>
<div class="soyeros form">
 
<?php echo $this->Form->create('Soyero');?>
    <fieldset>
        <legend><?php echo ('Agregar Soyero'); ?></legend>
<?php 

        echo $this->Form->input('razonsocial', array('label' => 'Razón social o Nombre empresa', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('nombrecomercial', array('label' => 'Nombre comercial', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('nit', array('label' => 'Número de Identificación tributaria - NIT', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('nummatricula', array('label' => 'Número de matricula de comercio', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('direccionempresa', array('label' => 'Dirección de la empresa', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('departamento', array(
            'options' => array( 
                'La Paz' => 'La Paz', 
                'El Alto' => 'El Alto',
                'Cochabamba' => 'Cochabamba', 
                'Santa Cruz' => 'Santa Cruz',
                'Chuquisaca' => 'Chuquisaca', 
                'Beni' => 'Beni',
                'Pando' => 'Pando', 
                'Potosi' => 'Potosi',
                'Oruro' => 'Oruro', 
                'Tarija' => 'Tarija', 
                
                )
        ));
        echo $this->Form->input('subreferencia', array('label' => 'Otras referencias: (ej.: entre c. 1 y 2, frente al edificio "Azulado" con vidrios azules)', 'maxLength' => 240,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('subtelefono', array('label' => 'Teléfono:', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('subpagweb', array('label' => 'Pagina web', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('subemail', array('label' => 'Dirección Email:', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('rai', array('label' => 'Registro Ambiental Industrial (RAI):', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('asociacion', array('label' => 'Asociación Soyera a la que pertenece', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));

        echo $this->Form->submit('Agregar Soyero', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos Ingenio')); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<?php 
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Cerrar Sesión",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?>