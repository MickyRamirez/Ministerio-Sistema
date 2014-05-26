<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h2 align="right"><?php echo 'Bienvenido: '.$productores['Productora']['razonsocial']; ?></h2> 
    </div>
</table>
<br/>
<div class="soyaexistencias form">
 <h3>Area de Registro de Existencias en Depósito</h3>
<?php echo $this->Form->create('SoyaExistencia');?>
    <fieldset>
  
        <?php 
        echo $this->Form->input('deposito_id', array( 'options' => $depositos,'empty' => '--Porfavor selecione--','label' => 'Depósito (Seleccione un depósito registrado anteriormente o no podra registrar sus existencias)' ));

        echo $this->Form->input('operacion', array('type' => 'hidden', 'value'=>'Produccion'));
        
        echo $this->Form->input('producto', array(
            'options' => array( 
                'TORTA SOLVENTE DE SOYA' => 'TORTA SOLVENTE DE SOYA',
                'TORTA SOLVENTE DE GIRASOL' => 'TORTA SOLVENTE DE GIRASOL',
                'HARINA INTEGRAL DE SOYA' => 'HARINA INTEGRAL DE SOYA',
                'HARINA INTEGRAL DE GIRASOL' => 'HARINA INTEGRAL DE GIRASOL',
                'CASCARILLA DE SOYA' => 'CASCARILLA DE SOYA',
                'CASCARILLA DE GIRASOL' => 'CASCARILLA DE GIRASOL',
                'ACEITE DE SOYA REFINADO' => 'ACEITE DE SOYA REFINADO',
                'ACEITE DE SOYA CRUDO' => 'ACEITE DE SOYA CRUDO',
                'ACEITE DE GIRASOL REFINADO' => 'ACEITE DE GIRASOL REFINADO',
                'ACEITE DE GIRASOL CRUDO' => 'ACEITE DE GIRASOL CRUDO',
                )
        ));


        echo $this->Form->input('cantidadtm', array('label' => 'Cantidad en tonelada(s) métrica(s) del producto  (TM)','style'=>'width:500px; height:30px;'));

        echo $this->Form->submit('Agregar existencia', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos de existencia en depósito')); 
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
