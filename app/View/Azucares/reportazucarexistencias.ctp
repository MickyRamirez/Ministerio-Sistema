<STYLE type="text/css">
	.tableTd {
	   	border-width: 1.0pt; 
		border: solid; 
		text-align: center;
		color: blue;
		font-family: Georgia, "Times New Roman";
		font-size: 8pt; 
		border-color: silver;
		background-color: silver;
	}
	.tableTdContent{
		border-width: 1.0pt; 
		border: solid;
		text-align: center;
		font-family: Arial;
		font-size: 9pt;
		border-color: silver;
	}
	#titles{
		font-weight: bolder;
		text-align: center;
		color: navy;
	}
   
</STYLE>
<table>
	<tr>
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>REPORTE QUINCENAL EXISTENCIA EN DEPOSITOS AZUCAR<b></font></td>
	</tr>
	<td></td>
	<td></td>
	<tr>
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>Fecha:</b></font></td>
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b><?php echo date("F j / Y"); ?></b><font face="times new roman" size="3" color="navy"></td>
	</tr>
	<tr>
		
	</tr>
	
	<tr>
		<td></td>
	</tr>
		<tr id="titles">
			<td class="tableTd">Azucar</td>
			<td class="tableTd">Alcohol</td>
			<td class="tableTd">Refinada</td>
			<td class="tableTd">Cruda</td>
			<td class="tableTd">Total</td>
			<td class="tableTd">Cachaza</td>
			<td class="tableTd">Melaza</td>
			<td class="tableTd">Bagazo</td>
			<td class="tableTd">Fecha registro</td>

	<?php foreach ($this->data['AzucarExistencia'] as $azucarexistencia ): ?>
		</tr>
		<tr>

	<td class="tableTdContent"><?php echo $azucarexistencia['azucar']?></td>
	<td class="tableTdContent"><?php echo $azucarexistencia['alcohol']?></td>
	<td class="tableTdContent"><?php echo $azucarexistencia['refinada']?></td>
	<td class="tableTdContent"><?php echo $azucarexistencia['cruda']?></td>
	<td class="tableTdContent"><?php echo $azucarexistencia['total']?></td>
	<td class="tableTdContent"><?php echo $azucarexistencia['cachaza']?></td>
	<td class="tableTdContent"><?php echo $azucarexistencia['malaza']?></td>
	<td class="tableTdContent"><?php echo $azucarexistencia['bagaza']?></td>
	<td class="tableTdContent"><?php echo $azucarexistencia['fecharegistro']?></td>
	</tr>

	
	<?php endforeach; ?>
</table>

