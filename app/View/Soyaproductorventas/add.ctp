<h1>Área de registro anual</h1>
<div class="soyaproductorventas form">
 
<?php echo $this->Form->create('SoyaProductorVenta');?>
    <fieldset>
        <legend><?php echo ('Agregar Existencia'); ?></legend>
        <?php 
        echo $this->Form->input('soyaoperaciones_id', array( 'options' => $soyaoperaciones,'empty' => '--Por favor seleccione producto--','label' => 'Deposito (Selecciones un deposito registrado anteriormente o no podra registrar sus existencias)' ));
        echo $this->Form->input('ano', array('label' => 'Año','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('enero', array('label' => 'Enero','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('febrero', array('label' => 'Febrero','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('marzo', array('label' => 'Marzo','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('abril', array('label' => 'Abril','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('mayo', array('label' => 'Mayo','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('junio', array('label' => 'Junio','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('semestreuno', array('label' => 'Primer Semestre','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('julio', array('label' => 'Julio','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('agosto', array('label' => 'Agosto','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('septiembre', array('label' => 'Septiembre','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('octubre', array('label' => 'Octubre','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('noviembre', array('label' => 'Noviembre','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('diciembre', array('label' => 'Diciembre','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('semestredos', array('label' => 'Semestre Dos','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('total', array('label' => 'Total','style'=>'width:500px; height:20px;'));
        echo $this->Form->submit('Agregar existencia', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<?php 
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Cerrar sesion",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?>

