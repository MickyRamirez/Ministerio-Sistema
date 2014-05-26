<div class="soyacambiodolar form">
<?php if($soyacambiodolares){ ?>
<h3>Cambios de Dolar Efectuados</h3>
<table>
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('cliente','Nombre Usuario');?></th>
            <th><?php echo $this->Paginator->sort('nombre','Nombre');?></th>
            <th><?php echo $this->Paginator->sort('apellido', 'Apellidos');?></th>
  
            <th><?php echo $this->Paginator->sort('asociacion','Cambio Actual Dolar');?></th>

            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha Registro');?></th>
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyacambiodolares as $soyacambiodolar): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyacambiodolar['User']['username']; ?></td>
            <td style="text-align: center;"><?php echo $soyacambiodolar['User']['nombre']; ?></td>
            <td style="text-align: center;"><?php echo $soyacambiodolar['User']['apellido']; ?></td>
            <td style="text-align: center;"><?php echo $soyacambiodolar['SoyaCambioDolar']['cambio']; ?></td>
            <td style="text-align: center;"><?php echo $this->Time->niceShort($soyacambiodolar['SoyaCambioDolar']['fecha']); ?></td>
        </tr>
        <?php endforeach; ?>
        <?php unset($soyaclientederivados); ?>
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
<li><?php echo $this->Html->link( "Agregar",   array('action'=>'add') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Reporte",   array('action'=>'reportecambio') ); ?></li>
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

