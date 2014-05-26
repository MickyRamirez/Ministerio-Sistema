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
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>REPORTE QUINCENAL VENTAS DE AZUCAR MERCADO INTERNO</b></font></td>
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
			<td class="tableTd">Refinada</td>
			<td class="tableTd">Cruda</td>
			<td class="tableTd">Total</td>
			<td class="tableTd">Precio</td>
			<td class="tableTd">Fecha registro</td>
			
<?php foreach ($this->data['InstitucionAzucarMercadoInterno'] as $institucionazucarmercadointerno ): ?>
			
		</tr>	


		<tr>
		<td class="tableTdContent"><?php echo $institucionazucarmercadointerno['fecha']?></td>
		<td class="tableTdContent"><?php echo $institucionazucarmercadointerno['nit']?></td>
		<td class="tableTdContent"><?php echo $institucionazucarmercadointerno['razonsocial']?></td>
		<td class="tableTdContent"><?php echo $institucionazucarmercadointerno['dptodestino']?></td>
		<td class="tableTdContent"><?php echo $institucionazucarmercadointerno['refinada']?></td>
		<td class="tableTdContent"><?php echo $institucionazucarmercadointerno['cruda']?></td>
		<td class="tableTdContent"><?php echo $institucionazucarmercadointerno['total']?></td>
		<td class="tableTdContent"><?php echo $institucionazucarmercadointerno['precio']?></td>
		<td class="tableTdContent"><?php echo $institucionazucarmercadointerno['fecharegistro']?></td>
		</tr>

		<?php endforeach; ?>
</table>

