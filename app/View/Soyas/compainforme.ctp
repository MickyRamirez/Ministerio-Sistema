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
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'compopcion',$datos['Soya']['id']) ); ?></li>
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
       	<th><?php echo 'AÑO';?> </th>

	
			<th><?php echo 'GRANO DE SOYA DIARIO';?> </th>
			<th><?php echo 'GRANO DE SOYA MENSUAL';?> </th>
			<th><?php echo 'GRANO DE GIRASOL DIARIO';?> </th>
			<th><?php echo 'GRANO DE GIRASOL MENSUAL';?> </th>
	

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
	<?php 
	foreach ($datos['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
        <?php 
        if($soyaproductorproduccion['operacion']=='Compra Grano'){

            $year = strtotime($soyaproductorproduccion['fecharegistro']);
            if (date("m", $year)==$tar) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorproduccion['producto']=='GRANO DE SOYA') { ?>

                        <?php $GranoSoyakg1=$GranoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $GranoSoyatm1=$GranoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $GranoSoyadolar1=$GranoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $GranoSoyabs1=$GranoSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $GranoSoyatotaldolar1=$GranoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $GranoSoyatotalbs1=$GranoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                        <?php $count2++;?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='GRANO DE GIRASOL') { ?>
                        <?php $GranoGirasolkg1=$GranoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $GranoGirasoltm1=$GranoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $GranoGirasoldolar1=$GranoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $GranoGirasolbs1=$GranoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $GranoGirasoltotaldolar1=$GranoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $GranoGirasoltotalbs1=$GranoGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
                        <?php $count3++;
                        } 
                    } 
                }
            } 
	endforeach;  
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

        <th>
		<table cellspacing="5" cellpadding="2">
			<tr>
                <th><h4><strong>Cantidad (TM)</strong></h4></th>
                <th><h4><strong>Precio Dolar</strong></h4></th>
            </tr>
            <tr>
                <td><?php echo number_format($GranoSoyatm1); ?></td>
                <td><?php echo $this->Number->format($GranoSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>    
            </tr>
        </table>

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

        </th>
		

		<th>
		<table cellspacing="5" cellpadding="2">
			<tr>
                <th><h4><strong>Cantidad (TM)</strong></h4></th>
                <th><h4><strong>Precio Dolar</strong></h4></th>
            </tr>
            <tr>
                <td><?php echo number_format($GranoGirasolkg1); ?></td>
                <td><?php echo $this->Number->format($GranoGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>    
            </tr>
        </table>
		<?php 


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
       	<th><?php echo 'AÑO';?> </th>
		<th><?php echo 'GRANO DE SOYA DIARIO';?> </th>
		<th><?php echo 'GRANO DE SOYA MENSUAL';?> </th>
		<th><?php echo 'GRANO DE GIRASOL DIARIO';?> </th>
		<th><?php echo 'GRANO DE GIRASOL MENSUAL';?> </th>
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
	foreach ($datos['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
        <?php 
        if($soyaproductorproduccion['operacion']=='Compra Grano'){

            $year = strtotime($soyaproductorproduccion['fecharegistro']);
            if (date("m", $year)==$tar) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorproduccion['producto']=='GRANO DE SOYA') { ?>

                        <?php $GranoSoyakg1=$GranoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $GranoSoyatm1=$GranoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $GranoSoyadolar1=$GranoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $GranoSoyabs1=$GranoSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $GranoSoyatotaldolar1=$GranoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $GranoSoyatotalbs1=$GranoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                        <?php $count2++;?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='GRANO DE GIRASOL') { ?>
                        <?php $GranoGirasolkg1=$GranoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $GranoGirasoltm1=$GranoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $GranoGirasoldolar1=$GranoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $GranoGirasolbs1=$GranoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $GranoGirasoltotaldolar1=$GranoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $GranoGirasoltotalbs1=$GranoGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
                        <?php $count3++;
                        } 
                    } 
                }
            } 
	endforeach;  
            ?>	
		
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

        <th>
		<table cellspacing="5" cellpadding="2">
			<tr>
                <th><h4><strong>Cantidad (TM)</strong></h4></th>
                <th><h4><strong>Precio Dolar</strong></h4></th>
            </tr>
            <tr>
                <td><?php echo number_format($GranoSoyatm1); ?></td>
                <td><?php echo $this->Number->format($GranoSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>    
            </tr>
        </table>

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

        </th>
		

		<th>
		<table cellspacing="5" cellpadding="2">
			<tr>
                <th><h4><strong>Cantidad (TM)</strong></h4></th>
                <th><h4><strong>Precio Dolar</strong></h4></th>
            </tr>
            <tr>
                <td><?php echo number_format($GranoGirasolkg1); ?></td>
                <td><?php echo $this->Number->format($GranoGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>    
            </tr>
        </table>
		<?php 


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
       	<th><?php echo 'AÑO';?> </th>

	
			<th><?php echo 'GRANO DE SOYA DIARIO';?> </th>
			<th><?php echo 'GRANO DE SOYA MENSUAL';?> </th>
			<th><?php echo 'GRANO DE GIRASOL DIARIO';?> </th>
			<th><?php echo 'GRANO DE GIRASOL MENSUAL';?> </th>
	

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

	<?php foreach ($datos['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>
        <?php 
        if($soyaproductorproduccion['operacion']=='Compra Grano'){
            $year = strtotime($soyaproductorproduccion['fecharegistro']);
            if (date("m", $year)==$tar) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorproduccion['producto']=='GRANO DE SOYA') { ?>
                        <?php $GranoSoyakg1=$GranoSoyakg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $GranoSoyatm1=$GranoSoyatm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $GranoSoyadolar1=$GranoSoyadolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $GranoSoyabs1=$GranoSoyabs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $GranoSoyatotaldolar1=$GranoSoyatotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $GranoSoyatotalbs1=$GranoSoyatotalbs1+$soyaproductorproduccion['totalbs'];?>
                        <?php $count2++;?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='GRANO DE GIRASOL') { ?>
                        <?php $GranoGirasolkg1=$GranoGirasolkg1+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $GranoGirasoltm1=$GranoGirasoltm1+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $GranoGirasoldolar1=$GranoGirasoldolar1+$soyaproductorproduccion['preciodolar'];?>
                        <?php $GranoGirasolbs1=$GranoGirasolbs1+$soyaproductorproduccion['preciobs'];?>
                        <?php $GranoGirasoltotaldolar1=$GranoGirasoltotaldolar1+$soyaproductorproduccion['totaldolar'];?>
                        <?php $GranoGirasoltotalbs1=$GranoGirasoltotalbs1+$soyaproductorproduccion['totalbs'];?>
                        <?php $count3++;
                        } 
                    } 
                }
            } endforeach;  
            ?>	
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

        </th>

        <th>
		<table cellspacing="5" cellpadding="2">
			<tr>
                <th><h4><strong>Cantidad (TM)</strong></h4></th>
                <th><h4><strong>Precio Dolar</strong></h4></th>
            </tr>
            <tr>
                <td><?php echo number_format($GranoSoyatm1); ?></td>
                <td><?php echo $this->Number->format($GranoSoyatotaldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>    
            </tr>
        </table>

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

        </th>
		

		<th>
		<table cellspacing="5" cellpadding="2">
			<tr>
                <th><h4><strong>Cantidad (TM)</strong></h4></th>
                <th><h4><strong>Precio Dolar</strong></h4></th>
            </tr>
            <tr>
                <td><?php echo number_format($GranoGirasolkg1); ?></td>
                <td><?php echo $this->Number->format($GranoGirasoldolar1, array(
						    'places' => 2,
						    'before' => '',
						    'decimals' => '.',
						    'thousands' => ','
						));?></td>    
            </tr>
        </table>
		<?php 


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
           ?>
        </th>
<?php } ?>
		<?php endforeach; ?>
</table>

</div>
	<? endif; ?>

	<? endforeach; ?>

	<div class="anual form">
	<?php echo $this->Html->link( "Gráfica Combinada Torta - Columna", array('action'=>'combinationcompra', $datos['Soya']['id']), array('class' => 'large yellow awesome')); ?>
	<?php echo $this->Html->link( "Gráfica Comparativa Columnas", array('action'=>'columnacompra', $datos['Soya']['id']), array('class' => 'large orange awesome')); ?>
	<?php echo $this->Html->link( "Gráfica Comparativa Área", array('action'=>'areacompra', $datos['Soya']['id']), array('class' => 'large red awesome')); ?>

	</div>

</div>
	
<? endforeach; ?>
