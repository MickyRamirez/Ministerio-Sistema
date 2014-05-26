<div class="preciointernacional form">
 <h3>Actualización para precio internacional de la Soya</h3>
<?php echo $this->Form->create('SoyaPrecioInternacional');?>
    <fieldset> 
    <h3 style="font-size: 19px; color:#000000; font-weight:bolder">Precio de Rosario</h3>
        <?php 
        echo $this->Form->input('SoyaPrecioInternacional.1.precio', array(
            'label' => 'Ingrese en Dolares $us',
            'style'=>'width:500px; height:30px;'
            ));
        
        echo $this->Form->input('SoyaPrecioInternacional.1.pais', array('type' => 'hidden', 'value'=>'ROSARIO'));
            ?>
    
    <h3 style="font-size: 19px; color:#000000; font-weight:bolder">Precio de Chicago</h3>
            <?php 
            echo $this->Form->input('SoyaPrecioInternacional.2.precio', array('label' => 'Ingrese en Dolares $us','style'=>'width:500px; height:30px;'));

            echo $this->Form->input('SoyaPrecioInternacional.2.pais', array('type' => 'hidden', 'value'=>'CHICAGO'));
            
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

