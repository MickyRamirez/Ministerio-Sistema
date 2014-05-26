<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="azucarexistencias form">
<?php if($institucionsegunpropietarios){ ?>
<h3>RECEPCIÓN DE CAÑEROS SEGÚN DERECHO DE PROPIETARIO</h3>
<table>
    <thead>
        <tr>
           
            <th><?php echo $this->Paginator->sort('nombre', 'Nombre de Ingenio');?>  </th>
            <th><?php echo $this->Paginator->sort('refinada','Cantidad de Azúcar Refinada (Quintal 46 kg)');?></th>
            <th><?php echo $this->Paginator->sort('cruda','Cantidad de Azúcar Cruda (Quintal 46 kg)');?></th>
            <th><?php echo $this->Paginator->sort('total', 'Cantidad Total de Azúcar Refinada y Cruda (Quintal 46 kg)');?></th>
            <th><?php echo $this->Paginator->sort('volumenalcohol', 'Volumen de Alcohol (Litros)');?></th>
            <th><?php echo $this->Paginator->sort('cachaza','Cachaza (TM)');?></th>
            <th><?php echo $this->Paginator->sort('melaza','Melaza (TM)');?></th>
            <th><?php echo $this->Paginator->sort('begaza','Bagazo (TM)');?></th>
            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha de Registro');?></th>

        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($institucionsegunpropietarios as $institucionsegunpropietario): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $institucionsegunpropietario['InstitucionSegunPropietario']['nombre']; ?></td>
            <td style="text-align: center;"><?php echo number_format($institucionsegunpropietario['InstitucionSegunPropietario']['refinada']); ?></td>
            <td style="text-align: center;"><?php echo number_format($institucionsegunpropietario['InstitucionSegunPropietario']['cruda']); ?></td>
            <td style="text-align: center;"><?php echo number_format($institucionsegunpropietario['InstitucionSegunPropietario']['total']); ?></td>
            <td style="text-align: center;"><?php echo number_format($institucionsegunpropietario['InstitucionSegunPropietario']['volumenalcohol']); ?></td>
            <td style="text-align: center;"><?php echo number_format($institucionsegunpropietario['InstitucionSegunPropietario']['cachaza']); ?></td>
            <td style="text-align: center;"><?php echo number_format($institucionsegunpropietario['InstitucionSegunPropietario']['melaza']); ?></td>
            <td style="text-align: center;"><?php echo number_format($institucionsegunpropietario['InstitucionSegunPropietario']['begaza']); ?></td>
            
            <td style="text-align: center;"><?php echo $this->Time->niceShort($institucionsegunpropietario['InstitucionSegunPropietario']['fecharegistro']); ?></td>

        </tr>
        <?php endforeach; ?>
        <?php unset($institucionsegunpropietario); ?>
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
<li><?php echo $this->Html->link( "Agregar por Excel",   array('action'=>'excel'),array('escape' => false) ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Volver Atrás",   array('controller'=>'instituciones', 'action'=>'view') ); ?></li>
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