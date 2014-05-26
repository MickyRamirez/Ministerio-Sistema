
<div class="azucarexistencias form">
<?php if($soyas){ ?>
<h3>Panel de control de ventas <br/>
	Productores de oleaginosas</h3>
<table>
    <thead>
        <tr>
		<th><?php echo $this->Paginator->sort('username', 'Nombre de Usuario');?> </th>
		<th><?php echo $this->Paginator->sort('nombre', 'Nombre (s)');?> </th>
		<th><?php echo $this->Paginator->sort('apellido', 'Apellido (s)');?> </th>
		<th><?php echo $this->Paginator->sort('categoria', 'Categoría');?></th>
		<th><?php echo $this->Paginator->sort('subcategoria', 'Sub-Categoría');?></th>
		<th><?php echo $this->Paginator->sort('razonsocial', 'Nombre o Razón Social');?></th>
		<th><?php echo $this->Paginator->sort('nombrecomercial', 'Nombre Comercial');?></th>
		<th><?php echo $this->Paginator->sort('Acciones', 'Reporte con Filtros');?></th>
		<th><?php echo $this->Paginator->sort('Productos', 'Productos');?></th>
		<th><?php echo $this->Paginator->sort('Acciones', 'Año');?></th>
		<th><?php echo $this->Paginator->sort('Acciones', 'Mes');?></th>
		<th><?php echo $this->Paginator->sort('Acciones', 'Semestre');?></th>

        </tr>
    </thead>
    <tbody> 
	<?php $count=0; ?>
	<?php foreach ($soyas as $soya): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>
		<td><?php echo $soya['Soya']['username']; ?></td>
		<td><?php echo $soya['Soya']['nombre']; ?></td>
		<td><?php echo $soya['Soya']['apellido']; ?></td>
		<td><?php echo $soya['Grupo']['categoria']; ?></td>
		<td><?php echo $soya['Grupo']['subcategoria']; ?></td>
		<td><?php echo $soya['Perfil']['razonsocial']; ?></td>
		<td><?php echo $soya['Perfil']['nombrecomercial']; ?></td>
		<td><?php echo $this->Html->link("Filtros", array('action'=>'reporteseleccionuno', $soya['Soya']['id'])); ?> </td>
		<td><?php echo $this->Html->link("Productos", array('action'=>'vproductos', $soya['Soya']['id'])); ?>  </td> 
		<td>
        <?php echo $this->Html->link("Año", array('action'=>'vano', $soya['Soya']['id'])); ?> 
        </td>
        <td>
        <?php echo $this->Html->link("Mes", array('action'=>'vmes', $soya['Soya']['id'])); ?> 
        </td>
        <td>
        <?php echo $this->Html->link("Semestre", array('action'=>'vsemestre', $soya['Soya']['id'])); ?> 
        </td>
  
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
<li><?php echo $this->Html->link( "Producción Soya",   array('action'=>'empresasoya') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Producción Girasol",   array('action'=>'empresagirasol') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Filtro de Ventas",   array('action'=>'seleccionventa') ); ?></li>
</ul>


<ul>
<li><?php echo $this->Html->link( "Volver Escritorio",   array('action'=>'index') ); ?></li>
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
