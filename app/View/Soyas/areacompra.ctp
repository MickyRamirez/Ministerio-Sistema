
<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'compopcion', $this->data['Soya']['id'])); ?></li>
</ul>

</div>
<div class="chart">
	<h2>Gráfica comparativa de la cantidad de compras de soya</h2>	
	<?php echo $this->Html->script('modules/exporting');?>
	<?php echo $this->Html->script('highcharts-3d');?>
	<div id="areawrapper" style="display: block; float: left; width:90%; margin-bottom: 20px;"></div>
    <div class="clear"></div>	
	
	<?php echo $this->HighCharts->render('Area Chart'); ?>

</div>