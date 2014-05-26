<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="institucionazucarmercadointernos form">
<?php if($institucionazucarmercadointernos){ ?>
<h3>VENTAS DE AZÚCAR EN MERCADO INTERNO</h3>
<table>
    <thead>
        <tr>
           
    
            <th><?php echo $this->Paginator->sort('nit','CI / NIT');?></th>
            <th><?php echo $this->Paginator->sort('razonsocial','Nombre o Razón Social');?></th>
            <th><?php echo $this->Paginator->sort('dptodestino', 'Departamento de Destino');?></th>
            <th><?php echo $this->Paginator->sort('refinada', 'Cantidad de Azúcar Refinada (Quintal 46 kg)');?></th>
            <th><?php echo $this->Paginator->sort('cruda','Cantidad de Azúcar Cruda (Quintal 46 kg)');?></th>
            <th><?php echo $this->Paginator->sort('total','Cantidad Total de Azúcar Cruda y Refinda(Quintal 46 kg)');?></th>
            <th><?php echo $this->Paginator->sort('precio','Precio (Bs/Quintal de 46 kg)');?></th>

            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha de Registro');?></th>

        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($institucionazucarmercadointernos as $institucionazucarmercadointerno): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>

            <td style="text-align: center;"><?php echo $institucionazucarmercadointerno['InstitucionAzucarMercadoInterno']['nit']; ?></td>
            <td style="text-align: center;"><?php echo $institucionazucarmercadointerno['InstitucionAzucarMercadoInterno']['razonsocial']; ?></td>
            <td style="text-align: center;"><?php echo $institucionazucarmercadointerno['InstitucionAzucarMercadoInterno']['dptodestino']; ?></td>
            <td style="text-align: center;"><?php echo number_format($institucionazucarmercadointerno['InstitucionAzucarMercadoInterno']['refinada']); ?></td>
            <td style="text-align: center;"><?php echo number_format($institucionazucarmercadointerno['InstitucionAzucarMercadoInterno']['cruda']); ?></td>
            <td style="text-align: center;"><?php echo number_format($institucionazucarmercadointerno['InstitucionAzucarMercadoInterno']['total']); ?></td>
            <td style="text-align: center;"><?php echo $this->Number->format(($institucionazucarmercadointerno['InstitucionAzucarMercadoInterno']['precio']), array(
                            'places' => 2,
                            'before' => '',
                            'decimals' => '.',
                            'thousands' => ','
                        ));  ?></td>
            <td style="text-align: center;"><?php echo $this->Time->niceShort($institucionazucarmercadointerno['InstitucionAzucarMercadoInterno']['fecharegistro']); ?></td>

        </tr>
        <?php endforeach; ?>
        <?php unset($institucionazucarmercadointerno); ?>
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