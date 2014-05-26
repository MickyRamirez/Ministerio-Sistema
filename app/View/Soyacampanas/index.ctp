<div class="soyacampana form">
<?php if($soyacampana){ ?>
<h3>Periodos de campañas</h3>
<table>
    <thead>
        <tr>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('nomcampana', 'Nombre de la Campaña');?>  </th>

            <th style="text-align: center;"><?php echo $this->Paginator->sort('catcampana','Categoria de la Campaña');?></th>

            <th style="text-align: center;"><?php echo $this->Paginator->sort('fechaini', 'Fecha Inicio de Campaña');?>  </th>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('fechafin','Fecha Fin de Campaña');?></th>

            <th style="text-align: center;"><?php echo $this->Paginator->sort('fecharegistro','Fecha de Registro');?></th>
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyacampana as $soyacampanas): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyacampanas['SoyaCampana']['nomcampana']; ?></td> 
            
            <td style="text-align: center;"><?php echo $soyacampanas['SoyaCampana']['catcampana']; ?></td> 
            
            <td style="text-align: center;"><?php echo $soyacampanas['SoyaCampana']['fechaini']; ?></td> 
            <td style="text-align: center;"><?php echo $soyacampanas['SoyaCampana']['fechafin']; ?></td>
               
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