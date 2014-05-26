<div class="actions">             
<h3>Acciones</h3>
<ul>
<li><?php 
if($this->Session->check('Auth.User')){
echo "<br>";
echo $this->Html->link( "Cerrar sesion",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?></li>
</ul>
<ul>
<li><?php echo $this->Html->link('Volver Atras',array('controller' => 'distribuidoras', 'action' => 'back'), array('escape' => false)); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link('Distribuidora Huevos',array('controller' => 'avicoladistribuidorponedoras', 'action' => 'add'), array('escape' => false)); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link('Distriubidora Carne',array('controller' => 'avicoladistribuidorengordes', 'action' => 'add'), array('escape' => false)); ?></li>
</ul>
