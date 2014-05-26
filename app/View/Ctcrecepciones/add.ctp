<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ctcs['Ctc']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="ctcrecepciones form">
 <h3>RECEPCIÓN DE CAÑA DE AZÚCAR - CONTROL TÉCNICO CAÑERO</h3>
<?php echo $this->Form->create('CtcRecepcion');?>
    <fieldset>
       
        <?php 


        echo $this->Form->input('razonsocial', array('label' => 'Nombre de Institución o Ingenio','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('viaconvenio', array('label' => 'Vía-Convenio de Cooperación','type' => 'checkbox','value'=>'si'));
        echo $this->Form->input('viadirecta', array('label' => 'Vía- Compra Directa de Caña','type' => 'checkbox','value'=>'si'));
        echo $this->Form->input('sacarosa', array('label' => 'Porcentaje de Sacarosa (%)','style'=>'width:500px; height:30px;'));
        

        echo $this->Form->submit('Agregar Recepción', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar recepcion en ctc')); 
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
