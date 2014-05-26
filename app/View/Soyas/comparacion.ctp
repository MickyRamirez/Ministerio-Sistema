

<div class="index form">
<?php if($soyas){ ?>
<h3>Panel de Comparaciones</h3>
<table>
    <thead>
        <tr>
		<th><?php echo $this->Paginator->sort('categoria', 'Categoría');?></th>
		<th><?php echo $this->Paginator->sort('subcategoria', 'Sub-Categoría');?></th>
		<th><?php echo $this->Paginator->sort('razonsocial', 'Nombre o Razón Social');?></th>
		<th><?php echo $this->Paginator->sort('nombrecomercial', 'Nombre Comercial');?></th>
		<th><?php echo $this->Paginator->sort('nit', 'NIT');?></th>
		<th><?php echo $this->Paginator->sort('nummatricula', 'Número Matricula');?></th>
		<th><?php echo $this->Paginator->sort('accion', 'Comparación');?></th>
		<th><?php echo $this->Paginator->sort('accion', 'Comparación');?></th>
        </tr>
    </thead>
    <tbody> 
	<?php $count=0; ?>
	<?php foreach ($soyas as $soya): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>

		<td><?php echo $soya['Grupo']['categoria']; ?></td>
		<td><?php echo $soya['Grupo']['subcategoria']; ?></td>
		<td><?php echo $soya['Perfil']['razonsocial']; ?></td>
		<td><?php echo $soya['Perfil']['nombrecomercial']; ?></td>
		<td><?php echo $soya['Perfil']['nit']; ?></td>
		<td><?php echo $soya['Perfil']['nummatricula']; ?></td>
		<td><?php echo $this->Html->link("Compra", array('action'=>'compopcion', $soya['Soya']['id'])); ?> 
			<?php echo $this->Html->link("Reporte", array('action'=>'reportefiltrocompacompra', $soya['Soya']['id'])); ?></td> 
		<td><?php echo $this->Html->link("Venta", array('action'=>'ventopcion', $soya['Soya']['id'])); ?> 
			<?php echo $this->Html->link("Reporte", array('action'=>'reportefiltrocompaventa', $soya['Soya']['id'])); ?></td>  
	</tr> 
        <?php endforeach; ?>
        <?php unset($soya); ?>
    </tbody>
</table>
<?php 
}else{
     echo "<div class='no-records-found'>No se encontro existencias.</div>";
}
?>
<?php
	echo "<div class='paging'>"; 
	echo $this->Paginator->prev('<< ' . __('anterior ', true), array(), null, array('class'=>'disabled'));
	echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));
	echo $this->Paginator->next(__(' siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));
	echo "</div>"

?>
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