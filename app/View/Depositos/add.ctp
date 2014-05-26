<div class="depositos form">
 <h3>Agregar Nuevo Depósito</h3>
<?php echo $this->Form->create('Deposito');?>
    <fieldset>

        <?php 
        echo $this->Form->input('nombredeposito', array('label' => 'Nombre de su depósito', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('producto', array('label' => 'Tipo de producto que almacena', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('propiedad', array(
            'options' => array( 
                'Propio' => 'Deposito Propio', 
                'Alquilado' => 'Deposito Alquilado'
                )
        ));

        echo $this->Form->input('encargado', array('label' => 'Nombre completo de encargado', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('departamento', array(
            'options' => array( 
                'La Paz' => 'La Paz', 
                'El Alto' => 'El Alto',
                'Cochabamba' => 'Cochabamba', 
                'Santa Cruz' => 'Santa Cruz',
                'Chuquisaca' => 'Chuquisaca', 
                'Beni' => 'Beni',
                'Pando' => 'Pando', 
                'Potosi' => 'Potosi',
                'Oruro' => 'Oruro', 
                'Tarija' => 'Tarija', 
                
                )
        ));

        
        echo $this->Form->input('zona', array('label' => 'Zona', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('calle', array('label' => 'Calle', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('telefono', array('label' => 'Teléfono', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('capacidadalmacena', array('label' => 'Capacidad de almacenamiento', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));

        echo $this->Form->submit('Agregar Depósito', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar Deposito') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>


<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "volver atras",   array('action'=>'view'));  ?></li>
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
