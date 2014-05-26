
<div class="azucarexistencias form">
<?php if($soyas){ ?>
<h3>Panel de Administración de las empresas oleaginosas</h3>
<table>
    <thead>
        <tr>
		<th><?php echo $this->Paginator->sort('username', 'Nombre de Usuario');?> </th>
		<th><?php echo $this->Paginator->sort('nombre', 'Nombre (s)');?> </th>
		<th><?php echo $this->Paginator->sort('apellido', 'Apellido (s)');?> </th>
		<th><?php echo $this->Paginator->sort('email', 'Correo Electrónico');?></th>
		<th><?php echo $this->Paginator->sort('categoria', 'Categoría');?></th>
		<th><?php echo $this->Paginator->sort('subcategoria', 'Sub-Categoría');?></th>
		<th><?php echo $this->Paginator->sort('razonsocial', 'Nombre o Razón Social');?></th>
		<th><?php echo $this->Paginator->sort('nombrecomercial', 'Nombre Comercial');?></th>
		<th><?php echo $this->Paginator->sort('nit', 'NIT');?></th>
		<th><?php echo $this->Paginator->sort('nummatricula', 'Número Matricula');?></th>
		<th><?php echo $this->Paginator->sort('subdepartamento', 'Ciudad');?></th>
		<th><?php echo $this->Paginator->sort('', 'Estado');?></th>
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
		<td><?php echo $soya['Soya']['email']; ?></td>
		<td><?php echo $soya['Grupo']['categoria']; ?></td>
		<td><?php echo $soya['Grupo']['subcategoria']; ?></td>
		<td><?php echo $soya['Perfil']['razonsocial']; ?></td>
		<td><?php echo $soya['Perfil']['nombrecomercial']; ?></td>
		<td><?php echo $soya['Perfil']['nit']; ?></td>
		<td><?php echo $soya['Perfil']['nummatricula']; ?></td>
		<td><?php echo $soya['Perfil']['subdepartamento']; ?></td>
		<td style="text-align: center;"><?php 
			if($soya['Soya']['aprobacion']==1){
					echo 'Usuario activado';

				} else{
					echo 'Usuario no activado';
				}
				?></td>
  
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
<li><?php echo $this->Html->link( "Registro Oleaginosas Cliente",   array('controller'=>'soyaclientederivados', 'action'=>'index') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Registro Proveedoras de Soya",   array('controller'=>'soyaproveedores', 'action'=>'index') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Registro Asociaciones",   array('controller'=>'soyaasociaciones','action'=>'index') ); ?></li>
</ul>

<ul>
<li><?php echo $this->Html->link( "Registro de Rubros",   array('controller'=>'soyasubrubros', 'action'=>'index') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Registro Cambio Dolar",   array('controller'=>'soyacambiodolares','action'=>'index') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Registro Periodo de Campañas",   array('controller'=>'soyacampanas','action'=>'index') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Precio Internacional Soya",   array('controller'=>'soyapreciointernacionales','action'=>'index') ); ?></li>
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

