<div class="usuarios form">
<?php echo $this->Form->create('User', array('action' => 'edit')); ?>
    <fieldset>
        <legend><?php echo __('Editar Usuario'); ?></legend>
        <?php 
        echo $this->Form->hidden('id', array('value' => $this->data['User']['id']));
        echo $this->Form->input('username', array( 'readonly' => 'readonly', 'label' => 'Nombres de Usuario no pueden ser cambiados!'));
        echo $this->Form->input('email');
        echo $this->Form->input('password_update', array( 'label' => 'Nueva contraseña deja vacio si tu no quieres cambiar)', 'maxLength' => 255, 'type'=>'password','required' => 0));
        echo $this->Form->input('password_confirm_update', array('label' => 'confirme nueva contraseña  ', 'maxLength' => 255, 'title' => 'Confirm New password', 'type'=>'password','required' => 0));
         

              echo $this->Form->input('id_grupo', array(
            'options' => array( 
                '1' => 'Azucar - Ingenio Azucarero', 
                '2' => 'Azucar - Control Técnico Cañero (CTC)', 
                '3' => 'Azucar - Institución Cañera', 
                '4' => 'Soya - Soyero', 
                '5' => 'Soya - Productor de Soya', 
                '6' => 'Avicola - Reproductores', 
                '7' => 'Avicola - Incubadora', 
                '8' => 'Avicola - Granja Engorde', 
                '9' => 'Avicola - Granja Ponedora', 
                '10' => 'Avicola - Mataderos', 
                '11' => 'Avicola - Distribuidora', 
                '12' => 'Administrador', 
                '13' => 'Administrador Soya', 
                '14' => 'Administrador Azucar', 
                '15' => 'Administrador Avicola')
        ));
        echo $this->Form->submit('Editar Usuario', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<?php 
echo $this->Html->link( "Retornar a control de usuarios",   array('action'=>'index') ); 
?>
<br/>
<?php 
echo $this->Html->link( "Salir",   array('action'=>'logout') ); 
?>