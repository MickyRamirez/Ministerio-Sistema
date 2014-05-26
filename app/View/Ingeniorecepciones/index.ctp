<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>

<div class="ingeniorecepciones form">
<?php if($ingeniorecepciones){ ?>
 <h3>RECEPCIÓN DE CAÑA</h3>
<table>
    <thead>
        <tr>
           
            <th><?php echo $this->Paginator->sort('nombre', 'Nombre de la Institución Cañera ');?>  </th>
            <th><?php echo $this->Paginator->sort('viaconvenio','Vía-Convenio de Cooperación');?></th>
            <th><?php echo $this->Paginator->sort('viacompra','Vía- Compra Directa de Caña');?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total Caña Recepcionada (TM)');?></th>
            <th><?php echo $this->Paginator->sort('sacarosa', 'Porcentaje de Sacarosa (%)');?></th>

            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha Registro');?></th>

        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($ingeniorecepciones as $ingeniorecepcion): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $ingeniorecepcion['IngenioRecepcion']['nombre']; ?></td>
            <td style="text-align: center;"><?php echo $ingeniorecepcion['IngenioRecepcion']['viaconvenio']; ?></td>
            <td style="text-align: center;"><?php echo $ingeniorecepcion['IngenioRecepcion']['viacompra']; ?></td>
            <td style="text-align: center;"><?php echo number_format($ingeniorecepcion['IngenioRecepcion']['total']); ?></td>
            <td style="text-align: center;"><?php echo $this->Number->format(($ingeniorecepcion['IngenioRecepcion']['sacarosa']), array(
                            'places' => 2,
                            'before' => '',
                            'decimals' => '.',
                            'thousands' => ','
                        )),'%'; ?></td>
            <td style="text-align: center;"><?php echo $this->Time->niceShort($ingeniorecepcion['IngenioRecepcion']['fecharegistro']); ?></td>

        </tr>
        <?php endforeach; ?>
        <?php unset($ingeniorecepcion); ?>
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
<br/>


<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Agregar Existencia",   array('action'=>'add'),array('escape' => false) );  ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Agregar por Excel",   array('action'=>'excel'),array('escape' => false) ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Volver Atrás",   array('controller'=>'ingenios','action'=>'view') ); ?></li>
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