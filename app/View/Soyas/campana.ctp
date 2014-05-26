<div class="soyacampana form">
<?php if($soyacampana){ ?>
<h3>Periodos de campañas</h3>
<table>
    <thead>
        <tr>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('id', 'ID');?>  </th>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('fechainiinv', 'Fecha Inicio de Invierno');?>  </th>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('fechafininv','Fecha Fin de Invierno');?></th>

            <th style="text-align: center;"><?php echo $this->Paginator->sort('fechainiver', 'Fecha Inicio de Verano');?>  </th>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('fechafinver','Fecha Fin de Verano');?></th>

            <th style="text-align: center;"><?php echo $this->Paginator->sort('fecharegistro','Fecha de Registro');?></th>
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyacampana as $soyacampanas): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyacampanas['SoyaCampana']['id']; ?></td>
            <td style="text-align: center;"><?php echo $soyacampanas['SoyaCampana']['fechainiinv']; ?></td> 
            <td style="text-align: center;"><?php echo $soyacampanas['SoyaCampana']['fechafininv']; ?></td> 
            
            <td style="text-align: center;"><?php echo $soyacampanas['SoyaCampana']['fechainiver']; ?></td> 
            <td style="text-align: center;"><?php echo $soyacampanas['SoyaCampana']['fechafinver']; ?></td>
               
            <td style="text-align: center;"><?php echo $this->Time->niceShort($soyacampanas['SoyaCampana']['fecharegistro']); ?></td>
        </tr>
        <?php endforeach; ?>
        
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
     echo "<div class='no-records-found'>No se encontro ningun periodo.</div>";
 }
?>

<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Asignar Nuevo Periodo",   array('action'=>'add') ); ?></li>
</ul>

<ul>
<li><?php echo $this->Html->link( "Reporte",   array('action'=>'reportecampana') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('controller'=>'soyas','action'=>'operaciones') ); ?></li>
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