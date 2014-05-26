<?php ini_set('memory_limit', '-1'); ?>
<div class="datep form">
<?php
echo $this->Html->css(array('buttons'));
$meses = array(1 => 'Enero', 2 =>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5 =>'Mayo', 6 =>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10 =>'Octubre', 11 =>'Noviembre', 12 =>'Diciembre',);
foreach ($this->request->data as $dato): ?>
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
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'compaseleccioningenio',$datos['Azucar']['id']) ); ?></li>
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
		<td><?php echo $datos['Azucar']['username']; ?></td>
		<td><?php echo $datos['Azucar']['nombre']; ?></td>
		<td><?php echo $datos['Azucar']['apellido']; ?></td>
		<td><?php echo $datos['Grupo']['categoria']; ?></td>
		<td><?php echo $datos['Grupo']['subcategoria']; ?></td>
		<td><?php echo $datos['Perfil']['razonsocial']; ?></td>
		<td><?php echo $datos['Perfil']['nombrecomercial']; ?></td>
	</tr>
    </tbody>
</table>
</div>
<?php foreach ($this->request->data as $dato): ?>
<?php foreach ($dato['Productos'] as $periodo): ?>
	<? if($periodo==0): ?>


<div class="anueal form">
<?php
echo $this->Form->hidden('id', array('value' => $datos['Azucar']['id']));
 ?>
<h3>Panel de Compra por Semestre de Productores de Oleaginosas</h3>
<?php
$TotalAzucarRefinadakg=0;
$TotalAzucarCrudakg=0;
$TotalAzucarCrudaRefinadakg=0;
$TotalVolumenAlchollts=0;
$TotalCachazatm=0;
$TotalMelazatm=0;
$TotalBagazotm=0;
$Totalrecepcion=0;
?>

<?php foreach ($distinct_years as $var)  { ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
	       	<th><?php echo 'COMPARACION ENTRE:';?> </th>
			<th colspan="7"><?php echo 'ENTREGA';?> </th>

			<th><?php echo 'RECEPCION';?> </th>
		</tr>
        <tr>
	       	<th><?php echo 'MES';?> </th>
			<th><?php echo 'AZÚCAR REFINADA (Quintal 46 kg)';?> </th>
			<th><?php echo 'AZÚCAR CRUDA (Quintal 46 kg)';?> </th>
			<th><?php echo 'TOTAL DE AZÚCAR REFINADA Y CRUDA (Quintal 46 kg)';?> </th>
			<th><?php echo 'VOLUMEN ALCOHOL (Lts)';?> </th>
			<th><?php echo 'CHACHAZA (TM)';?> </th>
			<th><?php echo 'MELAZA (TM)';?> </th>
			<th><?php echo 'BAGAZO (TM)';?> </th>
			<th><?php echo 'RECEPCION';?> </th>
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

		<?php foreach ($datos['IngenioEntrega'] as $ingenioentrega): ?>
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
		<?php endforeach;?>	

		<?php foreach ($datos['IngenioRecepcion'] as $ingeniorecepcion): ?>
			<?php 
			$year = strtotime($ingeniorecepcion['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>					
					<?php
					$Totalrecepcion = $Totalrecepcion + $ingeniorecepcion['total']; 
					?>					
				<?php } ?>
			<?php } ?>
		<?php endforeach;?>	
		
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
			$Totalrecepcion=0;	
		?>
        </th>
        <th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Total Recepcion (TM)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $TotalBagazotm;?></td>                      
	              </tr>
            </table>
		<?php 
			$TotalBagazotm=0;	
			$Totalrecepcion=0;	
		?>
        </th>


		</tr>
	<?php }?>
</table>
<?php } ?>

</div>
	<? endif; ?>


	<? if($periodo==1): ?>

<div class="anueal form">
<?php
echo $this->Form->hidden('id', array('value' => $datos['Azucar']['id']));
 ?>
<h3>Panel de Compra por Semestre de Productores de Oleaginosas</h3>
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
		<?php foreach ($datos['IngenioEntrega'] as $ingenioentrega): ?>

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
		<?php foreach ($datos['IngenioRecepcion'] as $ingeniorecepcion): ?>
			<?php 
			$year = strtotime($ingeniorecepcion['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>					
					<?php
					$Totalrecepcion = $Totalrecepcion + $ingeniorecepcion['total']; 
					?>					
				<?php } ?>
			<?php } ?>
		<?php endforeach;?>	
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
		<?php foreach ($datos['IngenioEntrega'] as $ingenioentrega): ?>

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
				<?php foreach ($datos['IngenioRecepcion'] as $ingeniorecepcion): ?>
			<?php 
			$year = strtotime($ingeniorecepcion['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>					
					<?php
					$Totalrecepcion = $Totalrecepcion + $ingeniorecepcion['total']; 
					?>					
				<?php } ?>
			<?php } ?>
		<?php endforeach;?>	
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


	<? endif; ?>
	<? if($periodo==2): ?>
<div class="anueal form">
<?php
echo $this->Form->hidden('id', array('value' => $datos['Azucar']['id']));
 ?>
<h3>Panel de Control de Entrega de Productos Derivados</h3>
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

<table>
    <thead>
        <tr>
       	<th><?php echo 'AÑO ';?> </th>

		<th><?php echo 'AZÚCAR REFINADA (Quintal 46 kg)';?> </th>
		<th><?php echo 'AZÚCAR CRUDA (Quintal 46 kg)';?> </th>
		<th><?php echo 'TOTAL DE AZÚCAR REFINADA Y CRUDA (Quintal 46 kg)';?> </th>
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
		
		<?php foreach ($datos['IngenioEntrega'] as $ingenioentrega): ?>

			<?php 
			$year = strtotime($ingenioentrega['fecharegistro']);
			date("Y", $year);


			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php $TotalAzucarRefinadakg = $TotalAzucarRefinadakg + $ingenioentrega['refinada']; 
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
				<?php foreach ($datos['IngenioRecepcion'] as $ingeniorecepcion): ?>
			<?php 
			$year = strtotime($ingeniorecepcion['fecharegistro']);
			date("Y", $year);
			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>					
					<?php
					$Totalrecepcion = $Totalrecepcion + $ingeniorecepcion['total']; 
					?>					
				<?php } ?>
			<?php } ?>
		<?php endforeach;?>	
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
	
</table>
<?php } ?>

</div>
	<? endif; ?>


<? endforeach; ?>
<? endforeach; ?>
<div class="anual form">
	<?php echo $this->Html->link( "Gráfica Combinada Torta - Columna", array('action'=>'combinacioningenio', $datos['Azucar']['id']), array('class' => 'large yellow awesome')); ?>
	<?php echo $this->Html->link( "Gráfica Comparativa Columnas", array('action'=>'columnacompra', $datos['Azucar']['id']), array('class' => 'large orange awesome')); ?>
	<?php echo $this->Html->link( "Gráfica Comparativa Área", array('action'=>'areacompra', $datos['Azucar']['id']), array('class' => 'large red awesome')); ?>

	</div>