<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="azucarexistencias form">
<?php if($azucarexistencias){ ?>
<h3>REPORTE QUINCENAL EXISTENCIAS EN DEPÓSITOS - AZÚCAR Y ALCOHOL</h3>
<table>
    <thead>
        <tr>
           
            <th><?php echo $this->Paginator->sort('nombredeposito', 'Nombre de Depósito');?>  </th>
            <th><?php echo $this->Paginator->sort('azucar','Cantidad en Depósito de Azucar (Quintal 46 kg)');?></th>
            <th><?php echo $this->Paginator->sort('alcohol','Volumen en Depósito de Alcohol (Litros)');?></th>
            <th><?php echo $this->Paginator->sort('refinada', 'Cantidad en Depósito de Azucar Refinada (Quintal 46 kg)');?></th>
            <th><?php echo $this->Paginator->sort('cruda', 'Cantidad en Depósito de Azucar Cruda (Quintal 46 kg)');?></th>
            <th><?php echo $this->Paginator->sort('total','Cantidad Total en Depósito de Azucar Refinada y Cruda (Quintal 46 kg)');?></th>
            <th><?php echo $this->Paginator->sort('cachaza','Cantidad en Depósito de Cachaza (Quintal 46 kg)');?></th>
            <th><?php echo $this->Paginator->sort('malaza','Cantidad en Depósito de Melaza (Quintal 46 kg)');?></th>
            <th><?php echo $this->Paginator->sort('bagaza','Cantidad en Depósito de Bagazo (Quintal 46 kg)');?></th>
            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha de Registro');?></th>

        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($azucarexistencias as $azucarexistencia): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $azucarexistencia['Deposito']['nombredeposito']; ?></td>
            <td style="text-align: center;"><?php echo $azucarexistencia['AzucarExistencia']['azucar']; ?></td>
            <td style="text-align: center;"><?php echo $azucarexistencia['AzucarExistencia']['alcohol']; ?></td>
            <td style="text-align: center;"><?php echo $azucarexistencia['AzucarExistencia']['refinada']; ?></td>
            <td style="text-align: center;"><?php echo $azucarexistencia['AzucarExistencia']['cruda']; ?></td>
            <td style="text-align: center;"><?php echo $azucarexistencia['AzucarExistencia']['total']; ?></td>
            <td style="text-align: center;"><?php echo $azucarexistencia['AzucarExistencia']['cachaza']; ?></td>
            <td style="text-align: center;"><?php echo $azucarexistencia['AzucarExistencia']['malaza']; ?></td>
            <td style="text-align: center;"><?php echo $azucarexistencia['AzucarExistencia']['bagaza']; ?></td>
            <td style="text-align: center;"><?php echo $this->Time->niceShort($azucarexistencia['AzucarExistencia']['fecharegistro']); ?></td>

        </tr>
        <?php endforeach; ?>
        <?php unset($azucarexistencia); ?>
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
<li><?php echo $this->Html->link( "Agregar Existencia",   array('action'=>'add'),array('escape' => false) ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'view') ); ?></li>
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
