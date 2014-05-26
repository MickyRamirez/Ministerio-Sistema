<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>

<div class="azucarexistencias form">
 <h3>EXISTENCIAS EN DEPÓSITOS - AZÚCAR Y ALCOHOL</h3>
<?php echo $this->Form->create('AzucarExistencia');?>
    <fieldset>
        
        <?php 
        echo $this->Form->input('deposito_id', array( 'options' => $depositos,'empty' => '--Por favor seleccione--','label' => 'Depósito (Seleccione un depósito registrado anteriormente o no podrá registrar sus existencias)','style'=>'width:500px; height:30px;'));
        
        echo $this->Form->input('azucar', array('label' => 'Cantidad en Depósito de Azucar (Quintal 46 kg)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('alcohol', array('label' => 'Volumen en Depósito de Alcohol (Litros)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('refinada', array('label' => 'Cantidad en Depósito de Azucar Refinada (Quintal 46 kg)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('cruda', array('label' => 'Cantidad en Depósito de Azucar Cruda (Quintal 46 kg)','style'=>'width:500px; height:30px;'));
        

        echo $this->Form->input('cachaza', array('label' => 'Cantidad en Depósito de Cachaza (Quintal 46 kg)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('malaza', array('label' => 'Cantidad en Depósito de Melaza (Quintal 46 kg)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('bagaza', array('label' => 'Cantidad en Depósito de Bagazo (Quintal 46 kg)','style'=>'width:500px; height:30px;'));


        echo $this->Form->submit('Agregar existencia', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos de existencia en deposito')); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>


<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "volver escritorio",   array('action'=>'index'),array('escape' => false) ); ?></li>
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
