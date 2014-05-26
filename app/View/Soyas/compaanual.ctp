
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
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'compacompra', $this->data['Soya']['id']) ); ?></li>
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
<h3>Panel de Compras Mensuales de Productores de Oleaginosas</h3>
<?php



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

$count=0;
$count1=0;
$count2=0;
$count3=0;
?>


<?php foreach ($distinct_years as $var)  { ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
     <tr>
       	<td><?php echo '';?> </td>

		<th colspan="2"  style="text-align: center;"><?php echo 'GRANO DE SOYA';?> </th>
		<th colspan="2"  style="text-align: center;"><?php echo 'GRANO DE GIRASOL';?> </th>

		</tr>

        <tr>
       	<th><?php echo 'Año';?> </th>

		<th style="text-align: center;"><?php echo 'DIARIO';?> </th>
		<th style="text-align: center;"><?php echo 'MENSUAL';?> </th>
		<th style="text-align: center;"><?php echo 'DIARIO';?> </th>
		<th style="text-align: center;"><?php echo 'MENSUAL';?> </th>
		</tr>
    </thead>

	<?php for ($i=1; $i <= 12 ; $i++) { ?>
		<tr><?php 
		if ($i==12) { echo '<th>Año '.$var.'</th>'; }
		?>

		<?php foreach ($this->data['SoyaProductorCompra'] as $soyaproductorcompra): ?>
			<?php 
			$year = strtotime($soyaproductorcompra['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					<?php if ($soyaproductorcompra['producto']=='GRANO DE SOYA') { ?>
						<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoSoyadolar=$GranoSoyadolar+$soyaproductorcompra['preciodolar'];?>
						<?php $GranoSoyatotaldolar=$GranoSoyatotaldolar+$soyaproductorcompra['total'];?>
						<?php $count++;?>
					<?php } ?>
					<?php if ($soyaproductorcompra['producto']=='GRANO DE GIRASOL') { ?>	
						<?php $GranoGirasoltm=$GranoGirasoltm+$soyaproductorcompra['toneladas'];?>
						<?php $GranoGirasoldolar=$GranoGirasoldolar+$soyaproductorcompra['preciodolar'];?>
						<?php $GranoGirasoltotaldolar=$GranoGirasoltotaldolar+$soyaproductorcompra['total'];?>
						<?php $count1++;?>
					<?php } ?>
					
				<?php } ?>
			<?php } ?>
		<?php endforeach;?>
		<?php foreach ($this->data['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
		<?php 
		if($soyaproductorproduccion['operacion']=='Compra Grano'){
			$year = strtotime($soyaproductorproduccion['fecharegistro']);
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					<?php if ($soyaproductorproduccion['producto']=='GRANO DE SOYA') { ?>
						<?php $GranoSoyakg1=$GranoSoyakg+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoSoyatm1=$GranoSoyatm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoSoyadolar1=$GranoSoyadolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoSoyabs1=$GranoSoyabs+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoSoyatotaldolar1=$GranoSoyatotaldolar+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoSoyatotalbs1=$GranoSoyatotalbs+$soyaproductorproduccion['totalbs'];?>
						<?php $count2++;?>
					<?php } ?>
					<?php if ($soyaproductorproduccion['producto']=='GRANO DE GIRASOL') { ?>
						<?php $GranoGirasolkg1=$GranoGirasolkg+$soyaproductorproduccion['cantidadkg'];?>
						<?php $GranoGirasoltm1=$GranoGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
						<?php $GranoGirasoldolar1=$GranoGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
						<?php $GranoGirasolbs1=$GranoGirasolbs+$soyaproductorproduccion['preciobs'];?>
						<?php $GranoGirasoltotaldolar1=$GranoGirasoltotaldolar+$soyaproductorproduccion['totaldolar'];?>
						<?php $GranoGirasoltotalbs1=$GranoGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
						<?php $count3++;?>
					<?php } ?>
				<?php } ?>
			<?php 
				}
			} ?>
		<?php endforeach;		?>
		<?php 
		if ($i==12) { 
		?>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                <th><h4><strong>Cantidad (TM)</strong></h4></th>
                <th><h4><strong>Precio Dolar</strong></h4></th>
                <th><h4><strong>Total Vendido</strong></h4></th>
              </tr>
              <tr>
                <td><?php echo number_format($GranoSoyatm); ?></td>
                <td><?php if($count != 0){ echo 
                	$this->Number->format((($GranoSoyadolar/$count)), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else{ echo '0';} ?></td>
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
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Vendido</strong></h4></th>
              </tr>
              <tr>
                <td><?php echo number_format($GranoSoyatm1); ?></td>
                <td><?php if($count2 != 0){ echo 
                	$this->Number->format(($GranoSoyadolar1/$count2), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else{ echo '0';} ?></td>
                <td><?php echo $GranoSoyatotaldolar1; ?></td>
              </tr>
              </table>

        </th>

        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Vendido</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($GranoGirasoltm); ?></td>
                      <td><?php if($count1 != 0){ echo 
                      	$this->Number->format(($GranoGirasoldolar/$count1), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else{ echo '0';} ?></td>
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
                      <th><h4><strong>Cantidad (TM)</strong></h4></th>
                      <th><h4><strong>Precio Dolar</strong></h4></th>
                      <th><h4><strong>Total Vendido</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo number_format($GranoGirasoltm1); ?></td>
                      <td><?php if($count3 != 0){ echo 
                      	$this->Number->format(($GranoGirasoldolar1/$count3), array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); }else{ echo '0'; }?></td>
                      <td><?php echo $this->Number->format($GranoGirasoltotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						)); ?></td>
              </tr>
              </table>
        </th>
<?php 
			$GranoSoyakg=0;
			$GranoSoyatm=0;
			$GranoSoyadolar=0;
			$GranoSoyabs=0;
			$GranoSoyatotaldolar=0;
			$GranoSoyatotalbs=0;

			$GranoSoyakg1=0;
			$GranoSoyatm1=0;
			$GranoSoyadolar1=0;
			$GranoSoyabs1=0;
			$GranoSoyatotaldolar1=0;
			$GranoSoyatotalbs1=0;

?>
<?php 
			$GranoGirasolkg=0;
			$GranoGirasoltm=0;
			$GranoGirasoldolar=0;
			$GranoGirasolbs=0;
			$GranoGirasoltotaldolar=0;
			$GranoGirasoltotalbs=0;

			$GranoGirasolkg1=0;
			$GranoGirasoltm1=0;
			$GranoGirasoldolar1=0;
			$GranoGirasolbs1=0;
			$GranoGirasoltotaldolar1=0;
			$GranoGirasoltotalbs1=0;

			$count=0;
			$count1=0;
			$count2=0;
			$count3=0;
			}
?>
		</tr>
	<?php }?>
</table>
<?php } ?>	
	
	
	<?php 
	echo $this->Html->link("Generar graficas", array('controller' => 'yourcontroller','action'=> 'youraction'), array( 'class' => 'button'))
	?>
	
</div>



