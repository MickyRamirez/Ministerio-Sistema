<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$productores['Productora']['razonsocial']; ?></h3>
        <h3 align="right"><?php echo $this->Time->format('F jS, Y', time());?></h3>
    </div>
</table>

<div class="soya operaciones form">
<?php if($productores){ ?>
<h3>Productora de Soya Operaciones</h3>

<table>
    <thead>
        <tr>
			<th><?php echo 'Nombre Completo o Razón Social';?> </th>
			<th><?php echo 'Nombre Comercial';?> </th>
			<th><?php echo 'NIT';?> </th>
			<th><?php echo 'Teléfono';?> </th>
			<th><?php echo 'Pagina Web';?></th>
       </tr>
    </thead>
    <tbody> 
	<?php $count=0; ?>
	<?php foreach ($productores as $productora): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>
	<td><?php echo $productores['Productora']['razonsocial']; ?></td>
	<td><?php echo $productores['Productora']['nombrecomercial']; ?></td>
	<td><?php echo $productores['Productora']['nit']; ?></td>
	<td><?php echo $productores['Productora']['subtelefono']; ?></td>
	<td><?php echo $productores['Productora']['subpagweb']; ?></td>
	<td><?php echo $productores['Productora']['subemail']; ?></td>
    </tr>
<?php endforeach; ?>
        <?php unset($productora); ?>
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
<li><?php echo $this->Html->link('Ingreso de Datos',array('controller' => 'productores', 'action' => 'view'), array('escape' => false));
		?></li>
</ul>

<ul>
<li><?php echo $this->Html->link('Registro de Depósito',array('controller' => 'depositos', 'action' => 'index'), array('escape' => false));
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

