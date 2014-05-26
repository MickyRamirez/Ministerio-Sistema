<div class="azucarexistencias form">
<?php if($azucares){ ?>
<h3>Panel de Administración de Ventas de Productos</h3>
<table>
    <thead>
        <tr>
			<th><?php echo $this->Paginator->sort('username', 'Nombre de Usuario');?> </th>
			<th><?php echo $this->Paginator->sort('Grupo.categoria', 'Categoría');?></th>
			<th><?php echo $this->Paginator->sort('Grupo.subcategoria', 'Sub-Categoría');?></th>
			<th><?php echo $this->Paginator->sort('Perfil.razonsocial', 'Nombre o Razón Social');?></th>
			<th><?php echo $this->Paginator->sort('Perfil.nombrecomercial', 'Nombre Comercial');?></th>
			<th><?php echo $this->Paginator->sort('Perfil.nit', 'NIT');?></th>
			<th><?php echo $this->Paginator->sort('Acciones', 'Año');?></th>
			<th><?php echo $this->Paginator->sort('Acciones', 'Semestre');?></th>
			<th><?php echo $this->Paginator->sort('Acciones', 'Mes');?></th>
        </tr>
    </thead>
    <tbody> 
	<?php $count=0; ?>
	<?php foreach ($azucares as $azucar): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>
			<td style="text-align: center;"><?php echo $azucar['Azucar']['username']; ?></td>
			<td style="text-align: center;"><?php echo $azucar['Grupo']['categoria']; ?></td>
			<td style="text-align: center;"><?php echo $azucar['Grupo']['subcategoria']; ?></td>
			<td style="text-align: center;"><?php echo $azucar['Perfil']['razonsocial']; ?></td>
			<td style="text-align: center;"><?php echo $azucar['Perfil']['nombrecomercial']; ?></td>
			<td style="text-align: center;"><?php echo $azucar['Perfil']['nit']; ?></td>
			<?php if(($azucar['Grupo']['subcategoria'])=='Ingenio Azucarero'): 
						?> 
						<td><?php echo $this->Html->link("Año - Exportación", array('action'=>'vanoexportacioningenio', $azucar['Azucar']['id'])); ?> 
							<?php echo $this->Html->link("Año - Mercado Interno", array('action'=>'vanomercadoingenio', $azucar['Azucar']['id'])); ?>
						</td> 
						<td><?php echo $this->Html->link("Semestre - Exportación", array('action'=>'vsemestreexportacioningenio', $azucar['Azucar']['id'])); ?> 
							<?php echo $this->Html->link("Semestre - Mercado Interno", array('action'=>'vsemestremercadoingenio', $azucar['Azucar']['id'])); ?>
						</td>
						<td><?php echo $this->Html->link("Mes - Exportación", array('action'=>'vmesexportacioningenio', $azucar['Azucar']['id'])); ?> 
						<?php echo $this->Html->link("Mes - Mercado Interno", array('action'=>'vmesmercadoingenio', $azucar['Azucar']['id'])); ?>
						</td>
						<?php
				  else: 
				  		?>
						<td><?php echo $this->Html->link("Año - Exportación", array('action'=>'vanoexportacioninstitucion', $azucar['Azucar']['id'])); ?> 
							<?php echo $this->Html->link("Año - Mercado Interno", array('action'=>'vanomercadoinstitucion', $azucar['Azucar']['id'])); ?>
						</td> 
						<td><?php echo $this->Html->link("Semestre - Exportación", array('action'=>'vsemestreexportacioninstitucion', $azucar['Azucar']['id'])); ?> 
							<?php echo $this->Html->link("Semestre - Mercado Interno", array('action'=>'vsemestremercadoinstitucion', $azucar['Azucar']['id'])); ?>
						</td>
						<td><?php echo $this->Html->link("Mes - Exportación", array('action'=>'vmesexportacioninstitucion', $azucar['Azucar']['id'])); ?> 
						<?php echo $this->Html->link("Mes - Mercado Interno", array('action'=>'vmesmercadoinstitucion', $azucar['Azucar']['id'])); ?>
						</td>
			<?php endif; ?> 
			
        </tr>
        <?php endforeach; ?>
        <?php unset($azucar); ?>
    </tbody>
</table>
<?php 
		echo "<div class='paging'>"; 
        echo $this->Paginator->prev('<< ' . __('anterior ', true), array(), null, array('class'=>'disabled'));
        echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));
        echo $this->Paginator->next(__(' siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));
		echo "</div>";	 
}else{
     echo "<div class='no-records-found'>No se encontro existencias.</div>";
}
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