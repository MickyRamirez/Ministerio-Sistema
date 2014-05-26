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
<td colspan="3" colspan="2" align="center"><font face="Arial" size="5" color="navy"><strong>ANEXO 2A</strong></font></td></table></td>
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
    <td colspan="6" align="center" bgcolor="silver"><font face="Arial Narrow" size="3" color="navy"><b>REPORTE QUINCENAL : INGENIO RECEPCION<b></font></td></table></td>

    
   <table> 
  </tr>
    <tr id="titles">
      <td class="tableTd">Nombre</td>
      <td class="tableTd">Via convenio</td>
      <td class="tableTd">Via compra</td>
      <td class="tableTd">Total</td>
      <td class="tableTd">Sacarosa</td>
      <td class="tableTd">Fecha registro</td>


    <?php foreach ($this->data['IngenioRecepcion'] as $ingeniorecepcion ): ?>   
    </tr>
    <tr> 

    <td class="tableTdContent"><?php echo $ingeniorecepcion['nombre']?></td>
    <td class="tableTdContent"><?php echo $ingeniorecepcion['viaconvenio']?></td>
    <td class="tableTdContent"><?php echo $ingeniorecepcion['viacompra']?></td>
    <td class="tableTdContent"><?php echo $ingeniorecepcion['total']?></td>
    <td class="tableTdContent"><?php echo $ingeniorecepcion['sacarosa']?></td>
    <td class="tableTdContent"><?php echo $ingeniorecepcion['fecharegistro']?></td>      
    </tr>

    <?php endforeach; ?>
    
</table>

