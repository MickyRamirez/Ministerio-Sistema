<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="institucionalcoholexportaciones form">
<?php if($institucionalcoholexportaciones){ ?>
<h3>REPORTE QUINCENAL - VENTAS DE ALCOHOL EXPORTACION </h3>
<table>
    <thead>
        <tr>
           
            <th><?php echo $this->Paginator->sort('destino', 'País Destino ');?>  </th>
            <th><?php echo $this->Paginator->sort('volumenalcohol','Volumen de Alcohol (Litros)');?></th>
            <th><?php echo $this->Paginator->sort('preciofob','Precio FOB (Bs/TM)');?></th>

            <th><?php echo $this->Paginator->sort('deposito', 'Deposito de Origen');?></th>
            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha Registro');?></th>
           
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($institucionalcoholexportaciones as $institucionalcoholexportacion): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $institucionalcoholexportacion['InstitucionAlcoholExportacion']['destino']; ?></td>
            <td style="text-align: center;"><?php echo number_format($institucionalcoholexportacion['InstitucionAlcoholExportacion']['volumenalcohol']); ?></td>
            <td style="text-align: center;"><?php echo $this->Number->format(($institucionalcoholexportacion['InstitucionAlcoholExportacion']['preciofob']), array(
                            'places' => 2,
                            'before' => '',
                            'decimals' => '.',
                            'thousands' => ','
                        ));  ?></td>

            <td style="text-align: center;"><?php echo $institucionalcoholexportacion['InstitucionAlcoholExportacion']['deposito']; ?></td>
            <td style="text-align: center;"><?php echo $this->Time->niceShort($institucionalcoholexportacion['InstitucionAlcoholExportacion']['fecharegistro']); ?></td>

        </tr>
        <?php endforeach; ?>
        <?php unset($institucionalcoholexportacion); ?>
    </tbody>
</table>
<?php 
    if (count($institucionalcoholexportaciones)<=30) {
      
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
<li><?php echo $this->Html->link( "Agregar Existencia",   array('action'=>'add'),array('escape' => false) ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Agregar por Excel",   array('action'=>'excel'),array('escape' => false) ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('controller'=>'instituciones', 'action'=>'view') ); ?></li>
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