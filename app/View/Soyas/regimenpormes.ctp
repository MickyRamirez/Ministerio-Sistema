<div class="datos form">

<h3>Datos Usuario</h3>
<table>
    <thead>
        <tr>
		<th><?php echo 'Nombre o Razón Social';?></th>
		<th><?php echo 'Nombre Comercial';?></th>
		</tr>
    </thead>
    <tbody> 
	<tr>

		<td><?php echo $this->data[0]['Perfil']['razonsocial']; ?></td>
		<td><?php echo $this->data[0]['Perfil']['nombrecomercial']; ?></td>
	</tr>
    </tbody>
</table>
</div>

<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'compras') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link("Reporte", array('action'=>'reporteregimenpormes', $this->data[0]['Perfil']['user_id'])); ?></li>
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

<div class="anueal form">

<h3>Panel de Compra <br/>
	Productores de Oleaginosas por Régimen</h3>
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


$granosoya1=0;
$granogirasol1=0;

?>


<?php foreach ($distinct_years as $var)  { ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
		<th><?php echo 'CAMPAÑA';?> </th>
		<th><?php echo 'Total de Toneladas Compradas por Régimen General';?> </th>
		<th><?php echo 'Total de Toneladas Compradas por Régimen RAU';?> </th>
		<th><?php echo 'Total de Toneladas';?> </th>
		<th><?php echo 'Régimen General';?> </th>
		<th><?php echo 'Régimen RAU';?> </th>
		<th><?php echo 'General (- 13 %)';?> </th>
		<th><?php echo 'Total de RAU y General';?> </th>
		<th><?php echo 'Precio Total';?> </th>

		</tr>
    </thead>

	<?php for ($i=1; $i <= 12 ; $i++) { ?>
		<tr>
		<th><?php 
		if ($i==1) { echo 'Enero'; }
		if ($i==2) { echo 'Febrero'; }
		if ($i==3) { echo 'Marzo'; }
		if ($i==4) { echo 'Abril'; }
		if ($i==5) { echo 'Mayo'; }	
		if ($i==6) { echo 'Junio'; }
		if ($i==7) { echo 'Julio'; }
		if ($i==8) { echo 'Agosto'; }
		if ($i==9) { echo 'Septiembre'; }
		if ($i==10) { echo 'Octubre'; }
		if ($i==11) { echo 'Noviembre'; }
		if ($i==12) { echo 'Diciembre'; }
		?></th>


		<?php foreach ($this->data as $soyaproductorcompra): ?>
			<?php 
			$year = strtotime($soyaproductorcompra['SoyaProductorCompra']['fecharegistro']);
			date("Y", $year);
			?>
			<?php if (date("Y", $year)==$var) { ?>
                <?php if (date("m", $year)== $i) { ?>
					<?php if($soyaproductorcompra['SoyaProveedor']['regimen']=='RAU'){ ?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorcompra['SoyaProductorCompra']['toneladas'];?>
						<?php $regimenrau=$regimenrau+$soyaproductorcompra['SoyaProductorCompra']['total'];?>
					<?php } ?>
					<?php if ($soyaproductorcompra['SoyaProveedor']['regimen']=='GENERAL') { ?>
						<?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorcompra['SoyaProductorCompra']['toneladas'];?>
                        <?php $regimengeneral=$regimengeneral+$soyaproductorcompra['SoyaProductorCompra']['total'];?>
					<?php } ?>
				<?php } ?>
            <?php } ?>


     
 
		<?php endforeach;?>

                

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
						)); ?></th> 
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
						));?></th> 
		<th><?php if( ($GranoGirasoltm+$GranoSoyatm) > 0){ echo $this->Number->format((($generestado+$regimenrau)/($GranoGirasoltm+$GranoSoyatm)), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));}else{ echo '0';}  ?></th> 

		<?php 
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
			$GranoGirasoltm=0;
		?>
		</tr>
	<?php }?>
</table>
<?php } ?>

</div>



