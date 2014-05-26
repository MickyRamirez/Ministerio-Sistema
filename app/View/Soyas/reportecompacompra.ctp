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

<?php ini_set('memory_limit', '-1'); ?>
<div class="datep form">
<?php

$meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre',);
?>

<?php foreach ($this->request->data as $dato): ?>
	<?php foreach($distinct_years as $tar => $var): ?>
		<?php 
			if ($tar==$dato['Anos']) {
				
			}
		 ?>
	<?php endforeach; ?>
<?php endforeach; ?>
</div>
<div class="datos form">

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
		<td><?php echo $datos['Soya']['username']; ?></td>
		<td><?php echo $datos['Soya']['nombre']; ?></td>
		<td><?php echo $datos['Soya']['apellido']; ?></td>
		<td><?php echo $datos['Grupo']['categoria']; ?></td>
		<td><?php echo $datos['Grupo']['subcategoria']; ?></td>
		<td><?php echo $datos['Perfil']['razonsocial']; ?></td>
		<td><?php echo $datos['Perfil']['nombrecomercial']; ?></td>
	</tr>
    </tbody>
</table>
</div>



<div class="mensual form">

<h3>Compras Mensuales de Productor de Oleaginosas</h3>
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
<?php foreach ($this->request->data as $dato): ?>
<?php foreach($dato['Productos'] as $pro): ?>

<?php if($pro==0): ?>
<?php 
echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
       	<th><?php echo 'MES';?> </th>
	
			<th><?php echo 'GRANO DE SOYA';?> </th>
	
			<th><?php echo 'GRANO DE GIRASOL';?> </th>
	

		</tr>
    </thead>

		<tr>
		
		<?php foreach($meses as $tar => $das): ?>
		<?php 
			echo '<th>'.$das.'</th>';
		 ?>
		<?php foreach ($datos['SoyaProductorCompra'] as $soyaproductorcompra): ?>
			<?php 
			$year = strtotime($soyaproductorcompra['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$tar) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					<?php
					 if ($soyaproductorcompra['producto']=='GRANO DE SOYA') { ?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorcompra['preciodolar'];?>
					<?php } ?>
					<?php if ($soyaproductorcompra['producto']=='GRANO DE GIRASOL') { ?>
						<?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorcompra['preciodolar'];?>
					<?php } ?>
				<?php } ?>
			<?php } ?>
	<?php endforeach; ?>
		

		<th>
		<table cellspacing="5" cellpadding="2">
			<tr>
                <th><h4><strong>Cantidad (TM)</strong></h4></th>
                <th><h4><strong>Precio Dolar</strong></h4></th>
            </tr>
            <tr>
                <td><?php echo number_format($GranoSoyatm); ?></td>
                <td><?php echo $this->Number->format($GranoSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>    
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
                <td><?php echo $this->Number->format($GranoGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                 
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

		<?php endforeach; ?>
</table>

</div>
	<? endif; ?>




	<?php if($pro==1): ?>
		<div class="semestre form">
<?php 
echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
       	<th><?php echo 'SEMESTRE';?> </th>

	
			<th><?php echo 'GRANO DE SOYA';?> </th>

			<th><?php echo 'GRANO DE GIRASOL';?> </th>


		</tr>
    </thead>

		<tr>
		
		<?php foreach($meses as $tar => $das): ?>
		<?php 
			if ($tar==6) { echo '<th>Primer Semestre</th>'; }
			if ($tar==12) { echo '<th>Segundo Semestre</th>'; }
		 ?>
		<?php foreach ($datos['SoyaProductorCompra'] as $soyaproductorcompra): ?>
			<?php 
			$year = strtotime($soyaproductorcompra['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$tar) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					<?php
					 if ($soyaproductorcompra['producto']=='GRANO DE SOYA') { ?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorcompra['preciodolar'];?>
					<?php } ?>
					<?php if ($soyaproductorcompra['producto']=='GRANO DE GIRASOL') { ?>
						<?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorcompra['preciodolar'];?>
					<?php } ?>
				<?php } ?>
			<?php } ?>
	<?php endforeach; ?>
		
		<?php 		
		if ($tar==6 || $tar==12) { 
		?>
		<th>
		<table cellspacing="5" cellpadding="2">
			<tr>
                <th><h4><strong>Cantidad (TM)</strong></h4></th>
                <th><h4><strong>Precio Dolar</strong></h4></th>
            </tr>
            <tr>
                <td><?php echo number_format($GranoSoyatm); ?></td>
                <td><?php echo $this->Number->format($GranoSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>    
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
                <td><?php echo $this->Number->format($GranoGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                 
            </tr>
        </table>
		<?php 
			$GranoGirasolkg=0;
			$GranoGirasoltm=0;
			$GranoGirasoldolar=0;
			$GranoGirasolbs=0;
			$GranoGirasoltotaldolar=0;
			$GranoGirasoltotalbs=0;
		}
		?>
        </th>
		</tr>

		<?php endforeach; ?>
</table>
</div>
	<? endif; ?>





<?php $count=0;?>
<?php if($pro==2): ?>
	<div class="anual form">
<?php 
echo '<h2>'.$var.'</h2>';?>	
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
       	<th><?php echo 'ANO';?> </th>

	
			<th><?php echo 'GRANO DE SOYA';?> </th>

			<th><?php echo 'GRANO DE GIRASOL';?> </th>
	

		</tr>
    </thead>

		<tr>
		
		<?php foreach($meses as $tar => $das): ?>
		<?php 
			if ($tar==12) { echo '<th>Año '.$var.'</th>'; }
		 ?>
		<?php foreach ($datos['SoyaProductorCompra'] as $soyaproductorcompra): ?>
			<?php 
			$year = strtotime($soyaproductorcompra['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$tar) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					<?php
					 if ($soyaproductorcompra['producto']=='GRANO DE SOYA') { ?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorcompra['preciodolar'];?>
					<?php } ?>
					<?php if ($soyaproductorcompra['producto']=='GRANO DE GIRASOL') { ?>
						<?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorcompra['preciodolar'];?>
					<?php } ?>
				<?php } ?>
			<?php } ?>
	<?php endforeach; ?>
		
		<?php 		
		if ($tar==12) { 
		?>
		<th>
		<table cellspacing="5" cellpadding="2">
			<tr>
                <th><h4><strong>Cantidad (TM)</strong></h4></th>
                <th><h4><strong>Precio Dolar</strong></h4></th>
            </tr>
            <tr>
                <td><?php echo number_format($GranoSoyatm); ?></td>
                <td><?php echo $this->Number->format($GranoSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>    
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
                <td><?php echo $this->Number->format($GranoGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                 
            </tr>
        </table>
		<?php 
			$GranoGirasolkg=0;
			$GranoGirasoltm=0;
			$GranoGirasoldolar=0;
			$GranoGirasolbs=0;
			$GranoGirasoltotaldolar=0;
			$GranoGirasoltotalbs=0;
		}
		?>
        </th>
		</tr>

		<?php endforeach; ?>
</table>

</div>
	<? endif; ?>

	<? endforeach; ?>	

</div>
	
<? endforeach; ?>