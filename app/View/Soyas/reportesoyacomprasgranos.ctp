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
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>REPORTE PRODUCTOR DE SOYA : VENTAS LOCALES</b></font></td>
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
			
			<td class="tableTd">Cantidad kg.</td>
			<td class="tableTd">Cantidad TM.</td>
			<td class="tableTd">Precio $</td>
			<td class="tableTd">Precio Bs.</td>
			<td class="tableTd">Total $</td>
			<td class="tableTd">Total Bs.</td>											
			<td class="tableTd">Producto</td>
	</tr>		
			
<?php foreach ($this->data['SoyaProductorCompraGrano'] as $soyaproductorcompragrano ): ?>		<?php if($soyaproductorcompragrano['operacion']=='Compra Grano') { ?>	
				
		<tr>
	
	
	<td class="tableTdContent"><?php echo $soyaproductorcompragrano['cantidadkg']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorcompragrano['cantidadtm']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorcompragrano['preciodolar']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorcompragrano['preciobs']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorcompragrano['totaldolar']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorcompragrano['totalbs']?></td>
    <td class="tableTdContent"><?php echo $soyaproductorcompragrano['producto']?></td>		

	

	</tr>
<?php } ?>
<?php endforeach; ?>
			
</table>

