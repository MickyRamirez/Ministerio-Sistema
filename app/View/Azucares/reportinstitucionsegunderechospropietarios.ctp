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
		border-width: 10.5pt; 
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
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>REPORTE QUINCENAL : RECEPCION CANEROS SEGUN DERECHO PROPIETARIO</b></font></td>
	</tr>
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
			<td class="tableTd">Refinada</td>
			<td class="tableTd">Cruda</td>
			<td class="tableTd">Total</td>
			<td class="tableTd">Volumen alcohol</td>
			<td class="tableTd">Cachaza</td>
			<td class="tableTd">Melaza</td>
			<td class="tableTd">Bagaza</td>
			<td class="tableTd">Fecha registro</td>

<?php foreach ($this->data['InstitucionSegunPropietario'] as $institucionsegunpropietario ): ?>	
		
		</tr>		
		<tr>

	<td class="tableTdContent"><?php echo $institucionsegunpropietario['nombre']?></td>
	<td class="tableTdContent"><?php echo $institucionsegunpropietario['refinada']?></td>
	<td class="tableTdContent"><?php echo $institucionsegunpropietario['cruda']?></td>
	<td class="tableTdContent"><?php echo $institucionsegunpropietario['total']?></td>
	<td class="tableTdContent"><?php echo $institucionsegunpropietario['volumenalcohol']?></td>
	<td class="tableTdContent"><?php echo $institucionsegunpropietario['cachaza']?></td>
	<td class="tableTdContent"><?php echo $institucionsegunpropietario['melaza']?></td>
	<td class="tableTdContent"><?php echo $institucionsegunpropietario['begaza']?></td>
	<td class="tableTdContent"><?php echo $institucionsegunpropietario['fecharegistro']?></td>
	</tr>
	<?php endforeach; ?>
		
</table>

