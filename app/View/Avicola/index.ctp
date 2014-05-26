
<div class="azucarexistencias form">
<?php if($avicolas){ ?>
<h3>Panel de Administracion Avicola</h3>
<table>
    <thead>
        <tr>
		<th><?php echo $this->Paginator->sort('username', 'Nombre de Usuario');?> </th>
		<th><?php echo $this->Paginator->sort('nombre', 'Nombre (s)');?> </th>
		<th><?php echo $this->Paginator->sort('apellido', 'Apellido (s)');?> </th>
		<th><?php echo $this->Paginator->sort('email', 'Email');?></th>
		<th><?php echo $this->Paginator->sort('categoria', 'Categoria');?></th>
		<th><?php echo $this->Paginator->sort('subcategoria', 'Sub-Categoria');?></th>


		<th><?php echo $this->Paginator->sort('Perfil.reproductora', 'Reproductora');?></th>
		<th><?php echo $this->Paginator->sort('Perfil.incubadora', 'Incubadora');?></th>
		<th><?php echo $this->Paginator->sort('Perfil.engorde', 'Granja Engorde');?></th>
		<th><?php echo $this->Paginator->sort('Perfil.ponedora', 'Granja Ponedora');?></th>
		<th><?php echo $this->Paginator->sort('Perfil.matadero', 'Matadero');?></th>
		<th><?php echo $this->Paginator->sort('Perfil.distribuidora', 'Distribuidora');?></th>


		<th><?php echo $this->Paginator->sort('razonsocial', 'Nombre o Razon Social');?></th>
		<th><?php echo $this->Paginator->sort('nombrecomercial', 'Nombre Comercial');?></th>
		<th><?php echo $this->Paginator->sort('nit', 'NIT');?></th>
		<th><?php echo $this->Paginator->sort('nummatricula', 'Numero Matricula');?></th>
		<th><?php echo $this->Paginator->sort('subciudad', 'Ciudad');?></th>
		<th><?php echo $this->Paginator->sort('aprobacion', 'Estado');?></th>
        </tr>
    </thead>
    <tbody> 
	<?php $count=0; ?>
	<?php foreach ($avicolas as $avicola): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>
	<td><?php echo $avicola['Avicola']['username']; ?></td>
	<td><?php echo $avicola['Avicola']['nombre']; ?></td>
	<td><?php echo $avicola['Avicola']['apellido']; ?></td>
	<td><?php echo $avicola['Avicola']['email']; ?></td>
	<td><?php echo $avicola['Grupo']['categoria']; ?></td>
	<td><?php echo $avicola['Grupo']['subcategoria']; ?></td>

	<td><?php echo $avicola['Perfil']['reproductora']; ?></td>
	<td><?php echo $avicola['Perfil']['incubadora']; ?></td>
	<td><?php echo $avicola['Perfil']['engorde']; ?></td>
	<td><?php echo $avicola['Perfil']['ponedora']; ?></td>
	<td><?php echo $avicola['Perfil']['matadero']; ?></td>
	<td><?php echo $avicola['Perfil']['distribuidora']; ?></td>


	<td><?php echo $avicola['Perfil']['razonsocial']; ?></td>
	<td><?php echo $avicola['Perfil']['nombrecomercial']; ?></td>
	<td><?php echo $avicola['Perfil']['nit']; ?></td>
	<td><?php echo $avicola['Perfil']['nummatricula']; ?></td>
	<td><?php echo $avicola['Perfil']['subciudad']; ?></td>
			<td style="text-align: center;"><?php 
			if($avicola['Avicola']['aprobacion']==1){
					echo 'Usuario activado';

				} else{
					echo 'Usuario no activado';
				}
				?></td>

        </tr>
        <?php endforeach; ?>
        <?php unset($avicola); ?>
    </tbody>
</table>

<?php 
		echo "<div class='paging'>"; 
        echo $this->Paginator->prev('<< ' . __('anterior ', true), array(), null, array('class'=>'disabled'));
        echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));
        echo $this->Paginator->next(__(' siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));
		echo "</div>";
?>
     
<?php 
}else{
     echo "<div class='no-records-found'>No se encontro existencias.</div>";
}
?>

</div>





<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php 
if($this->Session->check('Auth.User')){
echo "<br>";
echo $this->Html->link( "Cerrar Sesion",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Alarmas",   array('action'=>'alarma') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Existencias en Granjas",   array('action'=>'general') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Reportes",   array('controller'=>'azucarreportes', 'action'=>'index') ); ?></li>
</ul>
</div>

