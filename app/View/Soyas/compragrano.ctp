<div class="azucarexistencias form">
<?php if($soyas){ ?>
<h3>Panel de Control <br/> 
	Compra de Grano Mensual <br/> 
	Productores de Oleaginosas</h3>
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
		<th><?php echo $this->Paginator->sort('Acciones', 'Reporte por Filtro');?></th>
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
		<td>
        <?php echo $this->Html->link("Filtro", array('action'=>'granoano', $soya['Soya']['id'])); ?> 
        </td>
		<td>
        <?php echo $this->Html->link("Año", array('action'=>'granoano', $soya['Soya']['id'])); ?> 
        </td>
        <td>
        <?php echo $this->Html->link("Mes", array('action'=>'granomes', $soya['Soya']['id'])); ?>  
        </td>
        <td>
        <?php echo $this->Html->link("Semestre", array('action'=>'granosemestre', $soya['Soya']['id'])); ?>   
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
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'controlmensual') ); ?></li>
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
