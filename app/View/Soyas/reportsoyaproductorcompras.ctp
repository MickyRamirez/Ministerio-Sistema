
<table>
	<tr>
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>REPORTE DE PRODUCTOR DE SOYA : COMPRAS</b></font></td>
	</tr>
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
			
			<td class="tableTd">Campana</td>
			<td class="tableTd">NIT</td>
			<td class="tableTd">Proveedor</td>
			<td class="tableTd">Regimen grano</td>
			<td class="tableTd">Codigo grano</td>
			
			<td class="tableTd">Producto</td>
			<td class="tableTd">Toneladas</td>
			<td class="tableTd">Precio dolar</td>
			<td class="tableTd">Total</td>
			<td class="tableTd">Fecha registro</td>

<?php foreach ($this->data['SoyaProductorCompra'] as $soyaproductorcompra ): ?>			
		</tr>		
		<tr>
		<td class="tableTdContent"><?php echo $soyaproductorcompra['campana']?></td>	
		<td class="tableTdContent"><?php echo $soyaproductorcompra['nit']?></td>
		<td class="tableTdContent"><?php echo $soyaproductorcompra['proveedor']?></td>
		<td class="tableTdContent"><?php echo $soyaproductorcompra['regimengrano']?></td>
		<td class="tableTdContent"><?php echo $soyaproductorcompra['codigograno']?></td>
		<td class="tableTdContent"><?php echo $soyaproductorcompra['producto']?></td>
		<td class="tableTdContent"><?php echo $soyaproductorcompra['toneladas']?></td>
		<td class="tableTdContent"><?php echo $soyaproductorcompra['preciodolar']?></td>
		<td class="tableTdContent"><?php echo $soyaproductorcompra['total']?></td>
		<td class="tableTdContent"><?php echo $soyaproductorcompra['fecharegistro']?></td>			
		</tr>

<?php endforeach; ?>
</table>

