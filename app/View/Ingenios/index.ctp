<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>

<div class="ingenios form">
<h3>Ingenio Información y Operaciones</h3>
<table>
    <thead>
    <tr>
<th>Código General Ingenio</th>
<th>Razón social</th>
<th>Nombre Comercial</th>
<th>NIT</th>
<th>Teléfono</th>
<th>Correo Electrónico</th>

</tr>
    </thead>
    <tbody> 
    <?php $count=0; ?>
<?php foreach ($ingenios as $ingenio): ?>
		<?php $count ++;?>
    <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
    <?php endif; ?>

<tr>
	<td><?php echo $ingenios['Ingenio']['codigogeneral']; ?></td>
	<td><?php echo $ingenios['Ingenio']['razonsocial']; ?></td>
	<td><?php echo $ingenios['Ingenio']['nombrecomercial']; ?></td>
	<td><?php echo $ingenios['Ingenio']['nit']; ?></td>
	<td><?php echo $ingenios['Ingenio']['subtelefono']; ?></td>
	<td><?php echo $ingenios['Ingenio']['subemail']; ?></td>

</tr>
<?php endforeach; ?>

        <?php unset($ingenio); ?>
    </tbody>
</table>
</div>      



<div class="actions">             
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link('Ingreso de Datos',array('controller' => 'ingenios', 'action' => 'view'), array('escape' => false));?></li>
</ul>
<ul>
<li><?php echo $this->Html->link('Registro de Depósitos',array('controller' => 'depositos', 'action' => 'index'), array('escape' => false)); ?></li>
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
