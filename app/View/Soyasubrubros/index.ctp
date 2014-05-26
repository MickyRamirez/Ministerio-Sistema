<?php ?>


<div class="soyaproductorderivados form">
<?php if($soyasubrubros){ ?>
<h3>Panel de Rubros </h3>
<table>
    <thead>
        <tr>
           
            <th><?php echo $this->Paginator->sort('rubro','Rubro');?></th>            
            <th><?php echo $this->Paginator->sort('subrubro','Subrubro');?></th>
  

        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyasubrubros as $soyasubrubro): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyasubrubro['SoyaRubro']['rubro']; ?></td>
            <td style="text-align: center;"><?php echo $soyasubrubro['SoyaSubrubro']['subrubro']; ?></td>
     
        </tr>
        <?php endforeach; ?>
        <?php unset($soyaproductorderivado); ?>
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
<li><?php echo $this->Html->link( "Agregar Rubro",   array('controller'=>'soyarubros','action'=>'add'),array('escape' => false) ); ?></li>
</ul>

<ul>
<li><?php echo $this->Html->link( "Agregar Subrubro",   array('controller'=>'soyasubrubros','action'=>'add'),array('escape' => false) ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Reporte",   array('action'=>'reporterubros') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('controller'=>'soyas','action'=>'operaciones'),array('escape' => false) ); ?></li>
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
