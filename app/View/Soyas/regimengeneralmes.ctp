 
<div class="azucarexistencias form">

<h3>Panel de Control <br/>
	Compra de Grano de Soya <br/>
	Todas las Empresas Oleaginosas por Régimen en Cada Mes</h3>
<?php foreach ($distinct_years as $var)  : ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>



<table>
    <thead>
        
<?php for ($i=1; $i <= 13 ; $i++) { ?>
<?php 
		if ($i==1) { 
			echo '<tr>';
			echo '<th colspan="10">Enero</th>'; }
		if ($i==2) { echo '<th colspan="10">Febrero</th>'; }
		if ($i==3) { echo '<th colspan="10">Marzo</th>'; }
		if ($i==4) { echo '<th colspan="10">Abril</th>'; }
		if ($i==5) { echo '<th colspan="10">Mayo</th>'; }	
		if ($i==6) { echo '<th colspan="10">Junio</th>'; }
		if ($i==7) { echo '<th colspan="10">Julio</th>'; }
		if ($i==8) { echo '<th colspan="10">Agosto</th>'; }
		if ($i==9) { echo '<th colspan="10">Septiembre</th>'; }
		if ($i==10) { echo '<th colspan="10">Octubre</th>'; }
		if ($i==11) { echo '<th colspan="10">Noviembre</th>'; }
		if ($i==12) { echo '<th colspan="10">Diciembre</th>'; }
		if ($i==13) { echo '<th colspan="10">Resumen Anual</th>'; 
			echo '</tr>';}
		?>

		
		<?php } ?>

		<tr>
		
		<?php for ($j=1; $j <= 13 ; $j++) { ?>
		<th><?php echo '<h4>Nombre o Razón Social</h4>';?></th>
		<th><?php echo '<h4>Nombre Comercial</h4>';?></th>
		<th><?php echo '<h4>Total de Toneladas Compradas por Régimen General</h4>';?></th>
		<th><?php echo '<h4>Total de Toneladas Compradas por Régimen RAU</h4>';?></th>
		<th><?php echo '<h4>Total de Toneladas</h4>';?></th>
		<th><?php echo '<h4>Régimen General</h4>';?></th>
		<th><?php echo '<h4>Régimen RAU</h4>';?></th>
		<th><?php echo '<h4>General (- 13 %)</h4>';?></th>
		<th><?php echo '<h4>Total de RAU y General</h4>';?></th>
		<th><?php echo '<h4>Precio Total</h4>';?></th>
		 <?php } ?> 
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


$resumenrau=0;
$resumengeneral=0;
$resumenrau1=0;
$resumengeneral1=0;
?>
	<?php $count=0; ?>

<?php foreach ($ids as $fin)  : ?>

<tr>

<?php for ($k=1; $k <= 13 ; $k++) { ?>

	<?php foreach ($soyas as $soya): ?>
	
		<?php if($soya['SoyaProductorCompra']['user_id']==$fin && $soya['SoyaProveedor']['user_id']==$fin && $soya['Perfil']['user_id']==$fin): ?>
		<?php $rasonsocial = $soya['Perfil']['razonsocial']; ?>
		<?php $nombrecomercial = $soya['Perfil']['nombrecomercial']; ?>
		<?php 
		$year = strtotime($soya['SoyaProductorCompra']['fecharegistro']);
		date("Y", $year);
		?>
			<?php if (date("Y", $year)==($var)) { ?>
                <?php if (date("m", $year)==$k) { ?>
					<?php if($soya['SoyaProveedor']['regimen']=='RAU'){ ?>
						<?php $granosoya1=$granosoya1+$soya['SoyaProductorCompra']['toneladas'];?>
						<?php $regimenrau1=$regimenrau1+$soya['SoyaProductorCompra']['total'];
							$resumenrau=$resumenrau+$soya['SoyaProductorCompra']['toneladas'];
							$resumenrau1=$resumenrau1+$soya['SoyaProductorCompra']['total'];
						?>

					<?php } ?>
					<?php if ($soya['SoyaProveedor']['regimen']=='GENERAL') { ?>
						<?php $granogirasol1=$granogirasol1+$soya['SoyaProductorCompra']['toneladas'];?>
                        <?php $regimengeneral1=$regimengeneral1+$soya['SoyaProductorCompra']['total'];
							$resumengeneral=$resumengeneral+$soya['SoyaProductorCompra']['toneladas'];
							$resumengeneral1=$regimengeneral1+$soya['SoyaProductorCompra']['total'];
						?>
					<?php } ?>
				<?php } ?>
            <?php } ?>
	<?php endif;?>
	<?php endforeach;?>
	<?php if($k!=13){ ?>
		<td><?php echo $rasonsocial; ?></td>
		<td><?php echo $nombrecomercial; ?></td>
        <th><?php echo number_format($granogirasol1); ?></th> 
        <th><?php echo number_format($granosoya1); ?></th>
		<th><?php echo number_format($granosoya1+$granogirasol1); ?></th> 
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
		<th><?php echo $this->Number->format(($regimengeneral1-($regimengeneral1*0.13)), array(
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
						)); ?></th> 
		<th><?php if( ($granogirasol1+$granosoya1) > 0){ echo $this->Number->format((($generestado1+$regimenrau1)/($granogirasol1+$granosoya1)), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));}else{ echo '0';}  ?></th> 
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
			$GranoGirasoltm=0;

		?>
		<?php } ?>
	<?php if($k==13){ ?>
		<td><?php echo $rasonsocial; ?></td>
		<td><?php echo $nombrecomercial; ?></td>
        <th><?php echo number_format($resumengeneral); ?></th> 
        <th><?php echo number_format($resumenrau); ?></th>
		<th><?php echo number_format($resumenrau+$resumengeneral); ?></th> 
		<th><?php echo $this->Number->format($resumengeneral1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></th> 
		<th><?php echo $this->Number->format($resumenrau1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></th> 
		<th><?php echo $this->Number->format(($resumengeneral1-($resumengeneral1*0.13)), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); 
		$generestado1=($resumengeneral1-($resumengeneral1*0.13)); ?></th> 
		<th><?php echo $this->Number->format(($generestado1+$resumenrau1), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></th> 
		<th><?php if( ($resumenrau+$resumengeneral) > 0){ echo $this->Number->format((($generestado1+$resumenrau1)/($resumenrau+$resumengeneral)), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));}else{ echo '0';}  ?></th> 
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
			$GranoGirasoltm=0;
			$resumenrau=0;
			$resumengenera=0;
			$resumenrau1=0;
			$resumengeneral1=0;
		?>
		<?php } ?>
 
		
	
	
<?php } ?>
</tr>
		<?php endforeach; ?>
		<?php unset($soya); ?>
	</tbody>
</table>



<?php endforeach;?>

</div>



<div class="actions">
<h3>Acciones</h3>


<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'compras') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Reporte",   array('action'=>'reporteregimengeneralmes') ); ?></li>
</ul>
<ul>
<li><?php 
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Cerrar Sesión",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?></li>
</ul>

</div>
