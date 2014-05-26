
<div class="cambiodolar form">
 <h3>Actualizacion para cambion de dolar</h3>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php echo $this->Form->create('SoyaAsociaciones');?>
    <fieldset>
        <?php 

        echo $this->Form->input('nombre', array('label' => 'Ingrese Nombre de la Asociación','style'=>'width:500px; height:30px;'));
        echo $this->Form->input('soya_rubro_id', 
        	array('options' => $rubros,
        		'id' => 'PostRubroId',
        		'empty' => '--Porfavor selecione--',
        		'label' => 'Seleccione rubro')
        	);
        echo $this->Form->input('soya_subrubro_id', 
        	array( 'id' => 'PostSubrubroId',
        		'empty' => '--Porfavor selecione--',
        		'label' => 'Seleccione subrubro' )
        	);
          echo $this->Form->input('ciudad_id', array( 'options' => $ciudades,'empty' => '--Por favor seleccione--','label' => 'Seleccione Ciudad' ));
        echo $this->Form->submit('Agregar Asociación', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
        
        $this->Js->get('#PostRubroId')->event('change', 
		$this->Js->request(array(
		'controller'=>'soyasubrubros',
		'action'=>'getByRubro'
		), array(
		'update'=>'#PostSubrubroId',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
				))
			))
		);
      
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

