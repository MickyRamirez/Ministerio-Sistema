<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo $instituciones['Institucion']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="institucion form">
 <h3>Área de Registro de Datos de Institución Cañera</h3>
<?php echo $this->Form->create('Institucion');?>
    <fieldset>
       	
        <?php 
        echo $this->Form->input('codigogeneral', array('label' => 'Codigo general de Institución', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('razonsocial', array('label' => 'Razón social', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('nombrecomercial', array('label' => 'Nombre Comercial', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('nit', array('label' => 'Número de Identificación tributaria - NIT', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('nummatricula', array('label' => 'Número de matricula de comercio', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('direccionempresa', array('label' => 'Dirección de la empresa', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('subdepartamento', array(
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
                ), 'label'=>' Departamento'
        ));
        echo $this->Form->input('subreferencia', array('label' => 'Otras referencias: (ej.: entre c. 1 y 2, frente al edificio "Azulado" con vidrios azules)', 'maxLength' => 240,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('subtelefono', array('label' => 'Teléfono:', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));

        echo $this->Form->input('subemail', array('label' => 'Correo Electronico:', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('rai', array('label' => 'Registro Ambiental Industrial (RAI):', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->submit('Agregar Institucion', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos Institución')); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php 
if($this->Session->check('Auth.User')){
echo "<br>";
echo $this->Html->link( "Cerrar Sesión",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?></li>
</ul>



</div>

