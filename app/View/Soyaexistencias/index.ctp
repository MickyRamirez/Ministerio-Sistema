<div class="soyaexistencias form">
<?php if($soyaexistencias){ ?>
<h3>Existencias de Productos Adentro de Depósitos</h3>
<table>
    <thead>
        <tr>
           
            <th><?php echo $this->Paginator->sort('nombredeposito', 'Nombre de Depósito');?>  </th>
            <th><?php echo $this->Paginator->sort('producto','Producto');?></th>
            <th><?php echo $this->Paginator->sort('cantidadtm','Cantidad (TM)');?></th>
            
            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha Registro');?></th>

        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyaexistencias as $soyaexistencia): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyaexistencia['Deposito']['nombredeposito']; ?></td>
             <td style="text-align: center;"><?php echo $soyaexistencia['Deposito']['producto']; ?></td>
             <td style="text-align: center;"><?php echo $soyaexistencia['SoyaExistencia']['cantidadtm']; ?></td>
            
            <td style="text-align: center;"><?php echo $this->Time->niceShort($soyaexistencia['SoyaExistencia']['fecharegistro']); ?></td>

        </tr>
        <?php endforeach; ?>
        <?php unset($soyaexistencia); ?>
    </tbody>
</table>
<?php 
    echo "<div class='paging'>"; 
        echo $this->Paginator->prev('<< ' . __('anterior ', true), array(), null, array('class'=>'disabled'));
        echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));
        echo $this->Paginator->next(__(' siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));
    echo "</div>"; 
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
<li><?php echo $this->Html->link( "Agregar Existencia",   array('action'=>'add'),array('escape' => false) ); ?></li>
</ul>

<ul>
<li><?php echo $this->Html->link( "Volver Escritorio",   array('action'=>'view'),array('escape' => false) ); ?></li>
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