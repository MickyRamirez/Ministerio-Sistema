<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo $instituciones['Institucion']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="soyaoperaciones form">
<?php if($instituciones){ ?>
<h3>Institución Cañera Información y Operaciones</h3>
<table>
    <thead>
        <tr>
			<th>Codigo General Institución</th>
			<th>Razón social</th>
			<th>Nombre Comercial</th>
			<th>NIT</th>
			<th>Teléfono</th>
			<th>Correo Electrónico</th>

       </tr>
    </thead>
    <tbody> 
	<?php $count=0; ?>
	<?php foreach ($instituciones as $institucion): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>
	<td><?php echo $instituciones['Institucion']['codigogeneral']; ?></td>
	<td><?php echo $instituciones['Institucion']['razonsocial']; ?></td>
	<td><?php echo $instituciones['Institucion']['nombrecomercial']; ?></td>
	<td><?php echo $instituciones['Institucion']['nit']; ?></td>
	<td><?php echo $instituciones['Institucion']['subtelefono']; ?></td>
	<td><?php echo $instituciones['Institucion']['subemail']; ?></td>

 			<?php endforeach; ?>
        <?php unset($institucion); ?>
    </tbody>
</table>

<?php 
}else{
     echo "<div class='no-records-found'>No se encontro existencias.</div>";
}
?>
</div>
<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link('Ingrese Datos',array('controller' => 'instituciones', 'action' => 'view'), array('escape' => false));
		?></li>
</ul>
<ul>
<li><?php echo $this->Html->link('Registrar Depósitos',array('controller' => 'depositos', 'action' => 'index'), array('escape' => false));
		?></li>
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

