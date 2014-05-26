<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="soyaproductorcompras form">
<?php echo $this->Form->create('SoyaProductorProduccion', array('enctype' => 'multipart/form-data'));?>
<?php

echo $this->Form->input('excel',array( 'type' => 'file', 'label'=>'Ingrese excel'));
echo $this->Form->end('Submit')
?>
</div>

	<div class="actions">
<h3>Acciones</h3>



<ul>
<li><?php echo $this->Html->link( "Volver Escritorio",   array('controller'=>'institucionalcoholmercadointernos','action'=>'index'),array('escape' => false) ); ?></li>
</ul>
<ul>
<li><?php 
if($this->Session->check('Auth.User')){

echo $this->Html->link( "Cerrar Sesion",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?></li>
</ul>
</div>