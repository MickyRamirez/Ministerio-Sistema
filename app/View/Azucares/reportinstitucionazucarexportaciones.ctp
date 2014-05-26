<STYLE type="text/css">
	.tableTd {
	   	border-width: 0.5pt; 
		border: solid;
		text-align: center;
		color: blue;
		font-family: Georgia, "Times New Roman";
		font-size: 8pt; 
		border-color: silver;
		background-color: silver; 
	}
	.tableTdContent{
		border-width: 0.5pt; 
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
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>REPORTE QUINCENAL : EXPORTACIONES DE AZUCAR</b></font></td>
	</tr>
	<td></td>
	<tr>
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>Fecha:</b></font></td>
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b><?php echo date("F j, Y, g:i a"); ?></b></font></td>
	</tr>
	<tr>
		
	</tr>
	
	<tr>
		<td></td>
	</tr>
		<tr id="titles">
			<td class="tableTd">Destino</td>
			<td class="tableTd">Refinada</td>
			<td class="tableTd">Cruda</td>
			<td class="tableTd">Total</td>
			<td class="tableTd">Precio fob</td>
			<td class="tableTd">Fecha</td>
			<td class="tableTd">Deposito</td>
			<td class="tableTd">Fecha registro</td>

	<?php foreach ($this->data['InstitucionAzucarExportacion'] as $institucionazucarexportacion ): ?>
			
		</tr>
	
		<tr>		
		
	<td class="tableTdContent"><?php echo $institucionazucarexportacion['destino']?></td>
	<td class="tableTdContent"><?php echo $institucionazucarexportacion['refinada']?></td>
    <td class="tableTdContent"><?php echo $institucionazucarexportacion['cruda']?></td>
	<td class="tableTdContent"><?php echo $institucionazucarexportacion['total']?></td>
	<td class="tableTdContent"><?php echo $institucionazucarexportacion['preciofob']?></td>
	<td class="tableTdContent"><?php echo $institucionazucarexportacion['fecha']?></td>
	<td class="tableTdContent"><?php echo $institucionazucarexportacion['deposito']?></td>
	<td class="tableTdContent"><?php echo $institucionazucarexportacion['fecharegistro']?></td>			
	</tr>

	<?php endforeach; ?>
		
</table>

