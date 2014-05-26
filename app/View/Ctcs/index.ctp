<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ctcs['Ctc']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="ctcsoperaciones form">
<?php if($ctcs){ ?>
<h3>Control Técnico Cañero Información y Operaciones</h3>
<table>
    <thead>
        <tr>
			<th>Codigo General Ctc</th>
			<th>Razón social</th>
			<th>Nombre Comercial</th>
			<th>NIT</th>
			<th>Teléfono</th>
			<th>Dirección Email</th>

		</tr>
    </thead>
    <tbody> 
    <?php $count=0; ?>
	<?php foreach ($ctcs as $ctc): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>
	<tr>
		<td><?php echo $ctcs['Ctc']['codigogeneral']; ?></td>
		<td><?php echo $ctcs['Ctc']['razonsocial']; ?></td>
		<td><?php echo $ctcs['Ctc']['nombrecomercial']; ?></td>
		<td><?php echo $ctcs['Ctc']['nit']; ?></td>
		<td><?php echo $ctcs['Ctc']['subtelefono']; ?></td>
		<td><?php echo $ctcs['Ctc']['subemail']; ?></td>
		<td></td>
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
<li><?php echo $this->Html->link('Ingreso datos',array('controller' => 'ctcs', 'action' => 'view'), array('escape' => false));?></li>
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


</ul>
</div>

