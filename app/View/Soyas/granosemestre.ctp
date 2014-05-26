
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
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'compragrano') ); ?></li>
</ul>
 <ul>
<li><?php echo $this->Html->link("Reporte", array('action'=>'reportecgsemestre', $this->data['Soya']['id'])); ?></li>
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
<h3>Panel de Compra <br/> Grano Semestral <br/> Productores de Oleaginosas</h3>
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

		<th><?php echo 'GRANO DE SOYA';?> </th>
		<th><?php echo 'GRANO DE GIRASOL';?> </th>

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
		<?php 
	foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>

			<?php 
		if($soyaproductorproduccion['operacion']=='Compra Grano'){
			$year = strtotime($soyaproductorproduccion['fecharegistro']);
			
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php if ($soyaproductorproduccion['producto']=='GRANO DE SOYA') { ?>
						
						<?php $GranoSoyakg=$GranoSoyakg+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoSoyabs=$GranoSoyabs+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoSoyatotaldolar=$GranoSoyatotaldolar+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoSoyatotalbs=$GranoSoyatotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='GRANO DE GIRASOL') { ?>
					
						<?php $GranoGirasolkg=$GranoGirasolkg+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoGirasolbs=$GranoGirasolbs+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoGirasoltotaldolar=$GranoGirasoltotaldolar+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoGirasoltotalbs=$GranoGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					
				<?php } ?>
			<?php 
				}
			} ?>
		<?php endforeach;
		?>
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
                      <td><?php echo $GranoSoyabs; ?></td>
                      <td><?php echo $GranoSoyadolar; ?></td>
                      <td><?php echo $GranoSoyatotalbs; ?></td>
                      <td><?php echo $GranoSoyatotaldolar; ?></td>
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
                      <td><?php echo $GranoGirasolbs; ?></td>
                      <td><?php echo $GranoGirasoldolar; ?></td>
                      <td><?php echo $GranoGirasoltotalbs; ?></td>
                      <td><?php echo $GranoGirasoltotaldolar; ?></td>
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
	<?php }?>















		<?php for ($i=1; $i <= 6 ; $i++) { ?>
		<tr><?php 

		if ($i==6) { echo '<th>Primer Semestre</th>'; }
	
		?>
		<?php 
	foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>

			<?php 
		if($soyaproductorproduccion['operacion']=='Compra Grano'){
			$year = strtotime($soyaproductorproduccion['fecharegistro']);
			
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php if ($soyaproductorproduccion['producto']=='GRANO DE SOYA') { ?>
						
						<?php $GranoSoyakg=$GranoSoyakg+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoSoyabs=$GranoSoyabs+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoSoyatotaldolar=$GranoSoyatotaldolar+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoSoyatotalbs=$GranoSoyatotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='GRANO DE GIRASOL') { ?>
					
						<?php $GranoGirasolkg=$GranoGirasolkg+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoGirasolbs=$GranoGirasolbs+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoGirasoltotaldolar=$GranoGirasoltotaldolar+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoGirasoltotalbs=$GranoGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					
				<?php } ?>
			<?php 
				}
			} ?>
		<?php endforeach;
		?>
		<?php if ($i==6) { ?>
		
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
                      <td><?php echo $GranoSoyabs; ?></td>
                      <td><?php echo $GranoSoyadolar; ?></td>
                      <td><?php echo $GranoSoyatotalbs; ?></td>
                      <td><?php echo $GranoSoyatotaldolar; ?></td>
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
                      <td><?php echo $GranoGirasolbs; ?></td>
                      <td><?php echo $GranoGirasoldolar; ?></td>
                      <td><?php echo $GranoGirasoltotalbs; ?></td>
                      <td><?php echo $GranoGirasoltotaldolar; ?></td>
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

		if ($i==7) { echo 'Julio'; }
		if ($i==8) { echo 'Agosto'; }
		if ($i==9) { echo 'Septiembre'; }
		if ($i==10) { echo 'Octubre'; }
		if ($i==11) { echo 'Noviembre'; }
		if ($i==12) { echo 'Diciembre'; }
		?></th>
		<th>
		<?php 
	foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>

			<?php 
		if($soyaproductorproduccion['operacion']=='Compra Grano'){
			$year = strtotime($soyaproductorproduccion['fecharegistro']);
			
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php if ($soyaproductorproduccion['producto']=='GRANO DE SOYA') { ?>
						
						<?php $GranoSoyakg=$GranoSoyakg+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoSoyabs=$GranoSoyabs+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoSoyatotaldolar=$GranoSoyatotaldolar+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoSoyatotalbs=$GranoSoyatotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='GRANO DE GIRASOL') { ?>
					
						<?php $GranoGirasolkg=$GranoGirasolkg+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoGirasolbs=$GranoGirasolbs+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoGirasoltotaldolar=$GranoGirasoltotaldolar+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoGirasoltotalbs=$GranoGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
				<?php } ?>
			<?php 
				}
			} ?>
		<?php endforeach;
		?>
			
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
                      <td><?php echo $GranoSoyabs; ?></td>
                      <td><?php echo $GranoSoyadolar; ?></td>
                      <td><?php echo $GranoSoyatotalbs; ?></td>
                      <td><?php echo $GranoSoyatotaldolar; ?></td>
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
                      <td><?php echo $GranoGirasolbs; ?></td>
                      <td><?php echo $GranoGirasoldolar; ?></td>
                      <td><?php echo $GranoGirasoltotalbs; ?></td>
                      <td><?php echo $GranoGirasoltotaldolar; ?></td>
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
	<?php }?>






















		<?php for ($i=7; $i <= 12 ; $i++) { ?>
		<tr><?php 

		if ($i==12) { echo '<th>Segundo Semestre</th>'; }
	
		?>
		<?php 
	foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>

			<?php 
		if($soyaproductorproduccion['operacion']=='Exportacion'){
			$year = strtotime($soyaproductorproduccion['fecharegistro']);
			
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php if ($soyaproductorproduccion['producto']=='GRANO DE SOYA') { ?>
						
						<?php $GranoSoyakg=$GranoSoyakg+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoSoyabs=$GranoSoyabs+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoSoyatotaldolar=$GranoSoyatotaldolar+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoSoyatotalbs=$GranoSoyatotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='GRANO DE GIRASOL') { ?>
					
						<?php $GranoGirasolkg=$GranoGirasolkg+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoGirasolbs=$GranoGirasolbs+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoGirasoltotaldolar=$GranoGirasoltotaldolar+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoGirasoltotalbs=$GranoGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
					<?php } ?>
					
				<?php } ?>
			<?php 
				}
			} ?>
		<?php endforeach;
		?>
		<?php if ($i==12) { ?>
	
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
                      <td><?php echo $GranoSoyabs; ?></td>
                      <td><?php echo $GranoSoyadolar; ?></td>
                      <td><?php echo $GranoSoyatotalbs; ?></td>
                      <td><?php echo $GranoSoyatotaldolar; ?></td>
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
                      <td><?php echo $GranoGirasolbs; ?></td>
                      <td><?php echo $GranoGirasoldolar; ?></td>
                      <td><?php echo $GranoGirasoltotalbs; ?></td>
                      <td><?php echo $GranoGirasoltotaldolar; ?></td>
              </tr>
              </table>

        </th>


     
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



</table>
<?php } ?>

</div>



