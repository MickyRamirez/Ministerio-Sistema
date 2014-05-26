<STYLE type="text/css">
	.tableTd {
	   	border-style: double;
		text-align: center;
		color: blue;
		font-family: Arial, "Arial Narrow ";
		font-size: 10pt; 
		border-color: black;
		background-color: silver; 
	}
	.tableTdContent{
		border-style: double;
		text-align: center;
		font-family: Arial, "Arial Narrow ";
		font-size: 10pt;
		border-color: black;
	}
	#titles{
		font-weight: bolder;
		text-align: center;
		color: navy;
	}
   
</STYLE>
<tr><td><table>
<td colspan="3" colspan="2" align="center"><font face="Arial" size="5" color="navy"><strong>ANEXO 2B</strong></font></td></table></td>
<td></td>
<p></p>
<td><table cellpadding="2" cellspacing="2" style="width:200px;height:100px;border:6px double ;">
    <td colspan="2" align="center" bgcolor="silver"><font face="Arial Narrow " size="3" color="navy"><b>CODIGO INGENIO</b></font></td>
    <td align="center" bgcolor="silver"><font face="Arial Narrow " size="3" color="navy"><b></b></font></td>
    <td align="center" bgcolor="silver"><font face="Arial Narrow " size="3" color="navy"><b></b></font></td>

    <td align="center" bgcolor="silver"><font face="Arial Narrow " size="3" color="navy"><b>Fecha:</b></font></td>
    <td colspan="1" align="center" bgcolor="silver"><font face="Arial Narrow "size="3" color="navy"><b><?php echo date("F j / Y"); ?></b></font></td></table></td>
  </tr>

<td></td>



<p></p>
  <tr>
  <td>
  <table cellspacing="2" cellpadding="2" border="2" style="width:200px;height:100px;border:6px double ;">
    <td colspan="12" align="center" bgcolor="silver"><font face="Arial Narrow" size="3" color="navy"><b>REPORTE QUINCENAL : INGENIO PRODUCCION<b></font></td></table></td>
		<table>
	</tr>
		<tr id="titles">
			<td class="tableTd">Fecha</td>
			<td class="tableTd">Refinada</td>
			<td class="tableTd">Cruda</td>
			<td class="tableTd">Total quintal</td>
			<td class="tableTd">Produccion directa</td>
			<td class="tableTd">Subproducto</td>
			<td class="tableTd">Total litros</td>
			<td class="tableTd">Cachaza</td>
			<td class="tableTd">Melaza</td>
			<td class="tableTd">Bagaza</td>
			<td class="tableTd">Perdida fabril</td>
			<td class="tableTd">Fecha registro</td>

		<?php foreach ($this->data['IngenioProduccion'] as $ingenioproduccion ): ?>
		</tr>
		<tr>	
			
		<td class="tableTdContent"><?php echo $ingenioproduccion['fecha']?></td>
		<td class="tableTdContent"><?php echo $ingenioproduccion['refinada']?></td>
		<td class="tableTdContent"><?php echo $ingenioproduccion['cruda']?></td>
		<td class="tableTdContent"><?php echo $ingenioproduccion['totalquintal']?></td>
		<td class="tableTdContent"><?php echo $ingenioproduccion['producciondirecta']?></td>
		<td class="tableTdContent"><?php echo $ingenioproduccion['subproducto']?></td>
		<td class="tableTdContent"><?php echo $ingenioproduccion['totallitros']?></td>
		<td class="tableTdContent"><?php echo $ingenioproduccion['cachaza']?></td>
		<td class="tableTdContent"><?php echo $ingenioproduccion['melaza']?></td>
		<td class="tableTdContent"><?php echo $ingenioproduccion['bagaza']?></td>
		<td class="tableTdContent"><?php echo $ingenioproduccion['perdidafabril']?></td>
		<td class="tableTdContent"><?php echo $ingenioproduccion['fecharegistro']?></td>		
		</tr>
		<?php endforeach; ?>
		
</table>

