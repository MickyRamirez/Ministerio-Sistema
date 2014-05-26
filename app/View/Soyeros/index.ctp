<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h2 align="right"><?php echo $soyeros['Soyero']['razonsocial']; ?></h2>
    </div>
</table>

<div class="soyaoperaciones form">
<?php if($soyeros){ ?>
<h3>Soyero Información y Operaciones</h3>
<table>
    <thead>
        <tr>
			<th>Razón social</th>
			<th>Nombre Comercial</th>
			<th>NIT</th>
			<th>Asociación Pertenece</th>
			<th>Teléfono</th>
			<th>Dirección Email</th>

       </tr>
    </thead>
    <tbody> 
	<?php $count=0; ?>
	<?php foreach ($soyeros as $soyero): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>
	<td><?php echo $soyeros['Soyero']['razonsocial']; ?></td>
	<td><?php echo $soyeros['Soyero']['nombrecomercial']; ?></td>
	<td><?php echo $soyeros['Soyero']['nit']; ?></td>
	<td><?php echo $soyeros['Soyero']['asociacion']; ?></td>
	<td><?php echo $soyeros['Soyero']['subtelefono']; ?></td>
	<td><?php echo $soyeros['Soyero']['subemail']; ?></td>

	</tr>
 			<?php endforeach; ?>
        <?php unset($soyero); ?>
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
<li><?php echo $this->Html->link('Ingrese Datos',array('controller' => 'soyasoyeroventas', 'action' => 'index'), array('escape' => false));
		?></li>
</ul>
<ul>
<li><?php echo $this->Html->link('Almacenes',array('controller' => 'depositos', 'action' => 'index'), array('escape' => false));
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

