<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="ingeniorecepciones form">
 <h3>RECEPCIÓN DE CAÑA</h3>
<?php echo $this->Form->create('IngenioRecepcion');?>
    <fieldset>

        <?php 
        
        echo $this->Form->input('nombre', array( 'options' => $institucionregistro,'empty' => '--Porfavor Seleccione Cliente--','label' => 'Por Favor Seleccione a algun cliente de la lista' ));

        echo $this->Form->input('viaconvenio', array('label' => 'Vía-Convenio de Cooperación','type'=>'checkbox','value'=>'si'));
        echo $this->Form->input('viacompra', array('label' => 'Vía- Compra Directa de Caña','type'=>'checkbox','value'=>'si'));
        echo $this->Form->input('total', array('label' => 'Total Caña Recepcionada (TM)','style'=>'width:400px; height:30px;'));
        echo $this->Form->input('sacarosa', array('label' => 'Porcentaje de Sacarosa (%)','style'=>'width:400px; height:30px;'));
    
        echo $this->Form->submit('Agregar Recepción', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos de recepciones de ingenio')); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>


<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Agregar Proveedor",   array('action'=>'proveedor') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Volver Atrás",   array('action'=>'index') ); ?></li>
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
