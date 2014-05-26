<?php ini_set('memory_limit', '-1'); ?>
 <div class="azucarexistencias form">
<?php 
$meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre');
?>
<h3>Panel de Control <br/>
	Compra de Grano de Soya <br/>
	Todas las Empresas Oleaginosas por Régimen en Cada Mes</h3>


<?php foreach ($distinct_years as $var)  : ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>

<table>
    <thead>
<?php 
	foreach( $this->data['Soya']['Meses'] as $mes) {
		foreach($meses as $tar => $das): 
			
		if ($tar==$mes) { 
		echo '<tr>'; 
		echo '<th>'.$das.'</th>';
		echo '</tr>';  
?>
		<tr>
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
        </tr>


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
$count=0; 

?>


<?php foreach ($this->data['Soya']['Empresas'] as $fin)  : ?>
	<?php foreach ($soyas as $soya): ?>
		<?php if($soya['SoyaProductorCompra']['user_id']==$fin && $soya['SoyaProveedor']['user_id']==$fin && $soya['Perfil']['user_id']==$fin): ?>
		<?php $rasonsocial = $soya['Perfil']['razonsocial']; ?>
		<?php $nombrecomercial = $soya['Perfil']['nombrecomercial']; ?>
		<?php 
		$year = strtotime($soya['SoyaProductorCompra']['fecharegistro']);
		date("Y", $year);
		?>
			<?php if (date("Y", $year)==($var)) { ?>
                <?php if (date("m", $year)==$tar) { ?>
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

		<tr>
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


	</tr>

		<?php endforeach; ?>
		<?php unset($soya); ?>

<?php
			}
	endforeach; 
} 
endforeach;
?>
	</tbody>
</table>

</div>



<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'seleccionregimen') ); ?></li>
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