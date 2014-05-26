<div class="soyaexistencias form">
<?php if($soyaexistencias){ ?>
<h1>Existencias en deposito</h1>
<table>
    <thead>
        <tr>
           
            <th><?php echo $this->Paginator->sort('nombredeposito', 'Nombre de Deposito');?>  </th>
            <th><?php echo $this->Paginator->sort('tortasolventesoya', 'Cantidad Torta Solvente Soya en (TM)');?>  </th>
            <th><?php echo $this->Paginator->sort('tortasolventegirasol','Cantidad Torta Solvente Girasol en (TM)');?></th>
            <th><?php echo $this->Paginator->sort('harinaintegralsoya','Cantidad Harina Integral Soya en (TM)');?></th>
            <th><?php echo $this->Paginator->sort('harinaintegralgirasol', 'Cantidad Harina Integral Girasol en (TM)');?></th>
            <th><?php echo $this->Paginator->sort('cascarillasoya', 'Cantidad Cascarilla Soya en (TM)');?></th>
            <th><?php echo $this->Paginator->sort('cascarillagirasol','Cantidad Torta Cascarilla Girasol en (TM)');?></th>
            <th><?php echo $this->Paginator->sort('aceitecrudosoya','Cantidad Aceite Crudo en (lt)');?></th>
            <th><?php echo $this->Paginator->sort('aceiterefinadosoya','Cantidad Aceite Refinado Soya en (lt)');?></th>
            <th><?php echo $this->Paginator->sort('aceiterefinadogirasol','Cantidad Aceite Refinado Girasol en (lt)');?></th>
            <th><?php echo $this->Paginator->sort('granosoya','Cantidad Grano de Soya en (TM)');?></th>
            <th><?php echo $this->Paginator->sort('granogirasol','Cantidad Grano de Girasol en (TM)');?></th>
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
            <td style="text-align: center;"><?php echo $soyaexistencia['SoyaExistencia']['tortasolventesoya']; ?></td>
            <td style="text-align: center;"><?php echo $soyaexistencia['SoyaExistencia']['tortasolventegirasol']; ?></td>
            <td style="text-align: center;"><?php echo $soyaexistencia['SoyaExistencia']['harinaintegralsoya']; ?></td>
            <td style="text-align: center;"><?php echo $soyaexistencia['SoyaExistencia']['harinaintegralgirasol']; ?></td>
            <td style="text-align: center;"><?php echo $soyaexistencia['SoyaExistencia']['cascarillasoya']; ?></td>
            <td style="text-align: center;"><?php echo $soyaexistencia['SoyaExistencia']['cascarillagirasol']; ?></td>
            <td style="text-align: center;"><?php echo $soyaexistencia['SoyaExistencia']['aceitecrudosoya']; ?></td>
            <td style="text-align: center;"><?php echo $soyaexistencia['SoyaExistencia']['aceiterefinadosoya']; ?></td>
            <td style="text-align: center;"><?php echo $soyaexistencia['SoyaExistencia']['aceiterefinadogirasol']; ?></td>
            <td style="text-align: center;"><?php echo $soyaexistencia['SoyaExistencia']['granosoya']; ?></td>
            <td style="text-align: center;"><?php echo $soyaexistencia['SoyaExistencia']['granogirasolo']; ?></td>
            <td style="text-align: center;"><?php echo $this->Time->niceShort($soyaexistencia['SoyaExistencia']['fecharegistro']); ?></td>

        </tr>
        <?php endforeach; ?>
        <?php unset($soyaexistencia); ?>
    </tbody>
</table>
<?php 
    if (count($soyaexistencias)<=30) {
      
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

echo $this->Html->link( "Agregar Existencia",   array('action'=>'add'),array('escape' => false) ); 
echo '<br/>';
echo $this->Html->link( "volver escritorio",   array('action'=>'view'),array('escape' => false) ); ?>
<br/>


<?php 
echo $this->Html->link( "Salir",   array('action'=>'logout') ); 
?>