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

<h3>Panel de Control de Todas las Empresas Oleaginosas y Venta de sus Derivados en Soya</h3>
<?php foreach ($distinct_years as $var)  : ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
		<th><?php echo $this->Paginator->sort('razonsocial', 'Nombre o Razon Social');?></th>
		<th><?php echo $this->Paginator->sort('nombrecomercial', 'Nombre Comercial');?></th>
		<th><?php echo $this->Paginator->sort('producto', 'Torta solvente de soya');?></th>
		<th><?php echo $this->Paginator->sort('producto', 'Harina Integral de soya');?></th>
		<th><?php echo $this->Paginator->sort('producto', 'Cascarilla de soya');?></th>
		<th><?php echo $this->Paginator->sort('producto', 'Aceite Refinado de soya');?></th>
		<th><?php echo $this->Paginator->sort('producto', 'Aceite Crudo de soya');?></th>
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

?>

	<?php $count=0; ?>
	<?php foreach ($soyas as $soya): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>

		<td><?php echo $soya['Perfil']['razonsocial']; ?></td>
		<td><?php echo $soya['Perfil']['nombrecomercial']; ?></td>
		<?php foreach ($soya['SoyaProductorDerivado'] as $soyaproductorderivado): ?>
				<?php 
				$year = strtotime($soyaproductorderivado['fecharegistro']);
				if (date("Y", $year)==$var) { ?>
					<?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE SOYA') { ?>
						<?php $TortaSolventeSoyakg=$TortaSolventeSoyakg+$soyaproductorderivado['cantidadkg'];?>
						<?php $TortaSolventeSoyatm=$TortaSolventeSoyatm+$soyaproductorderivado['cantidadtm'];?>
						<?php $TortaSolventeSoyadolar=$TortaSolventeSoyadolar+$soyaproductorderivado['preciodolar'];?>
						<?php $TortaSolventeSoyabs=$TortaSolventeSoyabs+$soyaproductorderivado['preciobs'];?>
						<?php $TortaSolventeSoyatotaldolar=$TortaSolventeSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $TortaSolventeSoyatotalbs=$TortaSolventeSoyatotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE GIRASOL') { ?>
						
						<?php $TortaSolventeGirasolkg=$TortaSolventeGirasolkg+$soyaproductorderivado['cantidadkg'];?>
						<?php $TortaSolventeGirasoltm=$TortaSolventeGirasoltm+$soyaproductorderivado['cantidadtm'];?>
						<?php $TortaSolventeGirasoldolar=$TortaSolventeGirasoldolar+$soyaproductorderivado['preciodolar'];?>
						<?php $TortaSolventeGirasolbs=$TortaSolventeGirasolbs+$soyaproductorderivado['preciobs'];?>
						<?php $TortaSolventeGirasoltotaldolar=$TortaSolventeGirasolbs+$soyaproductorderivado['totaldolar'];?>
						<?php $TortaSolventeGirasoltotalbs=$TortaSolventeGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
						
						<?php $HarinaIntegralSoyakg=$HarinaIntegralSoyakg+$soyaproductorderivado['cantidadkg'];?>
						<?php $HarinaIntegralSoyatm=$HarinaIntegralSoyatm+$soyaproductorderivado['cantidadtm'];?>
						<?php $HarinaIntegralSoyadolar=$HarinaIntegralSoyadolar+$soyaproductorderivado['preciodolar'];?>
						<?php $HarinaIntegralSoyabs=$HarinaIntegralSoyabs+$soyaproductorderivado['preciobs'];?>
						<?php $HarinaIntegralSoyatotaldolar=$HarinaIntegralSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $HarinaIntegralSoyatotalbs=$HarinaIntegralSoyatotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE GIRASOL') { ?>
						
						<?php $HarinaIntegralGirasolkg=$HarinaIntegralGirasolkg+$soyaproductorderivado['cantidadkg'];?>
						<?php $HarinaIntegralGirasoltm=$HarinaIntegralGirasoltm+$soyaproductorderivado['cantidadtm'];?>
						<?php $HarinaIntegralGirasoldolar=$HarinaIntegralGirasoldolar+$soyaproductorderivado['preciodolar'];?>
						<?php $HarinaIntegralGirasolbs=$HarinaIntegralGirasolbs+$soyaproductorderivado['preciobs'];?>
						<?php $HarinaIntegralGirasoltotaldolar=$HarinaIntegralGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $HarinaIntegralGirasoltotalbs=$HarinaIntegralGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='CASCARILLA DE SOYA') { ?>
						
						<?php $CascarillaSoyakg=$CascarillaSoyakg+$soyaproductorderivado['cantidadkg'];?>
						<?php $CascarillaSoyatm=$CascarillaSoyatm+$soyaproductorderivado['cantidadtm'];?>
						<?php $CascarillaSoyadolar=$CascarillaSoyadolar+$soyaproductorderivado['preciodolar'];?>
						<?php $CascarillaSoyabs=$CascarillaSoyabs+$soyaproductorderivado['preciobs'];?>
						<?php $CascarillaSoyatotaldolar=$CascarillaSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $CascarillaSoyatotalbs=$CascarillaSoyatotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='CASCARILLA DE GIRASOL') { ?>
						
						<?php $CascarillaGirasolkg=$CascarillaGirasolkg+$soyaproductorderivado['cantidadkg'];?>
						<?php $CascarillaGirasoltm=$CascarillaGirasoltm+$soyaproductorderivado['cantidadtm'];?>
						<?php $CascarillaGirasoldolar=$CascarillaGirasoldolar+$soyaproductorderivado['preciodolar'];?>
						<?php $CascarillaGirasolbs=$CascarillaGirasolbs+$soyaproductorderivado['preciobs'];?>
						<?php $CascarillaGirasoltotaldolar=$CascarillaGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $CascarillaGirasoltotalbs=$CascarillaGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='GRANO DE SOYA') { ?>
						
						<?php $GranoSoyakg=$GranoSoyakg+$soyaproductorderivado['cantidadkg'];?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorderivado['cantidadtm'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorderivado['preciodolar'];?>
						<?php $GranoSoyabs=$GranoSoyabs+$soyaproductorderivado['preciobs'];?>
						<?php $GranoSoyatotaldolar=$CascarillaGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $GranoSoyatotalbs=$GranoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='GRANO DE GIRASOL') { ?>
					
						<?php $GranoGirasolkg=$GranoGirasolkg+$soyaproductorderivado['cantidadkg'];?>
						<?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorderivado['cantidadtm'];?>
						<?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorderivado['preciodolar'];?>
						<?php $GranoGirasolbs=$GranoGirasolbs+$soyaproductorderivado['preciobs'];?>
						<?php $GranoGirasoltotaldolar=$GranoGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $GranoGirasoltotalbs=$GranoGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA REFINADO') { ?>
					
						<?php $AceiteRefinadoSoyakg=$AceiteRefinadoSoyakg+$soyaproductorderivado['cantidadkg'];?>
						<?php $AceiteRefinadoSoyatm=$AceiteRefinadoSoyatm+$soyaproductorderivado['cantidadtm'];?>
						<?php $AceiteRefinadoSoyadolar=$AceiteRefinadoSoyadolar+$soyaproductorderivado['preciodolar'];?>
						<?php $AceiteRefinadoSoyabs=$AceiteRefinadoSoyabs+$soyaproductorderivado['preciobs'];?>
						<?php $AceiteRefinadoSoyatotaldolar=$AceiteRefinadoSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $AceiteRefinadoSoyatotalbs=$AceiteRefinadoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA CRUDO') { ?>
						
						<?php $AceiteCrudoSoyakg=$AceiteCrudoSoyakg+$soyaproductorderivado['cantidadkg'];?>
						<?php $AceiteCrudoSoyatm=$AceiteCrudoSoyatm+$soyaproductorderivado['cantidadtm'];?>
						<?php $AceiteCrudoSoyadolar=$AceiteCrudoSoyadolar+$soyaproductorderivado['preciodolar'];?>
						<?php $AceiteCrudoSoyabs=$AceiteCrudoSoyabs+$soyaproductorderivado['preciobs'];?>
						<?php $AceiteCrudoSoyatotaldolar=$AceiteCrudoSoyatotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $AceiteCrudoSoyatotalbs=$AceiteCrudoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL REFINADO') { ?>
					
						<?php $AceiteRefinadoGirasolkg=$AceiteRefinadoGirasolkg+$soyaproductorderivado['cantidadkg'];?>
						<?php $AceiteRefinadoGirasoltm=$AceiteRefinadoGirasoltm+$soyaproductorderivado['cantidadtm'];?>
						<?php $AceiteRefinadoGirasoldolar=$AceiteRefinadoGirasoldolar+$soyaproductorderivado['preciodolar'];?>
						<?php $AceiteRefinadoGirasolbs=$AceiteRefinadoGirasolbs+$soyaproductorderivado['preciobs'];?>
						<?php $AceiteRefinadoGirasoltotaldolar=$AceiteRefinadoGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $AceiteRefinadoGirasoltotalbs=$AceiteRefinadoGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL CRUDO') { ?>
						
						<?php $AceiteCrudoGirasolkg=$AceiteCrudoGirasolkg+$soyaproductorderivado['cantidadkg'];?>
						<?php $AceiteCrudoGirasoltm=$AceiteCrudoGirasoltm+$soyaproductorderivado['cantidadtm'];?>
						<?php $AceiteCrudoGirasoldolar=$AceiteCrudoGirasoldolar+$soyaproductorderivado['preciodolar'];?>
						<?php $AceiteCrudoGirasolbs=$AceiteCrudoGirasolbs+$soyaproductorderivado['preciobs'];?>
						<?php $AceiteCrudoGirasoltotaldolar=$AceiteCrudoGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $AceiteCrudoGirasoltotalbs=$AceiteCrudoGirasoltotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
				<?php } ?>
		<?php endforeach;?>
	<td>	
	<?php 
		if ($count==1) {
			?>	
				<table cellspacing="5" cellpadding="2">
              <tr>
 		
                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>

                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
     
                    <td><?php echo number_format($TortaSolventeSoyakg); ?></td>
                    <td><?php echo number_format($TortaSolventeSoyatm); ?></td>

                    <td><?php echo $this->Number->format($TortaSolventeSoyatotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>
                    <td><?php echo $this->Number->format($TortaSolventeSoyatotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>
              </th>
			</td>
			<td>
				<table cellspacing="5" cellpadding="2">
		              <tr>
		                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
		                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>

		                    <th><h4><strong>Total en Bs</strong></h4></th>
		                    <th><h4><strong>Total en Dolares</strong></h4></th>
		              </tr>
		              <tr>
		                      <td><?php echo number_format($HarinaIntegralSoyakg); ?></td>
		                      <td><?php echo number_format($HarinaIntegralSoyatm); ?></td>

		                      <td><?php echo $this->Number->format($HarinaIntegralSoyatotalbs, array(
								    'places' => 2,
								    'before' => '',
								    'decimals' => '.',
								    'thousands' => ','
								)); ?></td>
		                      <td><?php echo $this->Number->format($HarinaIntegralSoyatotaldolar, array(
								    'places' => 2,
								    'before' => '',
								    'decimals' => '.',
								    'thousands' => ','
								)); ?></td>
		                     
		              </tr>
		              </table>
		              </td>
					<td>
						<table cellspacing="5" cellpadding="2">
				              <tr>

				                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
				                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>

				                    <th><h4><strong>Total en Bs</strong></h4></th>
				                    <th><h4><strong>Total en Dolares</strong></h4></th>
				              </tr>
				              <tr>

				                      <td><?php echo number_format($CascarillaSoyakg); ?></td>
				                      <td><?php echo number_format($CascarillaSoyatm); ?></td>

				                      <td><?php echo $this->Number->format($CascarillaSoyatotalbs, array(
										    'places' => 2,
										    'before' => '',
										    'decimals' => '.',
										    'thousands' => ','
										)); ?></td>
				                      <td><?php echo $this->Number->format($CascarillaSoyatotaldolar, array(
										    'places' => 2,
										    'before' => '',
										    'decimals' => '.',
										    'thousands' => ','
										)); ?></td>
				                      
				              </tr>
				              </table>
				              </td>
						    <td>
								<table cellspacing="5" cellpadding="2">
						              <tr>
						 		
						                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
						                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
						      
						                    <th><h4><strong>Total en Bs</strong></h4></th>
						                    <th><h4><strong>Total en Dolares</strong></h4></th>
						              </tr>
						              <tr>
						         
						                      <td><?php echo number_format($AceiteRefinadoSoyakg); ?></td>
						                      <td><?php echo number_format($AceiteRefinadoSoyatm); ?></td>

						                      <td><?php echo $this->Number->format($AceiteRefinadoSoyatotalbs, array(
												    'places' => 2,
												    'before' => '',
												    'decimals' => '.',
												    'thousands' => ','
												)); ?></td>
						                      <td><?php echo $this->Number->format($AceiteRefinadoSoyatotaldolar, array(
												    'places' => 2,
												    'before' => '',
												    'decimals' => '.',
												    'thousands' => ','
												)); ?></td>
						              </tr>
						              </table>
						              </td>
								    <td>
										<table cellspacing="5" cellpadding="2">
								              <tr>
								 		
								                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
								                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>

								                    <th><h4><strong>Total en Bs</strong></h4></th>
								                    <th><h4><strong>Total en Dolares</strong></h4></th>
								              </tr>
								              <tr>
								      
								                      <td><?php echo number_format($AceiteCrudoSoyakg); ?></td>
								                      <td><?php echo number_format($AceiteCrudoSoyatm); ?></td>

								                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotalbs, array(
														    'places' => 2,
														    'before' => '',
														    'decimals' => '.',
														    'thousands' => ','
														));?></td>
								                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotaldolar, array(
														    'places' => 2,
														    'before' => '',
														    'decimals' => '.',
														    'thousands' => ','
														));?></td>
								                     
								              </tr>
								              </table>
			<?php
		}
	?>
	<?php 
	if ($count>1) {
		
			?>	 
				<table cellspacing="5" cellpadding="2">
	              <tr>
	     
	                    <td><?php echo number_format($TortaSolventeSoyakg); ?></td>
	                    <td><?php echo number_format($TortaSolventeSoyatm); ?></td>

	                    <td><?php echo $this->Number->format($TortaSolventeSoyatotalbs, array(
							    'places' => 2,
							    'before' => '',
							    'decimals' => '.',
							    'thousands' => ','
							));?></td>
	                    <td><?php echo $this->Number->format($TortaSolventeSoyatotaldolar, array(
							    'places' => 2,
							    'before' => '',
							    'decimals' => '.',
							    'thousands' => ','
							)); ?></td>
	              </tr>
	             </table>
	             </th>
				</td>
				<td>
					<table cellspacing="5" cellpadding="2">
			              <tr>
			                      <td><?php echo number_format($HarinaIntegralSoyakg); ?></td>
			                      <td><?php echo number_format($HarinaIntegralSoyatm); ?></td>

			                      <td><?php echo $this->Number->format($HarinaIntegralSoyatotalbs, array(
									    'places' => 2,
									    'before' => '',
									    'decimals' => '.',
									    'thousands' => ','
									)); ?></td>
			                      <td><?php echo $this->Number->format($HarinaIntegralSoyatotaldolar, array(
									    'places' => 2,
									    'before' => '',
									    'decimals' => '.',
									    'thousands' => ','
									)); ?></td>
			                     
			              </tr>
			              </table>
			              </td>
						<td>
							<table cellspacing="5" cellpadding="2">
					              <tr>

					                      <td><?php echo number_format($CascarillaSoyakg); ?></td>
					                      <td><?php echo number_format($CascarillaSoyatm); ?></td>

					                      <td><?php echo $this->Number->format($CascarillaSoyatotalbs, array(
											    'places' => 2,
											    'before' => '',
											    'decimals' => '.',
											    'thousands' => ','
											)); ?></td>
					                      <td><?php echo $this->Number->format($CascarillaSoyatotaldolar, array(
											    'places' => 2,
											    'before' => '',
											    'decimals' => '.',
											    'thousands' => ','
											)); ?></td>
					                      
					              </tr>
					              </table>
					              </td>
							    <td>
									<table cellspacing="5" cellpadding="2">
							              <tr>
							         
							                      <td><?php echo number_format($AceiteRefinadoSoyakg); ?></td>
							                      <td><?php echo number_format($AceiteRefinadoSoyatm); ?></td>

							                      <td><?php echo $this->Number->format($AceiteRefinadoSoyatotalbs, array(
													    'places' => 2,
													    'before' => '',
													    'decimals' => '.',
													    'thousands' => ','
													)); ?></td>
							                      <td><?php echo $this->Number->format($AceiteRefinadoSoyatotaldolar, array(
													    'places' => 2,
													    'before' => '',
													    'decimals' => '.',
													    'thousands' => ','
													)); ?></td>
							              </tr>
							              </table>
							              </td>
				    <td>
						<table cellspacing="5" cellpadding="2">
				              <tr>
				      
				                      <td><?php echo number_format($AceiteCrudoSoyakg); ?></td>
				                      <td><?php echo number_format($AceiteCrudoSoyatm); ?></td>

				                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotalbs, array(
										    'places' => 2,
										    'before' => '',
										    'decimals' => '.',
										    'thousands' => ','
										));?></td>
				                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotaldolar, array(
										    'places' => 2,
										    'before' => '',
										    'decimals' => '.',
										    'thousands' => ','
										));?></td>
				                     
				              </tr>
				              </table>
	<?php }	?>
			
		<?php 
			$TortaSolventeSoyakg=0;
			$TortaSolventeSoyatm=0;
			$TortaSolventeSoyadolar=0;
			$TortaSolventeSoyabs=0;
			$TortaSolventeSoyatotaldolar=0;
			$TortaSolventeSoyatotalbs=0;
		?>
		
		<?php 
			$HarinaIntegralSoyakg=0;
			$HarinaIntegralSoyatm=0;
			$HarinaIntegralSoyadolar=0;
			$HarinaIntegralSoyabs=0;
			$HarinaIntegralSoyatotaldolar=0;
			$HarinaIntegralSoyatotalbs=0
		?>
    
		<?php 
			$CascarillaSoyakg=0;
			$CascarillaSoyatm=0;
			$CascarillaSoyadolar=0;
			$CascarillaSoyabs=0;
			$CascarillaSoyatotaldolar=0;
			$CascarillaSoyatotalbs=0;
		?>
    
		<?php 
			$AceiteRefinadoSoyakg=0;
			$AceiteRefinadoSoyatm=0;
			$AceiteRefinadoSoyadolar=0;
			$AceiteRefinadoSoyabs=0;
			$AceiteRefinadoSoyatotaldolar=0;
			$AceiteRefinadoSoyatotalbs=0;
		?>
    
		<?php 
			$AceiteCrudoSoyakg=0;
			$AceiteCrudoSoyatm=0;
			$AceiteCrudoSoyadolar=0;
			$AceiteCrudoSoyabs=0;
			$AceiteCrudoSoyatotaldolar=0;
			$AceiteCrudoSoyatotalbs=0;
		?>
    </td>
        <?php endforeach; ?>
        <?php unset($soya); ?>
    </tbody>
</table>


<?php endforeach;?>

</div>