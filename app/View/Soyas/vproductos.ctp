 
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
<li><?php echo $this->Html->link("Reporte", array('action'=>'reportevproducto', $this->data['Soya']['id'])); ?></li>
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
<h3>Panel de Ventas <br/> 
	Productores de Oleaginosas por Rubro</h3>
<?php

$HarinaIntegralAviculturakg=0;
$HarinaIntegralAviculturatm=0;
$HarinaIntegralAviculturadolar=0;
$HarinaIntegralAviculturabs=0;
$HarinaIntegralAviculturatotaldolar=0;
$HarinaIntegralAviculturatotalbs=0;


$HarinaIntegralLecherakg=0;
$HarinaIntegralLecheratm=0;
$HarinaIntegralLecheradolar=0;
$HarinaIntegralLecherabs=0;
$HarinaIntegralLecheratotaldolar=0;
$HarinaIntegralLecheratotalbs=0;


$HarinaIntegralPorcinokg=0;
$HarinaIntegralPorcinotm=0;
$HarinaIntegralPorcinodolar=0;
$HarinaIntegralPorcinobs=0;
$HarinaIntegralPorcinototaldolar=0;
$HarinaIntegralPorcinototalbs=0;


?>


<?php foreach ($distinct_years as $var)  { ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
       	<th><?php echo 'MES';?> </th>
	
		<th><?php echo 'HARINA INTEGRAL DE SOYA AVICULTURA';?> </th>
		<th><?php echo 'HARINA INTEGRAL DE SOYA LECHERIA';?> </th>
		<th><?php echo 'HARINA INTEGRAL DE SOYA PORCINOCULTURA';?> </th>

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
		<th>
		<?php foreach ($this->data['SoyaProductorDerivado'] as $soyaproductorderivado): ?>
			<?php 

			$year = strtotime($soyaproductorderivado['fecharegistro']);

			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					<?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
						<?php if ($soyaproductorderivado['rubro']=='Avicola') { ?>
							<?php $HarinaIntegralAviculturakg=$HarinaIntegralAviculturakg+$soyaproductorderivado['cantidadkg'];?>
							<?php $HarinaIntegralAviculturatm=$HarinaIntegralAviculturatm+$soyaproductorderivado['cantidadtm'];?>
							<?php $HarinaIntegralAviculturadolar=$HarinaIntegralAviculturadolar+$soyaproductorderivado['preciodolar'];?>
							<?php $HarinaIntegralAviculturabs=$HarinaIntegralAviculturabs+$soyaproductorderivado['preciobs'];?>
							<?php $HarinaIntegralAviculturatotaldolar=$HarinaIntegralAviculturatotaldolar+$soyaproductorderivado['totaldolar'];?>
							<?php $HarinaIntegralAviculturatotalbs=$HarinaIntegralAviculturatotalbs+$soyaproductorderivado['totalbs'];?>
							<?php } ?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
						<?php if ($soyaproductorderivado['rubro']=='Lechera') { ?>
							<?php $HarinaIntegralLecherakg=$HarinaIntegralLecherakg+$soyaproductorderivado['cantidadkg'];?>
							<?php $HarinaIntegralLecheratm=$HarinaIntegralLecheratm+$soyaproductorderivado['cantidadtm'];?>
							<?php $HarinaIntegralLecheradolar=$HarinaIntegralLecheradolar+$soyaproductorderivado['preciodolar'];?>
							<?php $HarinaIntegralLecherabs=$HarinaIntegralLecherabs+$soyaproductorderivado['preciobs'];?>
							<?php $HarinaIntegralLecheratotaldolar=$HarinaIntegralLecheratotaldolar+$soyaproductorderivado['totaldolar'];?>
							<?php $HarinaIntegralLecheratotalbs=$HarinaIntegralLecheratotalbs+$soyaproductorderivado['totalbs'];?>
							<?php } ?>
					<?php } ?>
					<?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
						<?php if ($soyaproductorderivado['rubro']=='Porcinos') { ?>
							<?php $HarinaIntegralPorcinokg=$HarinaIntegralPorcinokg+$soyaproductorderivado['cantidadkg'];?>
							<?php $HarinaIntegralPorcinotm=$HarinaIntegralPorcinotm+$soyaproductorderivado['cantidadtm'];?>
							<?php $HarinaIntegralPorcinodolar=$HarinaIntegralPorcinodolar+$soyaproductorderivado['preciodolar'];?>
							<?php $HarinaIntegralPorcinobs=$HarinaIntegralPorcinobs+$soyaproductorderivado['preciobs'];?>
							<?php $HarinaIntegralPorcinototaldolar=$HarinaIntegralPorcinototaldolar+$soyaproductorderivado['totaldolar'];?>
							<?php $HarinaIntegralPorcinototalbs=$HarinaIntegralPorcinototalbs+$soyaproductorderivado['totalbs'];?>
							<?php } ?>
					<?php } ?>
				<?php } ?>
			<?php } ?>
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
                      <td><?php echo number_format($HarinaIntegralAviculturakg); ?></td>
                      <td><?php echo number_format($HarinaIntegralAviculturatm); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralAviculturabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralAviculturadolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
       				  <td><?php echo $this->Number->format($HarinaIntegralAviculturatotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralAviculturatotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$HarinaIntegralAviculturakg=0;
			$HarinaIntegralAviculturatm=0;
			$HarinaIntegralAviculturadolar=0;
			$HarinaIntegralAviculturabs=0;
			$HarinaIntegralAviculturatotaldolar=0;
			$HarinaIntegralAviculturatotalbs=0;
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
                      <td><?php echo number_format($HarinaIntegralLecherakg); ?></td>
                      <td><?php echo number_format($HarinaIntegralLecheratm); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralLecherabs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralLecheradolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
     				  <td><?php echo $this->Number->format($HarinaIntegralLecheratotalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralLecheratotaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$HarinaIntegralLecherakg=0;
			$HarinaIntegralLecheratm=0;
			$HarinaIntegralLecheradolar=0;
			$HarinaIntegralLecherabs=0;
			$HarinaIntegralLecheratotaldolar=0;
			$HarinaIntegralLecheratotalbs=0;
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
                      <td><?php echo number_format($HarinaIntegralPorcinokg); ?></td>
                      <td><?php echo number_format($HarinaIntegralPorcinotm); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralPorcinobs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralPorcinodolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
						<td><?php echo $this->Number->format($HarinaIntegralPorcinototalbs, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      <td><?php echo $this->Number->format($HarinaIntegralPorcinototaldolar, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
                      
              </tr>
              </table>
		<?php 
			$HarinaIntegralPorcinokg=0;
			$HarinaIntegralPorcinotm=0;
			$HarinaIntegralPorcinodolar=0;
			$HarinaIntegralPorcinobs=0;
			$HarinaIntegralPorcinototaldolar=0;
			$HarinaIntegralPorcinototalbs=0;
		?>
		</th>
			
		</tr>
	<?php }?>
</table>
<?php } ?>

</div>



