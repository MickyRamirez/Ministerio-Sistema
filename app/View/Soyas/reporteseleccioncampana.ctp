<div class="azucarexistencias form">

<h3>Panel de Control <br/>
	Compra de Grano de Soya <br/>
	Por Periodo de Campaña</h3>

<?php echo '<h2>'.$actual[0]['SoyaCampana']['nomcampana'].'</h2><br/>';?>
<?php echo '<h2> Desde '.$actual[0]['SoyaCampana']['fechaini'].' hasta '.$actual[0]['SoyaCampana']['fechafin'].'</h2>';?>


<table>
    <thead>
        <tr>

		<th><?php echo 'Nombre o Razón Social';?></th>
		<th><?php echo 'Nombre Comercial';?></th>
		<th><?php echo 'Total de Compradas por Régimen General';?></th>
		<th><?php echo 'Total de Compradas por Régimen RAU';?></th>
		<th><?php echo 'Total de Toneladas';?></th>
		<th><?php echo 'Régimen General';?></th>
		<th><?php echo 'Régimen RAU';?></th>
		<th><?php echo 'General (- 13 %)';?></th>
		<th><?php echo 'Total de RAU y General';?></th>
		<th><?php echo 'Precio Total';?></th>
        </tr>
    </thead>
	<tbody> 
<?php
$var=date("Y", strtotime($actual[0]['SoyaCampana']['fechaini']));
$var1=date("Y", strtotime($actual[0]['SoyaCampana']['fechafin']));

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
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
		<?php if($soya['SoyaProductorCompra']['user_id']==$fin && $soya['SoyaProveedor']['user_id']==$fin && $soya['Perfil']['user_id']==$fin): ?>
		<?php $rasonsocial = $soya['Perfil']['razonsocial']; ?>
		<?php $nombrecomercial = $soya['Perfil']['nombrecomercial']; ?>
		<?php 
		$year = strtotime($soya['SoyaProductorCompra']['fecharegistro']);
		date("Y", $year);
		?>
		<?php if (date("Y", $year)==$var || date("Y", $year)==$var1) { ?>
			<?php if($soya['SoyaProveedor']['regimen']=='RAU'){ ?>
				<?php $GranoSoyatm=$GranoSoyatm+$soya['SoyaProductorCompra']['toneladas'];?>
				<?php $regimenrau=$regimenrau+$soya['SoyaProductorCompra']['total'];?>
			<?php } ?>
			<?php if ($soya['SoyaProveedor']['regimen']=='GENERAL') { ?>
				<?php $GranoGirasoltm=$GranoGirasoltm+$soya['SoyaProductorCompra']['toneladas'];?>
                <?php $regimengeneral=$regimengeneral+$soya['SoyaProductorCompra']['total'];?>
			<?php } ?>
        <?php } ?>
	<?php endif;?>
	<?php endforeach;?>


		<td><?php echo $rasonsocial; ?></td>
		<td><?php echo $nombrecomercial; ?></td>
    
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
		<?php endforeach; ?>
		<?php unset($soya); ?>
	</tbody>
</table>




</div>



<div class="actions">
<h3>Acciones</h3>


<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'filtrocampana') ); ?></li>
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
