<?php ini_set('memory_limit', '-1'); ?>
<div class="datos form">
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
<div class="actions">
<h3>Acciones</h3>
<ul>
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'produccion') ); ?></li>
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
<div class="cam form">
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
<h3>Panel de Producción Mensual de Productores de Oleaginosas</h3>
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



<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
    <th><?php echo 'MES';?> </th>
        <?php foreach($dato['Productos'] as $pro): ?>
        <?php if($pro == 1): ?>
            <th><?php echo 'TORTA SOLVENTE DE SOYA';?> </th>
        <?php endif; ?>
        <?php if($pro == 2): ?>
            <th><?php echo 'HARINA INTEGRAL DE SOYA';?> </th>
        <?php endif; ?>
        <?php if($pro == 3): ?>
            <th><?php echo 'CASCARILLA DE SOYA';?> </th>
        <?php endif; ?>
        <?php if($pro == 4): ?>
            <th><?php echo 'ACEITE DE SOYA REFINADO';?> </th>
        <?php endif; ?>
        <?php if($pro == 5): ?>
            <th><?php echo 'ACEITE DE SOYA CRUDO';?> </th>
        <?php endif; ?>
        <?php if($pro == 6): ?>
            <th><?php echo 'TORTA SOLVENTE DE GIRASOL';?> </th>
        <?php endif; ?>
        <?php if($pro == 7): ?>
            <th><?php echo 'HARINA INTEGRAL DE GIRASOL';?> </th>
        <?php endif; ?>
        <?php if($pro == 8): ?>
            <th><?php echo 'CASCARILLA DE GIRASOL';?> </th>
        <?php endif; ?>
        <?php if($pro == 9): ?>
            <th><?php echo 'ACEITE DE GIRASOL REFINADO';?> </th>
        <?php endif; ?>
        <?php if($pro == 10): ?>
            <th><?php echo 'ACEITE DE GIRASOL CRUDO';?> </th>
        <?php endif; ?>
    <?php endforeach; ?>
        </tr>
    </thead>

    <?php foreach($dato['Meses'] as $mes) { ?>
        <tr>
        <th>
        <?php foreach($meses as $tar => $das): ?>
        <?php 
            if ($tar==$mes) { echo $das; }
         ?>
        <?php endforeach; ?>
        </th>

        <?php 
    foreach ($datos['SoyaProductorProduccion'] as $soyaproductorproduccion): ?>

            <?php 
        if($soyaproductorproduccion['operacion']=='Venta Local'){
            $year = strtotime($soyaproductorproduccion['fecharegistro']);
            
            if (date("m", $year)==$mes) { ?>
                <?php if (date("Y", $year)==$var) { ?>
                    <?php if ($soyaproductorproduccion['producto']=='TORTA SOLVENTE DE SOYA') { ?>
                        
                        <?php $TortaSolventeSoyakg=$TortaSolventeSoyakg+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $TortaSolventeSoyatm=$TortaSolventeSoyatm+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $TortaSolventeSoyadolar=$TortaSolventeSoyadolar+$soyaproductorproduccion['preciodolar'];?>
                        <?php $TortaSolventeSoyabs=$TortaSolventeSoyabs+$soyaproductorproduccion['preciobs'];?>
                        <?php $TortaSolventeSoyatotaldolar=$TortaSolventeSoyatotaldolar+$soyaproductorproduccion['totaldolar'];?>
                        <?php $TortaSolventeSoyatotalbs=$TortaSolventeSoyatotalbs+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='TORTA SOLVENTE DE GIRASOL') { ?>
                        
                        <?php $TortaSolventeGirasolkg=$TortaSolventeGirasolkg+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $TortaSolventeGirasoltm=$TortaSolventeGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $TortaSolventeGirasoldolar=$TortaSolventeGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
                        <?php $TortaSolventeGirasolbs=$TortaSolventeGirasolbs+$soyaproductorproduccion['preciobs'];?>
                        <?php $TortaSolventeGirasoltotaldolar=$TortaSolventeGirasoltotaldolar+$soyaproductorproduccion['totaldolar'];?>
                        <?php $TortaSolventeGirasoltotalbs=$TortaSolventeGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='HARINA INTEGRAL DE SOYA') { ?>
                        
                        <?php $HarinaIntegralSoyakg=$HarinaIntegralSoyakg+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $HarinaIntegralSoyatm=$HarinaIntegralSoyatm+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $HarinaIntegralSoyadolar=$HarinaIntegralSoyadolar+$soyaproductorproduccion['preciodolar'];?>
                        <?php $HarinaIntegralSoyabs=$HarinaIntegralSoyabs+$soyaproductorproduccion['preciobs'];?>
                        <?php $HarinaIntegralSoyatotaldolar=$TortaSolventeSoyatotaldolar+$soyaproductorproduccion['totaldolar'];?>
                        <?php $HarinaIntegralSoyatotalbs=$TortaSolventeGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='HARINA INTEGRAL DE GIRASOL') { ?>
                        
                        <?php $HarinaIntegralGirasolkg=$HarinaIntegralGirasolkg+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $HarinaIntegralGirasoltm=$HarinaIntegralGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $HarinaIntegralGirasoldolar=$HarinaIntegralGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
                        <?php $HarinaIntegralGirasolbs=$HarinaIntegralGirasolbs+$soyaproductorproduccion['preciobs'];?>
                        <?php $HarinaIntegralGirasoltotaldolar=$HarinaIntegralGirasoltotaldolar+$soyaproductorproduccion['totaldolar'];?>
                        <?php $HarinaIntegralGirasoltotalbs=$HarinaIntegralGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='CASCARILLA DE SOYA') { ?>
                        
                        <?php $CascarillaSoyakg=$CascarillaSoyakg+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $CascarillaSoyatm=$CascarillaSoyatm+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $CascarillaSoyadolar=$CascarillaSoyadolar+$soyaproductorproduccion['preciodolar'];?>
                        <?php $CascarillaSoyabs=$CascarillaSoyabs+$soyaproductorproduccion['preciobs'];?>
                        <?php $CascarillaSoyatotaldolar=$CascarillaSoyatotaldolar+$soyaproductorproduccion['totaldolar'];?>
                        <?php $CascarillaSoyatotalbs=$CascarillaSoyatotalbs+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='CASCARILLA DE GIRASOL') { ?>
                        
                        <?php $CascarillaGirasolkg=$CascarillaGirasolkg+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $CascarillaGirasoltm=$CascarillaGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $CascarillaGirasoldolar=$CascarillaGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
                        <?php $CascarillaGirasolbs=$CascarillaGirasolbs+$soyaproductorproduccion['preciobs'];?>
                        <?php $CascarillaGirasoltotaldolar=$CascarillaGirasoltotaldolar+$soyaproductorproduccion['totaldolar'];?>
                        <?php $CascarillaGirasoltotalbs=$CascarillaGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
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
                    <?php if ($soyaproductorproduccion['producto']=='ACEITE DE SOYA REFINADO') { ?>
                    
                        <?php $AceiteRefinadoSoyakg=$AceiteRefinadoSoyakg+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $AceiteRefinadoSoyatm=$AceiteRefinadoSoyatm+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $AceiteRefinadoSoyadolar=$AceiteRefinadoSoyadolar+$soyaproductorproduccion['preciodolar'];?>
                        <?php $AceiteRefinadoSoyabs=$AceiteRefinadoSoyabs+$soyaproductorproduccion['preciobs'];?>
                        <?php $AceiteRefinadoSoyatotaldolar=$AceiteRefinadoSoyatotaldolar+$soyaproductorproduccion['totaldolar'];?>
                        <?php $AceiteRefinadoSoyatotalbs=$AceiteRefinadoSoyatotalbs+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='ACEITE DE SOYA CRUDO') { ?>
                        
                        <?php $AceiteCrudoSoyakg=$AceiteCrudoSoyakg+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $AceiteCrudoSoyatm=$AceiteCrudoSoyatm+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $AceiteCrudoSoyadolar=$AceiteCrudoSoyadolar+$soyaproductorproduccion['preciodolar'];?>
                        <?php $AceiteCrudoSoyabs=$AceiteCrudoSoyabs+$soyaproductorproduccion['preciobs'];?>
                        <?php $AceiteCrudoSoyatotaldolar=$AceiteCrudoSoyatotaldolar+$soyaproductorproduccion['totaldolar'];?>
                        <?php $AceiteCrudoSoyatotalbs=$AceiteCrudoSoyatotalbs+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='ACEITE DE GIRASOL REFINADO') { ?>
                    
                        <?php $AceiteRefinadoGirasolkg=$AceiteRefinadoGirasolkg+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $AceiteRefinadoGirasoltm=$AceiteRefinadoGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $AceiteRefinadoGirasoldolar=$AceiteRefinadoGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
                        <?php $AceiteRefinadoGirasolbs=$AceiteRefinadoGirasolbs+$soyaproductorproduccion['preciobs'];?>
                        <?php $AceiteRefinadoGirasoltotaldolar=$AceiteRefinadoGirasoltotaldolar+$soyaproductorproduccion['totaldolar'];?>
                        <?php $AceiteRefinadoGirasoltotalbs=$AceiteRefinadoGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
                    <?php } ?>
                    <?php if ($soyaproductorproduccion['producto']=='ACEITE DE GIRASOL CRUDO') { ?>
                        
                        <?php $AceiteCrudoGirasolkg=$AceiteCrudoGirasolkg+$soyaproductorproduccion['cantidadkg'];?>
                        <?php $AceiteCrudoGirasoltm=$AceiteCrudoGirasoltm+$soyaproductorproduccion['cantidadtm'];?>
                        <?php $AceiteCrudoGirasoldolar=$AceiteCrudoGirasoldolar+$soyaproductorproduccion['preciodolar'];?>
                        <?php $AceiteCrudoGirasolbs=$AceiteCrudoGirasolbs+$soyaproductorproduccion['preciobs'];?>
                        <?php $AceiteCrudoGirasoltotaldolar=$AceiteCrudoGirasoltotaldolar+$soyaproductorproduccion['totaldolar'];?>
                        <?php $AceiteCrudoGirasoltotalbs=$AceiteCrudoGirasoltotalbs+$soyaproductorproduccion['totalbs'];?>
                        
                    <?php } ?>
                <?php } ?>
            <?php 
                }
            } ?>
        <?php endforeach;
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
                      <td><?php echo $TortaSolventeSoyakg; ?></td>
                      <td><?php echo $TortaSolventeSoyatm; ?></td>
                      <td><?php echo $TortaSolventeSoyabs; ?></td>
                      <td><?php echo $TortaSolventeSoyadolar; ?></td>
                      <td><?php echo $TortaSolventeSoyatotalbs; ?></td>
                      <td><?php echo $TortaSolventeSoyatotaldolar; ?></td>
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
                      <td><?php echo $HarinaIntegralSoyakg; ?></td>
                      <td><?php echo $HarinaIntegralSoyatm; ?></td>
                      <td><?php echo $HarinaIntegralSoyabs; ?></td>
                      <td><?php echo $HarinaIntegralSoyadolar; ?></td>
                      <td><?php echo $HarinaIntegralSoyatotalbs; ?></td>
                      <td><?php echo $HarinaIntegralSoyatotaldolar; ?></td>
                      
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
                      <td><?php echo $CascarillaSoyakg; ?></td>
                      <td><?php echo $CascarillaSoyatm; ?></td>
                      <td><?php echo $CascarillaSoyabs; ?></td>
                      <td><?php echo $CascarillaSoyadolar; ?></td> 
                      <td><?php echo $CascarillaSoyatotalbs; ?></td>                     
                      <td><?php echo $CascarillaSoyatotaldolar; ?></td>
                      
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

                    <th><h4><strong>Cantidad en Kilogramos</strong></h4></th>
                    <th><h4><strong>Cantidad en (TM)</strong></h4></th>
                    <th><h4><strong>Precio en Bs</strong></h4></th>
                    <th><h4><strong>Precio en Dolar ($us)</strong></h4></th>
                    <th><h4><strong>Total en Bs</strong></h4></th>
                    <th><h4><strong>Total en Dolares</strong></h4></th>
              </tr>
              <tr>
                      <td><?php echo $AceiteRefinadoSoyakg; ?></td>
                      <td><?php echo $AceiteRefinadoSoyatm; ?></td>
                      <td><?php echo $AceiteRefinadoSoyabs; ?></td>
                      <td><?php echo $AceiteRefinadoSoyadolar; ?></td>  
                      <td><?php echo $AceiteRefinadoSoyatotalbs; ?></td>                    
                      <td><?php echo $AceiteRefinadoSoyatotaldolar; ?></td>
                      
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
                      <td><?php echo $AceiteCrudoSoyakg; ?></td>
                      <td><?php echo $AceiteCrudoSoyatm; ?></td>
                      <td><?php echo $AceiteCrudoSoyabs; ?></td>
                      <td><?php echo $AceiteCrudoSoyadolar; ?></td>
                      <td><?php echo $AceiteCrudoSoyatotalbs; ?></td>                     
                      <td><?php echo $AceiteCrudoSoyatotaldolar; ?></td>
                      
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
                      <td><?php echo $TortaSolventeGirasolkg; ?></td>
                      <td><?php echo $TortaSolventeGirasoltm; ?></td>
                      <td><?php echo $TortaSolventeGirasolbs; ?></td>
                      <td><?php echo $TortaSolventeGirasoldolar; ?></td>                      
                      <td><?php echo $TortaSolventeGirasoltotalbs; ?></td>
                      <td><?php echo $TortaSolventeGirasoltotaldolar; ?></td>
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
                      <td><?php echo $HarinaIntegralGirasolkg; ?></td>
                      <td><?php echo $HarinaIntegralGirasoltm; ?></td>
                      <td><?php echo $HarinaIntegralGirasolbs; ?></td>
                      <td><?php echo $HarinaIntegralGirasoldolar; ?></td>
                      <td><?php echo $HarinaIntegralGirasoltotalbs; ?></td>
                      <td><?php echo $HarinaIntegralGirasoltotaldolar; ?></td>
                      
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
                      <td><?php echo $CascarillaGirasolkg; ?></td>
                      <td><?php echo $CascarillaGirasoltm; ?></td>
                      <td><?php echo $CascarillaGirasolbs; ?></td>
                      <td><?php echo $CascarillaGirasoldolar; ?></td>
                      <td><?php echo $CascarillaGirasoltotalbs; ?></td>                      
                      <td><?php echo $CascarillaGirasoltotaldolar; ?></td>
                      
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
                      <td><?php echo $AceiteRefinadoGirasolkg; ?></td>
                      <td><?php echo $AceiteRefinadoGirasoltm; ?></td>
                      <td><?php echo $AceiteRefinadoGirasolbs; ?></td>
                      <td><?php echo $AceiteRefinadoGirasoldolar; ?></td>
                      <td><?php echo $AceiteRefinadoGirasoltotalbs; ?></td>
                      <td><?php echo $AceiteRefinadoGirasoltotaldolar; ?></td>
                      
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
                      <td><?php echo $AceiteCrudoGirasolkg; ?></td>
                      <td><?php echo $AceiteCrudoGirasoltm; ?></td>
                      <td><?php echo $AceiteCrudoGirasolbs; ?></td>
                      <td><?php echo $AceiteCrudoGirasoldolar; ?></td>
                      <td><?php echo $AceiteCrudoGirasoltotalbs; ?></td>
                      <td><?php echo $AceiteCrudoGirasoltotaldolar; ?></td>
                      
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
       
        <?php endif; ?>
       

            
        </tr>
    <?php }?>
</table>
<?php } ?>

</div>