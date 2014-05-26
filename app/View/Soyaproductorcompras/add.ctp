<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h2 align="right"><?php echo 'Bienvenido: '.$productores['Productora']['razonsocial']; ?></h2> 
    </div>
</table>

<div class="soyaproductorcompras form">
 <h3>Registro de Compra de Grano </h3>
<?php echo $this->Form->create('SoyaProductorCompra');?>
    <fieldset>

        <?php 

        echo $this->Form->input('soya_proveedor_id', array( 'options' => $soyaproveedores,'empty' => '--Porfavor Seleccione Proveedor--','label' => 'Por Favor Seleccione a algun Proveedor de la lista' ));
   
        echo $this->Form->input('producto', array(
            'options' => array( 
                'GRANO DE SOYA' => 'Grano de Soya',
                'GRANO DE GIRASOL' => 'Grano de Girasol'
                ), 'label'=>'Tipo de Grano  '
        ));
        
        echo $this->Form->input('toneladas', array('label' => 'Cantidad en tonelada(s) métrica(s) del producto  (TM)','style'=>'width:500px; height:30px;'));

        echo $this->Form->input('preciodolar', array('label' => 'Precio en Dolares Americanos por tonelada métrica (TM / $us)','style'=>'width:500px; height:30px;'));

	        echo $this->Form->input('total', array('label' => 'Total en Dolares Americanos ($us)','style'=>'width:500px; height:30px;'));

        echo $this->Form->input('fecharegistro', array('dateFormat' => 'DMY', 'minYear' => date('Y')-3,
                                             'maxYear' => date('Y') + 1, 'label' => '<strong>Periodo al que corresponde la declaración jurada</strong>','empty'=>false, 'type'=>'date'));
    
        echo $this->Form->submit('Agregar Existencia', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
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


