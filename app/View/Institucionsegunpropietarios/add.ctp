<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="segun derecho propietarios form">
 
 <h3>RECEPCIÓN DE CAÑEROS SEGÚN DERECHO DE PROPIETARIO</h3>
<?php echo $this->Form->create('InstitucionSegunPropietario');?>
    <fieldset>

        <?php 
        echo $this->Form->input('nombre', array('label' => 'Nombre de Ingenio','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('refinada', array('label' => 'Cantidad de Azúcar Refinada (Quintal 46 kg)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('cruda', array('label' => 'Cantidad de Azúcar Cruda (Quintal 46 kg)','style'=>'width:500px; height:30px;'));

        echo $this->Form->input('volumenalcohol', array('label' => 'Volumen de alcohol (Litros)','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('cachaza', array('label' => 'Cachaza (TM)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('melaza', array('label' => 'Melaza (TM)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('begaza', array('label' => 'Bagazo (TM)','style'=>'width:500px; height:30px;'));

        echo $this->Form->submit('Agregar Existencia', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atrás",   array('action'=>'index') ); ?></li>
</ul>
<ul>
<li><?php 
if($this->Session->check('Auth.User')){

echo $this->Html->link( "Cerrar Sesión",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?></li>
</ul>

</div>