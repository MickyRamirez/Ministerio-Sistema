<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h2 align="right"><?php echo 'Bienvenido: '.$productores['Productora']['razonsocial']; ?></h2> 
    </div>
</table>

<div class="institucionalcoholexportaciones form">
 <h3>Registro de los Clientes de la Empresas Oleaginosas</h3>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php echo $this->Form->create('SoyaProductorDerivado');?>
    <fieldset>
        <?php 
        echo $this->Form->input('razonsocial', array('label' => 'Razón Social','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('nit', array('label' => 'Número NIT o CI','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('grupo', array(
            'options' => array( 
            	'empty' => '--Por favor seleccione--', 
                'Empresa' => 'Sin Asociacion', 
                'Asociacion' => 'Asociacion'),'label' => 'Seleccioné si es Empresa Individual o  Pertenece a Asociación','id'=>'estado'
        ));
        echo $this->Form->input('soya_asociaciones_id', array( 'options' => $asociaciones,'empty' => '--Por favor seleccione--','label' => 'Seleccione Asociación', 'id'=>'accesorios','disabled'=>'disabled'));
        echo $this->Form->submit('Agregar Cliente', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
?>
</fieldset>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
	$('#estado').change(function() {
      $('#accesorios').prop('disabled', $(this).val() === 'Empresa');
}).change(); 
</script>
</div>
<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'add') ); ?></li>
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

