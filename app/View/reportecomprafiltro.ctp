
<?php 
if(empty($this->request->data)){ ?>
<div class="datos form">

<h3>Seleccione Datos para el Reporte de Compra de soya</h3>
<?php echo $this->Form->create('SoyaProductorCompra');?>

<?php
	echo'<br />';
	echo $this->Form->input('Anos', array( 'options' => $distinct_years,'label' => '<h3>Seleccione un año</h3>' ));

?>
<?php
	$options = array(1 => 'TORTA SOLVENTE DE SOYA', 'HARINA INTEGRAL DE SOYA', 'CASCARILLA DE SOYA', 'ACEITE DE SOYA REFINADO', 'ACEITE DE SOYA CRUDO');
	$selected = array();
	echo $this->Form->input('Productos', array('multiple' => 'checkbox', 'options' => $options, 'selected' => $selected, 'label'=>'<h3>Seleccione Productos</h3>'));
	$options1 = array(1 => 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
	$selected1 = array();
	echo $this->Form->input('Meses', array('multiple' => 'checkbox', 'options' => $options1, 'selected' => $selected1, 'label'=>'<h3>Seleccione Meses</h3>'));
    echo $this->Form->submit('Crear Reporte', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
?>
</div>
<?php }else{ ?>
<div class="datep form">
<?php
$meses = array('1'=>'Enero', '2'=>'Febrero', '3'=>'Marzo', '4'=>'Abril', '5'=>'Mayo', '6'=>'Junio', '7'=>'Julio', '8'=>'Agosto', '9'=>'Septiembre', '10'=>'Octubre', '11'=>'Noviembre', '12'=>'Diciembre',);
?>
	<?php foreach($meses as $tar => $var): ?>
		<?php 
				echo $tar.' '.$var;
		 ?>
	<?php endforeach; ?>
<?php foreach ($this->request->data as $dato): ?>
	<?php foreach($distinct_years as $tar => $year): ?>
		<?php 
			if ($tar==$dato['Anos']) {
				echo $year;
			}
		 ?>
	<?php endforeach; ?>
	<?php foreach($dato['Meses'] as $mes): ?>
		<?php echo $mes; ?>
	<?php endforeach; ?>
	
	<?php foreach($dato['Productos'] as $pro): ?>
		<?php echo $pro; ?>
	<?php endforeach; ?>
<?php endforeach; ?>
</div>
<?php }?>
<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'compras') ); ?></li>
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
