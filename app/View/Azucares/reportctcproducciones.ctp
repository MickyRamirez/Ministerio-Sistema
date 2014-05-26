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
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>PRODUCCION AZUCAR CONTROL TECNICO CANERO<b></font></td>
	</tr>
	<td></td>
	<td></td>
	<tr>
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>Fecha:</b></font></td>
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b><?php echo date("F j / Y"); ?></b></font></td>
	</tr>
	<tr>
		
	</tr>
	
	<tr>
		<td></td>
	</tr>
		<tr id="titles">
			<td class="tableTd">Razon social</td>
			<td class="tableTd">Via convenio</td>
			<td class="tableTd">Via directa</td>
			<td class="tableTd">Perdida cachaza</td>
			<td class="tableTd">Perdida melaza</td>
			<td class="tableTd">Perdida bagazo</td>
			<td class="tableTd">Perdida indeterminada</td>
			<td class="tableTd">Perdida fabril</td>
			<td class="tableTd">Fecha registro</td>

<?php foreach ($this->data['CtcProduccion'] as $ctcproduccion ): ?>			
		</tr>		
		<tr>

	<td class='tableTdContent'><?php echo $ctcproduccion['razonsocial']?></td>
	<td class='tableTdContent'><?php echo $ctcproduccion['viaconvenio']?></td>
	<td class='tableTdContent'><?php echo $ctcproduccion['viadirecta']?></td>
	<td class='tableTdContent'><?php echo $ctcproduccion['perdidacachaza']?></td>
	<td class='tableTdContent'><?php echo $ctcproduccion['perdidamelaza']?></td>
	<td class='tableTdContent'><?php echo $ctcproduccion['perdidabagaza']?></td>
	<td class='tableTdContent'><?php echo $ctcproduccion['perdidaindet']?></td>
	<td class='tableTdContent'><?php echo $ctcproduccion['perdidafabril']?></td>
	<td class='tableTdContent'><?php echo $ctcproduccion['fecharegistro']?></td>
	</tr>

	<?php endforeach; ?>		
		
</table>

