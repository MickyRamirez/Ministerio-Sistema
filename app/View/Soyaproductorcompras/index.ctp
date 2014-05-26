<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h2 align="right"><?php echo 'Bienvenido: '.$productores['Productora']['razonsocial']; ?></h2>
    </div>
</table>

<div class="soyaproductorcompras form">
<?php if($soyaproductorcompras){ ?>
<h3>Compra de Grano</h3>
<table>
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('proveedor', 'Proveedor');?></th>
            <th><?php echo $this->Paginator->sort('nit','CI/NIT');?></th>
            <th><?php echo $this->Paginator->sort('codigograno','Código');?></th>
             <th><?php echo $this->Paginator->sort('SoyaProveedor.regimen','Regimen');?></th>
            <th><?php echo $this->Paginator->sort('producto','Producto');?></th>
            <th><?php echo $this->Paginator->sort('toneladas','Toneladas (TM)');?></th>
            <th><?php echo $this->Paginator->sort('preciodolar','Precio en (TM / $us)');?></th>
            <th><?php echo $this->Paginator->sort('total','Total en $us 	');?></th>
            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha');?></th>
           
            <th><?php echo $this->Paginator->sort('','Editar');?></th>
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyaproductorcompras as $soyaproductorcompra): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyaproductorcompra['SoyaProveedor']['nombre']; ?></td>
            <td style="text-align: center;"><?php echo $soyaproductorcompra['SoyaProveedor']['cionit']; ?></td>
            <td style="text-align: center;"><?php echo $soyaproductorcompra['SoyaProveedor']['codigo']; ?></td> 
            <td style="text-align: center;"><?php echo $soyaproductorcompra['SoyaProveedor']['regimen']; ?></td>           
            <td style="text-align: center;"><?php echo $soyaproductorcompra['SoyaProductorCompra']['producto']; ?></td>
            
            <td style="text-align: center;"><?php echo number_format($soyaproductorcompra['SoyaProductorCompra']['toneladas']); ?></td>
            <td style="text-align: center;"><?php echo $this->Number->format(($soyaproductorcompra['SoyaProductorCompra']['preciodolar']), array(
                            'places' => 2,
                            'before' => '',
                            'decimals' => '.',
                            'thousands' => ','
                        )); ?></td>
            <td style="text-align: center;"><?php echo $this->Number->format(($soyaproductorcompra['SoyaProductorCompra']['total']), array(
                            'places' => 2,
                            'before' => '',
                            'decimals' => '.',
                            'thousands' => ','
                        )); ?></td>
            <td style="text-align: center;"><?php echo $soyaproductorcompra['SoyaProductorCompra']['fecharegistro']; ?></td>
            <td><?php echo $this->Html->link("Editar", array('action'=>'edit', $soyaproductorcompra['SoyaProductorCompra']['id']));?> </td>
        </tr>
        <?php endforeach; ?>
        <?php unset($soyaproductorcompra); ?>
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
<li><?php echo $this->Html->link( "Ingresar Excel",   array('action'=>'excel'),array('escape' => false) ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Volver Escritorio",   array('controller'=>'productores','action'=>'view'),array('escape' => false) ); ?></li>
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
