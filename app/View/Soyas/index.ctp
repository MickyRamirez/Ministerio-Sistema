<table style="weight: 100%">
    <div id="contenedorr10" style="right:20px; float: right;">
        <h3 align="right"><?php echo $this->Time->format('F jS, Y', time());?></h3>
    </div>
</table>
<div class="index form">
<?php if($soyas){ ?>
<h3>Panel de Administración de Soya</h3>
<table>
    <thead>
        <tr>
		<th><?php echo $this->Paginator->sort('username', 'Nombre de Usuario');?> </th>
		<th><?php echo $this->Paginator->sort('nombre', 'Nombre (s)');?> </th>
		<th><?php echo $this->Paginator->sort('apellido', 'Apellido (s)');?> </th>
		<th><?php echo $this->Paginator->sort('email', 'Correo Electrónico');?></th>
		<th><?php echo $this->Paginator->sort('categoria', 'Categoría');?></th>
		<th><?php echo $this->Paginator->sort('subcategoria', 'Sub-Categoría');?></th>
		<th><?php echo $this->Paginator->sort('razonsocial', 'Nombre o Razón Social');?></th>
		<th><?php echo $this->Paginator->sort('nombrecomercial', 'Nombre Comercial');?></th>
		<th><?php echo $this->Paginator->sort('nit', 'NIT');?></th>
		<th><?php echo $this->Paginator->sort('nummatricula', 'Número Matricula');?></th>
		<th><?php echo $this->Paginator->sort('subdepartamento', 'Ciudad');?></th>
		<th><?php echo $this->Paginator->sort('', 'Estado');?></th>
        </tr>
    </thead>
    <tbody> 
	<?php $count=0; ?>
	<?php foreach ($soyas as $soya): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>
		<td><?php echo $soya['Soya']['username']; ?></td>
		<td><?php echo $soya['Soya']['nombre']; ?></td>
		<td><?php echo $soya['Soya']['apellido']; ?></td>
		<td><?php echo $soya['Soya']['email']; ?></td>
		<td><?php echo $soya['Grupo']['categoria']; ?></td>
		<td><?php echo $soya['Grupo']['subcategoria']; ?></td>
		<td><?php echo $soya['Perfil']['razonsocial']; ?></td>
		<td><?php echo $soya['Perfil']['nombrecomercial']; ?></td>
		<td><?php echo $soya['Perfil']['nit']; ?></td>
		<td><?php echo $soya['Perfil']['nummatricula']; ?></td>
		<td><?php echo $soya['Perfil']['subdepartamento']; ?></td>
		<td style="text-align: center;"><?php 
			if($soya['Soya']['aprobacion']==1){
					echo 'Usuario activado';
				} else{
					echo 'Usuario no activado';
				}
				?></td>
	</tr>
        <?php endforeach; ?>
        <?php unset($soya); ?>
    </tbody>
</table>
<?php 
}else{
     echo "<div class='no-records-found'>No se encontro existencias.</div>";
}
?>

<?php
	echo "<div class='paging'>"; 
	echo $this->Paginator->prev('<< ' . __('anterior ', true), array(), null, array('class'=>'disabled'));
	echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));
	echo $this->Paginator->next(__(' siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));
	echo "</div>"

?>
</div>
<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Control de Compras",   array('action'=>'compras') ); ?></li>
</ul>

<ul>
<li><?php echo $this->Html->link( "Control de Compra y Producción",   array('action'=>'compravsproduccion') ); ?></li>
</ul>

<ul>
<li><?php echo $this->Html->link( "Control de Ventas",   array('action'=>'ventas') ); ?></li>
</ul>

<ul>
<li><?php echo $this->Html->link( "Comparaciones",   array('action'=>'comparacion') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Control Mensual",   array('action'=>'controlmensual') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Control de Almacenes",   array('action'=>'depositos') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Operaciones de Administración",   array('action'=>'operaciones') ); ?></li>
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




<div class="azucarexistencias form">
<?php
echo $this->Html->script('alertify');
echo $this->Html->css(array('alertify.core', 'alertify.default'));
 ?>

<?php foreach ($distinct_years as $var)  : ?>

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

$regimengeneral=0;
$regimenrau=0;
?>

	<?php $count=0; ?>
	<?php foreach ($soyas as $soya): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>
	


<?php foreach ($soya['SoyaProductorCompra'] as $soyaproductorcompra): ?>
			<?php 
			$year = strtotime($soyaproductorcompra['fecharegistro']);
			date("Y", $year);
			?>
			<?php if (date("Y", $year)==$var) { ?>
                                                <?php if ($soyaproductorcompra['producto']=='GRANO DE SOYA') { ?>
				<?php $GranoSoyatm=$GranoSoyatm+$soyaproductorcompra['toneladas'];?>
			<?php } ?>
				
				
		<?php } ?>
<?php endforeach;?>
		
<?php foreach ($soya['SoyaProductorDerivado'] as $soyaproductorderivado): ?>
<?php 
	$year = strtotime($soyaproductorderivado['fecharegistro']);
		
	if (date("Y", $year)==$var) { ?>
		<?php if ($soyaproductorderivado['producto']=='TORTA SOLVENTE DE SOYA') { ?>
                                    <?php $TortaSolventeSoyatm=$TortaSolventeSoyatm+$soyaproductorderivado['cantidadtm'];?>
                                <?php } ?>

                                <?php if ($soyaproductorderivado['producto']=='HARINA INTEGRAL DE SOYA') { ?>
                                    <?php $HarinaIntegralSoyatm=$HarinaIntegralSoyatm+$soyaproductorderivado['cantidadtm'];?>
                                <?php } ?>
		<?php if ($soyaproductorderivado['producto']=='CASCARILLA DE SOYA') { ?>
                                    <?php $CascarillaSoyatm=$CascarillaSoyatm+$soyaproductorderivado['cantidadtm'];?>
		<?php } ?>
                                <?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA REFINADO') { ?>
                                    <?php $AceiteRefinadoSoyatm=$AceiteRefinadoSoyatm+$soyaproductorderivado['cantidadtm'];?>
		<?php } ?>
		<?php if ($soyaproductorderivado['producto']=='ACEITE DE SOYA CRUDO') { ?>
                                    <?php $AceiteCrudoSoyatm=$AceiteCrudoSoyatm+$soyaproductorderivado['cantidadtm'];?>
		<?php } ?>
	<?php } ?>		
<?php endforeach; ?>
    <?php 
                $totalproduccion=($TortaSolventeSoyatm*0.80)+($HarinaIntegralSoyatm*0.95)+$CascarillaSoyatm+($AceiteCrudoSoyatm*0.18)+$AceiteRefinadoSoyatm;
                ?> 
                     <?php

                 if($totalproduccion>$GranoSoyatm)
                     {
                      ?>
                        <SCRIPT type="text/javascript">
                                alertify.error('LA PRODUCCIÓN DE LA OLEAGINOSA <?php echo $soya['Perfil']['razonsocial']; ?> ES MAYOR A LA COMPRA DE GRANO DE SOYA POR FAVOR REVISAR ACONTECIMIENTO EN EL AÑO <?php echo $var; ?> ');
                         </SCRIPT>
                       <?php
                     }
                 
                 
                 ?> 
           
                
                
                <?php 
                $GranoSoyatm=0;
                $TortaSolventeSoyatm=0;
                $HarinaIntegralSoyatm=0;
                $CascarillaSoyatm=0;
                $AceiteCrudoSoyatm=0;
                $AceiteRefinadoSoyatm=0;
                ?> 
		<?php endforeach; ?>
		<?php unset($soya); ?>

<?php endforeach;?>
</div>


