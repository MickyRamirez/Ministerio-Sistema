<?php echo $this->Html->css(array('buttons')); ?>

<div class="actions">
<h3>Accciones</h3>

<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'ventopcion', $this->data['Soya']['id']) ); ?></li>
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


<div class="datos form">
<h3>Graficas Comparativas de las Ventas</h3>
<h3 style="font-size: 19px; color:#000000; font-weight:bolder">TORTA SOLVENTE DE SOYA</h3>
<?php echo $this->Html->link( "Combinacion", array('action'=>'combinaciontorta', $this->data['Soya']['id']), array('class' => 'large yellow awesome')); ?>
	<br />
	<br />
<?php echo $this->Html->link( "Columna",   array('action'=>'columnatorta', $this->data['Soya']['id']), array('class' => 'large orange awesome')); ?>
	<br />
	<br />
<?php echo $this->Html->link( "Area",   array('action'=>'areacompra', $this->data['Soya']['id']), array('class' => 'large red awesome')); ?>
	<br />
	<br />


	<h3 style="font-size: 19px; color:#000000; font-weight:bolder">HARINA INTEGRAL DE SOYA</h3>
<?php echo $this->Html->link( "Combinacion", array('action'=>'combinacionharina', $this->data['Soya']['id']), array('class' => 'large yellow awesome')); ?>
	<br />
	<br />
<?php echo $this->Html->link( "Columna",   array('action'=>'columnaharina', $this->data['Soya']['id']), array('class' => 'large orange awesome')); ?>
	<br />
	<br />
<?php echo $this->Html->link( "Area",   array('action'=>'areaharina', $this->data['Soya']['id']), array('class' => 'large red awesome')); ?>
	<br />
	<br />


	<h3 style="font-size: 19px; color:#000000; font-weight:bolder">ACEITE DE SOYA REFINADO</h3>
<?php echo $this->Html->link( "Combinacion", array('action'=>'combinacionrefinado', $this->data['Soya']['id']), array('class' => 'large yellow awesome')); ?>
	<br />
	<br />
<?php echo $this->Html->link( "Columna",   array('action'=>'columnarefinado', $this->data['Soya']['id']), array('class' => 'large orange awesome')); ?>
	<br />
	<br />
<?php echo $this->Html->link( "Area",   array('action'=>'arearefinado', $this->data['Soya']['id']), array('class' => 'large red awesome')); ?>
	<br />
	<br />



	<h3 style="font-size: 19px; color:#000000; font-weight:bolder">CASCARILLA DE SOYA</h3>
<?php echo $this->Html->link( "Combinacion", array('action'=>'combinacioncascarilla', $this->data['Soya']['id']), array('class' => 'large yellow awesome')); ?>
	<br />
	<br />
<?php echo $this->Html->link( "Columna",   array('action'=>'columnacascarilla', $this->data['Soya']['id']), array('class' => 'large orange awesome')); ?>
	<br />
	<br />
<?php echo $this->Html->link( "Area",   array('action'=>'areacascarilla', $this->data['Soya']['id']), array('class' => 'large red awesome')); ?>
	<br />
	<br />


	<h3 style="font-size: 19px; color:#000000; font-weight:bolder">ACEITE DE SOYA CRUDO </h3>
<?php echo $this->Html->link( "Combinacion", array('action'=>'combinacioncrudo', $this->data['Soya']['id']), array('class' => 'large yellow awesome')); ?>
	<br />
	<br />
<?php echo $this->Html->link( "Columna",   array('action'=>'columnacrudo', $this->data['Soya']['id']), array('class' => 'large orange awesome')); ?>
	<br />
	<br />
<?php echo $this->Html->link( "Area",   array('action'=>'areacrudo', $this->data['Soya']['id']), array('class' => 'large red awesome')); ?>
	<br />
	<br />
</div>
