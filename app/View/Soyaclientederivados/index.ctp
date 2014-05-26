<div class="soyaproductorderivados form">
<?php if($soyaclientederivados){ ?>
<h3>Clientes de las Empresas Oleaginosas para Venta de Grano</h3>
<table>
    <thead>
        <tr>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('id', 'ID');?>  </th>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('razonsocial', 'Nombre o Razón Social');?>  </th>
             <th style="text-align: center;"><?php echo $this->Paginator->sort('nit','Nombre de la Empresa');?></th>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('nit','NIT');?></th>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('nombres', 'Asociación');?></th>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('fecharegistro','Fecha de Registro');?></th>
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyaclientederivados as $soyaclientederivado): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyaclientederivado['SoyaClienteDerivado']['id']; ?></td>
            <td style="text-align: center;"><?php echo $soyaclientederivado['SoyaClienteDerivado']['razonsocial']; ?></td> 
            <td style="text-align: center;"><?php echo $soyaclientederivado['User']['username']; ?></td> 

            <td style="text-align: center;"><?php echo $soyaclientederivado['SoyaClienteDerivado']['nit']; ?></td>
            <td style="text-align: center;"><?php 
            if(empty($soyaclientederivado['SoyaAsociaciones']['nombre']))
            { 
                echo 'No Pertenece a Ninguna Asociación'; 
            }else{ 
                echo $soyaclientederivado['SoyaAsociaciones']['nombre']; 
            } 
            ?></td>
               
            <td style="text-align: center;"><?php echo $this->Time->niceShort($soyaclientederivado['SoyaClienteDerivado']['fecharegistro']); ?></td>
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
<li><?php echo $this->Html->link( "Agregar Clientes",   array('action'=>'add') ); ?></li>
</ul>

<ul>
<li><?php echo $this->Html->link( "Reporte",   array('action'=>'reporteclientes') ); ?></li>
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

