
<div class="azucarexistencias form">
<?php
echo $this->Html->script('alertify');
echo $this->Html->css(array('alertify.core', 'alertify.default'));
 ?>
<h3>Panel de Alarmas <br/>
    Compra de Grano de Soya y de la Producción de OLeaginosas</h3>
<?php foreach ($distinct_years as $var)  : ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>


<table>
    <thead>
        <tr>
		<th><?php echo $this->Paginator->sort('razonsocial', 'Nombre o Razón Social');?></th>
		<th><?php echo $this->Paginator->sort('nombrecomercial', 'Nombre Comercial');?></th>
		<th><?php echo $this->Paginator->sort('producto', 'Grano de Soya Comprado Total');?></th>
		<th><?php echo $this->Paginator->sort('producto', 'Torta Solvente de Soya');?></th>
		<th><?php echo $this->Paginator->sort('producto', 'Harina Integral de Soya');?></th>
		<th><?php echo $this->Paginator->sort('producto', 'Cascarilla de Soya');?></th>
		<th><?php echo $this->Paginator->sort('producto', 'Aceite Refinado de Soya');?></th>
		<th><?php echo $this->Paginator->sort('producto', 'Aceite de Soya Crudo');?></th>
		<th><?php echo $this->Paginator->sort('producto', 'Total de Derivados');?></th>
		<th width="700"><?php echo $this->Paginator->sort('producto', 'Comparación');?></th>
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

$regimengeneral=0;
$regimenrau=0;
?>

	<?php $count=0; ?>
	<?php foreach ($soyas as $soya): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>
	
		<th><?php echo $soya['Perfil']['razonsocial']; ?></th>
		<th><?php echo $soya['Perfil']['nombrecomercial']; ?></th>

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
                <th><?php echo number_format($GranoSoyatm);?> </th>
                <th><?php echo $this->Number->format(($TortaSolventeSoyatm*0.80), array(
                'places' => 2,
                'before' => '',
                'decimals' => '.',
                'thousands' => ','
            ));?> </th>
                <th><?php echo $this->Number->format(($HarinaIntegralSoyatm*0.95), array(
                'places' => 2,
                'before' => '',
                'decimals' => '.',
                'thousands' => ','
            ));?> </th>
                <th><?php echo number_format($CascarillaSoyatm);?> </th>
                <th><?php echo $this->Number->format(($AceiteCrudoSoyatm*0.18), array(
                'places' => 2,
                'before' => '',
                'decimals' => '.',
                'thousands' => ','
            ));?> </th>
                <th><?php echo number_format($AceiteRefinadoSoyatm);?> </th>
                <th><?php 
                $totalproduccion=($TortaSolventeSoyatm*0.80)+($HarinaIntegralSoyatm*0.95)+$CascarillaSoyatm+($AceiteCrudoSoyatm*0.18)+$AceiteRefinadoSoyatm;
                echo $this->Number->format($totalproduccion, array(
                'places' => 2,
                'before' => '',
                'decimals' => '.',
                'thousands' => ','
            ));?> </th>
                 <th>
                     
                     <?php
                        echo 'GRANO COMPRADO: <br/>'.$GranoSoyatm.' TM <br/>';
                        echo 'PRODUCCIÓN EMPRESA OLEAGINOSA: <br/>'.$totalproduccion.' TM';
                 if($totalproduccion>$GranoSoyatm)
                     {
                      ?>
                        <SCRIPT type="text/javascript">
                                alertify.error('LA PRODUCCIÓN DE LA OLEAGINOSA <?php echo $soya['Perfil']['razonsocial']; ?> ES MAYOR A LA COMPRA DE GRANO DE SOYA POR FAVOR REVISAR ACONTECIMIENTO EN EL AÑO <?php echo $var; ?> ');
                         </SCRIPT>
                       <?php
                     }
                 
                 ?> </th>
           
                
                
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
	</tbody>
</table>
<?php endforeach;?>
</div>






<div class="actions">
<h3>Acciones</h3>

<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'compravsproduccion') ); ?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Reporte",   array('action'=>'reportealarmasoya') ); ?></li>
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
