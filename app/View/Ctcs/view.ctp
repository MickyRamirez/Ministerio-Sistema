<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ctcs['Ctc']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="actions" style="padding-left:70px">             
<h3>Acciones</h3>
<ul>
<li><?php 
echo $this->Html->link('Volver Atrás',array('controller' => 'ctcs', 'action' => 'index'), array('escape' => false));?></li>
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


<div class="actions" style="padding-left:70px">             
<h3>Azúcar</h3>
<ul>
<li><?php echo $this->Html->link('CTC Recepción',array('controller' => 'ctcrecepciones', 'action' => 'index'), array('escape' => false));?></li>
</ul>
<ul>
<li><?php echo $this->Html->link('CTC Producción',array('controller' => 'ctcproducciones', 'action' => 'index'), array('escape' => false));?></li>
</ul>
</div>

