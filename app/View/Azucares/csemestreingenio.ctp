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
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'entregas') ); ?></li>
</ul>
<ul>
<li> <?php echo $this->Html->link("Reporte", array('action'=>'reportecsemestre', $this->data['Azucar']['id'])); ?> </li>
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
<h3>Panel de Compra por Semestre de Productos</h3> 
<?php
$TotalAzucarRefinadakg=0;
$TotalAzucarCrudakg=0;
$TotalAzucarCrudaRefinadakg=0;
$TotalVolumenAlchollts=0;
$TotalCachazatm=0;
$TotalMelazatm=0;
$TotalBagazotm=0;
?>

<?php foreach ($distinct_years as $var)  { ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
	       	<th><?php echo 'SEMESTRE';?> </th>
			<th><?php echo 'AZÚCAR REFINADA (Quintal 46 kg)';?> </th>
			<th><?php echo 'AZÚCAR CRUDA (Quintal 46 kg)';?> </th>
			<th><?php echo 'TOTAL DE AZÚCAR REFINADA Y CRUDA (Quintal 46 kg)';?> </th>
			<th><?php echo 'VOLUMEN ALCOHOL (Lts)';?> </th>
			<th><?php echo 'CHACHAZA (TM)';?> </th>
			<th><?php echo 'MELAZA (TM)';?> </th>
			<th><?php echo 'BAGAZO (TM)';?> </th>
		</tr>
    </thead>

	<?php for ($i=1; $i <= 6 ; $i++) { ?>
		<tr><?php 

		if ($i==6) { echo '<th>Primer Semestre</th>'; }

		?>
		<?php foreach ($this->data['IngenioEntrega'] as $ingenioentrega): ?>

			<?php 
			$year = strtotime($ingenioentrega['fecharegistro']);
			date("Y", $year);


			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php
						$TotalAzucarRefinadakg = $TotalAzucarRefinadakg + $ingenioentrega['refinada']; 
						$TotalAzucarCrudakg = $TotalAzucarCrudakg + $ingenioentrega['cruda'];
						  $TotalAzucarCrudaRefinadakg = $TotalAzucarCrudaRefinadakg + $ingenioentrega['refinada']						 + $ingenioentrega['cruda'];
						  $TotalVolumenAlchollts = $TotalVolumenAlchollts + $ingenioentrega['volumenlitros'];
						  $TotalCachazatm = $TotalCachazatm + $ingenioentrega['cachaza'];
						  $TotalMelazatm = $TotalMelazatm + $ingenioentrega['melaza'];
						  $TotalBagazotm = $TotalBagazotm + $ingenioentrega['bagaza'];
					?>
					
				<?php } ?>
			<?php } ?>
		<?php endforeach;
		?>
			<?php if ($i==6) { ?>		
		
		
		<th>
	
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (Kg)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $TotalAzucarRefinadakg;?></td>                      
              </tr>
              </table>
		<?php 
			$TotalAzucarRefinadakg=0;			
		?>
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
		<?php 
			$TotalAzucarCrudakg=0;			
		?>
        </th>
        <th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (Kg)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $TotalAzucarCrudaRefinadakg;?></td>                      
	              </tr>
            </table>
		<?php 
			$TotalAzucarCrudaRefinadakg=0;			
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
<?php 



}?>
			
		</tr>
	<?php }?>
<?php for ($i=7; $i <= 12 ; $i++) { ?>
		<tr><?php 

		if ($i==12) { echo '<th>Segundo Semestre</th>'; }

		?>
		<?php foreach ($this->data['IngenioEntrega'] as $ingenioentrega): ?>

			<?php 
			$year = strtotime($ingenioentrega['fecharegistro']);
			date("Y", $year);


			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php
						$TotalAzucarRefinadakg = $TotalAzucarRefinadakg + $ingenioentrega['refinada']; 
						  $TotalAzucarCrudakg = $TotalAzucarCrudakg + $ingenioentrega['cruda'];
						  $TotalAzucarCrudaRefinadakg = $TotalAzucarCrudaRefinadakg + $ingenioentrega['refinada']						 + $ingenioentrega['cruda'];
						  $TotalVolumenAlchollts = $TotalVolumenAlchollts + $ingenioentrega['volumenlitros'];
						  $TotalCachazatm = $TotalCachazatm + $ingenioentrega['cachaza'];
						  $TotalMelazatm = $TotalMelazatm + $ingenioentrega['melaza'];
						  $TotalBagazotm = $TotalBagazotm + $ingenioentrega['bagaza'];
					?>
					
				<?php } ?>
			<?php } ?>
		<?php endforeach;
		?>
			<?php if ($i==12) { ?>		
		
		
		<th>
	
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (Kg)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $TotalAzucarRefinadakg;?></td>                      
              </tr>
              </table>
		<?php 
			$TotalAzucarRefinadakg=0;			
		?>
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
		<?php 
			$TotalAzucarCrudakg=0;			
		?>
        </th>
        <th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (Kg)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $TotalAzucarCrudaRefinadakg;?></td>                      
	              </tr>
            </table>
		<?php 
			$TotalAzucarCrudaRefinadakg=0;			
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
<?php }?>
			
		</tr>
	<?php }?>

</table>
<?php } ?>

</div>