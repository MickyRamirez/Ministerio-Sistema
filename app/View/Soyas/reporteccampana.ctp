<style type="text/css">

th,td {
           border-style: inset;
           border-collapse: collapse; 
      }
td {font-size:10pt;
	font-family:Arial;
	text-align: center;
	background-color: #C0D9D9;
	}

th {font-size:15pt;
	font-family:Arial;
	text-align: center;
	font-weight: bold; 
	background-color: #7093DB;}

</style> 
<div class="datos form">
<?php
echo $this->Form->hidden('id', array('value' => $this->data['Soya']['id']));
 ?>
<h3>Datos Usuario</h3>
<table>
    <thead>
        <tr>
		<th><?php echo 'Nombre de Usuario';?> </th>
		<th><?php echo 'Nombre(s)';?> </th>
		<th><?php echo 'Apellidos';?> </th>
		<th><?php echo 'Categoria';?></th>
		<th><?php echo 'Subcategoria';?></th>
		<th><?php echo 'Nombre o Razon Social';?></th>
		<th><?php echo 'Nombre Comercial';?></th>
		</tr>
    </thead>
    <tbody> 
	<tr>
		<td><?php echo $this->data['Soya']['username']; ?></td>
		<td><?php echo $this->data['Soya']['nombre']; ?></td>
		<td><?php echo $this->data['Soya']['apellido']; ?></td>
		<td><?php echo $this->data['Grupo']['categoria']; ?></td>
		<td><?php echo $this->data['Grupo']['subcategoria']; ?></td>
		<td><?php echo $this->data['Perfil']['razonsocial']; ?></td>
		<td><?php echo $this->data['Perfil']['nombrecomercial']; ?></td>
	</tr>
    </tbody>
</table>
</div>

<div class="anueal form">
<?php
echo $this->Form->hidden('id', array('value' => $this->data['Soya']['id']));
 ?>
<h3>Panel de Compra por Campaña de Productores de Oleaginosas</h3>
<?php
$TortaSolventeSoyakg=0;
$TortaSolventeSoyatm=0;
$TortaSolventeSoyadolar=0;
$TortaSolventeSoyabs=0;
$TortaSolventeSoyatotaldolar=0;
$TortaSolventeSoyatotalbs=0;


$TortaSolventeGirasolkg=0;
$TortaSolventeGirasoltm=0;
$TortaSolventeGirasoldolar=0;
$TortaSolventeGirasolbs=0;
$TortaSolventeGirasoltotaldolar=0;
$TortaSolventeGirasoltotalbs=0;


$HarinaIntegralSoyakg=0;
$HarinaIntegralSoyatm=0;
$HarinaIntegralSoyadolar=0;
$HarinaIntegralSoyabs=0;
$HarinaIntegralSoyatotaldolar=0;
$HarinaIntegralSoyatotalbs=0;


$HarinaIntegralGirasolkg=0;
$HarinaIntegralGirasoltm=0;
$HarinaIntegralGirasoldolar=0;
$HarinaIntegralGirasolbs=0;
$HarinaIntegralGirasoltotaldolar=0;
$HarinaIntegralGirasoltotalbs=0;


$CascarillaSoyakg=0;
$CascarillaSoyatm=0;
$CascarillaSoyadolar=0;
$CascarillaSoyabs=0;
$CascarillaSoyatotaldolar=0;
$CascarillaSoyatotalbs=0;


$CascarillaGirasolkg=0;
$CascarillaGirasoltm=0;
$CascarillaGirasoldolar=0;
$CascarillaGirasolbs=0;
$CascarillaGirasoltotaldolar=0;
$CascarillaGirasoltotalbs=0;




$GranoSoyakg=0;
$GranoSoyatm=0;
$GranoSoyadolar=0;
$GranoSoyabs=0;
$GranoSoyatotaldolar=0;
$GranoSoyatotalbs=0;



$GranoGirasolkg=0;
$GranoGirasoltm=0;
$GranoGirasoldolar=0;
$GranoGirasolbs=0;
$GranoGirasoltotaldolar=0;
$GranoGirasoltotalbs=0;


$AceiteRefinadoSoyakg=0;
$AceiteRefinadoSoyatm=0;
$AceiteRefinadoSoyadolar=0;
$AceiteRefinadoSoyabs=0;
$AceiteRefinadoSoyatotaldolar=0;
$AceiteRefinadoSoyatotalbs=0;


$AceiteCrudoSoyakg=0;
$AceiteCrudoSoyatm=0;
$AceiteCrudoSoyadolar=0;
$AceiteCrudoSoyabs=0;
$AceiteCrudoSoyatotaldolar=0;
$AceiteCrudoSoyatotalbs=0;


$AceiteRefinadoGirasolkg=0;
$AceiteRefinadoGirasoltm=0;
$AceiteRefinadoGirasoldolar=0;
$AceiteRefinadoGirasolbs=0;
$AceiteRefinadoGirasoltotaldolar=0;
$AceiteRefinadoGirasoltotalbs=0;


$AceiteCrudoGirasolkg=0;
$AceiteCrudoGirasoltm=0;
$AceiteCrudoGirasoldolar=0;
$AceiteCrudoGirasolbs=0;
$AceiteCrudoGirasoltotaldolar=0;
$AceiteCrudoGirasoltotalbs=0;

?>


<?php foreach ($distinct_years as $var)  { ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
       	<th><?php echo 'CAMPANA';?> </th>

		<th><?php echo 'GRANO DE SOYA';?> </th>
		<th><?php echo 'GRANO DE GIRASOL';?> </th>

		</tr>
    </thead>

	<?php for ($i=1; $i <= 2 ; $i++) { ?>
		<tr><th><?php 
		$count1=0;
		$count2=0;
		$tar='';
		if ($i==2) { echo 'CAMPANA DE INVIERNO';
			$tar='INVIERNO';
		 }
		if ($i==1) { echo 'CAMPANA DE VERANO'; 
			$tar='VERANO';
}
		
		?></th>
		<th>
		<?php foreach ($this->data['SoyaProductorCompra'] as $soyaproductorcompra): ?>
			<?php 
			$year = strtotime($soyaproductorcompra['fecharegistro']);
			date("Y", $year);
			?>
                    <?php if($i==2){
                        ?>
			<?php if (date("Y", $year)==$var) { ?>
                            <?php if (date("m", $year)=='06'||date("m", $year)=='07'||date("m", $year)=='08'||date("m", $year)=='09'||date("m", $year)=='10') { ?>
			
					<?php if($soyaproductorcompra['producto']=='GRANO DE SOYA') { ?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorcompra['preciodolar'];?>
						<?php $count1=$count1+1; ?>
					<?php } ?>
					<?php if ($soyaproductorcompra['producto']=='GRANO DE GIRASOL') { ?>
						<?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorcompra['preciodolar'];?>
						<?php $count2=$count2+1; ?>
					<?php } ?>
				
                            <?php } ?>
			  <?php } ?>
                    <?php } ?>
                    <?php if($i==1){
                        $anopas=$var-1;
                        ?>
			<?php if (date("Y", $year)==$anopas) { ?>
                            <?php if (date("m", $year)=='12') { ?>
			
					<?php if($soyaproductorcompra['producto']=='GRANO DE SOYA') { ?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorcompra['preciodolar'];?>
						<?php $count1=$count1+1; ?>
					<?php } ?>
					<?php if ($soyaproductorcompra['producto']=='GRANO DE GIRASOL') { ?>
						<?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorcompra['preciodolar'];?>
						<?php $count2=$count2+1; ?>
					<?php } ?>
		
                            <?php } ?>
			  <?php } ?>
                    <?php } ?>
                    <?php if($i==1){?>
			<?php if (date("Y", $year)==($var)) { ?>
                            <?php if (date("m", $year)=='01'||date("m", $year)=='02'||date("m", $year)=='03'||date("m", $year)=='04'||date("m", $year)=='05') { ?>
				
					<?php if($soyaproductorcompra['producto']=='GRANO DE SOYA') { ?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorcompra['preciodolar'];?>
						<?php $count1=$count1+1; ?>
					<?php } ?>
					<?php if ($soyaproductorcompra['producto']=='GRANO DE GIRASOL') { ?>
						<?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorcompra['preciodolar'];?>
						<?php $count2=$count2+1; ?>
					<?php } ?>
				
                             <?php } ?>
			  <?php } ?>
                    <?php } ?>
		<?php endforeach;?>
		<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($GranoSoyatm); ?></td>
                      <td><?php if ($count1>0){echo $this->Number->format(($GranoSoyadolar/$count1), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));}else{echo '0';} ?></td>
              </tr>
              </table>
		<?php 
			$GranoSoyakg=0;
			$GranoSoyatm=0;
			$GranoSoyadolar=0;
			$GranoSoyabs=0;
			$GranoSoyatotaldolar=0;
			$GranoSoyatotalbs=0;
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                    
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                     
                      <th><h4><strong>Precio Dolar</strong></h4></th>
           
              </tr>
              <tr>
                  
                      <td><?php echo number_format($GranoGirasoltm); ?></td>
                      <td><?php if ($count2>0) {echo $this->Number->format(($GranoGirasoldolar/$count2), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else { echo '0';} ?></td>
                 
              </tr>
              </table>
		<?php 
			$GranoGirasolkg=0;
			$GranoGirasoltm=0;
			$GranoGirasoldolar=0;
			$GranoGirasolbs=0;
			$GranoGirasoltotaldolar=0;
			$GranoGirasoltotalbs=0;
		?>
        </th>

			
		</tr>
	<?php }?>
</table>
<?php } ?>

</div>