<?php
/**
 *  CakePHP HighCharts Plugin
 * 
 * 	Copyright (C) 2012 Kurn La Montagne / destinydriven
 *	<https://github.com/destinydriven> 
 * 
 * 	Multi-licensed under:
 * 		MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
 * 		LGPL <http://www.gnu.org/licenses/lgpl.html>
 * 		GPL <http://www.gnu.org/licenses/gpl.html>
 * 		Apache License, Version 2.0 <http://www.apache.org/licenses/LICENSE-2.0.html>
 */
?>
<table>
	<thead>
		<tr>
			<th>Single-Series Demo</th>
			<th>Multi-Series Demo</th>
			<th>Stacked Demo</th>
			<th>Minimalist Demo (With Themes)</th>
			<th>Other Demo</th>
			<th>Combination Demo</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $this->Html->link('Area', array('controller' => 'SingleSeriesDemo', 'action' => 'area')); ?></td>
			<td><?php echo $this->Html->link('Area', array( 'controller' => 'MultiSeriesDemo', 'action' => 'area')); ?></td>
			<td><?php echo $this->Html->link('Columna', array( 'controller' => 'StackedDemo', 'action' => 'column')); ?></td>
			<td><?php echo $this->Html->link('Columna (Skies)', array( 'controller' => 'MinimalistDemo', 'action' => 'column')); ?></td>
			<td><?php echo $this->Html->link('Mixed Charts (One Page)', array( 'controller' => 'MixedChartsDemo', 'action' => 'mixed_charts')); ?></td>
			<td><?php echo $this->Html->link('Column,Line & Pie', array( 'controller' => 'CombinationDemo', 'action' => 'combo')); ?></td>
		</tr>
		<tr>
			<td><?php echo $this->Html->link('Area Spline', array('controller' => 'SingleSeriesDemo', 'action' => 'areaspline')); ?></td>
			<td><?php echo $this->Html->link('Area Spline', array('controller' => 'MultiSeriesDemo', 'action' => 'areaspline')); ?></td>
			<td><?php echo $this->Html->link('Grouped Column', array('controller' => 'StackedDemo', 'action' => 'grouped_column')); ?></td>
			<td><?php echo $this->Html->link('Pie (Gray)', array('controller' => 'MinimalistDemo', 'action' => 'pie')); ?></td>
			<td><?php echo $this->Html->link('Spline with Live Data', array('controller' => 'MixedChartsDemo', 'action' => 'spline_live')); ?></td>
			<td></td>
		</tr>
		<tr>
			<td><?php echo $this->Html->link('Bar', array('controller' => 'SingleSeriesDemo', 'action' => 'bar')); ?></td>
			<td><?php echo $this->Html->link('Bar', array('controller' => 'MultiSeriesDemo', 'action' => 'bar')); ?></td>
			<td><?php echo $this->Html->link('Bar', array('controller' => 'StackedDemo', 'action' => 'bar')); ?></td>
			<td><?php echo $this->Html->link('Column with Rotated Label (Grid)', array('controller' => 'MinimalistDemo', 'action' => 'column_rotated')); ?></td>
			<td><?php echo $this->Html->link('Column with Drolldown', array('controller' => 'MixedChartsDemo', 'action' => 'column_drilldown')); ?></td>
			<td></td>
		</tr>
		<tr>
			<td><?php echo $this->Html->link('Column', array('controller' => 'SingleSeriesDemo', 'action' => 'column')); ?></td>
			<td><?php echo $this->Html->link('Column', array('controller' => 'MultiSeriesDemo', 'action' => 'column')); ?></td>
			<td><?php echo $this->Html->link('Percentage Column', array('controller' => 'StackedDemo', 'action' => 'percent_column')); ?></td>
			<td><?php echo $this->Html->link('Spline with Crosshairs (Dark-blue)', array('controller' => 'MinimalistDemo', 'action' => 'spline_cross')); ?></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><?php echo $this->Html->link('Line', array('controller' => 'SingleSeriesDemo', 'action' => 'line')); ?></td>
			<td><?php echo $this->Html->link('Line', array('controller' => 'MultiSeriesDemo', 'action' => 'line')); ?></td>
			<td></td>
			<td><?php echo $this->Html->link('Line with Data Labels (Dark-green)', array('controller' => 'MultiSeriesDemo', 'action' => 'line')); ?></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><?php echo $this->Html->link('Pie', array('controller' => 'SingleSeriesDemo', 'action' => 'pie')); ?></td>
			<td><?php echo $this->Html->link('Pie', array('controller' => 'MultiSeriesDemo', 'action' => 'pie')); ?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><?php echo $this->Html->link('Scatter', array('controller' => 'SingleSeriesDemo', 'action' => 'scatter')); ?></td>
			<td><?php echo $this->Html->link('Scatter', array('controller' => 'MultiSeriesDemo', 'action' => 'scatter')); ?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><?php echo $this->Html->link('Spline', array('controller' => 'SingleSeriesDemo', 'action' => 'spline')); ?></td>
			<td><?php echo $this->Html->link('Spline', array('controller' => 'MultiSeriesDemo', 'action' => 'spline')); ?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>

<p>
    Get the code on Github now <?php echo $this->Html->link('CakePHP HighCharts Plugin', 'https://github.com/destinydriven/cakephp-high-charts-plugin'); ?>
          
</p>
