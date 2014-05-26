<div class="soyaproductorderivados form">
<?php if($soyaasociacioneses){ ?>
<h3>Clientes de los Productores de Soya</h3>
<table>
    <thead>
        <tr>
          
            <th><?php echo $this->Paginator->sort('nombre', 'Nombre Asociación');?></th>

            <th><?php echo $this->Paginator->sort('rubro', 'Nombre Asociación');?></th>

            <th><?php echo $this->Paginator->sort('subrubro', 'Nombre Asociación');?></th>
            <th><?php echo $this->Paginator->sort('Ciudad.nom_ciudad', 'Ciudad');?></th>

            <th><?php echo $this->Paginator->sort('fecha','Fecha de Registro');?></th>
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyaasociacioneses  as $soyaasociaciones): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyaasociaciones['SoyaAsociaciones']['nombre']; ?></td>
            <td style="text-align: center;"><?php echo $soyaasociaciones['SoyaRubro']['rubro']; ?></td>
            <td style="text-align: center;"><?php echo $soyaasociaciones['SoyaSubrubro']['subrubro']; ?></td>
            <td style="text-align: center;"><?php echo $soyaasociaciones['Ciudad']['nom_ciudad']; ?></td>
   
            <td style="text-align: center;"><?php echo $this->Time->niceShort($soyaasociaciones['SoyaAsociaciones']['fecha']); ?></td>
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
<li><?php echo $this->Html->link( "Agregar Asociación",   array('action'=>'add') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Reporte",   array('action'=>'reporteasociaciones') ); ?></li>
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

