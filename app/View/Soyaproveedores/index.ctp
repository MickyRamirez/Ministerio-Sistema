<div class="soyaproductorcompras form">
<?php if($soyaproveedores){ ?>
<h3>Proveedores para Compra de Grano</h3>
<table>
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id','Id de Proveedor');?></th>
            <th><?php echo $this->Paginator->sort('Soya.username','Nombre');?></th>
            
            <th><?php echo $this->Paginator->sort('nombre','Nombre Proveedor o Razón Social');?></th>
            <th><?php echo $this->Paginator->sort('cionit', 'Carnet o NIT');?></th>
            <th><?php echo $this->Paginator->sort('codigo','Codigo de Proveedor');?></th>
            <th><?php echo $this->Paginator->sort('regimen','Regimen Tributario');?></th>
            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha Registro');?></th>
            <th><?php echo $this->Paginator->sort('','Editar');?></th>


        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyaproveedores as $soyaproveedor): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>

            <td style="text-align: center;"><?php echo $soyaproveedor['SoyaProveedor']['id']; ?></td>
            <td style="text-align: center;"><?php echo $soyaproveedor['Soya']['username']; ?></td>
            <td style="text-align: center;"><?php echo $soyaproveedor['SoyaProveedor']['nombre']; ?></td>

            <td style="text-align: center;"><?php echo $soyaproveedor['SoyaProveedor']['cionit']; ?></td>
            <td style="text-align: center;"><?php echo $soyaproveedor['SoyaProveedor']['codigo']; ?></td>
            <td style="text-align: center;"><?php echo $soyaproveedor['SoyaProveedor']['regimen']; ?></td>
            <td style="text-align: center;"><?php echo $soyaproveedor['SoyaProveedor']['fecharegistro']; ?></td>
            <td><?php echo $this->Html->link("Editar", array('action'=>'edit', $soyaproveedor['SoyaProveedor']['id']));?> </td>
        </tr>
        <?php endforeach; ?>
        <?php unset($soyaproveedor); ?>
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
<li><?php echo $this->Html->link( "Agregar Proveedor",   array('action'=>'add'),array('escape' => false) ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Reporte",   array('action'=>'reporteproveedores') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Volver Escritorio",   array('controller'=>'soyas','action'=>'view'),array('escape' => false) ); ?></li>
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
