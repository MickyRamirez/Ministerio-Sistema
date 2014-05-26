<STYLE type="text/css">
	.tableTd {
	   	border-width: 1.0pt; 
		border: solid;
		text-align: center;
		color: blue;
		font-family: Arial, "Arial Narrow";
		font-size: 10pt; 
		border-color: black;
		background-color: silver; 
	}
	.tableTdContent{
		border-width: 1.0pt; 
		border: solid;
		text-align: center;
		font-family: Arial, "Arial Narrow";
		font-size: 9pt;
		border-color: black;
	}
	#titles{
		font-weight: bolder;
		text-align: center;
		color: navy;
	}
   
</STYLE>
<table>
	<tr><td><table border="2" >
		<td align="center" bgcolor="silver"><font face="Arial narrow" size="3" color="navy"><b>REPORTE QUINCENAL : EXPORTACIONES DE AZUCAR<b></font></td>
	</tr>
	<tr>
		<td align="center" bgcolor="silver"><font face="Arial narrow" size="3" color="navy"><b>Fecha: <?php echo date("F j / Y"); ?></b></font></td></table></td>
		
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


<?php foreach ($this->data['IngenioAzucarExportacion'] as $ingenioazucarexportacion): ?>
		</tr>
		<tr>
	
		<td class="tableTdContent"><?php echo $ingenioazucarexportacion['destino']?></td>
		<td class="tableTdContent"><?php echo $ingenioazucarexportacion['refinada']?></td>
		<td class="tableTdContent"><?php echo $ingenioazucarexportacion['cruda']?></td>
		<td class="tableTdContent"><?php echo $ingenioazucarexportacion['total']?></td>
		<td class="tableTdContent"><?php echo $ingenioazucarexportacion['preciofob']?></td>
		<td class="tableTdContent"><?php echo $ingenioazucarexportacion['fecha']?></td>
		<td class="tableTdContent"><?php echo $ingenioazucarexportacion['deposito']?></td>
		<td class="tableTdContent"><?php echo $ingenioazucarexportacion['fecharegistro']?></td>
		</tr>

	<?php endforeach; ?>
			
		
</table>

