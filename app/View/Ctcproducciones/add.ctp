<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ctcs['Ctc']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="azucarexistencias form">
 <h3>PRODUCCIÓN DE AZÚCAR - CONTROL TÉCNICO CAÑERO</h3>
<?php echo $this->Form->create('CtcProduccion');?>
    <fieldset>
       
        <?php 
        echo $this->Form->input('razonsocial', array('label' => 'Nombre de Institución o Ingenio','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('viaconvenio', array('label' => 'Vía-Convenio de Cooperación', 'type'=>'checkbox', 'value'=>'si'));
        echo $this->Form->input('viadirecta', array('label' => 'Vía- Compra Directa de Caña', 'type'=>'checkbox', 'value'=>'si'));
        echo $this->Form->input('perdidacachaza', array('label' => 'Porcentaje de Pérdida Cachaza %','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('perdidamelaza', array('label' => 'Porcentaje de Pérdida Melaza %','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('perdidabagaza', array('label' => 'Porcentaje de Pérdida Bagazo %','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('perdidaindet', array('label' => 'Porcentaje de Pérdida Indeterminada %','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('perdidafabril', array('label' => 'Porcentaje de Pérdida Fabril %','style'=>'width:500px; height:30px;'));


        echo $this->Form->submit('Agregar Produciones', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos de existencia en deposito')); 
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