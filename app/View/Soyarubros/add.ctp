
<div class="soyaproductorcompras form">
<h3>Registro de Rubros  </h3>
<?php echo $this->Form->create('SoyaRubro');?>
    <fieldset>
<?php 
        echo $this->Form->input('rubro', array('label' => 'Ingrese rubro por favor','style'=>'width:500px; height:30px;'));
        echo $this->Form->submit('Agregar Rubro', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>


<div class="actions">
<h3>Acciones</h3>

<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('controller'=>'soyasubrubros','action'=>'index') ); ?></li>
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
