
<div class="soyaproductorcompras form">
 <h3>Registro de Proveedores de Soya</h3>
<?php echo $this->Form->create('SoyaProveedor');?>
    <fieldset>
        <?php 

        echo $this->Form->input('user_id', array( 'options' => $oleaginosas,'empty' => '--Por favor seleccione una empresa--','label' => 'Empresas' ));
        
        echo $this->Form->input('nombre', array('label' => 'Nombre Completo o Razón Social del Proveedor','style'=>'width:500px; height:30px;'));

        echo $this->Form->input('cionit', array('label' => 'Ingrese su CI o NIT','style'=>'width:500px; height:30px;'));

        echo $this->Form->input('codigo', array('label' => 'Codigo (numérico o alfanumérico)','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('regimen', array(
            'options' => array( 
                'GENERAL' => 'Regimen General',
                'RAU' => 'Regimen RAU'
                ), 'label'=>'Regimen Tributario'
        ));
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


