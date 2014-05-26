<div class="datos form">
<?php
echo $this->Form->hidden('id', array('value' => $this->data['Azucar']['id']));
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
		<td><?php echo $this->data['Azucar']['username']; ?></td>
		<td><?php echo $this->data['Azucar']['nombre']; ?></td>
		<td><?php echo $this->data['Azucar']['apellido']; ?></td>
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
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'produccion') ); ?></li>
</ul>
<ul>
<li> <?php echo $this->Html->link("Reporte", array('action'=>'reportecano', $this->data['Azucar']['id'])); ?> </li>
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
echo $this->Form->hidden('id', array('value' => $this->data['Azucar']['id']));
 ?>
<h3>Panel de Control de Entrega de Productos Derivados</h3>
<?php
$TotalAzucarRefinadakg=0;
$TotalAzucarCrudakg=0;
$TotalAzucarCrudaRefinadakg=0;

$TotalVolumenAlchollts=0;
$Totalquintal=0;
$Totalproducciondirecta=0;
$Totalsubproducto=0;
$Totallitros=0;

$TotalCachazatm=0;
$TotalMelazatm=0;
$TotalBagazotm=0;
?>

<?php foreach ($distinct_years as $var)  { ?>

<table>
    <thead>
        <tr>
       	<th><?php echo 'AÑO ';?> </th>

		<th><?php echo 'AZÚCAR REFINADA (Quintal 46 kg)';?> </th>
		<th><?php echo 'AZÚCAR CRUDA (Quintal 46 kg)';?> </th>
		<th><?php echo 'TOTAL DE AZÚCAR REFINADA Y CRUDA (Quintal 46 kg)';?> </th>
		<th><?php echo 'PRODUCCION DIRECTA';?> </th>
		<th><?php echo 'SUBPRODUCTO';?> </th>		
		<th><?php echo 'VOLUMEN ALCOHOL (Lts)';?> </th>
		<th><?php echo 'CHACHAZA (TM)';?> </th>
		<th><?php echo 'MELAZA (TM)';?> </th>
		<th><?php echo 'BAGAZO (TM)';?> </th>

		</tr>
    </thead>
<tr> <th>
	<?php for ($i=1; $i <= 12 ; $i++) { ?>
		<?php 
		if ($i==12) { echo 'Año'.$var; }
		?>
		
		<?php foreach ($this->data['IngenioProduccion'] as $ingenioproduccion): ?>

			<?php 
			$year = strtotime($ingenioproduccion['fecharegistro']);
			date("Y", $year);


			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php 
						$TotalAzucarRefinadakg = $TotalAzucarRefinadakg + $ingenioproduccion['refinada']; 
						$TotalAzucarCrudakg = $TotalAzucarCrudakg + $ingenioproduccion['cruda'];
						$TotalVolumenAlchollts = $TotalVolumenAlchollts + $ingenioproduccion['totalquintal'];
 
						$Totalproducciondirecta=$Totalproducciondirecta + $ingenioproduccion['producciondirecta']; 
						$Totalsubproducto=$Totalsubproducto + $ingenioproduccion['subproducto']; 
						$Totallitros=$Totallitros + $ingenioproduccion['totallitros']; 

						$TotalCachazatm = $TotalCachazatm + $ingenioproduccion['cachaza'];
						$TotalMelazatm = $TotalMelazatm + $ingenioproduccion['melaza'];
						$TotalBagazotm = $TotalBagazotm + $ingenioproduccion['bagaza'];
					?>							 					
				<?php } ?>
			<?php } ?>
		<?php endforeach;
		?>	
		
		<?php }?>
		</th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (Kg)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $TotalAzucarRefinadakg;?></td>                      
              </tr>
              </table>

        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (Kg)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $TotalAzucarCrudakg;?></td>                      
              </tr>
              </table>

        </th>
        <th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (Kg)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo ($TotalAzucarRefinadakg+$TotalAzucarCrudakg);?></td>                      
	              </tr>
            </table>
            <?php 
			$TotalAzucarRefinadakg=0;			
			$TotalAzucarCrudakg=0;			
			$TotalVolumenAlchollts=0;			
			?>
        </th>


		<th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (Lts)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $Totalproducciondirecta;?></td>                      
	              </tr>
            </table>
		<?php 
			$Totalproducciondirecta=0;			
		?>
        </th>		
        <th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (TM)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $Totalsubproducto;?></td>                      
	              </tr>
            </table>
		<?php 
			$Totalsubproducto=0;			
		?>
        </th>


		<th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (Lts)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $TotalVolumenAlchollts;?></td>                      
	              </tr>
            </table>
		<?php 
			$TotalVolumenAlchollts=0;			
		?>
        </th>	
        <th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (TM)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $TotalCachazatm;?></td>                      
	              </tr>
            </table>
		<?php 
			$TotalCachazatm=0;			
		?>
        </th>
        <th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (TM)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $TotalMelazatm;?></td>                      
	              </tr>
            </table>
		<?php 
			$TotalMelazatm=0;			
		?>
        </th>
        <th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (TM)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $TotalBagazotm;?></td>                      
	              </tr>
            </table>
		<?php 
			$TotalBagazotm=0;			
		?>
        </th>	
		</tr>
</table>
<?php } ?>
</div>