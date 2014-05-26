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
echo $this->Html->script('alertify');
echo $this->Html->css(array('alertify.core', 'alertify.default'));
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
<h3>Panel de Alarmas de Productores de Oleaginosas cuando la compra es mayor a la producción</h3>
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



$granofinalsoya=0;
$granofinalgirasol=0;
$granopreciosoya=0;
$granopreciogirasol=0;
$granosoyacount=0;
$granogirasolcount=0;
?>


<?php foreach ($distinct_years as $var)  { ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
       	<th><?php echo 'MES';?> </th>

		<th><?php echo 'COMPRA DE GRANO DE SOYA';?> </th>

		<th><?php echo 'TORTA SOLVENTE DE SOYA';?> </th>
		<th><?php echo 'HARINA INTEGRAL DE SOYA';?> </th>
		<th><?php echo 'CASCARILLA DE SOYA';?> </th>
		<th><?php echo 'ACEITE DE SOYA REFINADO';?> </th>
		<th><?php echo 'ACEITE DE SOYA CRUDO';?> </th>
		<th><?php echo 'TOTAL PRODUCCIÓN SOYA';?> </th>

		<th><?php echo 'COMPRA DE GRANO DE GIRASOL';?> </th>

		<th><?php echo 'TORTA SOLVENTE DE GIRASOL';?> </th>
		<th><?php echo 'HARINA INTEGRAL DE GIRASOL';?> </th>
		<th><?php echo 'CASCARILLA DE GIRASOL';?> </th>
		<th><?php echo 'ACEITE DE GIRASOL REFINADO';?> </th>
		<th><?php echo 'ACEITE DE GIRASOL CRUDO';?> </th>
		<th><?php echo 'TOTAL DE PRODUCCION GIRASOL';?> </th>

		<th><?php echo 'COMPARACION DE GRANO Y PRODUCCION DE SOYA';?> </th>
		<th><?php echo 'COMPARACION DE GRANO Y PRODUCCION DE GIRASOL';?> </th>

		</tr>
    </thead>

	<?php for ($i=1; $i <= 12 ; $i++) { ?>
		<tr><th><?php 
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

	<?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
			<?php
			$year = strtotime($soyaproductorproduccion['fecharegistro']);
			 if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
				    <?php if ($soyaproductorproduccion['operacion']=='Produccion') { ?>
					<?php if ($soyaproductorproduccion['producto']=='TORTA SOLVENTE DE SOYA') { ?>
						<?php $TortaSolventeSoyatm=$TortaSolventeSoyatm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $TortaSolventeSoyadolar=$TortaSolventeSoyadolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $TortaSolventeSoyabs=$TortaSolventeSoyabs+1;?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='TORTA SOLVENTE DE GIRASOL') { ?>
						<?php $TortaSolventeGirasoltm=$TortaSolventeGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $TortaSolventeGirasoldolar=$TortaSolventeGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $TortaSolventeGirasolbs=$TortaSolventeGirasolbs+1;?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='HARINA INTEGRAL DE SOYA') { ?>
						<?php $HarinaIntegralSoyatm=$HarinaIntegralSoyatm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $HarinaIntegralSoyadolar=$HarinaIntegralSoyadolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $HarinaIntegralSoyabs=$HarinaIntegralSoyabs+1;?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='HARINA INTEGRAL DE GIRASOL') { ?>
						<?php $HarinaIntegralGirasoltm=$HarinaIntegralGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $HarinaIntegralGirasoldolar=$HarinaIntegralGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $HarinaIntegralGirasolbs=$HarinaIntegralGirasolbs+1;?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='CASCARILLA DE SOYA') { ?>
						<?php $CascarillaSoyatm=$CascarillaSoyatm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $CascarillaSoyadolar=$CascarillaSoyadolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $CascarillaSoyabs=$CascarillaSoyabs+1;?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='CASCARILLA DE GIRASOL') { ?>
						<?php $CascarillaGirasoltm=$CascarillaGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $CascarillaGirasoldolar=$CascarillaGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $CascarillaGirasolbs=$CascarillaGirasolbs+1;?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='ACEITE DE SOYA REFINADO') { ?>
						<?php $AceiteRefinadoSoyatm=$AceiteRefinadoSoyatm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteRefinadoSoyadolar=$AceiteRefinadoSoyadolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteRefinadoSoyabs=$AceiteRefinadoSoyabs+1;?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='ACEITE DE SOYA CRUDO') { ?>
						<?php $AceiteCrudoSoyatm=$AceiteCrudoSoyatm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteCrudoSoyadolar=$AceiteCrudoSoyadolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteCrudoSoyabs=$AceiteCrudoSoyabs+1;?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='ACEITE DE GIRASOL REFINADO') { ?>
						<?php $AceiteRefinadoGirasoltm=$AceiteRefinadoGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteRefinadoGirasoldolar=$AceiteRefinadoGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteRefinadoGirasolbs=$AceiteRefinadoGirasolbs+1;?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='ACEITE DE GIRASOL CRUDO') { ?>
						<?php $AceiteCrudoGirasoltm=$AceiteCrudoGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteCrudoGirasoldolar=$AceiteCrudoGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteCrudoGirasolbs=$AceiteCrudoGirasolbs+1;?>
					<?php } ?>
				<?php } ?>
			    <?php } ?>
			<?php } ?>
		<?php endforeach; ?>

		<?php foreach ($this->data['SoyaProductorCompra'] as $soyaproductorcompra): ?>
			<?php 
			$year = strtotime($soyaproductorcompra['fecharegistro']);
			date("Y", $year);


			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php

					 if ($soyaproductorcompra['producto']=='GRANO DE SOYA') { ?>
						<?php 
							$granofinalsoya=$granofinalsoya+$soyaproductorcompra['toneladas'];
							$granopreciosoya=$granopreciosoya+$soyaproductorcompra['preciodolar'];
							$granosoyacount=$granosoyacount+1;
						?>
					
					<?php } ?>
					<?php if ($soyaproductorcompra['producto']=='GRANO DE GIRASOL') { ?>
							
						<?php 
							$granofinalgirasol=$granofinalgirasol+$soyaproductorcompra['toneladas'];
							$granopreciogirasol=$granopreciogirasol+$soyaproductorcompra['preciodolar'];
							$granogirasolcount=$granogirasolcount+1
						?>
						
					<?php } ?>
					
				<?php } ?>
			<?php } ?>
		<?php endforeach; ?>


		<th>
			<table cellspacing="5" cellpadding="2">
	              	<tr>
	                      <th width="700"><h4><strong>Cantidad de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>
	              	</tr>
	              	<tr>
				<td><?php echo number_format($granofinalsoya); ?></td>
				<td><?php if($granosoyacount>0){ echo $this->Number->format(($granopreciosoya/$granosoyacount), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else {echo '0.00';} ?></td>
	              	</tr>
	              	</table>
	        </th>
		<th>
			<table cellspacing="5" cellpadding="2">
              		<tr>
	                      <th width="700"><h4><strong>Cantidad de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>                    
              		</tr>
			<tr>
				<td><?php echo $this->Number->format(($TortaSolventeSoyatm*0.80), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
				<td><?php if($TortaSolventeSoyabs>0){ echo $this->Number->format(($TortaSolventeSoyadolar/$TortaSolventeSoyabs), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else {echo '0.00';} ?></td>
              		</tr>
              		</table>
		</th>
        	<th>
			<table cellspacing="5" cellpadding="2">
              		<tr>
	                      <th width="700"><h4><strong>Cantidad de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>
			</tr>
			<tr>
				<td><?php echo $this->Number->format(($HarinaIntegralSoyatm*0.95), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
				<td><?php if($HarinaIntegralSoyabs>0){ echo 
					$this->Number->format(($HarinaIntegralSoyadolar/$HarinaIntegralSoyabs), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else {echo '0.00';} ?></td>
              		</tr>
			</table>
        	</th>

		<th>
			<table cellspacing="5" cellpadding="2">
			<tr>
	                      <th width="700"><h4><strong>Cantidad de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>
			</tr>
			<tr>
				<td><?php echo $this->Number->format($CascarillaSoyatm, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
				<td><?php if($CascarillaSoyabs>0){ echo 
					$this->Number->format(($CascarillaSoyadolar/$CascarillaSoyabs), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else {echo '0.00';} ?></td>
              		</tr>
			</table>
		</th>

		<th>
			<table cellspacing="5" cellpadding="2">
			<tr>
	                      <th width="700"><h4><strong>Cantidad de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>
			</tr>
			<tr>
				<td><?php echo $this->Number->format(($AceiteRefinadoSoyatm*0.18), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
				<td><?php if($AceiteRefinadoSoyabs>0){ echo $this->Number->format(($AceiteRefinadoSoyadolar/$AceiteRefinadoSoyabs), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else {echo '0.00';} ?></td>
              		</tr>
			</table>
		</th>


		<th>
			<table cellspacing="5" cellpadding="2">
			<tr>
	                      <th width="700"><h4><strong>Cantidad de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>
			</tr>
			<tr>
				<td><?php echo $this->Number->format($AceiteCrudoSoyatm, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
				<td><?php if($AceiteCrudoSoyabs>0){ echo 
					$this->Number->format(($AceiteCrudoSoyadolar/$AceiteCrudoSoyabs), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else {echo '0.00';} ?></td>
              		</tr>
			</table>
		</th>

		<th>
			<table cellspacing="5" cellpadding="2">
			<tr>
	                      <th width="700"><h4><strong>Cantidad de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>
			</tr>
			<tr>
				<td><?php echo 
				$this->Number->format((($TortaSolventeSoyatm*0.80)+($HarinaIntegralSoyatm*0.95)+$CascarillaSoyatm+$AceiteCrudoSoyatm+($AceiteRefinadoSoyatm*0.18)), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));
				 ?></td>
				<td><?php if(($TortaSolventeSoyabs+$HarinaIntegralSoyabs+$CascarillaSoyabs+$AceiteRefinadoSoyabs+$AceiteCrudoSoyabs)>0){ echo 
					$this->Number->format(((($TortaSolventeSoyatm*0.80)+($HarinaIntegralSoyatm*0.95)+$CascarillaSoyatm+$AceiteCrudoSoyatm+($AceiteRefinadoSoyatm*0.18))/($TortaSolventeSoyabs+$HarinaIntegralSoyabs+$CascarillaSoyabs+$AceiteRefinadoSoyabs+$AceiteCrudoSoyabs)), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else { echo '0.00'; }?></td>
              		</tr>
			</table>
		</th>
		<th>
			<table cellspacing="5" cellpadding="2">
	              	<tr>
	                      <th width="700"><h4><strong>Cantidad de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>
	              	</tr>
	              	<tr>
				<td><?php echo $this->Number->format($granofinalgirasol, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
				<td><?php if($granogirasolcount>0){ echo 
					$this->Number->format(($granopreciogirasol/$granogirasolcount), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else {echo '0.00';} ?></td>
	              	</tr>
	              	</table>
	        </th>
		<th>
			<table cellspacing="5" cellpadding="2">
			<tr>
	                      <th width="700"><h4><strong>Cantidad de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>
			</tr>
			<tr>
				<td><?php echo $this->Number->format($TortaSolventeGirasoltm, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
				<td><?php if($TortaSolventeGirasolbs>0){ echo 
					$this->Number->format(($TortaSolventeGirasoldolar/$TortaSolventeGirasolbs), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else {echo '0.00';} ?></td>
              		</tr>
			</table>
		</th>
		<th>
			<table cellspacing="5" cellpadding="2">
			<tr>
	                      <th width="700"><h4><strong>Cantidad de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>
			</tr>
			<tr>
				<td><?php echo $this->Number->format($HarinaIntegralGirasoltm, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
				<td><?php if($HarinaIntegralGirasolbs>0){ echo 
					$this->Number->format(($HarinaIntegralGirasoldolar/$HarinaIntegralGirasolbs), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else {echo '0.00';} ?></td>
              		</tr>
			</table>
		</th>
		<th>
			<table cellspacing="5" cellpadding="2">
			<tr>
	                      <th width="700"><h4><strong>Cantidad de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>
			</tr>
			<tr>
				<td><?php echo $this->Number->format($CascarillaGirasoltm, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
				<td><?php if($CascarillaGirasolbs>0){ echo 
					$this->Number->format(($CascarillaGirasoldolar/$CascarillaGirasolbs), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else {echo '0.00';} ?></td>
              		</tr>
			</table>
		</th>



		<th>
			<table cellspacing="5" cellpadding="2">
			<tr>
	                      <th width="700"><h4><strong>Cantidad de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>
			</tr>
			<tr>
				<td><?php echo $this->Number->format($AceiteRefinadoGirasoltm, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
				<td><?php if($AceiteRefinadoGirasolbs>0){ echo 
					$this->Number->format(($AceiteRefinadoGirasoldolar/$AceiteRefinadoGirasolbs), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else {echo '0.00';} ?></td>
              		</tr>
			</table>
		</th>

		<th>
			<table cellspacing="5" cellpadding="2">
			<tr>
	                      <th width="700"><h4><strong>Cantidad de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>
			</tr>
			<tr>
				<td><?php echo $this->Number->format($AceiteCrudoGirasoltm, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
				<td><?php if($AceiteCrudoGirasolbs>0){ echo 
					$this->Number->format(($AceiteCrudoGirasoldolar/$AceiteCrudoGirasolbs), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else {echo '0.00';} ?></td>
              		</tr>
			</table>
		</th>


		<th>
			<table cellspacing="5" cellpadding="2">
			<tr>
	                      <th width="700"><h4><strong>Cantidad Total de Toneladas Metricas Comprada (TM)</strong></h4></th>
	                      <th width="700"><h4><strong>Precio Promedio  $us / (TM)</strong></h4></th>
			</tr>
			<tr>
				<td><?php echo 
				$this->Number->format((($TortaSolventeGirasoltm+$HarinaIntegralGirasoltm+$CascarillaGirasoltm+$AceiteRefinadoGirasoltm+$AceiteCrudoGirasoltm)), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
				<td><?php if(($TortaSolventeGirasolbs+$HarinaIntegralGirasolbs+$CascarillaGirasolbs+$AceiteCrudoGirasolbs+$AceiteRefinadoGirasolbs)>0){ echo 
					$this->Number->format((($TortaSolventeGirasoldolar+$HarinaIntegralGirasoldolar+$CascarillaGirasoldolar+$AceiteCrudoGirasoldolar+$AceiteRefinadoGirasoldolar)/($TortaSolventeGirasolbs+$HarinaIntegralGirasolbs+$CascarillaGirasolbs+$AceiteCrudoGirasolbs+$AceiteRefinadoGirasolbs)), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else {echo '0.00';} ?></td>
              		</tr>
			</table>
		</th>

		<th>
			<table cellspacing="5" cellpadding="2">
			<tr>
			<th width="700"><h4><strong>Compraracion de Toneladas Metricas (TM)</strong></h4></th>
			</tr>
			<tr>
			<td><?php 
                                                                $totality=(($TortaSolventeSoyatm*0.80)+($HarinaIntegralSoyatm*0.95)+$CascarillaSoyatm+$AceiteRefinadoSoyatm+($AceiteCrudoSoyatm*0.18));
				if ($GranoSoyatm == $totality) {
					echo 'LA COMPRA DE GRANO Y PRODUCCIÓN DE SOYA COINCIDEN';
				}
				if ($GranoSoyatm < $totality) {
					echo 'LA PRODUCCIÓN DE DERIVADOS '.$totality.' ES MAYOR A LA COMPRA DE GRANO '.$GranoSoyatm.'.';
       
				}
				if ($totality < $GranoSoyatm) {
                                                                                                 ?>
                                                                <SCRIPT type="text/javascript">
                                                                        alertify.log('LA COMPRA DE GRANO DE SOYA ES MAYOR A LA PRODUCCIÓN POR FAVOR REVISAR ACONTECIMIENTO');
                                                                </SCRIPT>
                                                                <?php
				}
                        ?></td>
			</tr>
       			</table>
       		</th>
        <th>
	<table cellspacing="5" cellpadding="2">
              <tr>
                      <th width="700"><h4><strong>Compraracion de Toneladas Metricas (TM)</strong></h4></th>
              </tr>
              <tr>
                      <td><?php 
					if ($GranoGirasoltm == $TortaSolventeGirasoltm) {
						echo 'LA COMPRA DE GRANO Y PRODUCCIÓN DE GIRASOL COINCIDEN';
					}
					if ($GranoGirasoltm < $TortaSolventeGirasoltm) {
						echo 'LA PRODUCCIÓN DE DERIVADOS '.$TortaSolventeGirasoltm.' ES MAYOR A LA COMPRA DE GRANO '.$GranoGirasoltm.'.';			}
					if ($GranoGirasoltm > $TortaSolventeGirasoltm) {
						echo 'LA COMPRA DE GRANO '.$GranoGirasoltm.' ES MAYOR A LA PRODUCCIÓN DE DERIVADOS '.$TortaSolventeGirasoltm.'.';
					}
                      ?></td>
              </tr>
        </table>
        </th>
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



$granofinalsoya=0;
$granofinalgirasol=0;
$granopreciosoya=0;
$granopreciogirasol=0;
$granosoyacount=0;
$granogirasolcount=0;
		?>
		</tr>
	<?php }?>
</table>
<?php } ?>

</div>