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
<div class="azucarexistencias form">

<h3>Panel de Control de Compra de Grano de Soya de Todas las Empresas Oleaginosas por Regimen</h3>
<?php foreach ($distinct_years as $var)  : ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php for ($i=1; $i <= 2 ; $i++) { ?>
		<?php 
		$tar='';
		if ($i==2) { echo ' <h2>Campana de Invierno</h2>';
			$tar='INVIERNO';
		}
		if ($i==1) { echo ' <h2>Campana de Verano</h2>'; 
			$tar='VERANO';
		}
		?>

<table>
    <thead>
        <tr>

		<th><?php echo 'Nombre o Razon Social';?></th>
		<th><?php echo 'Nombre Comercial';?></th>
		<th><?php echo 'Total de Compradas por Regimen General';?></th>
		<th><?php echo 'Total de Compradas por Regimen RAU';?></th>
		<th><?php echo 'Total de Toneladas';?></th>
		<th><?php echo 'Regimen General';?></th>
		<th><?php echo 'Regimen RAU';?></th>
		<th><?php echo 'General (- 13 %)';?></th>
		<th><?php echo 'Total de RAU y General';?></th>
		<th><?php echo 'Precio Total';?></th>
        </tr>
    </thead>
	<tbody> 
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

$regimengeneral=0;
$regimenrau=0;
$regimengeneral1=0;
$regimenrau1=0;

			$rasonsocial=0;
			$nombrecomercial=0; 
$granosoya1=0;
$granogirasol1=0;
?>
	<?php $count=0; ?>

<?php foreach ($ids as $fin)  : ?>

	<?php foreach ($soyas as $soya): ?>
		<?php $count ++;?>
		
		<?php if($soya['SoyaProductorCompra']['user_id']==$fin && $soya['SoyaProveedor']['user_id']==$fin && $soya['Perfil']['user_id']==$fin): ?>
		<?php $rasonsocial = $soya['Perfil']['razonsocial']; ?>
		<?php $nombrecomercial = $soya['Perfil']['nombrecomercial']; ?>
		<?php 
		$year = strtotime($soya['SoyaProductorCompra']['fecharegistro']);
		date("Y", $year);
		?>
		<?php if($i==2){ ?>
			<?php if (date("Y", $year)==$var) { ?>
                <?php if (date("m", $year)=='08'||date("m", $year)=='09'||date("m", $year)=='10'||date("m", $year)=='11'||date("m", $year)=='12') { ?>
					<?php if($soya['SoyaProveedor']['regimen']=='RAU'){ ?>
						<?php $GranoSoyatm=$GranoSoyatm+$soya['SoyaProductorCompra']['toneladas'];?>
						<?php $regimenrau=$regimenrau+$soya['SoyaProductorCompra']['total'];?>
					<?php } ?>
					<?php if ($soya['SoyaProveedor']['regimen']=='GENERAL') { ?>
						<?php $GranoGirasoltm=$GranoGirasoltm+$soya['SoyaProductorCompra']['toneladas'];?>
                        <?php $regimengeneral=$regimengeneral+$soya['SoyaProductorCompra']['total'];?>
					<?php } ?>
				<?php } ?>
            <?php } ?>
        <?php }?>
        <?php if($i==2){
              $anopas=$var+1; ?>
			<?php if (date("Y", $year)==$anopas) { ?>
                <?php if (date("m", $year)=='01') { ?>
					<?php if($soya['SoyaProveedor']['regimen']=='RAU'){ ?>
						<?php $granosoya1=$granosoya1+$soya['SoyaProductorCompra']['toneladas'];?>
						<?php $regimenrau1=$regimenrau1+$soya['SoyaProductorCompra']['total'];?>
					<?php } ?>
					<?php if ($soya['SoyaProveedor']['regimen']=='GENERAL') { ?>
						<?php $granogirasol1=$granogirasol1+$soya['SoyaProductorCompra']['toneladas'];?>
                        <?php $regimengeneral1=$regimengeneral1+$soya['SoyaProductorCompra']['total'];?>
					<?php } ?>
				<?php } ?>
            <?php } ?>
		<?php } ?>
        <?php if($i==1){?>
			<?php if (date("Y", $year)==($var)) { ?>
                <?php if (date("m", $year)=='02'||date("m", $year)=='03'||date("m", $year)=='04'||date("m", $year)=='05'||date("m", $year)=='06'||date("m", $year)=='07') { ?>
					<?php if($soya['SoyaProveedor']['regimen']=='RAU'){ ?>
						<?php $granosoya1=$granosoya1+$soya['SoyaProductorCompra']['toneladas'];?>
						<?php $regimenrau1=$regimenrau1+$soya['SoyaProductorCompra']['total'];?>
					<?php } ?>
					<?php if ($soya['SoyaProveedor']['regimen']=='GENERAL') { ?>
						<?php $granogirasol1=$granogirasol1+$soya['SoyaProductorCompra']['toneladas'];?>
                        <?php $regimengeneral1=$regimengeneral1+$soya['SoyaProductorCompra']['total'];?>
					<?php } ?>
				<?php } ?>
            <?php } ?>
		<?php } ?>


	<?php endif;?>
	<?php endforeach;?>

		<tr> 
			<td><?php echo $rasonsocial; ?></td>
			<td><?php echo $nombrecomercial; ?></td>
	        <?php if($i==1){?>
		        <th><?php echo number_format($granogirasol1); ?></th> 
		        <th><?php echo number_format($granosoya1); ?></th>
				<th><?php echo number_format(($granosoya1+$granogirasol1)) ?></th> 
				<th><?php echo $this->Number->format($regimengeneral1, array(
								    'places' => 2,
								    'before' => '',
								    'decimals' => '.',
								    'thousands' => ','
								)); ?></th> 
				<th><?php echo $this->Number->format($regimenrau1, array(
								    'places' => 2,
								    'before' => '',
								    'decimals' => '.',
								    'thousands' => ','
								)); ?></th> 
				<th><?php echo $this->Number->format((($regimengeneral1-($regimengeneral1*0.13))), array(
								    'places' => 2,
								    'before' => '',
								    'decimals' => '.',
								    'thousands' => ','
								)); 
				$generestado1=($regimengeneral1-($regimengeneral1*0.13)); ?></th> 
				<th><?php echo $this->Number->format(($generestado1+$regimenrau1), array(
								    'places' => 2,
								    'before' => '',
								    'decimals' => '.',
								    'thousands' => ','
								));  ?></th> 
				<th><?php if( ($granogirasol1+$granosoya1) > 0){ echo $this->Number->format((($generestado1+$regimenrau1)/($granogirasol1+$granosoya1)), array(
							    'places' => 2,
							    'before' => '',
							    'decimals' => '.',
							    'thousands' => ','
							)); }else{ echo '0';}  ?></th> 
	        <?php }?>
	                
	        <?php if($i==2){?>
			<th><?php echo number_format($GranoGirasoltm); ?></th>
	        <th><?php echo number_format($GranoSoyatm); ?></th>
			<th><?php echo number_format($GranoGirasoltm+$GranoSoyatm); ?></th> 
			<th><?php echo $this->Number->format($regimengeneral, array(
							    'places' => 2,
							    'before' => '',
							    'decimals' => '.',
							    'thousands' => ','
							)); ?></th> 
			<th><?php echo $this->Number->format($regimenrau, array(
							    'places' => 2,
							    'before' => '',
							    'decimals' => '.',
							    'thousands' => ','
							));  ?></th> 
			<th><?php echo $this->Number->format(($regimengeneral-($regimengeneral*0.13)), array(
							    'places' => 2,
							    'before' => '',
							    'decimals' => '.',
							    'thousands' => ','
							)); 
			$generestado=($regimengeneral-($regimengeneral*0.13)); ?></th> 
			<th><?php echo $this->Number->format(($generestado+$regimenrau), array(
							    'places' => 2,
							    'before' => '',
							    'decimals' => '.',
							    'thousands' => ','
							));  ?></th> 
			<th><?php if( ($GranoGirasoltm+$GranoSoyatm) > 0){ echo $this->Number->format((($generestado+$regimenrau)/($GranoGirasoltm+$GranoSoyatm)), array(
							    'places' => 2,
							    'before' => '',
							    'decimals' => '.',
							    'thousands' => ','
							));  }else{ echo '0';}  ?></th> 
	        <?php }?>
	                
			<?php 
	            $GranoGirasoltm=0;
	            $granosoya1=0;
	            $granogirasol1=0;
	            $regimengeneral1=0;
	            $regimenrau1=0;
				$generestado=0;
				$regimengeneral=0;
				$regimenrau=0;
				$GranoSoyakg=0;
				$GranoSoyatm=0;
				$GranoSoyadolar=0;
				$GranoSoyabs=0;
				$GranoSoyatotaldolar=0;
				$GranoSoyatotalbs=0;
				$rasonsocial=0;
				$nombrecomercial=0; 
			?>
		</tr>
		<?php endforeach; ?>
		
	</tbody>
</table>

        <?php } ?>
<?php endforeach;?>

</div>