<div class="users form">
<h3>Depósitos Actualmente Registrados	</h3>
<table>
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('nombredeposito', 'Nombre Depósito');?>  </th>
            <th><?php echo $this->Paginator->sort('producto', 'Producto');?>  </th>
            <th><?php echo $this->Paginator->sort('propiedad','Tipo De Propiedad');?></th>
            <th><?php echo $this->Paginator->sort('encargado','Encargado');?></th>
            <th><?php echo $this->Paginator->sort('departamento', 'Departamento');?></th>
            <th><?php echo $this->Paginator->sort('capacidadalmacena', 'Capacidad almacenamiento');?></th>
            <th><?php echo $this->Paginator->sort('zona','Zona');?></th>
            <th><?php echo $this->Paginator->sort('calle','Calle');?></th>


        </tr>
    </thead>
    <tbody>
<?php $count=0; ?>
<?php foreach ($depositos as $deposito): ?>
<?php $count ++;?>
  <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
        <td style="text-align: center;"><?php echo $deposito['Deposito']['nombredeposito']; ?></td>
	<td style="text-align: center;"><?php echo $deposito['Deposito']['producto']; ?></td>
	<td style="text-align: center;"><?php echo $deposito['Deposito']['propiedad']; ?></td>
	<td style="text-align: center;"><?php echo $deposito['Deposito']['encargado']; ?></td>
	<td style="text-align: center;"><?php echo $deposito['Deposito']['departamento']; ?></td>
	<td style="text-align: center;"><?php echo $deposito['Deposito']['capacidadalmacena']; ?></td>
	<td style="text-align: center;"><?php echo $deposito['Deposito']['zona']; ?></td>	  
	<td style="text-align: center;"><?php echo $deposito['Deposito']['calle'];	?></td>	
</tr>
<?php endforeach; ?>
    </tbody>
</table>
<?php 
echo "<div class='paging'>"; 
echo $this->Paginator->prev('<< ' . __('anterior ', true), array(), null, array('class'=>'disabled'));?>
<?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php echo $this->Paginator->next(__(' siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));
echo "</div>"; ?>            

</div>      


<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Agregar Nuevo Depósito",   array('action'=>'add'),array('escape' => false) ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'back'));  ?></li>
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
