<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Agregar Usuario'); ?></legend>
        <h4>Los campos con <strong>(*)</strong> deben ser llenados de manera obligatoria.</h4>
        <?php 
        echo $this->Form->input('username', array('label' => 'Nombre de Usuario', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        ?>
        <h4>
            El loguin al sistema estará sujeto a la forma en la cual el usuario proporcione su informacion, vale decir mayusculas, minusculas o caracteres especiales, al momento de registrarse.              
        </h4>
        <?php
        echo $this->Form->input('email', array('label' => 'Correo Electrónico', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        ?>
        <h4>
            Proporcione una dirección de correo electrónico válido, debido a que el sistema enviará un código de verificación para el ingreso al mismo.              
        </h4>
        <?php
        echo $this->Form->input('nombre', array('label' => 'Nombre(s)', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('apellido', array('label' => 'Apellidos', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('password',array('label' => 'Contraseña','style'=>'width:500px; height:20px;'));
        
        echo $this->Form->input('password_confirm', array('label' => 'Confirmar Contraseña', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password','style'=>'width:500px; height:20px;'));

        echo $this->Form->input('grupo_id', array(
            'options' => array( 
                '1' => 'Azucar - Ingenio Azucarero', 
                '2' => 'Azucar - Control Técnico Cañero (CTC)', 
                '3' => 'Azucar - Institución Cañera', 
                '4' => 'Soya - Soyero', 
                '5' => 'Soya - Productor de Oleaginosas', 
                '6' => 'Avicola ', 

                '12' => 'Administrador', 
                '13' => 'Administrador Soya', 
                '14' => 'Administrador Azucar', 
                '15' => 'Administrador Avicola')
        ));
         
        echo $this->Form->submit('Agregar Usuario', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar Usuario') ); 
?>
        <h4 style="font-color: #FF0000">
            Si no recibe el correo durante la proxima hora, comuniquese directamente con el administrador al telefono 2131213.              
        </h4>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<script type="text/javascript">
    

    
</script>
<div class="actions">             
<h3>Acciones</h3>
<ul>
<li><?php 
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Retornar a contenido",   array('action'=>'index') ); 
echo "<br>";
echo $this->Html->link( "Cerrar Sesión",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al Login",   array('action'=>'login') ); 
}
?></li>
<br/>
</ul>
</div>
