<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo 'Bienvenido: '.$ingenios['Ingenio']['razonsocial']; ?></h3>
    </div>
</table>
<br/>
<div class="ingenioalcoholexportaciones form">
 <h3>EXPORTACIONES DE ALCOHOL</h3>
<?php echo $this->Form->create('IngenioAlcoholExportacion');?>
    <fieldset>
     
        <?php 
    
          echo $this->Form->input('paisdestino', array(
            'options' => array( 
                'Peru' => 'Peru', 
                'Argentina' => 'Argentina',
                'Chile' => 'Chile', 
                'Colombia' => 'Colombia',
                'Ecuador' => 'Ecuador', 
                'Venezuela' => 'Venezuela',
                'Brasil' => 'Brasil', 
                'Uruguay' => 'Uruguay',
                'Paraguay' => 'Paraguay', 
                'Mexico' => 'Mexico', 
                'Otro' => 'Otro'
                ), 'label'=>'País de Destino'
        ));
        echo $this->Form->input('volumenlitros', array('label' => 'Volumen de Alcohol (Litros)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('preciofob', array('label' => 'Precio FOB (Bs/Litro)','style'=>'width:500px; height:30px;'));

        echo $this->Form->input('deposito', array('label' => 'Depósito Origen','style'=>'width:500px; height:30px;'));


        echo $this->Form->submit('Agregar Exportaciones', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos de exportaciones')); 
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
