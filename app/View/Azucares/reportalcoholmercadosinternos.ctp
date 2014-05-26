<STYLE type="text/css" >
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
<td colspan="4" colspan="2" align="center"><font face="Arial" size="5" color="navy"><strong>ANEXO 2D</strong></font></td></table></td>
<td></td>
<p></p>
<td><table cellpadding="2" cellspacing="2" style="width:200px;height:100px;border:6px double ;">
    <td colspan="2" align="center" bgcolor="silver"><font face="Arial Narrow " size="3" color="navy"><b>CODIGO INGENIO :</b></font></td>
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
    <td colspan="7" align="center" bgcolor="silver"><font face="Arial Narrow" size="3" color="navy"><b>REPORTE QUINCENAL : VENTA DE ALCOHOL MERCADO INTERNO<b></font></td></table></td>

	<table>
	</tr>
		<tr id="titles">
			<td class="tableTd">NIT</td>
			<td class="tableTd">Razon social</td>
			<td class="tableTd">Destino</td>
			<td class="tableTd">Cantidad</td>
			<td class="tableTd">Precio</td>
			<td class="tableTd">Fecha Registro</td>
			<td class="tableTd">Fecha </td>
<?php foreach ($this->data['IngenioAlcoholMercadoInterno'] as $ingenioalcoholmercadointerno): ?>

		</tr>	
		<tr>

		<td class='tableTdContent'><?php echo $ingenioalcoholmercadointerno['nit']?></td>
		<td class='tableTdContent'><?php echo $ingenioalcoholmercadointerno['razonsocial']?></td>
		<td class='tableTdContent'><?php echo $ingenioalcoholmercadointerno['destino']?></td>
		<td class='tableTdContent'><?php echo $ingenioalcoholmercadointerno['cantidad']?></td>
		<td class='tableTdContent'><?php echo $ingenioalcoholmercadointerno['precio']?></td>
		<td class='tableTdContent'><?php echo $ingenioalcoholmercadointerno['fecharegistro']?></td>
		<td class='tableTdContent'><?php echo $ingenioalcoholmercadointerno['fecha']?></td>

			</tr>;

<?php endforeach; ?>
			
</table>

