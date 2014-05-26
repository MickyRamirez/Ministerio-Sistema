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
<td colspan="3" colspan="2" align="center"><font face="Arial" size="5" color="navy"><strong>ANEXO 2F</strong></font></td></table></td>
<td></td>
<p></p>
<td><table cellpadding="2" cellspacing="2" style="width:200px;height:100px;border:6px double ;">
    <td colspan="2" align="center" bgcolor="silver"><font face="Arial Narrow " size="3" color="navy"><b>CODIGO INGENIO : </b></font></td>
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
    <td colspan="6" align="center" bgcolor="silver"><font face="Arial Narrow" size="3" color="navy"><b>REPORTE QUINCENAL : EXPORTACIONES DE ALCOHOL<b></font></td></table></td>
		<table>

		<tr id="titles">
			<td class="tableTd">Pais destino</td>
			<td class="tableTd">Volumen litros</td>
			<td class="tableTd">Precio fob</td>
			<td class="tableTd">Fecha deposito</td>
			<td class="tableTd">Fecha ingreso</td>
			<td class="tableTd">Deposito</td>
		</tr>
		<?php foreach ($this->data['IngenioAlcoholExportacion'] as $ingenioalcoholexportacion): ?>	

		
		<tr>		
		
	<td class='tableTdContent'> <?php echo $ingenioalcoholexportacion['paisdestino'];?></td>
	<td class='tableTdContent'> <?php echo $ingenioalcoholexportacion['volumenlitros'];?></td>
	<td class='tableTdContent'> <?php echo $ingenioalcoholexportacion['preciofob'];?></td>
	<td class='tableTdContent'> <?php echo $ingenioalcoholexportacion['fechadeposito'];?></td>
	<td class='tableTdContent'> <?php echo $ingenioalcoholexportacion['fecharegistro'];?></td>
	<td class='tableTdContent'> <?php echo $ingenioalcoholexportacion['deposito'];?></td>
		</tr>

		<?php endforeach; ?>
		
</table>

