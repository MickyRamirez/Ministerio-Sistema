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
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>REPORTE QUINCENAL :  ENTREGA A CANEROS<b></font></td>
	</tr>
	<tr>
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>ANEXO 2G<b></font></td>
	</tr>
	<td></td>
	<td></td>
	<tr>
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>FECHA :</b></font></td>
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b><?php echo date("F j / Y"); ?></b></font></td>
	</tr>
	<tr>
	</tr>
	
	<tr>
		<td></td>
	</tr>
		<tr id="titles">
			<td class="tableTd">Razon social</td>
			<td class="tableTd">Refinada</td>
			<td class="tableTd">Cruda</td>
			<td class="tableTd">Total</td>
			<td class="tableTd">Volumen litros</td>
			<td class="tableTd">Cachaza</td>
			<td class="tableTd">Melaza</td>
			<td class="tableTd">Bagaza</td>
			<td class="tableTd">Fecha registro</td>

	<?php foreach ($this->data['IngenioEntrega'] as $ingenioentrega ): ?>

		</tr>
		<tr>	
	
	<td class="tableTdContent"><?php echo $ingenioentrega['razonsocial']?></td>
	<td class="tableTdContent"><?php echo $ingenioentrega['refinada']?></td>
	<td class="tableTdContent"><?php echo $ingenioentrega['cruda']?></td>
	<td class="tableTdContent"><?php echo $ingenioentrega['total']?></td>
	<td class="tableTdContent"><?php echo $ingenioentrega['volumenlitros']?></td>
	<td class="tableTdContent"><?php echo $ingenioentrega['cachaza']?></td>
	<td class="tableTdContent"><?php echo $ingenioentrega['melaza']?></td>
	<td class="tableTdContent"><?php echo $ingenioentrega['bagaza']?></td>
	<td class="tableTdContent"><?php echo $ingenioentrega['fecharegistro']?></td>
	</tr>
	<?php endforeach; ?>
		
</table>

