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
<h3>Panel de Control de Venta de Productos en Exportacion</h3>
<?php
$TotalAzucarCruda=0;
$TotalAzucarRefinada=0;
$TotalAzucar=0;
$TotalPrecioFob=0;
?>

<?php foreach ($distinct_years as $var)  { ?>

<table>
    <thead>
        <tr>
       	<th><?php echo 'ANO ';?> </th>
		<th><?php echo 'AZUCAR REFINADA';?> </th>
		<th><?php echo 'AZUCAR CRUDA';?> </th>
		<th><?php echo 'TOTAL DE AZUCAR';?> </th>
		<th><?php echo 'PRECIO FOB';?> </th>
		</tr>
    </thead>
<tr> <th>
	<?php for ($i=1; $i <= 12 ; $i++) { ?>
		<?php 
		if ($i==12) { echo $var; }
		?>
		
		<?php foreach ($this->data['IngenioAzucarExportacion'] as $Ingenioazucarexportacion): ?>

			<?php 
			$year = strtotime($Ingenioazucarexportacion['fecharegistro']);
			date("Y", $year);


			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php 					
						$TotalAzucarRefinada = $TotalAzucarRefinada + $Ingenioazucarexportacion['refinada']; 
						$TotalAzucarCruda = $TotalAzucarCruda + $Ingenioazucarexportacion['cruda'];
						$TotalAzucar = $TotalAzucar + $Ingenioazucarexportacion['total'];
						$TotalPrecioFob = $TotalPrecioFob + $Ingenioazucarexportacion['preciofob'];			 
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
                     <td><?php echo $TotalAzucarCruda;?></td>                      
              </tr>
              </table>
		<?php 
			$TotalAzucarCruda=0;						
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (Kg)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $TotalAzucarRefinada;?></td>                      
              </tr>
              </table>
		<?php 
			$TotalAzucarRefinada=0;
	
		?>
        </th>  
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (Kg)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $TotalAzucar;?></td>                      
              </tr>
              </table>
		<?php 
			$TotalAzucar=0;

		?>
        </th> 
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Total</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $TotalPrecioFob;?></td>                      
              </tr>
              </table>
		<?php 
			$TotalPrecioFob=0;		
		?>
        </th>      	
		</tr>
	
</table>
<?php } ?>

</div>