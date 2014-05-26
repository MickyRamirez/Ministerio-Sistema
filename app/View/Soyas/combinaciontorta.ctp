
<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'graficas', $this->data['Soya']['id'])); ?></li>
</ul>

</div>
<?php echo $this->Html->script('modules/exporting');?>
<div class="chart">
	<h2>Gráfica comparativa de compra de soya</h2>
	
	<div id="combowrapper" style="display: block; float: left; width:90%; margin-bottom: 20px;"></div>
    <div class="clear"></div>	
	
	<?php echo $this->HighCharts->render('Combination Chart'); ?>

</div>