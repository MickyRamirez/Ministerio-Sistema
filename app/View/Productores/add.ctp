
<div class="productores form">
 <h3>Área de Registro de Productores de Oleaginosas</h3>
<?php echo $this->Form->create('Productora');?>
    <fieldset>
       
<?php 

        echo $this->Form->input('razonsocial', array('label' => 'Razón Social de la Empresa', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));


        echo $this->Form->input('nombrecomercial', array(
            'options' => array( 
                'FINO' => 'FINO', 
                'ADM SAO' => 'ADM SAO',
                'IOL' => 'IOL', 
                'ETASA' => 'ETASA',
                'CAICO' => 'CAICO', 
                'CARGILL' => 'CARGILL',
                'GRANOS' => 'GRANOS', 
                'ITIKA' => 'ITIKA',
                'GRAN ALIMENTO' => 'GRAN ALIMENTO', 
                'GRAVETAL' => 'GRAVETAL', 
                'NUTRIOIL' => 'NUTRIOIL', 
                ), 'label'=>'Nombre Comercial'
        ));

        echo $this->Form->input('subdepartamento', array(
            'options' => array( 
                'La Paz' => 'La Paz', 
     
                'Cochabamba' => 'Cochabamba', 
                'Santa Cruz' => 'Santa Cruz',
                'Chuquisaca' => 'Chuquisaca', 
                'Beni' => 'Beni',
                'Pando' => 'Pando', 
                'Potosi' => 'Potosi',
                'Oruro' => 'Oruro', 
                'Tarija' => 'Tarija', 
                
                ), 'label'=>'Departamento'
        ));
        echo $this->Form->input('nit', array('label' => 'Número de Identificación tributaria - NIT', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('nummatricula', array('label' => 'Número de Matricula de Comercio', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('direccionempresa', array('label' => 'Zona de Ubicación de su Empresa', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('subdireccion', array('label' => 'Calle de Ubicación de su Empresa', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('subcalle', array('label' => 'Número de Edificio, Casa u Oficina', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('subreferencia', array('label' => 'Otras referencias: (ej.: entre c. 1 y 2, frente al edificio "Azulado" con vidrios azules)', 'maxLength' => 240,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('subtelefono', array('label' => 'Teléfono Fijo', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        echo $this->Form->input('subpagweb', array('label' => 'Pagina Web', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));
        
        echo $this->Form->input('rai', array('label' => 'Registro Ambiental Industrial (RAI):', 'maxLength' => 60,'style'=>'width:500px; height:30px;'));


        echo $this->Form->submit('Agregar Productor', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos Productora')); 
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


</div>
