<style type="text/css">

th,td {
           border-style: inset;
           border-collapse: collapse; 
      }
td {font-size:10pt;
	font-family:Arial;
	text-align: center;
	background-color: #C0D9D9;
	}

th {font-size:15pt;
	font-family:Arial;
	text-align: center;
	font-weight: bold; 
	background-color: #7093DB;}

</style> 
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
		<th><?php echo 'Categoria';?></th>
		<th><?php echo 'Subcategoria';?></th>
		<th><?php echo 'Nombre o Razon Social';?></th>
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
<div class="anueal form">
<?php
echo $this->Form->hidden('id', array('value' => $this->data['Azucar']['id']));
 ?>
<h3>Panel de Recepcion por Mes de Sacarosa</h3>
<?php
$Sacarosa=0;
$TotalSacarosa=0;
?>

<?php foreach ($distinct_years as $var)  { ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
	       	<th><?php echo 'MES';?> </th>
			<th><?php echo 'SACAROSA';?> </th>
			<th><?php echo 'TOTAL SACAROSA';?> </th>
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
		<?php foreach ($this->data['IngenioRecepcion'] as $ingeniorecepcion): ?>

			<?php 
			$year = strtotime($ingeniorecepcion['fecharegistro']);
			date("Y", $year);


			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>					
					<?php
						$Sacarosa = $Sacarosa + $ingeniorecepcion['sacarosa']; 
						$TotalSacarosa = $TotalSacarosa + $ingeniorecepcion['total'];
					?>					
				<?php } ?>
			<?php } ?>
		<?php endforeach;
		?>	
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (%)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $Sacarosa;?></td>                      
              </tr>
              </table>
		<?php 
			$Sacarosa=0;
						
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (Kg)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $TotalSacarosa;?></td>                      
              </tr>
              </table>
		<?php 
			$TotalSacarosa=0;			
		?>
        </th> 			
		</tr>
	<?php }?>

	<?php for ($i=7; $i <= 12 ; $i++) { ?>
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
		<?php foreach ($this->data['IngenioRecepcion'] as $ingeniorecepcion): ?>

			<?php 
			$year = strtotime($ingeniorecepcion['fecharegistro']);
			date("Y", $year);


			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>					
					<?php
						$Sacarosa = $Sacarosa + $ingeniorecepcion['sacarosa']; 
						$TotalSacarosa = $TotalSacarosa + $ingeniorecepcion['total'];
					?>
					
				<?php } ?>
			<?php } ?>
		<?php endforeach;
		?>
			
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (%)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $Sacarosa;?></td>                      
              </tr>
              </table>
		<?php 
			$Sacarosa=0;
						
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (Kg)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $TotalSacarosa;?></td>                      
              </tr>
              </table>
		<?php 
			$TotalSacarosa=0;			
		?>
        </th> 	
		</tr>
	<?php }?>
</table>
<?php } ?>

</div>