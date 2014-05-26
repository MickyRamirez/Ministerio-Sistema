<div id="contenedorr10" style="right:20px; float: right;">
    <h3 align="right"><?php echo $soyeros['Soyero']['razonsocial']; ?></h3>
</div>
<br/><br/><br/>
<div class="soyasoyeroventas form">

<?php if($soyasoyeroventas){ ?>
<h3>Existencias en almacén</h3>
<table>
    <thead>
        <tr>
           
            <th><?php echo $this->Paginator->sort('razonsocial', 'Nombre de Depósito');?>  </th>
            <th><?php echo $this->Paginator->sort('nit','CI / NIT');?></th>
            <th><?php echo $this->Paginator->sort('fecha','Fecha');?></th>
            <th><?php echo $this->Paginator->sort('toneladas', 'Cantidad Vendido (TM)');?></th>
            <th><?php echo $this->Paginator->sort('preciodolar', 'Precio $ / TM');?></th>
            <th><?php echo $this->Paginator->sort('totalgrano','Total');?></th>
            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha Registro');?></th>

        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyasoyeroventas as $soyasoyeroventa): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyasoyeroventa['SoyaSoyeroVenta']['razonsocial']; ?></td>
            <td style="text-align: center;"><?php echo $soyasoyeroventa['SoyaSoyeroVenta']['nit']; ?></td>
            <td style="text-align: center;"><?php echo $soyasoyeroventa['SoyaSoyeroVenta']['fecha']; ?></td>
            <td style="text-align: center;"><?php echo number_format($soyasoyeroventa['SoyaSoyeroVenta']['toneladas']); ?></td>
            <td style="text-align: center;"><?php echo $this->Number->format(($soyasoyeroventa['SoyaSoyeroVenta']['preciodolar']), array(
                            'places' => 2,
                            'before' => '',
                            'decimals' => '.',
                            'thousands' => ','
                        )); ?></td> 
            <td style="text-align: center;"><?php echo $this->Number->format(($soyasoyeroventa['SoyaSoyeroVenta']['totalgrano']), array(
                            'places' => 2,
                            'before' => '',
                            'decimals' => '.',
                            'thousands' => ','
                        )); ?></td>

            <td style="text-align: center;"><?php echo $this->Time->niceShort($soyasoyeroventa['SoyaSoyeroVenta']['fecharegistro']); ?></td>

        </tr>
        <?php endforeach; ?>
        <?php unset($soyasoyeroventa); ?>
    </tbody>
</table>
<?php 
    if (count($soyasoyeroventas)<=30) {
      
    }else{
        echo $this->Paginator->prev('<< ' . __('anterior ', true), array(), null, array('class'=>'disabled'));
        echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));
        echo $this->Paginator->next(__(' siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));
    }
?>
     
<?php 
}else{
     echo "<div class='no-records-found'>No se encontro existencias.</div>";
 }?>
 </div>



<div class="actions">
<h3>Acciones</h3>
<ul> <li>
<?php echo $this->Html->link( "Agregar Existencia",   array('action'=>'add'),array('escape' => false) ); ?> </li></ul>

<ul> <li>
<?php echo $this->Html->link( "Volver Escritorio",   array('action'=>'view'),array('escape' => false) ); ?></li></ul>



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