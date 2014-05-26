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
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>REPORTE QUINCENAL EXPORTACIONES DE ALCOHOL</b></font></td>
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
			<td class="tableTd">Nombre</td>
			<td class="tableTd">Via convenio</td>
			<td class="tableTd">Via compra</td>
			<td class="tableTd">Total</td>
			<td class="tableTd">Sacarosa</td>
			<td class="tableTd">Fecha registro</td>

	<?php foreach ($this->data['InstitucionAlcoholExportacion'] as $institucionalcoholexportacion ): ?>		
		</tr>
		<tr>		
					
		<td class="tableTdContent"><?php echo $institucionalcoholexportacion['destino']?></td>
		<td class="tableTdContent"><?php echo $institucionalcoholexportacion['volumenalcohol']?></td>
		<td class="tableTdContent"><?php echo $institucionalcoholexportacion['preciofob']?></td>
		<td class="tableTdContent"><?php echo $institucionalcoholexportacion['fecha']?></td>
		<td class="tableTdContent"><?php echo $institucionalcoholexportacion['deposito']?></td>
		<td class="tableTdContent"><?php echo $institucionalcoholexportacion['fecharegistro']?></td>
			
		</tr>
		<?php endforeach; ?>
		
</table>

