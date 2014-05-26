<div class="datos form">

<h3>Seleccione Datos para el Reporte de Compra de Soya por Campaña</h3>
<?php echo $this->Form->create('Soya', array('action' => 'reporteseleccioncampana')); ?>


<table>
	  <td style="float: left; width: 40%;">	  
		<?php
		$selected=array();
			echo'<br />';
			echo $this->Form->input('nomcampana', array('multiple' => 'false', 'options' => $soyas, 'selected' => $selected, 'label'=>'<h3>Seleccione Campañas</h3>'));
		?>
	 </td>
	 
	</table>
	<?php	
    echo $this->Form->submit('Crear Informe', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
?>
</div>

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