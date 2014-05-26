<?php ini_set('memory_limit', '-1'); ?>
<div class="datep form">
<?php
echo $this->Html->css(array('buttons'));
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

<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'ventopcion',$datos['Soya']['id']) ); ?></li>
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
		<th><?php echo 'Nombre o Razón Social';?></th>
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

<h3>Ventas de Productos Procesados</h3>
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









//para comparacion



$TortaSolventeSoyakg1=0;
$TortaSolventeSoyatm1=0;
$TortaSolventeSoyadolar1=0;
$TortaSolventeSoyabs1=0;
$TortaSolventeSoyatotaldolar1=0;
$TortaSolventeSoyatotalbs1=0;


$TortaSolventeGirasolkg1=0;
$TortaSolventeGirasoltm1=0;
$TortaSolventeGirasoldolar1=0;
$TortaSolventeGirasolbs1=0;
$TortaSolventeGirasoltotaldolar1=0;
$TortaSolventeGirasoltotalbs1=0;


$HarinaIntegralSoyakg1=0;
$HarinaIntegralSoyatm1=0;
$HarinaIntegralSoyadolar1=0;
$HarinaIntegralSoyabs1=0;
$HarinaIntegralSoyatotaldolar1=0;
$HarinaIntegralSoyatotalbs1=0;


$HarinaIntegralGirasolkg1=0;
$HarinaIntegralGirasoltm1=0;
$HarinaIntegralGirasoldolar1=0;
$HarinaIntegralGirasolbs1=0;
$HarinaIntegralGirasoltotaldolar1=0;
$HarinaIntegralGirasoltotalbs1=0;


$CascarillaSoyakg1=0;
$CascarillaSoyatm1=0;
$CascarillaSoyadolar1=0;
$CascarillaSoyabs1=0;
$CascarillaSoyatotaldolar1=0;
$CascarillaSoyatotalbs1=0;


$CascarillaGirasolkg1=0;
$CascarillaGirasoltm1=0;
$CascarillaGirasoldolar1=0;
$CascarillaGirasolbs1=0;
$CascarillaGirasoltotaldolar1=0;
$CascarillaGirasoltotalbs1=0;


$GranoSoyakg1=0;
$GranoSoyatm1=0;
$GranoSoyadolar1=0;
$GranoSoyabs1=0;
$GranoSoyatotaldolar1=0;
$GranoSoyatotalbs1=0;


$GranoGirasolkg1=0;
$GranoGirasoltm1=0;
$GranoGirasoldolar1=0;
$GranoGirasolbs1=0;
$GranoGirasoltotaldolar1=0;
$GranoGirasoltotalbs1=0;


$AceiteRefinadoSoyakg1=0;
$AceiteRefinadoSoyatm1=0;
$AceiteRefinadoSoyadolar1=0;
$AceiteRefinadoSoyabs1=0;
$AceiteRefinadoSoyatotaldolar1=0;
$AceiteRefinadoSoyatotalbs1=0;


$AceiteCrudoSoyakg1=0;
$AceiteCrudoSoyatm1=0;
$AceiteCrudoSoyadolar1=0;
$AceiteCrudoSoyabs1=0;
$AceiteCrudoSoyatotaldolar1=0;
$AceiteCrudoSoyatotalbs1=0;


$AceiteRefinadoGirasolkg1=0;
$AceiteRefinadoGirasoltm1=0;
$AceiteRefinadoGirasoldolar1=0;
$AceiteRefinadoGirasolbs1=0;
$AceiteRefinadoGirasoltotaldolar1=0;
$AceiteRefinadoGirasoltotalbs1=0;


$AceiteCrudoGirasolkg1=0;
$AceiteCrudoGirasoltm1=0;
$AceiteCrudoGirasoldolar1=0;
$AceiteCrudoGirasolbs1=0;
$AceiteCrudoGirasoltotaldolar1=0;
$AceiteCrudoGirasoltotalbs1=0;

?>
<?php foreach ($this->request->data as $dato): ?>
<?php foreach ($dato['Periodo'] as $periodo): ?>

<?php if($periodo==0): ?>
<?php 
echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
       	<th><?php echo 'MES';?> </th>
       	<?php foreach($dato['Productos'] as $pro): ?>
		<?php if($pro == 1): ?>
			<th><?php echo 'TORTA SOLVENTE DE SOYA DIARIO';?> </th>
			<th><?php echo 'TORTA SOLVENTE DE SOYA MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 2): ?>
			<th><?php echo 'HARINA INTEGRAL DE SOYA DIARIO';?> </th>
			<th><?php echo 'HARINA INTEGRAL DE SOYA MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 3): ?>
			<th><?php echo 'CASCARILLA DE SOYA DIARIO';?> </th>
			<th><?php echo 'CASCARILLA DE SOYA MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 4): ?>
			<th><?php echo 'ACEITE DE SOYA REFINADO DIARIO';?> </th>
			<th><?php echo 'ACEITE DE SOYA REFINADO MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 5): ?>
			<th><?php echo 'ACEITE DE SOYA CRUDO DIARIO';?> </th>
			<th><?php echo 'ACEITE DE SOYA CRUDO MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 6): ?>
			<th><?php echo 'TORTA SOLVENTE DE GIRASOL DIARIO';?> </th>
			<th><?php echo 'TORTA SOLVENTE DE GIRASOL MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 7): ?>
			<th><?php echo 'HARINA INTEGRAL DE GIRASOL DIARIO';?> </th>
			<th><?php echo 'HARINA INTEGRAL DE GIRASOL MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 8): ?>
			<th><?php echo 'CASCARILLA DE GIRASOL DIARIO';?> </th>
			<th><?php echo 'CASCARILLA DE GIRASOL MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 9): ?>
			<th><?php echo 'ACEITE DE GIRASOL REFINADO DIARIO';?> </th>
			<th><?php echo 'ACEITE DE GIRASOL REFINADO MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 10): ?>
			<th><?php echo 'ACEITE DE GIRASOL CRUDO DIARIO';?> </th>
			<th><?php echo 'ACEITE DE GIRASOL CRUDO MENSUALS';?> </th>
		<?php endif; ?>
	<?php endforeach; ?>
		</tr>
    </thead>

		<tr>
		
		<?php foreach($meses as $tar => $das): ?>
		<?php 
			echo '<th>'.$das.'</th>';
		 ?>
		<?php foreach ($datos['SoyaProductorDerivado'] as $soyaproductorderivado): ?>
			<?php 
			$year = strtotime($soyaproductorderivado['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$tar) { ?>
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
					<?php if ($soyaproductorderivado['producto']=='Grano de soya') { ?>
						
						<?php $GranoSoyakg=$GranoSoyakg+$soyaproductorderivado['cantidadkg'];?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorderivado['cantidadtm'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorderivado['preciodolar'];?>
						<?php $GranoSoyabs=$GranoSoyabs+$soyaproductorderivado['preciobs'];?>
						<?php $GranoSoyatotaldolar=$CascarillaGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $GranoSoyatotalbs=$GranoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='Grano de girasol') { ?>
					
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
	<?php endforeach; ?>


	<?php foreach ($datos['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
			<?php 
		if($soyaproductorproduccion['operacion']=='Compra Grano'){
			$year = strtotime($soyaproductorderivado['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$tar) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					<?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE SOYA') { ?>
						<?php $TortaSolventeSoyakg1=$TortaSolventeSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $TortaSolventeSoyatm1=$TortaSolventeSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $TortaSolventeSoyadolar1=$TortaSolventeSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $TortaSolventeSoyabs1=$TortaSolventeSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $TortaSolventeSoyatotaldolar1=$TortaSolventeSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $TortaSolventeSoyatotalbs1=$TortaSolventeSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE GIRASOL') { ?>
						
						<?php $TortaSolventeGirasolkg1=$TortaSolventeGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $TortaSolventeGirasoltm1=$TortaSolventeGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $TortaSolventeGirasoldolar1=$TortaSolventeGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $TortaSolventeGirasolbs1=$TortaSolventeGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $TortaSolventeGirasoltotaldolar1=$TortaSolventeGirasolbs1+$soyaproductorproduccion['totaldolar'];?>
						<?php $TortaSolventeGirasoltotalbs1=$TortaSolventeGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
						
						<?php $HarinaIntegralSoyakg1=$HarinaIntegralSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $HarinaIntegralSoyatm1=$HarinaIntegralSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $HarinaIntegralSoyadolar1=$HarinaIntegralSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $HarinaIntegralSoyabs1=$HarinaIntegralSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $HarinaIntegralSoyatotaldolar1=$HarinaIntegralSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $HarinaIntegralSoyatotalbs1=$HarinaIntegralSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE GIRASOL') { ?>
						
						<?php $HarinaIntegralGirasolkg1=$HarinaIntegralGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $HarinaIntegralGirasoltm1=$HarinaIntegralGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $HarinaIntegralGirasoldolar1=$HarinaIntegralGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $HarinaIntegralGirasolbs1=$HarinaIntegralGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $HarinaIntegralGirasoltotaldolar1=$HarinaIntegralGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $HarinaIntegralGirasoltotalbs=$HarinaIntegralGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='CASCARILLA DE SOYA') { ?>
						
						<?php $CascarillaSoyakg1=$CascarillaSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $CascarillaSoyatm1=$CascarillaSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $CascarillaSoyadolar1=$CascarillaSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $CascarillaSoyabs1=$CascarillaSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $CascarillaSoyatotaldolar1=$CascarillaSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $CascarillaSoyatotalbs1=$CascarillaSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='CASCARILLA DE GIRASOL') { ?>
						
						<?php $CascarillaGirasolkg1=$CascarillaGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $CascarillaGirasoltm1=$CascarillaGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $CascarillaGirasoldolar1=$CascarillaGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $CascarillaGirasolbs1=$CascarillaGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $CascarillaGirasoltotaldolar1=$CascarillaGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $CascarillaGirasoltotalbs1=$CascarillaGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='Grano de soya') { ?>
						
						<?php $GranoSoyakg1=$GranoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoSoyatm1=$GranoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoSoyadolar1=$GranoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoSoyabs1=$GranoSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoSoyatotaldolar1=$CascarillaGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoSoyatotalbs1=$GranoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='Grano de girasol') { ?>
					
						<?php $GranoGirasolkg1=$GranoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoGirasoltm1=$GranoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoGirasoldolar1=$GranoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoGirasolbs1=$GranoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoGirasoltotaldolar1=$GranoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoGirasoltotalbs1=$GranoGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA REFINADO') { ?>
					
						<?php $AceiteRefinadoSoyakg1=$AceiteRefinadoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $AceiteRefinadoSoyatm1=$AceiteRefinadoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteRefinadoSoyadolar1=$AceiteRefinadoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteRefinadoSoyabs1=$AceiteRefinadoSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $AceiteRefinadoSoyatotaldolar1=$AceiteRefinadoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $AceiteRefinadoSoyatotalbs1=$AceiteRefinadoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA CRUDO') { ?>
						
						<?php $AceiteCrudoSoyakg1=$AceiteCrudoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $AceiteCrudoSoyatm1=$AceiteCrudoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteCrudoSoyadolar1=$AceiteCrudoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteCrudoSoyabs1=$AceiteCrudoSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $AceiteCrudoSoyatotaldolar1=$AceiteCrudoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $AceiteCrudoSoyatotalbs1=$AceiteCrudoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL REFINADO') { ?>
						<?php $AceiteRefinadoGirasolkg1=$AceiteRefinadoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $AceiteRefinadoGirasoltm1=$AceiteRefinadoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteRefinadoGirasoldolar1=$AceiteRefinadoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteRefinadoGirasolbs1=$AceiteRefinadoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $AceiteRefinadoGirasoltotaldolar1=$AceiteRefinadoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $AceiteRefinadoGirasoltotalbs=$AceiteRefinadoGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL CRUDO') { ?>
						<?php $AceiteCrudoGirasolkg1=$AceiteCrudoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $AceiteCrudoGirasoltm1=$AceiteCrudoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteCrudoGirasoldolar1=$AceiteCrudoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteCrudoGirasolbs1=$AceiteCrudoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $AceiteCrudoGirasoltotaldolar1=$AceiteCrudoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $AceiteCrudoGirasoltotalbs1=$AceiteCrudoGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	<?php endforeach; ?>


	<?php foreach($dato['Productos'] as $pro): ?>
		<?php if($pro == 1): ?>
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
						));?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>
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
                      <td><?php echo number_format($TortaSolventeSoyakg1); ?></td>
                      <td><?php echo number_format($TortaSolventeSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>
		<?php 
			$TortaSolventeSoyakg1=0;
			$TortaSolventeSoyatm1=0;
			$TortaSolventeSoyadolar1=0;
			$TortaSolventeSoyabs1=0;
			$TortaSolventeSoyatotaldolar1=0;
			$TortaSolventeSoyatotalbs1=0;
		?>
		</th>
		<?php endif; ?>






		<?php if($pro == 2): ?>
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
                      <td><?php echo number_format($HarinaIntegralSoyakg1); ?></td>
                      <td><?php echo number_format($HarinaIntegralSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$HarinaIntegralSoyakg1=0;
			$HarinaIntegralSoyatm1=0;
			$HarinaIntegralSoyadolar1=0;
			$HarinaIntegralSoyabs1=0;
			$HarinaIntegralSoyatotaldolar1=0;
			$HarinaIntegralSoyatotalbs1=0
		?>
        </th>
        <?php endif; ?>
        <?php if($pro == 3): ?>
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
                      <td><?php echo number_format($CascarillaSoyakg1); ?></td>
                      <td><?php echo number_format($CascarillaSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($CascarillaSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td> 
                      <td><?php echo $this->Number->format($CascarillaSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                     
                      <td><?php echo $this->Number->format($CascarillaSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$CascarillaSoyakg1=0;
			$CascarillaSoyatm1=0;
			$CascarillaSoyadolar1=0;
			$CascarillaSoyabs1=0;
			$CascarillaSoyatotaldolar1=0;
			$CascarillaSoyatotalbs1=0;
		?>
        </th>
        <?php endif; ?>
        <?php if($pro == 4): ?>
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
                      <td><?php echo number_format($AceiteRefinadoSoyakg1); ?></td>
                      <td><?php echo number_format($AceiteRefinadoSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>  
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                    
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteRefinadoSoyakg1=0;
			$AceiteRefinadoSoyatm1=0;
			$AceiteRefinadoSoyadolar1=0;
			$AceiteRefinadoSoyabs1=0;
			$AceiteRefinadoSoyatotaldolar1=0;
			$AceiteRefinadoSoyatotalbs1=0;
		?>
        </th>
        <?php endif; ?>
        <?php if($pro == 5): ?>
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
                      <td><?php echo number_format($AceiteCrudoSoyakg1); ?></td>
                      <td><?php echo number_format($AceiteCrudoSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                     
                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteCrudoSoyakg1=0;
			$AceiteCrudoSoyatm1=0;
			$AceiteCrudoSoyadolar1=0;
			$AceiteCrudoSoyabs1=0;
			$AceiteCrudoSoyatotaldolar1=0;
			$AceiteCrudoSoyatotalbs1=0;
		?>
        </th>
        <?php endif; ?>
       	<?php if($pro == 6): ?>
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
                      <td><?php echo number_format($TortaSolventeGirasolkg1); ?></td>
                      <td><?php echo number_format($TortaSolventeGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                      
                      <td><?php echo $this->Number->format($TortaSolventeGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>
		<?php 
			$TortaSolventeGirasolkg1=0;
			$TortaSolventeGirasoltm1=0;
			$TortaSolventeGirasoldolar1=0;
			$TortaSolventeGirasolbs1=0;
			$TortaSolventeGirasoltotaldolar1=0;
			$TortaSolventeGirasoltotalbs1=0;
		?>
        </th>
		<?php endif; ?>
		<?php if($pro == 7): ?>	
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
                      <td><?php echo number_format($HarinaIntegralGirasolkg1); ?></td>
                      <td><?php echo number_format($HarinaIntegralGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$HarinaIntegralGirasolkg1=0;
			$HarinaIntegralGirasoltm1=0;
			$HarinaIntegralGirasoldolar1=0;
			$HarinaIntegralGirasolbs1=0;
			$HarinaIntegralGirasoltotaldolar1=0;
			$HarinaIntegralGirasoltotalbs1=0;
		?>
        </th>
		<?php endif; ?>
		<?php if($pro == 8): ?>
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
                      <td><?php echo number_format($CascarillaGirasolkg1); ?></td>
                      <td><?php echo number_format($CascarillaGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                      
                      <td><?php echo $this->Number->format($CascarillaGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$CascarillaGirasolkg1=0;
			$CascarillaGirasoltm1=0;
			$CascarillaGirasoldolar1=0;
			$CascarillaGirasolbs1=0;
			$CascarillaGirasoltotaldolar1=0;
			$CascarillaGirasoltotalbs1=0;
		?>
        </th>
		<?php endif; ?>
		<?php if($pro == 9): ?>
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
                      <td><?php echo number_format($AceiteRefinadoGirasolkg1); ?></td>
                      <td><?php echo number_format($AceiteRefinadoGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteRefinadoGirasolkg1=0;
			$AceiteRefinadoGirasoltm1=0;
			$AceiteRefinadoGirasoldolar1=0;
			$AceiteRefinadoGirasolbs1=0;
			$AceiteRefinadoGirasoltotaldolar1=0;
			$AceiteRefinadoGirasoltotalbs1=0;
		?>
        </th>
        <?php endif; ?>
        <?php if($pro == 10): ?>
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
                      <td><?php echo number_format($AceiteCrudoGirasolkg1); ?></td>
                      <td><?php echo number_format($AceiteCrudoGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteCrudoGirasolkg1=0;
			$AceiteCrudoGirasoltm1=0;
			$AceiteCrudoGirasoldolar1=0;
			$AceiteCrudoGirasolbs1=0;
			$AceiteCrudoGirasoltotaldolar1=0;
			$AceiteCrudoGirasoltotalbs1=0;
		?>
        </th>
		<?php endif; ?>

        
        
		<?php endforeach; ?>
			
		</tr>
		
        

		<?php endforeach; ?>
</table>

</div>
	<? endif; ?>




	<?php if($periodo==1): 
	$pro = 0; ?>


		<div class="semestre form">
<?php 
echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
       	<th><?php echo 'SEMESTRE';?> </th>
       	<?php foreach($dato['Productos'] as $pro): ?>
		<?php if($pro == 1): ?>
			<th><?php echo 'TORTA SOLVENTE DE SOYA DIARIO';?> </th>
			<th><?php echo 'TORTA SOLVENTE DE SOYA MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 2): ?>
			<th><?php echo 'HARINA INTEGRAL DE SOYA DIARIO';?> </th>
			<th><?php echo 'HARINA INTEGRAL DE SOYA MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 3): ?>
			<th><?php echo 'CASCARILLA DE SOYA DIARIO';?> </th>
			<th><?php echo 'CASCARILLA DE SOYA MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 4): ?>
			<th><?php echo 'ACEITE DE SOYA REFINADO DIARIO';?> </th>
			<th><?php echo 'ACEITE DE SOYA REFINADO MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 5): ?>
			<th><?php echo 'ACEITE DE SOYA CRUDO DIARIO';?> </th>
			<th><?php echo 'ACEITE DE SOYA CRUDO MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 6): ?>
			<th><?php echo 'TORTA SOLVENTE DE GIRASOL DIARIO';?> </th>
			<th><?php echo 'TORTA SOLVENTE DE GIRASOL MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 7): ?>
			<th><?php echo 'HARINA INTEGRAL DE GIRASOL DIARIO';?> </th>
			<th><?php echo 'HARINA INTEGRAL DE GIRASOL MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 8): ?>
			<th><?php echo 'CASCARILLA DE GIRASOL DIARIO';?> </th>
			<th><?php echo 'CASCARILLA DE GIRASOL MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 9): ?>
			<th><?php echo 'ACEITE DE GIRASOL REFINADO DIARIO';?> </th>
			<th><?php echo 'ACEITE DE GIRASOL REFINADO MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 10): ?>
			<th><?php echo 'ACEITE DE GIRASOL CRUDO DIARIO';?> </th>
			<th><?php echo 'ACEITE DE GIRASOL CRUDO MENSUALS';?> </th>
		<?php endif; ?>
		<?php endforeach; ?>
		</tr>
    </thead>

		<tr>
		
		<?php foreach($meses as $tar => $das): ?>
		<?php 
			if ($tar==6) { echo '<th>Primer Semestre</th>'; }
			if ($tar==12) { echo '<th>Segundo Semestre</th>'; }
		 ?>
		<?php foreach ($datos['SoyaProductorCompra'] as $soyaproductorderivado): ?>
			<?php 
			$year = strtotime($soyaproductorderivado['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$tar) { ?>
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
					<?php if ($soyaproductorderivado['producto']=='Grano de soya') { ?>
						
						<?php $GranoSoyakg=$GranoSoyakg+$soyaproductorderivado['cantidadkg'];?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorderivado['cantidadtm'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorderivado['preciodolar'];?>
						<?php $GranoSoyabs=$GranoSoyabs+$soyaproductorderivado['preciobs'];?>
						<?php $GranoSoyatotaldolar=$CascarillaGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $GranoSoyatotalbs=$GranoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='Grano de girasol') { ?>
					
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
	<?php endforeach; ?>
	<?php foreach ($datos['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
			<?php 
		if($soyaproductorproduccion['operacion']=='Compra Grano'){
			$year = strtotime($soyaproductorderivado['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$tar) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					<?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE SOYA') { ?>
						<?php $TortaSolventeSoyakg1=$TortaSolventeSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $TortaSolventeSoyatm1=$TortaSolventeSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $TortaSolventeSoyadolar1=$TortaSolventeSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $TortaSolventeSoyabs1=$TortaSolventeSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $TortaSolventeSoyatotaldolar1=$TortaSolventeSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $TortaSolventeSoyatotalbs1=$TortaSolventeSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE GIRASOL') { ?>
						
						<?php $TortaSolventeGirasolkg1=$TortaSolventeGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $TortaSolventeGirasoltm1=$TortaSolventeGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $TortaSolventeGirasoldolar1=$TortaSolventeGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $TortaSolventeGirasolbs1=$TortaSolventeGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $TortaSolventeGirasoltotaldolar1=$TortaSolventeGirasolbs1+$soyaproductorproduccion['totaldolar'];?>
						<?php $TortaSolventeGirasoltotalbs1=$TortaSolventeGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
						
						<?php $HarinaIntegralSoyakg1=$HarinaIntegralSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $HarinaIntegralSoyatm1=$HarinaIntegralSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $HarinaIntegralSoyadolar1=$HarinaIntegralSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $HarinaIntegralSoyabs1=$HarinaIntegralSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $HarinaIntegralSoyatotaldolar1=$HarinaIntegralSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $HarinaIntegralSoyatotalbs1=$HarinaIntegralSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE GIRASOL') { ?>
						
						<?php $HarinaIntegralGirasolkg1=$HarinaIntegralGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $HarinaIntegralGirasoltm1=$HarinaIntegralGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $HarinaIntegralGirasoldolar1=$HarinaIntegralGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $HarinaIntegralGirasolbs1=$HarinaIntegralGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $HarinaIntegralGirasoltotaldolar1=$HarinaIntegralGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $HarinaIntegralGirasoltotalbs=$HarinaIntegralGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='CASCARILLA DE SOYA') { ?>
						
						<?php $CascarillaSoyakg1=$CascarillaSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $CascarillaSoyatm1=$CascarillaSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $CascarillaSoyadolar1=$CascarillaSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $CascarillaSoyabs1=$CascarillaSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $CascarillaSoyatotaldolar1=$CascarillaSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $CascarillaSoyatotalbs1=$CascarillaSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='CASCARILLA DE GIRASOL') { ?>
						
						<?php $CascarillaGirasolkg1=$CascarillaGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $CascarillaGirasoltm1=$CascarillaGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $CascarillaGirasoldolar1=$CascarillaGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $CascarillaGirasolbs1=$CascarillaGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $CascarillaGirasoltotaldolar1=$CascarillaGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $CascarillaGirasoltotalbs1=$CascarillaGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='Grano de soya') { ?>
						
						<?php $GranoSoyakg1=$GranoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoSoyatm1=$GranoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoSoyadolar1=$GranoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoSoyabs1=$GranoSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoSoyatotaldolar1=$CascarillaGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoSoyatotalbs1=$GranoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='Grano de girasol') { ?>
					
						<?php $GranoGirasolkg1=$GranoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoGirasoltm1=$GranoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoGirasoldolar1=$GranoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoGirasolbs1=$GranoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoGirasoltotaldolar1=$GranoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoGirasoltotalbs1=$GranoGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA REFINADO') { ?>
					
						<?php $AceiteRefinadoSoyakg1=$AceiteRefinadoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $AceiteRefinadoSoyatm1=$AceiteRefinadoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteRefinadoSoyadolar1=$AceiteRefinadoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteRefinadoSoyabs1=$AceiteRefinadoSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $AceiteRefinadoSoyatotaldolar1=$AceiteRefinadoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $AceiteRefinadoSoyatotalbs1=$AceiteRefinadoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA CRUDO') { ?>
						
						<?php $AceiteCrudoSoyakg1=$AceiteCrudoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $AceiteCrudoSoyatm1=$AceiteCrudoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteCrudoSoyadolar1=$AceiteCrudoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteCrudoSoyabs1=$AceiteCrudoSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $AceiteCrudoSoyatotaldolar1=$AceiteCrudoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $AceiteCrudoSoyatotalbs1=$AceiteCrudoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL REFINADO') { ?>
						<?php $AceiteRefinadoGirasolkg1=$AceiteRefinadoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $AceiteRefinadoGirasoltm1=$AceiteRefinadoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteRefinadoGirasoldolar1=$AceiteRefinadoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteRefinadoGirasolbs1=$AceiteRefinadoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $AceiteRefinadoGirasoltotaldolar1=$AceiteRefinadoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $AceiteRefinadoGirasoltotalbs=$AceiteRefinadoGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL CRUDO') { ?>
						<?php $AceiteCrudoGirasolkg1=$AceiteCrudoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $AceiteCrudoGirasoltm1=$AceiteCrudoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteCrudoGirasoldolar1=$AceiteCrudoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteCrudoGirasolbs1=$AceiteCrudoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $AceiteCrudoGirasoltotaldolar1=$AceiteCrudoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $AceiteCrudoGirasoltotalbs1=$AceiteCrudoGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	<?php endforeach; ?>
		<?php 		
		if ($tar==6 || $tar==12) { 
		?>
		<?php foreach($dato['Productos'] as $pro): ?>	
			<?php if($pro == 1): ?>
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
						));?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>
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
                      <td><?php echo number_format($TortaSolventeSoyakg1); ?></td>
                      <td><?php echo number_format($TortaSolventeSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>
		<?php 
			$TortaSolventeSoyakg1=0;
			$TortaSolventeSoyatm1=0;
			$TortaSolventeSoyadolar1=0;
			$TortaSolventeSoyabs1=0;
			$TortaSolventeSoyatotaldolar1=0;
			$TortaSolventeSoyatotalbs1=0;
		?>
		</th>
		<?php endif; ?>






		<?php if($pro == 2): ?>
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
                      <td><?php echo number_format($HarinaIntegralSoyakg1); ?></td>
                      <td><?php echo number_format($HarinaIntegralSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$HarinaIntegralSoyakg1=0;
			$HarinaIntegralSoyatm1=0;
			$HarinaIntegralSoyadolar1=0;
			$HarinaIntegralSoyabs1=0;
			$HarinaIntegralSoyatotaldolar1=0;
			$HarinaIntegralSoyatotalbs1=0
		?>
        </th>
        <?php endif; ?>
        <?php if($pro == 3): ?>
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
                      <td><?php echo number_format($CascarillaSoyakg1); ?></td>
                      <td><?php echo number_format($CascarillaSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($CascarillaSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td> 
                      <td><?php echo $this->Number->format($CascarillaSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                     
                      <td><?php echo $this->Number->format($CascarillaSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$CascarillaSoyakg1=0;
			$CascarillaSoyatm1=0;
			$CascarillaSoyadolar1=0;
			$CascarillaSoyabs1=0;
			$CascarillaSoyatotaldolar1=0;
			$CascarillaSoyatotalbs1=0;
		?>
        </th>
        <?php endif; ?>
        <?php if($pro == 4): ?>
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
                      <td><?php echo number_format($AceiteRefinadoSoyakg1); ?></td>
                      <td><?php echo number_format($AceiteRefinadoSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>  
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                    
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteRefinadoSoyakg1=0;
			$AceiteRefinadoSoyatm1=0;
			$AceiteRefinadoSoyadolar1=0;
			$AceiteRefinadoSoyabs1=0;
			$AceiteRefinadoSoyatotaldolar1=0;
			$AceiteRefinadoSoyatotalbs1=0;
		?>
        </th>
        <?php endif; ?>
        <?php if($pro == 5): ?>
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
                      <td><?php echo number_format($AceiteCrudoSoyakg1); ?></td>
                      <td><?php echo number_format($AceiteCrudoSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                     
                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteCrudoSoyakg1=0;
			$AceiteCrudoSoyatm1=0;
			$AceiteCrudoSoyadolar1=0;
			$AceiteCrudoSoyabs1=0;
			$AceiteCrudoSoyatotaldolar1=0;
			$AceiteCrudoSoyatotalbs1=0;
		?>
        </th>
        <?php endif; ?>
       	<?php if($pro == 6): ?>
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
                      <td><?php echo number_format($TortaSolventeGirasolkg1); ?></td>
                      <td><?php echo number_format($TortaSolventeGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                      
                      <td><?php echo $this->Number->format($TortaSolventeGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>
		<?php 
			$TortaSolventeGirasolkg1=0;
			$TortaSolventeGirasoltm1=0;
			$TortaSolventeGirasoldolar1=0;
			$TortaSolventeGirasolbs1=0;
			$TortaSolventeGirasoltotaldolar1=0;
			$TortaSolventeGirasoltotalbs1=0;
		?>
        </th>
		<?php endif; ?>
		<?php if($pro == 7): ?>	
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
                      <td><?php echo number_format($HarinaIntegralGirasolkg1); ?></td>
                      <td><?php echo number_format($HarinaIntegralGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$HarinaIntegralGirasolkg1=0;
			$HarinaIntegralGirasoltm1=0;
			$HarinaIntegralGirasoldolar1=0;
			$HarinaIntegralGirasolbs1=0;
			$HarinaIntegralGirasoltotaldolar1=0;
			$HarinaIntegralGirasoltotalbs1=0;
		?>
        </th>
		<?php endif; ?>
		<?php if($pro == 8): ?>
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
                      <td><?php echo number_format($CascarillaGirasolkg1); ?></td>
                      <td><?php echo number_format($CascarillaGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                      
                      <td><?php echo $this->Number->format($CascarillaGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$CascarillaGirasolkg1=0;
			$CascarillaGirasoltm1=0;
			$CascarillaGirasoldolar1=0;
			$CascarillaGirasolbs1=0;
			$CascarillaGirasoltotaldolar1=0;
			$CascarillaGirasoltotalbs1=0;
		?>
        </th>
		<?php endif; ?>
		<?php if($pro == 9): ?>
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
                      <td><?php echo number_format($AceiteRefinadoGirasolkg1); ?></td>
                      <td><?php echo number_format($AceiteRefinadoGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteRefinadoGirasolkg1=0;
			$AceiteRefinadoGirasoltm1=0;
			$AceiteRefinadoGirasoldolar1=0;
			$AceiteRefinadoGirasolbs1=0;
			$AceiteRefinadoGirasoltotaldolar1=0;
			$AceiteRefinadoGirasoltotalbs1=0;
		?>
        </th>
        <?php endif; ?>
        <?php if($pro == 10): ?>
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
                      <td><?php echo number_format($AceiteCrudoGirasolkg1); ?></td>
                      <td><?php echo number_format($AceiteCrudoGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteCrudoGirasolkg1=0;
			$AceiteCrudoGirasoltm1=0;
			$AceiteCrudoGirasoldolar1=0;
			$AceiteCrudoGirasolbs1=0;
			$AceiteCrudoGirasoltotaldolar1=0;
			$AceiteCrudoGirasoltotalbs1=0;
		?>
        </th>
		<?php endif; ?>

		<?php endforeach; ?>
		<?php 
		}
		?>

		</tr>

		<?php endforeach; ?>
</table>
</div>
	<? endif; ?>





<?php $count=0;?>
<?php if($periodo==2): ?>
	<div class="anual form">
<?php 
echo '<h2>'.$var.'</h2>';?>	
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
       	<th><?php echo 'AÑO';?> </th>
       		<?php foreach($dato['Productos'] as $pro): ?>
		<?php if($pro == 1): ?>
			<th><?php echo 'TORTA SOLVENTE DE SOYA DIARIO';?> </th>
			<th><?php echo 'TORTA SOLVENTE DE SOYA MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 2): ?>
			<th><?php echo 'HARINA INTEGRAL DE SOYA DIARIO';?> </th>
			<th><?php echo 'HARINA INTEGRAL DE SOYA MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 3): ?>
			<th><?php echo 'CASCARILLA DE SOYA DIARIO';?> </th>
			<th><?php echo 'CASCARILLA DE SOYA MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 4): ?>
			<th><?php echo 'ACEITE DE SOYA REFINADO DIARIO';?> </th>
			<th><?php echo 'ACEITE DE SOYA REFINADO MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 5): ?>
			<th><?php echo 'ACEITE DE SOYA CRUDO DIARIO';?> </th>
			<th><?php echo 'ACEITE DE SOYA CRUDO MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 6): ?>
			<th><?php echo 'TORTA SOLVENTE DE GIRASOL DIARIO';?> </th>
			<th><?php echo 'TORTA SOLVENTE DE GIRASOL MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 7): ?>
			<th><?php echo 'HARINA INTEGRAL DE GIRASOL DIARIO';?> </th>
			<th><?php echo 'HARINA INTEGRAL DE GIRASOL MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 8): ?>
			<th><?php echo 'CASCARILLA DE GIRASOL DIARIO';?> </th>
			<th><?php echo 'CASCARILLA DE GIRASOL MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 9): ?>
			<th><?php echo 'ACEITE DE GIRASOL REFINADO DIARIO';?> </th>
			<th><?php echo 'ACEITE DE GIRASOL REFINADO MENSUAL';?> </th>
		<?php endif; ?>
		<?php if($pro == 10): ?>
			<th><?php echo 'ACEITE DE GIRASOL CRUDO DIARIO';?> </th>
			<th><?php echo 'ACEITE DE GIRASOL CRUDO MENSUALS';?> </th>
		<?php endif; ?>
			<?php endforeach; ?>
		</tr>
    </thead>

		<tr>
		
		<?php foreach($meses as $tar => $das): ?>
		<?php 
			if ($tar==12) { echo '<th>Año '.$var.'</th>'; }
		 ?>
		<?php foreach ($datos['SoyaProductorCompra'] as $soyaproductorderivado): ?>
			<?php 
			$year = strtotime($soyaproductorderivado['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$tar) { ?>
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
					<?php if ($soyaproductorderivado['producto']=='Grano de soya') { ?>
						
						<?php $GranoSoyakg=$GranoSoyakg+$soyaproductorderivado['cantidadkg'];?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorderivado['cantidadtm'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorderivado['preciodolar'];?>
						<?php $GranoSoyabs=$GranoSoyabs+$soyaproductorderivado['preciobs'];?>
						<?php $GranoSoyatotaldolar=$CascarillaGirasoltotaldolar+$soyaproductorderivado['totaldolar'];?>
						<?php $GranoSoyatotalbs=$GranoSoyatotalbs+$soyaproductorderivado['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='Grano de girasol') { ?>
					
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
	<?php endforeach; ?>
	<?php foreach ($datos['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
			<?php 
		if($soyaproductorproduccion['operacion']=='Compra Grano'){
			$year = strtotime($soyaproductorderivado['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$tar) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					<?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE SOYA') { ?>
						<?php $TortaSolventeSoyakg1=$TortaSolventeSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $TortaSolventeSoyatm1=$TortaSolventeSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $TortaSolventeSoyadolar1=$TortaSolventeSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $TortaSolventeSoyabs1=$TortaSolventeSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $TortaSolventeSoyatotaldolar1=$TortaSolventeSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $TortaSolventeSoyatotalbs1=$TortaSolventeSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE GIRASOL') { ?>
						
						<?php $TortaSolventeGirasolkg1=$TortaSolventeGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $TortaSolventeGirasoltm1=$TortaSolventeGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $TortaSolventeGirasoldolar1=$TortaSolventeGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $TortaSolventeGirasolbs1=$TortaSolventeGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $TortaSolventeGirasoltotaldolar1=$TortaSolventeGirasolbs1+$soyaproductorproduccion['totaldolar'];?>
						<?php $TortaSolventeGirasoltotalbs1=$TortaSolventeGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
						
						<?php $HarinaIntegralSoyakg1=$HarinaIntegralSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $HarinaIntegralSoyatm1=$HarinaIntegralSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $HarinaIntegralSoyadolar1=$HarinaIntegralSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $HarinaIntegralSoyabs1=$HarinaIntegralSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $HarinaIntegralSoyatotaldolar1=$HarinaIntegralSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $HarinaIntegralSoyatotalbs1=$HarinaIntegralSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE GIRASOL') { ?>
						
						<?php $HarinaIntegralGirasolkg1=$HarinaIntegralGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $HarinaIntegralGirasoltm1=$HarinaIntegralGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $HarinaIntegralGirasoldolar1=$HarinaIntegralGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $HarinaIntegralGirasolbs1=$HarinaIntegralGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $HarinaIntegralGirasoltotaldolar1=$HarinaIntegralGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $HarinaIntegralGirasoltotalbs=$HarinaIntegralGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='CASCARILLA DE SOYA') { ?>
						
						<?php $CascarillaSoyakg1=$CascarillaSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $CascarillaSoyatm1=$CascarillaSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $CascarillaSoyadolar1=$CascarillaSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $CascarillaSoyabs1=$CascarillaSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $CascarillaSoyatotaldolar1=$CascarillaSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $CascarillaSoyatotalbs1=$CascarillaSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='CASCARILLA DE GIRASOL') { ?>
						
						<?php $CascarillaGirasolkg1=$CascarillaGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $CascarillaGirasoltm1=$CascarillaGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $CascarillaGirasoldolar1=$CascarillaGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $CascarillaGirasolbs1=$CascarillaGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $CascarillaGirasoltotaldolar1=$CascarillaGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $CascarillaGirasoltotalbs1=$CascarillaGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='Grano de soya') { ?>
						
						<?php $GranoSoyakg1=$GranoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoSoyatm1=$GranoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoSoyadolar1=$GranoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoSoyabs1=$GranoSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoSoyatotaldolar1=$CascarillaGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoSoyatotalbs1=$GranoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='Grano de girasol') { ?>
					
						<?php $GranoGirasolkg1=$GranoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoGirasoltm1=$GranoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoGirasoldolar1=$GranoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoGirasolbs1=$GranoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoGirasoltotaldolar1=$GranoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoGirasoltotalbs1=$GranoGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA REFINADO') { ?>
					
						<?php $AceiteRefinadoSoyakg1=$AceiteRefinadoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $AceiteRefinadoSoyatm1=$AceiteRefinadoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteRefinadoSoyadolar1=$AceiteRefinadoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteRefinadoSoyabs1=$AceiteRefinadoSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $AceiteRefinadoSoyatotaldolar1=$AceiteRefinadoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $AceiteRefinadoSoyatotalbs1=$AceiteRefinadoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA CRUDO') { ?>
						
						<?php $AceiteCrudoSoyakg1=$AceiteCrudoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $AceiteCrudoSoyatm1=$AceiteCrudoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteCrudoSoyadolar1=$AceiteCrudoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteCrudoSoyabs1=$AceiteCrudoSoyabs1+$soyaproductorproduccion['preciobs'];?>
						<?php $AceiteCrudoSoyatotaldolar1=$AceiteCrudoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $AceiteCrudoSoyatotalbs1=$AceiteCrudoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL REFINADO') { ?>
						<?php $AceiteRefinadoGirasolkg1=$AceiteRefinadoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $AceiteRefinadoGirasoltm1=$AceiteRefinadoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteRefinadoGirasoldolar1=$AceiteRefinadoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteRefinadoGirasolbs1=$AceiteRefinadoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $AceiteRefinadoGirasoltotaldolar1=$AceiteRefinadoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $AceiteRefinadoGirasoltotalbs=$AceiteRefinadoGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='ACEITE DE GIRASOL CRUDO') { ?>
						<?php $AceiteCrudoGirasolkg1=$AceiteCrudoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
						<?php $AceiteCrudoGirasoltm1=$AceiteCrudoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
						<?php $AceiteCrudoGirasoldolar1=$AceiteCrudoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
						<?php $AceiteCrudoGirasolbs1=$AceiteCrudoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
						<?php $AceiteCrudoGirasoltotaldolar1=$AceiteCrudoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
						<?php $AceiteCrudoGirasoltotalbs1=$AceiteCrudoGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	<?php endforeach; ?>
		<?php 		
		if ($tar==12) { 
		?>
			<?php foreach($dato['Productos'] as $pro): ?>	
			<?php if($pro == 1): ?>
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
						));?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>
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
                      <td><?php echo number_format($TortaSolventeSoyakg1); ?></td>
                      <td><?php echo number_format($TortaSolventeSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>
                      <td><?php echo $this->Number->format($TortaSolventeSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>
		<?php 
			$TortaSolventeSoyakg1=0;
			$TortaSolventeSoyatm1=0;
			$TortaSolventeSoyadolar1=0;
			$TortaSolventeSoyabs1=0;
			$TortaSolventeSoyatotaldolar1=0;
			$TortaSolventeSoyatotalbs1=0;
		?>
		</th>
		<?php endif; ?>






		<?php if($pro == 2): ?>
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
                      <td><?php echo number_format($HarinaIntegralSoyakg1); ?></td>
                      <td><?php echo number_format($HarinaIntegralSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$HarinaIntegralSoyakg1=0;
			$HarinaIntegralSoyatm1=0;
			$HarinaIntegralSoyadolar1=0;
			$HarinaIntegralSoyabs1=0;
			$HarinaIntegralSoyatotaldolar1=0;
			$HarinaIntegralSoyatotalbs1=0
		?>
        </th>
        <?php endif; ?>
        <?php if($pro == 3): ?>
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
                      <td><?php echo number_format($CascarillaSoyakg1); ?></td>
                      <td><?php echo number_format($CascarillaSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($CascarillaSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td> 
                      <td><?php echo $this->Number->format($CascarillaSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                     
                      <td><?php echo $this->Number->format($CascarillaSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$CascarillaSoyakg1=0;
			$CascarillaSoyatm1=0;
			$CascarillaSoyadolar1=0;
			$CascarillaSoyabs1=0;
			$CascarillaSoyatotaldolar1=0;
			$CascarillaSoyatotalbs1=0;
		?>
        </th>
        <?php endif; ?>
        <?php if($pro == 4): ?>
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
                      <td><?php echo number_format($AceiteRefinadoSoyakg1); ?></td>
                      <td><?php echo number_format($AceiteRefinadoSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>  
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                    
                      <td><?php echo $this->Number->format($AceiteRefinadoSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteRefinadoSoyakg1=0;
			$AceiteRefinadoSoyatm1=0;
			$AceiteRefinadoSoyadolar1=0;
			$AceiteRefinadoSoyabs1=0;
			$AceiteRefinadoSoyatotaldolar1=0;
			$AceiteRefinadoSoyatotalbs1=0;
		?>
        </th>
        <?php endif; ?>
        <?php if($pro == 5): ?>
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
                      <td><?php echo number_format($AceiteCrudoSoyakg1); ?></td>
                      <td><?php echo number_format($AceiteCrudoSoyatm1); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyabs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyadolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                     
                      <td><?php echo $this->Number->format($AceiteCrudoSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteCrudoSoyakg1=0;
			$AceiteCrudoSoyatm1=0;
			$AceiteCrudoSoyadolar1=0;
			$AceiteCrudoSoyabs1=0;
			$AceiteCrudoSoyatotaldolar1=0;
			$AceiteCrudoSoyatotalbs1=0;
		?>
        </th>
        <?php endif; ?>
       	<?php if($pro == 6): ?>
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
                      <td><?php echo number_format($TortaSolventeGirasolkg1); ?></td>
                      <td><?php echo number_format($TortaSolventeGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                      
                      <td><?php echo $this->Number->format($TortaSolventeGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($TortaSolventeGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>
		<?php 
			$TortaSolventeGirasolkg1=0;
			$TortaSolventeGirasoltm1=0;
			$TortaSolventeGirasoldolar1=0;
			$TortaSolventeGirasolbs1=0;
			$TortaSolventeGirasoltotaldolar1=0;
			$TortaSolventeGirasoltotalbs1=0;
		?>
        </th>
		<?php endif; ?>
		<?php if($pro == 7): ?>	
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
                      <td><?php echo number_format($HarinaIntegralGirasolkg1); ?></td>
                      <td><?php echo number_format($HarinaIntegralGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$HarinaIntegralGirasolkg1=0;
			$HarinaIntegralGirasoltm1=0;
			$HarinaIntegralGirasoldolar1=0;
			$HarinaIntegralGirasolbs1=0;
			$HarinaIntegralGirasoltotaldolar1=0;
			$HarinaIntegralGirasoltotalbs1=0;
		?>
        </th>
		<?php endif; ?>
		<?php if($pro == 8): ?>
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
                      <td><?php echo number_format($CascarillaGirasolkg1); ?></td>
                      <td><?php echo number_format($CascarillaGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($CascarillaGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>                      
                      <td><?php echo $this->Number->format($CascarillaGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$CascarillaGirasolkg1=0;
			$CascarillaGirasoltm1=0;
			$CascarillaGirasoldolar1=0;
			$CascarillaGirasolbs1=0;
			$CascarillaGirasoltotaldolar1=0;
			$CascarillaGirasoltotalbs1=0;
		?>
        </th>
		<?php endif; ?>
		<?php if($pro == 9): ?>
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
                      <td><?php echo number_format($AceiteRefinadoGirasolkg1); ?></td>
                      <td><?php echo number_format($AceiteRefinadoGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteRefinadoGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteRefinadoGirasolkg1=0;
			$AceiteRefinadoGirasoltm1=0;
			$AceiteRefinadoGirasoldolar1=0;
			$AceiteRefinadoGirasolbs1=0;
			$AceiteRefinadoGirasoltotaldolar1=0;
			$AceiteRefinadoGirasoltotalbs1=0;
		?>
        </th>
        <?php endif; ?>
        <?php if($pro == 10): ?>
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
                      <td><?php echo number_format($AceiteCrudoGirasolkg1); ?></td>
                      <td><?php echo number_format($AceiteCrudoGirasoltm1); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasolbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoltotalbs1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($AceiteCrudoGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$AceiteCrudoGirasolkg1=0;
			$AceiteCrudoGirasoltm1=0;
			$AceiteCrudoGirasoldolar1=0;
			$AceiteCrudoGirasolbs1=0;
			$AceiteCrudoGirasoltotaldolar1=0;
			$AceiteCrudoGirasoltotalbs1=0;
		?>
        </th>
		<?php endif; ?>

			<?php endforeach; ?>		
		<?php 			
		}
		?>        
		</tr>
		<?php endforeach; ?>
</table>
</div>
	<? endif; ?>
	<? endforeach; ?>
<? endforeach; ?>
<div class="anual form">
	<?php echo $this->Html->link( "Graficas", array('action'=>'graficas', $datos['Soya']['id']), array('class' => 'large yellow awesome')); ?>


	</div>