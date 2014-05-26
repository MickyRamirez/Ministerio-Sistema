<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="ingenioazucarexportaciones form">
<?php if($ingenioazucarexportaciones){ ?>
<h3>EXPORTACIONES DE AZÚCAR </h3>
<table>
    <thead>
        <tr>           
            <th><?php echo $this->Paginator->sort('destino', 'País Destino');?>  </th>
            <th><?php echo $this->Paginator->sort('refinada','Cantidad de Azucar Refinada (TM)');?></th>
            <th><?php echo $this->Paginator->sort('cruda','Cantidad de Azucar Cruda (TM)');?></th>
            <th><?php echo $this->Paginator->sort('total', 'Cantidad Total de Azucar Refinada y Cruda (TM)');?></th>
            <th><?php echo $this->Paginator->sort('preciofob', 'Precio FOB (Bs/TM)');?></th>
     
            <th><?php echo $this->Paginator->sort('deposito','Depósito Origen');?></th>
            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha Registro');?></th>
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($ingenioazucarexportaciones as $ingenioazucarexportacion): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $ingenioazucarexportacion['IngenioAzucarExportacion']['destino']; ?></td>
            <td style="text-align: center;"><?php echo number_format($ingenioazucarexportacion['IngenioAzucarExportacion']['refinada']); ?></td>
            <td style="text-align: center;"><?php echo number_format($ingenioazucarexportacion['IngenioAzucarExportacion']['cruda']); ?></td>
            <td style="text-align: center;"><?php echo number_format($ingenioazucarexportacion['IngenioAzucarExportacion']['total']); ?></td>
            <td style="text-align: center;"><?php echo $this->Number->format(($ingenioazucarexportacion['IngenioAzucarExportacion']['preciofob']), array(
                            'places' => 2,
                            'before' => '',
                            'decimals' => '.',
                            'thousands' => ','
                        )); ?></td>
     
            <td style="text-align: center;"><?php echo $ingenioazucarexportacion['IngenioAzucarExportacion']['deposito']; ?></td>

            <td style="text-align: center;"><?php echo $this->Time->niceShort($ingenioazucarexportacion['IngenioAzucarExportacion']['fecharegistro']); ?></td>

        </tr>
        <?php endforeach; ?>
        <?php unset($ingenioazucarexportacion); ?>
    </tbody>
</table>
<?php 

echo "<div class='paging'>"; 
echo $this->Paginator->prev('<< ' . __('anterior ', true), array(), null, array('class'=>'disabled'));?>
<?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php echo $this->Paginator->next(__(' siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));
echo "</div>"; ?>      

</div>      



<?php 
}else{
     echo "<div class='no-records-found'>No se encontro existencias.</div>";
 }

?>

<div class="actions">
<h3>Acciones</h3>
<ul>
<ul>
<li><?php echo $this->Html->link( "Agregar Existencia",   array('action'=>'add'),array('escape' => false) );  ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Agregar por Excel",   array('action'=>'excel'),array('escape' => false) ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Volver Atrás",   array('controller'=>'ingenios','action'=>'view')); ?></li>
</ul>

<li><?php 
if($this->Session->check('Auth.User')){

echo $this->Html->link( "Cerrar Sesión",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?></li>
</ul>


</div>
