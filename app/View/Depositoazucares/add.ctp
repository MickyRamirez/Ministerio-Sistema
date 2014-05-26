<div class="depositoavicolas form">
 
<?php echo $this->Form->create('Deposito');?>
    <fieldset>
        <legend><?php echo __('Agregar Deposito'); ?></legend>
        <?php 
        echo $this->Form->input('nombredeposito', array('label' => 'Nombre de su deposito', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('producto', array('label' => 'Tipo de animal almacena', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('propiedad', array(
            'options' => array( 
                'Propio' => 'Deposito Propio', 
                'Alquilado' => 'Deposito Alquilado'
                )
        ));
        echo $this->Form->input('encargado', array('label' => 'Nombre completo de encargado', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
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
        echo $this->Form->input('zona', array('label' => 'Zona', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('calle', array('label' => 'Calle', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('telefono', array('label' => 'Telefono', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('capacidadalmacena', array('label' => 'Capacidad de almacenamiento general', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('cantidadgalponesoincubadoras', array('label' => 'Cantidad de galpones o incubadoras', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('capacidadxgalpon', array('label' => 'Capacidad por galpon', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('cargasxano', array('label' => 'Cargas por Año', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('indicemortandad', array('label' => 'Indice de mortandad adultos', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));
        echo $this->Form->input('indicemortandadppbb', array('label' => 'Indice mortandad PPBB', 'maxLength' => 60,'style'=>'width:500px; height:20px;'));

        echo $this->Form->submit('Agregar Deposito', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar Deposito') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>

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
<li>
<?php echo $this->Html->link( "Volver Escritorio",   array('action'=>'view') );?>
</li>
</ul>

</div>