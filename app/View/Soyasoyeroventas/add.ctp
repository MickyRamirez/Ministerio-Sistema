<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h2 align="right"><?php echo $soyeros['Soyero']['razonsocial']; ?></h2>
    </div>
</table>

<h1>Área de registro datos Soyeros</h1>
<div class="soyasoyeros form">
 
<?php echo $this->Form->create('SoyaSoyeroVenta');?>
    <fieldset>
        <legend><?php echo ('Agregar Venta de Soya'); ?></legend>
        <?php 

        echo $this->Form->input('razonsocial', array('label' => 'Razón Social o nombre','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('nit', array('label' => 'CI / NIT','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('fecha', array('dateFormat' => 'YMD','minYear' => date('Y') - 1,'maxYear' => date('Y') + 1, 'label' => 'Fecha','value'=>'1987-02-12','type'=>'date','empty'=>false,'monthNames' => false));
        echo $this->Form->input('toneladas', array('label' => 'Cantidad Vendido (TM)','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('preciodolar', array('label' => 'Precio $ / TM','style'=>'width:500px; height:20px;'));
        echo $this->Form->input('totalgrano', array('label' => 'Cantidad Total adquirido','style'=>'width:500px; height:20px;'));
        
        echo $this->Form->submit('Agregar existencia', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>

<div class="actions">
<h3>Acciones</h3>
<ul> <li>
<?php echo $this->Html->link( "Volver Escritorio",   array('action'=>'view'),array('escape' => false) ); ?></li></ul>

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

