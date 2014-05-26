<div class="datos form">

<h3>Seleccione Datos para el Reporte de Venta de Soya</h3>
<?php echo $this->Form->create('Soya', array('action' => 'reporteventafiltro', $this->request->data['Soya']['id'])); ?>
<table>
	  <td style="float: left; width: 40%;">	
<?php
	echo'<br />';
	echo $this->Form->input('Anos', array( 'options' => $distinct_years,'label' => '<h3>Seleccione un año</h3>' ));

?>
<?php
	$options = array(
		1=>'TORTA SOLVENTE DE SOYA', 
		'HARINA INTEGRAL DE SOYA',
		'CASCARILLA DE SOYA',
		'ACEITE DE SOYA REFINADO', 
		'ACEITE DE SOYA CRUDO', 
		'TORTA SOLVENTE DE GIRASOL', 
		'HARINA INTEGRAL DE SOYA',
		'CASCARILLA DE GIRASOL', 
		'ACEITE DE GIRASOL REFINADO', 
		'ACEITE DE GIRASOL CRUDO'
		);
	$selected = array();
	echo $this->Form->input('Productos', array('multiple' => 'checkbox', 'options' => $options, 'selected' => $selected, 'label'=>'<h3>Seleccione Productos</h3>'));
	?>
	  </td>
	  <td style="float: left; width: 40%;">	  
	<?php
	$options1 = array(1 => 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
	$selected1 = array();
	echo $this->Form->input('Meses', array('multiple' => 'checkbox', 'options' => $options1, 'selected' => $selected1, 'label'=>'<h3>Seleccione Meses</h3>'));
    ?>
	  </td>
	</table>
	<?php
	echo $this->Form->submit('Crear Reporte', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
?>
</div>

<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'ventas') ); ?></li>
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
