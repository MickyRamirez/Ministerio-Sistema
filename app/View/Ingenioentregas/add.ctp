 <table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="azucarexistencias form">
<h3>ENTREGA DE PRODUCTOS A CAÑEROS </h3> 
<?php echo $this->Form->create('IngenioEntrega');?>
    <fieldset>
        
        <?php 

        echo $this->Form->input('razonsocial', array( 'options' => $institucionregistro,'empty' => '--Porfavor Seleccione Cliente--','label' => 'Por Favor Seleccione a algun cliente de la lista' ));

        echo $this->Form->input('refinada', array('label' => 'Cantidad de Azucar Refinada (Quintal 46 kg)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('cruda', array('label' => 'Cantidad de Azucar Cruda (Quintal 46 kg)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('volumenlitros', array('label' => 'Volumen de Alcohol (Litros)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('cachaza', array('label' => 'Cachaza (TM)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('melaza', array('label' => 'Melaza (TM)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('bagaza', array('label' => 'Bagazo (TM)','style'=>'width:500px; height:30px;'));


        echo $this->Form->submit('Agregar Entrega', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos de entregas de ingenios')); 
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

