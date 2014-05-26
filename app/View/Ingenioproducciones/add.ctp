
<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="azucarexistencias form">
 <h3>PRODUCCIÓN DE AZÚCAR</h3>
<?php echo $this->Form->create('IngenioProduccion');?>
    <fieldset>           
        <?php 
        echo $this->Form->input('refinada', array('label' => 'Cantidad de Azucar Refinada (Quintal 46kg)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('cruda', array('label' => 'Cantidad de Azucar Cruda  (Quintal 46kg)','style'=>'width:500px; height:30px;'));

        echo $this->Form->input('producciondirecta', array('label' => 'Producción Directa de Alcohol (Litros)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('subproducto', array('label' => 'Sub-Producción directa de Alcohol (Litros)','style'=>'width:500px; height:30px;'));
      
        echo $this->Form->input('cachaza', array('label' => 'Cachaza (TM)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('melaza', array('label' => 'Melaza (TM)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('bagaza', array('label' => 'Bagazo  (TM)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('perdidafabril', array('label' => 'Porcentaje de Perdida Fabril %','style'=>'width:500px; height:30px;'));

        echo $this->Form->submit('Agregar Existencia', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos de existencia en deposito')); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
<h3>Acciones</h3>
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




