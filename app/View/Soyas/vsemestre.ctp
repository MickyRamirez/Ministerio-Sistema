
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
		<th><?php echo 'Categoría';?></th>
		<th><?php echo 'Subcategoría';?></th>
		<th><?php echo 'Nombre o Razón Social';?></th>
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

<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'ventas') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link("Reporte", array('action'=>'reportevsemestre', $this->data['Soya']['id'])); ?></li>
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
<?php
echo $this->Form->hidden('id', array('value' => $this->data['Soya']['id']));
 ?>
<h3>Panel de Ventas Semestral <br/>
	Productores de Oleaginosas</h3>
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
       	<th><?php echo 'MES';?> </th>
	
		<th><?php echo 'TORTA SOLVENTE DE SOYA';?> </th>
		<th><?php echo 'HARINA INTEGRAL DE SOYA';?> </th>
		<th><?php echo 'CASCARILLA DE SOYA';?> </th>
		<th><?php echo 'GRANO DE SOYA';?> </th>
		<th><?php echo 'ACEITE DE SOYA REFINADO';?> </th>
		<th><?php echo 'ACEITE DE SOYA CRUDO';?> </th>

		<th><?php echo 'TORTA SOLVENTE DE GIRASOL';?> </th>		
		<th><?php echo 'HARINA INTEGRAL DE GIRASOL';?> </th>		
		<th><?php echo 'CASCARILLA DE GIRASOL';?> </th>		
		<th><?php echo 'GRANO DE GIRASOL';?> </th>				
		<th><?php echo 'ACEITE DE GIRASOL REFINADO';?> </th>
		<th><?php echo 'ACEITE DE GIRASOL CRUDO';?> </th>
		</tr>
    </thead>

	<?php for ($i=1; $i <= 6 ; $i++) { ?>
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
		<th>
		<?php foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): ?>
			<?php

			$year = strtotime($soyaproductorderivado['fecharegistro']);
			
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
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
			<?php } ?>
		<?php endforeach;
		?>
			<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($TortaSolventeSoyakg); ?></td>
                      <td><?php echo number_format($TortaSolventeSoyatm); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyatotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyatotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>
		<?php 
			$TortaSolventeSoyakg=0;
			$TortaSolventeSoyatm=0;
			$TortaSolventeSoyadolar=0;
			$TortaSolventeSoyabs=0;
			$TortaSolventeSoyatotaldolar=0;
			$TortaSolventeSoyatotalbs=0;
		?>
		</th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($HarinaIntegralSoyakg); ?></td>
                      <td><?php echo number_format($HarinaIntegralSoyatm); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
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
		<?php 
			$HarinaIntegralSoyakg=0;
			$HarinaIntegralSoyatm=0;
			$HarinaIntegralSoyadolar=0;
			$HarinaIntegralSoyabs=0;
			$HarinaIntegralSoyatotaldolar=0;
			$HarinaIntegralSoyatotalbs=0
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($CascarillaSoyakg); ?></td>
                      <td><?php echo number_format($CascarillaSoyatm); ?></td>
                      <td><?php echo $this->Number->format($CascarillaSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
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
		<?php 
			$CascarillaSoyakg=0;
			$CascarillaSoyatm=0;
			$CascarillaSoyadolar=0;
			$CascarillaSoyabs=0;
			$CascarillaSoyatotaldolar=0;
			$CascarillaSoyatotalbs=0;
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($GranoSoyakg); ?></td>
                      <td><?php echo number_format($GranoSoyatm); ?></td>
                      <td><?php echo $this->Number->format($GranoSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoSoyatotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoSoyatotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
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
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($AceiteRefinadoSoyakg); ?></td>
                      <td><?php echo number_format($AceiteRefinadoSoyatm); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
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
		<?php 
			$AceiteRefinadoSoyakg=0;
			$AceiteRefinadoSoyatm=0;
			$AceiteRefinadoSoyadolar=0;
			$AceiteRefinadoSoyabs=0;
			$AceiteRefinadoSoyatotaldolar=0;
			$AceiteRefinadoSoyatotalbs=0;
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($AceiteCrudoSoyakg); ?></td>
                      <td><?php echo number_format($AceiteCrudoSoyatm); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteCrudoSoyakg=0;
			$AceiteCrudoSoyatm=0;
			$AceiteCrudoSoyadolar=0;
			$AceiteCrudoSoyabs=0;
			$AceiteCrudoSoyatotaldolar=0;
			$AceiteCrudoSoyatotalbs=0;
		?>
        </th>




		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($TortaSolventeGirasolkg); ?></td>
                      <td><?php echo number_format($TortaSolventeGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>
		<?php 
			$TortaSolventeGirasolkg=0;
			$TortaSolventeGirasoltm=0;
			$TortaSolventeGirasoldolar=0;
			$TortaSolventeGirasolbs=0;
			$TortaSolventeGirasoltotaldolar=0;
			$TortaSolventeGirasoltotalbs=0;
		?>
        </th>
		
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($HarinaIntegralGirasolkg); ?></td>
                      <td><?php echo number_format($HarinaIntegralGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$HarinaIntegralGirasolkg=0;
			$HarinaIntegralGirasoltm=0;
			$HarinaIntegralGirasoldolar=0;
			$HarinaIntegralGirasolbs=0;
			$HarinaIntegralGirasoltotaldolar=0;
			$HarinaIntegralGirasoltotalbs=0;
		?>
        </th>
		
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($CascarillaGirasolkg); ?></td>
                      <td><?php echo number_format($CascarillaGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$CascarillaGirasolkg=0;
			$CascarillaGirasoltm=0;
			$CascarillaGirasoldolar=0;
			$CascarillaGirasolbs=0;
			$CascarillaGirasoltotaldolar=0;
			$CascarillaGirasoltotalbs=0;
		?>
        </th>
        
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($GranoGirasolkg); ?></td>
                      <td><?php echo number_format($GranoGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($GranoGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoGirasoltotaldolar, array(
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


        
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($AceiteRefinadoGirasolkg); ?></td>
                      <td><?php echo number_format($AceiteRefinadoGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteRefinadoGirasolkg=0;
			$AceiteRefinadoGirasoltm=0;
			$AceiteRefinadoGirasoldolar=0;
			$AceiteRefinadoGirasolbs=0;
			$AceiteRefinadoGirasoltotaldolar=0;
			$AceiteRefinadoGirasoltotalbs=0;
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($AceiteCrudoGirasolkg); ?></td>
                      <td><?php echo number_format($AceiteCrudoGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteCrudoGirasolkg=0;
			$AceiteCrudoGirasoltm=0;
			$AceiteCrudoGirasoldolar=0;
			$AceiteCrudoGirasolbs=0;
			$AceiteCrudoGirasoltotaldolar=0;
			$AceiteCrudoGirasoltotalbs=0;
		?>
        </th>

			
		</tr>
	<?php }?>




	<?php for ($i=1; $i <= 6  ; $i++) { ?>
		<tr><?php 
	
		if ($i==6) { echo '<th>Primer Semestre</th>'; }

		?>
		
		<?php foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): ?>
			<?php 
			$year = strtotime($soyaproductorderivado['fecharegistro']);
			
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
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
			<?php } ?>
		<?php endforeach;
		?>
		<?php if ($i==6) { ?>
		
		<th>
			<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($TortaSolventeSoyakg); ?></td>
                      <td><?php echo number_format($TortaSolventeSoyatm); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyatotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyatotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>

		</th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($TortaSolventeGirasolkg); ?></td>
                      <td><?php echo number_format($TortaSolventeGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>

        </th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($HarinaIntegralSoyakg); ?></td>
                      <td><?php echo number_format($HarinaIntegralSoyatm); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
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

        </th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($HarinaIntegralGirasolkg); ?></td>
                      <td><?php echo number_format($HarinaIntegralGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>

        </th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($CascarillaSoyakg); ?></td>
                      <td><?php echo number_format($CascarillaSoyatm); ?></td>
                      <td><?php echo $this->Number->format($CascarillaSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
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

        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($CascarillaGirasolkg); ?></td>
                      <td><?php echo number_format($CascarillaGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>

              </tr>
              </table>

        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($GranoSoyakg); ?></td>
                      <td><?php echo number_format($GranoSoyatm); ?></td>
                      <td><?php echo $this->Number->format($GranoSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoSoyatotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoSoyatotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>

        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($GranoGirasolkg); ?></td>
                      <td><?php echo number_format($GranoGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($GranoGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>

        </th>


        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($AceiteRefinadoSoyakg); ?></td>
                      <td><?php echo number_format($AceiteRefinadoSoyatm); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
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

        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($AceiteCrudoSoyakg); ?></td>
                      <td><?php echo number_format($AceiteCrudoSoyatm); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>

        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($AceiteRefinadoGirasolkg); ?></td>
                      <td><?php echo number_format($AceiteRefinadoGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>

        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                   <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($AceiteCrudoGirasolkg); ?></td>
                      <td><?php echo number_format($AceiteCrudoGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
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

}?>
			
		</tr>
	<?php }?>



















	<?php for ($i=7; $i <= 12 ; $i++) { ?>
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
		<th>
		<?php foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): ?>
			<?php 
			$year = strtotime($soyaproductorderivado['fecharegistro']);
			
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
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
			<?php } ?>
		<?php endforeach;
		?>
						<table cellspacing="5" cellpadding="2">
              <tr>

                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($TortaSolventeSoyakg); ?></td>
                      <td><?php echo number_format($TortaSolventeSoyatm); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyatotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyatotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>
		<?php 
			$TortaSolventeSoyakg=0;
			$TortaSolventeSoyatm=0;
			$TortaSolventeSoyadolar=0;
			$TortaSolventeSoyabs=0;
			$TortaSolventeSoyatotaldolar=0;
			$TortaSolventeSoyatotalbs=0;
		?>
		</th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>

                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($TortaSolventeGirasolkg); ?></td>
                      <td><?php echo number_format($TortaSolventeGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                      
                      <td><?php echo $this->Number->format($TortaSolventeGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>
		<?php 
			$TortaSolventeGirasolkg=0;
			$TortaSolventeGirasoltm=0;
			$TortaSolventeGirasoldolar=0;
			$TortaSolventeGirasolbs=0;
			$TortaSolventeGirasoltotaldolar=0;
			$TortaSolventeGirasoltotalbs=0;
		?>
        </th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>

                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($HarinaIntegralSoyakg); ?></td>
                      <td><?php echo number_format($HarinaIntegralSoyatm); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
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
		<?php 
			$HarinaIntegralSoyakg=0;
			$HarinaIntegralSoyatm=0;
			$HarinaIntegralSoyadolar=0;
			$HarinaIntegralSoyabs=0;
			$HarinaIntegralSoyatotaldolar=0;
			$HarinaIntegralSoyatotalbs=0
		?>
        </th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>

                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($HarinaIntegralGirasolkg); ?></td>
                      <td><?php echo number_format($HarinaIntegralGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$HarinaIntegralGirasolkg=0;
			$HarinaIntegralGirasoltm=0;
			$HarinaIntegralGirasoldolar=0;
			$HarinaIntegralGirasolbs=0;
			$HarinaIntegralGirasoltotaldolar=0;
			$HarinaIntegralGirasoltotalbs=0;
		?>
        </th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>
    
                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($CascarillaSoyakg); ?></td>
                      <td><?php echo number_format($CascarillaSoyatm); ?></td>
                      <td><?php echo $this->Number->format($CascarillaSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td> 
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
		<?php 
			$CascarillaSoyakg=0;
			$CascarillaSoyatm=0;
			$CascarillaSoyadolar=0;
			$CascarillaSoyabs=0;
			$CascarillaSoyatotaldolar=0;
			$CascarillaSoyatotalbs=0;
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>

                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($CascarillaGirasolkg); ?></td>
                      <td><?php echo number_format($CascarillaGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                      
                      <td><?php echo $this->Number->format($CascarillaGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$CascarillaGirasolkg=0;
			$CascarillaGirasoltm=0;
			$CascarillaGirasoldolar=0;
			$CascarillaGirasolbs=0;
			$CascarillaGirasoltotaldolar=0;
			$CascarillaGirasoltotalbs=0;
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>

                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($GranoSoyakg); ?></td>
                      <td><?php echo number_format($GranoSoyatm); ?></td>
                      <td><?php echo $this->Number->format($GranoSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td> 
                      <td><?php echo $this->Number->format($GranoSoyatotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                     
                      <td><?php echo $this->Number->format($GranoSoyatotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
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

                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($GranoGirasolkg); ?></td>
                      <td><?php echo number_format($GranoGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($GranoGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($GranoGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td> 
                      <td><?php echo $this->Number->format($GranoGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                     
                      <td><?php echo $this->Number->format($GranoGirasoltotaldolar, array(
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


        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>

                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($AceiteRefinadoSoyakg); ?></td>
                      <td><?php echo number_format($AceiteRefinadoSoyatm); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>  
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
		<?php 
			$AceiteRefinadoSoyakg=0;
			$AceiteRefinadoSoyatm=0;
			$AceiteRefinadoSoyadolar=0;
			$AceiteRefinadoSoyabs=0;
			$AceiteRefinadoSoyatotaldolar=0;
			$AceiteRefinadoSoyatotalbs=0;
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>

                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($AceiteCrudoSoyakg); ?></td>
                      <td><?php echo number_format($AceiteCrudoSoyatm); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                     
                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteCrudoSoyakg=0;
			$AceiteCrudoSoyatm=0;
			$AceiteCrudoSoyadolar=0;
			$AceiteCrudoSoyabs=0;
			$AceiteCrudoSoyatotaldolar=0;
			$AceiteCrudoSoyatotalbs=0;
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>

                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($AceiteRefinadoGirasolkg); ?></td>
                      <td><?php echo number_format($AceiteRefinadoGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteRefinadoGirasolkg=0;
			$AceiteRefinadoGirasoltm=0;
			$AceiteRefinadoGirasoldolar=0;
			$AceiteRefinadoGirasolbs=0;
			$AceiteRefinadoGirasoltotaldolar=0;
			$AceiteRefinadoGirasoltotalbs=0;
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>

                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($AceiteCrudoGirasolkg); ?></td>
                      <td><?php echo number_format($AceiteCrudoGirasoltm); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasolbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoltotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoltotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteCrudoGirasolkg=0;
			$AceiteCrudoGirasoltm=0;
			$AceiteCrudoGirasoldolar=0;
			$AceiteCrudoGirasolbs=0;
			$AceiteCrudoGirasoltotaldolar=0;
			$AceiteCrudoGirasoltotalbs=0;
		?>
        </th>

			
		</tr>
	<?php }?>


























	<?php for ($i=7; $i <= 12 ; $i++) { ?>
		<tr><?php 
			if ($i==12) { echo '<th>Segundo Semestre</th>'; }
		?>
		
		<?php foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): ?>
			<?php 
			$year = strtotime($soyaproductorderivado['fecharegistro']);
			
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
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
			<?php } ?>
		<?php endforeach;
		if ($i==12) { 
		?>
		<th>
			<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad Kilogramos</strong></h4></th>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Bs</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Bs</strong></h4></th>
                      <th><h4><strong>Total Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo $TortaSolventeSoyakg; ?></td>
                      <td><?php echo $TortaSolventeSoyatm; ?></td>
                      <td><?php echo $TortaSolventeSoyabs; ?></td>
                      <td><?php echo $TortaSolventeSoyadolar; ?></td>
                      <td><?php echo $TortaSolventeSoyatotalbs; ?></td>
                      <td><?php echo $TortaSolventeSoyatotaldolar; ?></td>
              </tr>
              </table>

		</th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad Kilogramos</strong></h4></th>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Bs</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Bs</strong></h4></th>
                      <th><h4><strong>Total Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo $TortaSolventeGirasolkg; ?></td>
                      <td><?php echo $TortaSolventeGirasoltm; ?></td>
                      <td><?php echo $TortaSolventeGirasoldolar; ?></td>
                      <td><?php echo $TortaSolventeGirasolbs; ?></td>
                      <td><?php echo $TortaSolventeGirasoltotalbs; ?></td>
                      <td><?php echo $TortaSolventeGirasoltotaldolar; ?></td>
              </tr>
              </table>

        </th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad Kilogramos</strong></h4></th>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Bs</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Bs</strong></h4></th>
                      <th><h4><strong>Total Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo $HarinaIntegralSoyakg; ?></td>
                      <td><?php echo $HarinaIntegralSoyatm; ?></td>
                      <td><?php echo $HarinaIntegralSoyadolar; ?></td>
                      <td><?php echo $HarinaIntegralSoyabs; ?></td>
                      <td><?php echo $HarinaIntegralSoyatotaldolar; ?></td>
                      <td><?php echo $HarinaIntegralSoyatotalbs; ?></td>
              </tr>
              </table>

        </th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad Kilogramos</strong></h4></th>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Bs</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Bs</strong></h4></th>
                      <th><h4><strong>Total Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo $HarinaIntegralGirasolkg; ?></td>
                      <td><?php echo $HarinaIntegralGirasoltm; ?></td>
                      <td><?php echo $HarinaIntegralGirasoldolar; ?></td>
                      <td><?php echo $HarinaIntegralGirasolbs; ?></td>
                      <td><?php echo $HarinaIntegralGirasoltotaldolar; ?></td>
                      <td><?php echo $HarinaIntegralGirasoltotalbs; ?></td>
              </tr>
              </table>

        </th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad Kilogramos</strong></h4></th>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Bs</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Bs</strong></h4></th>
                      <th><h4><strong>Total Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo $CascarillaSoyakg; ?></td>
                      <td><?php echo $CascarillaSoyatm; ?></td>
                      <td><?php echo $CascarillaSoyadolar; ?></td>
                      <td><?php echo $CascarillaSoyabs; ?></td>
                      <td><?php echo $CascarillaSoyatotaldolar; ?></td>
                      <td><?php echo $CascarillaSoyatotalbs; ?></td>
              </tr>
              </table>

        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad Kilogramos</strong></h4></th>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Bs</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Bs</strong></h4></th>
                      <th><h4><strong>Total Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo $CascarillaGirasolkg; ?></td>
                      <td><?php echo $CascarillaGirasoltm; ?></td>
                      <td><?php echo $CascarillaGirasoldolar; ?></td>
                      <td><?php echo $CascarillaGirasolbs; ?></td>
                      <td><?php echo $CascarillaGirasoltotaldolar; ?></td>
                      <td><?php echo $CascarillaGirasoltotalbs; ?></td>
              </tr>
              </table>

        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad Kilogramos</strong></h4></th>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Bs</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Bs</strong></h4></th>
                      <th><h4><strong>Total Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo $GranoSoyakg; ?></td>
                      <td><?php echo $GranoSoyatm; ?></td>
                      <td><?php echo $GranoSoyadolar; ?></td>
                      <td><?php echo $GranoSoyabs; ?></td>
                      <td><?php echo $GranoSoyatotaldolar; ?></td>
                      <td><?php echo $GranoSoyatotalbs; ?></td>
              </tr>
              </table>

        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad Kilogramos</strong></h4></th>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Bs</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Bs</strong></h4></th>
                      <th><h4><strong>Total Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo $GranoGirasolkg; ?></td>
                      <td><?php echo $GranoGirasoltm; ?></td>
                      <td><?php echo $GranoGirasoldolar; ?></td>
                      <td><?php echo $GranoGirasolbs; ?></td>
                      <td><?php echo $GranoGirasoltotaldolar; ?></td>
                      <td><?php echo $GranoGirasoltotalbs; ?></td>
              </tr>
              </table>

        </th>


        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad Kilogramos</strong></h4></th>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Bs</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Bs</strong></h4></th>
                      <th><h4><strong>Total Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo $AceiteRefinadoSoyakg; ?></td>
                      <td><?php echo $AceiteRefinadoSoyatm; ?></td>
                      <td><?php echo $AceiteRefinadoSoyadolar; ?></td>
                      <td><?php echo $AceiteRefinadoSoyabs; ?></td>
                      <td><?php echo $AceiteRefinadoSoyatotaldolar; ?></td>
                      <td><?php echo $AceiteRefinadoSoyatotalbs; ?></td>
              </tr>
              </table>

        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad Kilogramos</strong></h4></th>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Bs</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Bs</strong></h4></th>
                      <th><h4><strong>Total Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo $AceiteCrudoSoyakg; ?></td>
                      <td><?php echo $AceiteCrudoSoyatm; ?></td>
                      <td><?php echo $AceiteCrudoSoyadolar; ?></td>
                      <td><?php echo $AceiteCrudoSoyabs; ?></td>
                      <td><?php echo $AceiteCrudoSoyatotaldolar; ?></td>
                      <td><?php echo $AceiteCrudoSoyatotalbs; ?></td>
              </tr>
              </table>

        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad Kilogramos</strong></h4></th>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Bs</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Bs</strong></h4></th>
                      <th><h4><strong>Total Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo $AceiteRefinadoGirasolkg; ?></td>
                      <td><?php echo $AceiteRefinadoGirasoltm; ?></td>
                      <td><?php echo $AceiteRefinadoGirasoldolar; ?></td>
                      <td><?php echo $AceiteRefinadoGirasolbs; ?></td>
                      <td><?php echo $AceiteRefinadoGirasoltotaldolar; ?></td>
                      <td><?php echo $AceiteRefinadoGirasoltotalbs; ?></td>
              </tr>
              </table>

        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad Kilogramos</strong></h4></th>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Bs</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Bs</strong></h4></th>
                      <th><h4><strong>Total Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo $AceiteCrudoGirasolkg; ?></td>
                      <td><?php echo $AceiteCrudoGirasoltm; ?></td>
                      <td><?php echo $AceiteCrudoGirasoldolar; ?></td>
                      <td><?php echo $AceiteCrudoGirasolbs; ?></td>
                      <td><?php echo $AceiteCrudoGirasoltotaldolar; ?></td>
                      <td><?php echo $AceiteCrudoGirasoltotalbs; ?></td>
              </tr>
              </table>

        </th>

			<?php }?>
		</tr>
	<?php }?>
</table>
<?php } ?>

</div>



