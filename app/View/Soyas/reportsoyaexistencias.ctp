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
		<td align="center" bgcolor="silver"><font face="times new roman" size="3" color="navy"><b>REPORTE EXISTENCIA DE SOYA</b></font></td>
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
			<td class="tableTd">Torta solvente soya</td>
			<td class="tableTd">Torta solvente girasol</td>
			<td class="tableTd">Harina integral soya</td>
			<td class="tableTd">Harina integral girasol</td>
			<td class="tableTd">Cascarilla soya</td>
			<td class="tableTd">Cascarilla girasol</td>
			<td class="tableTd">Aceite crudo soya</td>
			<td class="tableTd">Aceite refinado soya</td>
			<td class="tableTd">Aceite refinado girasol</td>
			<td class="tableTd">Granosoya</td>
			<td class="tableTd">Grano girasol</td>
			<td class="tableTd">Fecha registro</td>

<?php foreach ($this->data['SoyaExistencia'] as $soyaexistencia ): ?>
			
		</tr>		
		
	<td class="tableTdContent"><?php echo $soyaexistencia['tortasolventesoya']?></td>
	<td class="tableTdContent"><?php echo $soyaexistencia['tortasolventegirasol']?></td>
	<td class="tableTdContent"><?php echo $soyaexistencia['harinaintegralsoya']?></td>
	<td class="tableTdContent"><?php echo $soyaexistencia['harinaintegralgirasol']?></td>
	<td class="tableTdContent"><?php echo $soyaexistencia['cascarillasoya']?></td>
	<td class="tableTdContent"><?php echo $soyaexistencia['cascarillagirasol']?></td>
	<td class="tableTdContent"><?php echo $soyaexistencia['aceitecrudosoya']?></td>
	<td class="tableTdContent"><?php echo $soyaexistencia['aceiterefinadosoya']?></td>
	<td class="tableTdContent"><?php echo $soyaexistencia['aceiterefinadogirasol']?></td>
	<td class="tableTdContent"><?php echo $soyaexistencia['granosoya']?></td>
	<td class="tableTdContent"><?php echo $soyaexistencia['granogirasol']?></td>
	<td class="tableTdContent"><?php echo $soyaexistencia['fecharegistro']?></td>
	</tr>
	<?php endforeach; ?>

</table>

