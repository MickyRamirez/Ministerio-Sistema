<div class="distribuidoras form">
<?php if($distribuidoras){ ?>
<h3>Distribuidora Informacion y Operaciones</h3>
<table>
    <thead>
    <tr>
		<th>Razon social</th>
		<th>Nombre Comercial</th>
		<th>NIT</th>
		<th>Telefono</th>
		<th>Direccion Email</th>

    </tr>
    </thead>
    <tbody> 
    <?php $count=0; ?>
	<?php foreach ($distribuidoras as $distribuidora): ?>
	<?php $count ++;?>
    <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
    <?php endif; ?>
		<td><?php echo $distribuidoras['Distribuidora']['razonsocial']; ?></td>
		<td><?php echo $distribuidoras['Distribuidora']['nombrecomercial']; ?></td>
		<td><?php echo $distribuidoras['Distribuidora']['nit']; ?></td>
		<td><?php echo $distribuidoras['Distribuidora']['subtelefono']; ?></td>
		<td><?php echo $distribuidoras['Distribuidora']['subemail']; ?></td>
</tr>
<?php endforeach; ?>

        <?php unset($distribuidora); ?>
    </tbody>
</table>
<?php 
    if (count($distribuidoras)<=30) {
      
    }else{
        echo $this->Paginator->prev('<< ' . __('anterior ', true), array(), null, array('class'=>'disabled'));
        echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));
        echo $this->Paginator->next(__(' siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));
    }
?>
</div>      



<?php 
}else{
     echo "<div class='no-records-found'>No se encontro existencias.</div>";
 }

?>

<div class="actions">             
<h3>Acciones</h3>
<ul>
<li><?php 
if($this->Session->check('Auth.User')){
echo "<br>";
echo $this->Html->link( "Cerrar sesion",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?></li>
</ul>
<ul>
<li><?php echo $this->Html->link('Ingrese Datos',array('controller' => 'distribuidoras', 'action' => 'view'), array('escape' => false));?></li>
</ul>
</div>
