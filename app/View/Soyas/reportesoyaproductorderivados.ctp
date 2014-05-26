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
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>REPORTE PRODUCTOR DE SOYA : DERIVADOS</b></font></td>
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
			<td class="tableTd">Mes</td>
			<td class="tableTd">Año</td>
			<td class="tableTd">Fecha registro</td>
			<td class="tableTd">Cliente soya </td>					
			<td class="tableTd">Producto</td>
			<td class="tableTd">Dia</td>
			<td class="tableTd">Rubro</td>
			<td class="tableTd">Subrubro</td>
			
<?php foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado ): ?>			
		</tr>		
		<tr>
	
	
	<td class="tableTdContent"><?php echo $soyaproductorderivado['cantidadkg']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorderivado['cantidadtm']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorderivado['preciodolar']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorderivado['preciobs']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorderivado['totaldolar']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorderivado['totalbs']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorderivado['mes']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorderivado['ano']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorderivado['fecharegistro']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorderivado['soya_cliente_derivado_id']?></td>
    <td class="tableTdContent"><?php echo $soyaproductorderivado['producto']?></td>		
	<td class="tableTdContent"><?php echo $soyaproductorderivado['dia']?></td>		
	<td class="tableTdContent"><?php echo $soyaproductorderivado['rubro']?></td>
	<td class="tableTdContent"><?php echo $soyaproductorderivado['subrubro']?></td>
	

	</tr>

<?php endforeach; ?>
			
</table>

