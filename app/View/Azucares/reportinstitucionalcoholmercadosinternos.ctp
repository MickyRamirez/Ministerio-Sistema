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
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>REPORTE QUINCENAL : VENTAS DE ALCOHOL MERCADO INTERNO<b></font></td>
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
			<td class="tableTd">Fecha</td>
			<td class="tableTd">NIT</td>
			<td class="tableTd">Razon social</td>
			<td class="tableTd">DPTO destino</td>
			<td class="tableTd">Alcohol litro</td>
			<td class="tableTd">Precio</td>
			<td class="tableTd">Fecha registro</td>
			
<?php foreach ($this->data['InstitucionAlcoholMercadoInterno'] as $institucionalcoholmercadointerno ): ?> 	
		</tr>
		<tr>
					
	<td class="tableTdContent"><?php echo $institucionalcoholmercadointerno['fecha']?></td>
	<td class="tableTdContent"><?php echo $institucionalcoholmercadointerno['nit']?></td>
	<td class="tableTdContent"><?php echo $institucionalcoholmercadointerno['razonsocial']?></td>
	<td class="tableTdContent"><?php echo $institucionalcoholmercadointerno['dptodestino']?></td>
	<td class="tableTdContent"><?php echo $institucionalcoholmercadointerno['alcohollitro']?></td>
	<td class="tableTdContent"><?php echo $institucionalcoholmercadointerno['precio']?></td>
	<td class="tableTdContent"><?php echo $institucionalcoholmercadointerno['fecharegistro']?></td>
			
	</tr>
	<?php endforeach; ?>
		
</table>

