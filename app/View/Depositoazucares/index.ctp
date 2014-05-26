<div class="depositos form">
<?php if($depositos){ ?>
<h3>Depositos Registrados</h3>
<table>
    <thead>
        <tr>
           
            <th><?php echo $this->Paginator->sort('nombredeposito', 'Nombre de Deposito');?>  </th>
            <th><?php echo $this->Paginator->sort('producto','Producto');?></th>
            <th><?php echo $this->Paginator->sort('propiedad','Propiedad');?></th>
            <th><?php echo $this->Paginator->sort('encargado', 'Encargado');?></th>
            <th><?php echo $this->Paginator->sort('departamento', 'Departamento');?></th>
            <th><?php echo $this->Paginator->sort('zona','Zona');?></th>
            <th><?php echo $this->Paginator->sort('calle','Calle');?></th>
            <th><?php echo $this->Paginator->sort('telefono','Telefono');?></th>
            <th><?php echo $this->Paginator->sort('capacidadalmacena','Capacidad Almacena');?></th>
            <th><?php echo $this->Paginator->sort('cantidadgalponesoincubadoras','Cantidad de galpones o Incubadoras');?></th>
            <th><?php echo $this->Paginator->sort('capacidadxgalpon','Capacidad por Galpon/Incubadora');?></th>
            <th><?php echo $this->Paginator->sort('cargasxano','Cargas por año');?></th>
            <th><?php echo $this->Paginator->sort('indicemortandad','Indice Mortandad');?></th>
            <th><?php echo $this->Paginator->sort('indicemortandadppbb','Indice Mortandad PPBB');?></th>
            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha Registro');?></th>
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($depositos as $deposito): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['nombredeposito']; ?></td>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['producto']; ?></td>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['propiedad']; ?></td>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['encargado']; ?></td>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['departamento']; ?></td>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['zona']; ?></td>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['calle']; ?></td>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['telefono']; ?></td>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['capacidadalmacena']; ?></td>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['cantidadgalponesoincubadoras']; ?></td>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['capacidadxgalpon']; ?></td>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['cargasxano']; ?></td>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['indicemortandad']; ?></td>
            <td style="text-align: center;"><?php echo $deposito['Deposito']['indicemortandadppbb']; ?></td>
            <td style="text-align: center;"><?php echo $this->Time->niceShort($deposito['Deposito']['fecharegistro']); ?></td>

        </tr>
        <?php endforeach; ?>
        <?php unset($deposito); ?>
    </tbody>
</table>
<?php 
    if (count($depositos)<=30) {
      
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
<li>
<?php echo $this->Html->link( "Agregar Deposito",   array('action'=>'add'),array('escape' => false) );?>
</li>
</ul>
<ul>
<li>
<?php echo $this->Html->link( "Volver Escritorio",   array('action'=>'view') );?>
</li>
</ul>

</div>