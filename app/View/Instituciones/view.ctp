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
echo $this->Html->link('Volver Atrás',array('controller' => 'instituciones', 'action' => 'index'), array('escape' => false));?></li>
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




<div class="actions" style="padding-left: 70px">             
<h3>Azucar</h3>
<ul>
<li><?php 
echo $this->Html->link('Venta Mercado Interno',array('controller' => 'institucionazucarmercadointernos', 'action' => 'index'), array('escape' => false));?></li>
</ul>
<ul>
<li><?php echo $this->Html->link('Venta Exportaciones',array('controller' => 'institucionazucarexportaciones', 'action' => 'index'), array('escape' => false));?></li>
</ul>

<ul>
<li><?php echo $this->Html->link('Según Derecho Propietario',array('controller' => 'institucionsegunpropietarios', 'action' => 'index'), array('escape' => false));?></li>
</ul>
</div>



<div class="actions" style="padding-left: 70px">             
<h3>Alcohol</h3>
<ul>
<li><?php

echo $this->Html->link('Venta Mercado Interno',array('controller' => 'institucionalcoholmercadointernos', 'action' => 'index'), array('escape' => false));?></li>
</ul>
<ul>
<li><?php echo $this->Html->link('Venta Exportaciones',array('controller' => 'institucionalcoholexportaciones', 'action' => 'index'), array('escape' => false));?></li>
</ul>


</div>

<div class="actions" style="padding-left: 70px">             
<h3>Depositos</h3>
<ul>
<li><?php echo $this->Html->link('Existencia en depósitos',array('controller' => 'azucarexistencias', 'action' => 'index'), array('escape' => false));?>
</li>
</ul>
</div>
