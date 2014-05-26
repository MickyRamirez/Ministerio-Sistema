
<div class="soyaproductorcompras form">
<h3>Registro de Subrubros  </h3>
<?php echo $this->Form->create('SoyaSubrubro');?>
    <fieldset>
<?php 
        echo $this->Form->input('soya_rubro_id', array( 'options' => $rubros,'empty' => '--Porfavor Selecione Cliente--','label' => '<strong>Por favor Seleccione a algun rubro de la lista</strong>' ));
        echo $this->Form->input('subrubro', array('label' => 'Ingrese subrubro por favor','style'=>'width:500px; height:30px;'));
        echo $this->Form->submit('Agregar Rubro', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>


<div class="actions">
<h3>Acciones</h3>

<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'index') ); ?></li>
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
