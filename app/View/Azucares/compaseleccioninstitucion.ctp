<div class="datos form">
  
<h3>Seleccione modo de comparacion</h3>
<?php echo $this->Form->create('Soya', array('url'=>array('controller'=>'azucares', 'action'=>'add'));//array('action' => 'compainforme', $this->request->data['Soya']['id'])); ?>
<table valign="top">
	  <td style="float: left; width: 40%;">
	  	<?php
			echo'<br />';
			echo $this->Form->input('Anos', array( 'options' => $distinct_years,'label' => '<h3>Seleccione un año</h3>' ));

		?>
	  </td>	
	  <td style="float: left; width: 40%;">		
		<?php
			$options = array('MENSUAL', 'SEMESTRAL', 'ANUAL');
			$selected = array(0);
			echo $this->Form->input('Productos', array('multiple' => 'checkbox', 'options' => $options, 'selected' => $selected, 'label'=>'<h3>Seleccione Periodo</h3>'));
		?>
	 </td>	 
</table>
	<?php	
    echo $this->Form->submit('Generar comparacion', array('class' => 'form-submit',  'title' => 'Presione aqui generar la comparacion seleccionada')); 
?>
</div>

<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'compacompra') ); ?></li>
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