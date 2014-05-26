<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h2 align="right"><?php echo 'Bienvenido: '.$productores['Productora']['razonsocial']; ?></h2> 
    </div>
</table>
<h3>Productora de Oleginosas Operaciones</h3>
<div class="actions">

<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link('Volver Atras',array('controller' => 'productores', 'action' => 'index'), array('escape' => false)); ?></li>
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


<div class="actions">
<h3>Operaciones Diarias</h3>
<ul>
<li><?php echo $this->Html->link('Productor Compra de Grano',array('controller' => 'soyaproductorcompras', 'action' => 'index'), array('escape' => false));?></li>
</ul>
<ul>
<li><?php echo $this->Html->link('Productor Venta de Derivados',array('controller' => 'soyaproductorderivados', 'action' => 'index'), array('escape' => false));?></li>
</ul>

</div>


<div class="actions">
<h3>Operaciones Mensuales</h3>
<ul>
<li><?php echo $this->Html->link('Producción en (TM)',array('controller' => 'soyaproductorproducciones', 'action' => 'index'), array('escape' => false));?></li>
</ul>
<ul>
<li><?php echo $this->Html->link('Ventas Exportación en (TM)',array('controller' => 'soyaproductorexportaciones', 'action' => 'index'), array('escape' => false));?></li>
</ul>


<ul>
<li><?php echo $this->Html->link('Ventas Local en (TM)',array('controller' => 'soyaproductorlocales', 'action' => 'index'), array('escape' => false));?></li>
</ul>
<ul>

<li><?php echo $this->Html->link('Compra Grano',array('controller' => 'soyaproductorcompragranos', 'action' => 'index'), array('escape' => false));?></li>
</ul>

</div>



<div class="actions">
<h3>Depósitos</h3>
<ul>
<li><?php echo $this->Html->link('Existencias',array('controller' => 'soyaexistencias', 'action' => 'index'), array('escape' => false));?></li>
</ul>

</div>


