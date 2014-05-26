
<div class="cambiodolar form">
 <h3>Actualización para cambio de dolar</h3>
<?php echo $this->Form->create('SoyaCambioDolar');?>
    <fieldset>
        <?php 

        echo $this->Form->input('cambio', array('label' => 'Ingrese Cambio Para el Dolar $us','style'=>'width:500px; height:30px;'));
        
        echo $this->Form->submit('Agregar Cambio', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'index') ); ?></li>
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

