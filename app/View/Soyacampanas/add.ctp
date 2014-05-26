<?php echo $html->script('jquery-1.10.2.js'); ?>
<?php echo $html->script('jquery-ui-1.10.4.custom.min.js'); ?>
<?php echo $html->css('ui-lightness/jquery-ui-1.10.4.custom.css'); ?>
<script type="text/javascript">
		    jQuery(document).ready(function($){
		        $('#date').datepicker();
		    });
		</script>

<div class="soyacampanas form">
<h3>Registro de Periodos de Campaña</h3>
<?php echo $this->Form->create('SoyaCampana');?>
    <fieldset>

<table>
	<tr>	
		<td>
		<input type="text" name="date" id="date" />
		
		<?php echo $this->Form->input("date", array('label' => "Date : ", 'type' => 'text', 
                                'class' => 'fl tal vat w300p', 'error' => false , 'id' => 'select_date')); ?>
		<?php echo $this->Html->div('datepicker_img w100p fl pl460p pa', 
                            $this->Html->image('datepicker_calendar_icon.gif'),array('id' => 'datepicker_img')); ?>		
		</td>
	</tr>	
</table>    	
   	
<?php        

        echo $this->Form->submit('Agregar Periodo', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar datos')); 
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
