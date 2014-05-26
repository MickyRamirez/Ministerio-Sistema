<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h2 align="right"><?php echo 'Bienvenido: '.$productores['Productora']['razonsocial']; ?></h2>
    </div>
</table>
<br/>
<div class="soyaproductorcompras form">
 <h3>Registro de Compra de Grano Mensual</h3>
<?php echo $this->Form->create('SoyaProductorCompraGrano');?>
    <fieldset>

        <?php 
        echo $this->Form->input('operacion', array('type' => 'hidden', 'value'=>'Compra Grano'));

        echo $this->Form->input('producto', array(
            'options' => array( 
                'GRANO DE SOYA' => 'GRANO DE SOYA',
                'GRANO DE GIRASOL' => 'GRANO DE GIRASOL'
                )
        ));

        


        foreach ($soyacambiodolares as $soyacambiodolar):
        $dolar=$soyacambiodolar['SoyaCambioDolar']['cambio'];
    endforeach;

    echo $this->Form->input('cambio', array('type' => 'hidden','value' => $dolar));





        echo $this->Form->input('cantidadtm', array('label' => 'Cantidad en tonelada(s) métrica(s) del producto  (TM)','style'=>'width:500px; height:30px;'));

        echo $this->Form->input('preciodolar', array('label' => 'Precio en Dolares Americanos por tonelada métrica (TM / $us)','style'=>'width:500px; height:30px;'));


        echo $this->Form->input('fecharegistro', array('dateFormat' => 'DMY', 'minYear' => date('Y'),
                                             'maxYear' => date('Y') + 1, 'label' => 'Fecha','empty'=>false, 'type'=>'date'));

        echo $this->Form->submit('Agregar Existencia', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
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


