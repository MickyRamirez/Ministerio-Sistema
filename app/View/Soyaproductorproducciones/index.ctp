<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h2 align="right"><?php echo 'Bienvenido: '.$productores['Productora']['razonsocial']; ?></h2> 
    </div>
</table>
<div class="soyaproductorderivados form">
<?php if($soyaproductorproducciones){ ?>
<h3>Registro  Mensual de Producción </h3>
<table>
    <thead>
        <tr>
           
            
            <th><?php echo $this->Paginator->sort('producto','Producto');?></th>
            <th><?php echo $this->Paginator->sort('cantidadkg','Cantidad (Kg)');?></th>
            <th><?php echo $this->Paginator->sort('cantidadtm','Cantidad (TM)');?></th>
            <th><?php echo $this->Paginator->sort('preciodolar','Precio (TM / $)');?></th>
            <th><?php echo $this->Paginator->sort('preciobs','Precio (TM / Bs)');?></th>
            <th><?php echo $this->Paginator->sort('totaldolar','Total($)');?></th>
            <th><?php echo $this->Paginator->sort('totalbs','Total (Bs)');?></th>
            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha');?></th>
           
            <th><?php echo $this->Paginator->sort('','Editar');?></th>






        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyaproductorproducciones as $soyaproductorproduccion): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>

            <td style="text-align: center;"><?php echo $soyaproductorproduccion['SoyaProductorProduccion']['producto']; ?></td>
            <td style="text-align: center;"><?php echo number_format($soyaproductorproduccion['SoyaProductorProduccion']['cantidadkg']); ?></td>
            <td style="text-align: center;"><?php echo number_format($soyaproductorproduccion['SoyaProductorProduccion']['cantidadtm']); ?></td>
            <td style="text-align: center;"><?php echo $this->Number->format(($soyaproductorproduccion['SoyaProductorProduccion']['preciodolar']), array(
                            'places' => 2,
                            'before' => '',
                            'decimals' => '.',
                            'thousands' => ','
                        )); ?></td>
            <td style="text-align: center;"><?php echo $this->Number->format(($soyaproductorproduccion['SoyaProductorProduccion']['preciobs']), array(
                            'places' => 2,
                            'before' => '',
                            'decimals' => '.',
                            'thousands' => ','
                        )); ?></td>
            <td style="text-align: center;"><?php echo $this->Number->format(($soyaproductorproduccion['SoyaProductorProduccion']['totaldolar']), array(
                            'places' => 2,
                            'before' => '',
                            'decimals' => '.',
                            'thousands' => ','
                        )); ?></td>
            <td style="text-align: center;"><?php echo $this->Number->format(($soyaproductorproduccion['SoyaProductorProduccion']['totalbs']), array(
                            'places' => 2,
                            'before' => '',
                            'decimals' => '.',
                            'thousands' => ','
                        )); ?></td>
            <td style="text-align: center;"><?php echo $soyaproductorproduccion['SoyaProductorProduccion']['fecharegistro']; ?></td>
             
             <td><?php echo $this->Html->link("Editar", array('action'=>'edit', $soyaproductorproduccion['SoyaProductorProduccion']['id']));?> </td>


        </tr>
        <?php endforeach; ?>
        <?php unset($soyaproductorproduccion); ?>
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
<li><?php echo $this->Html->link( "Agregar por Excel",   array('action'=>'excel'),array('escape' => false) ); ?></li>
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