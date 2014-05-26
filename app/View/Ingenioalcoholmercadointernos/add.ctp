<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="ingenioalcoholexportaciones form">
 <h3>VENTAS DE ALCOHOL EN MERCADO INTERNO </h3>
<?php echo $this->Form->create('IngenioAlcoholMercadoInterno');?>
    <fieldset>
       
        <?php 


        echo $this->Form->input('nit', array('label' => 'CI / NIT','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('razonsocial', array('label' => 'Nombre o Razón Social','style'=>'width:500px; height:30px;'));


        echo $this->Form->input('destino', array(
            'options' => array( 
                'La Paz' => 'La Paz', 
                'El Alto' => 'El Alto',
                'Cochabamba' => 'Cochabamba', 
                'Santa Cruz' => 'Santa Cruz',
                'Chuquisaca' => 'Chuquisaca', 
                'Beni' => 'Beni',
                'Pando' => 'Pando', 
                'Potosi' => 'Potosi',
                'Oruro' => 'Oruro', 
                'Tarija' => 'Tarija', 
                
                ), 'label'=>'Departamento de Destino'
        ));

        echo $this->Form->input('cantidad', array('label' => 'Volumen de Alcohol (Litros)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('precio', array('label' => 'Precio (Bs/Litro)','style'=>'width:500px; height:30px;'));



        echo $this->Form->submit('Agregar Mercado Interno', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos mercado interno')); 
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
