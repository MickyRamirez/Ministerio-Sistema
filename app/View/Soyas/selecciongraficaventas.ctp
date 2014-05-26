<?php echo $this->Html->css(array('buttons')); ?>
<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'compopcion',$this->data['Soya']['id']) ); ?></li>
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
	<div class="anual form">
	<?php echo $this->Html->link("Gráfica Combinada Torta - Columna", array('action'=>'combinationcompra', $this->data['Soya']['id']), array('class' => 'large yellow awesome')); ?>
	<?php echo $this->Html->link("Gráfica Comparativa Columnas", array('action'=>'columnacompra', $this->data['Soya']['id']), array('class' => 'large orange awesome')); ?>
	<?php echo $this->Html->link("Gráfica Comparativa Área", array('action'=>'areacompra', $this->data['Soya']['id']), array('class' => 'large red awesome')); ?>

	</div>