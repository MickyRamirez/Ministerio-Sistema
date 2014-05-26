<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>

<div class="actions" style="padding-left: 70px">             
<h3>Acciones</h3>
<ul>
<li><?php 
if($this->Session->check('Auth.User')){
	echo $this->Html->link( "Volver Atras",   array('action'=>'index') ); 
}else{
	echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?>
</li>
</ul>
</div>


<div class="actions" style="padding-left: 70px">             
<h3>Azucar</h3>
<ul>
<li><?php echo $this->Html->link('Ingenio Recepción Azucar',array('controller' => 'ingeniorecepciones', 'action' => 'index'), array('escape' => false));?>
</li>
</ul>

<ul>
<li><?php echo $this->Html->link('Ingenio Entrega Azucar',array('controller' => 'ingenioentregas', 'action' => 'index'), array('escape' => false));?>
</li>
</ul>
<ul>
<li><?php echo $this->Html->link('Ingenio Producción de Azucar',array('controller' => 'ingenioproducciones', 'action' => 'index'), array('escape' => false));?>
</li>
</ul>
<ul>
<li><?php echo $this->Html->link('Ingenio Venta Mercado Interno',array('controller' => 'ingenioazucarmercadointernos', 'action' => 'index'), array('escape' => false));?>

</li>
</ul>
<ul>
<li><?php echo $this->Html->link('Ingenio Venta Mercado Externo',array('controller' => 'ingenioazucarexportaciones', 'action' => 'index'), array('escape' => false));?>

</li>
</ul>
</div>





<div class="actions" style="padding-left: 70px">             
<h3>Alcohol</h3>
<ul>
<li><?php echo $this->Html->link('Ingenio Venta Exportación',array('controller' => 'ingenioalcoholexportaciones', 'action' => 'index'), array('escape' => false));?>
</li>
</ul>

<ul>
<li><?php echo $this->Html->link('Ingenio Venta Mercado Interno',array('controller' => 'ingenioalcoholmercadointernos', 'action' => 'index'), array('escape' => false));?>
</li>
</ul>
</div>


<div class="actions" style="padding-left: 70px">             
<h3>Depositos</h3>
<ul>
<li><?php echo $this->Html->link('Existencia en Depósitos',array('controller' => 'azucarexistencias', 'action' => 'index'), array('escape' => false));?>
</li>
</ul>
</div>

