<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo ('Por Favor, Ingrese su Nombre de Usuario y Contraseña'); ?></legend>
        <?php 
        echo $this->Form->input('username', array('label' => 'Nombre de Usuario', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('password', array('label' => 'Contraseña', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
    ?>
    </fieldset>
<?php echo $this->Form->end(('Login')); ?>
</div>
<div class="actions">             
<h3>Acciones</h3>
<ul>

<li><?php  echo $this->Html->link( "Registrarse",   array('action'=>'add') );  ?></li>
<br/>
</ul>

</div>

