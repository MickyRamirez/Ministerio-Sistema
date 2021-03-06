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
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'ventas') ); ?></li>
</ul>
<ul>
<li> <?php echo $this->Html->link("Reporte", array('action'=>'reportevsemestremercadoingenio', $this->data['Azucar']['id'])); ?> </li>
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
<h3>Panel de Venta de Productos en Mercado Interno</h3>
<?php
$TotalAzucarCruda=0;
$TotalAzucarRefinada=0;
$TotalAzucar=0;
$TotalPrecioXqq=0;
?>

<?php foreach ($distinct_years as $var)  { ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
	       	<th><?php echo 'SEMESTRE';?> </th>
			<th><?php echo 'AZUCAR REFINADA';?> </th>
			<th><?php echo 'AZUCAR CRUDA';?> </th>
			<th><?php echo 'TOTAL DE AZUCAR';?> </th>
			<th><?php echo 'PRECIO XQQ';?> </th>
		</tr>
    </thead>

	<?php for ($i=1; $i <= 6 ; $i++) { ?>
		<tr><?php 

		if ($i==6) { echo '<th>Primer Semestre</th>'; }

		?>
		<?php foreach ($this->data['IngenioAzucarMercadoInterno'] as $ingenioazucarmercadointerno): ?>

			<?php 
			$year = strtotime($ingenioazucarmercadointerno['fecharegistro']);
			date("Y", $year);


			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php
						$TotalAzucarRefinada = $TotalAzucarRefinada + $ingenioazucarmercadointerno['refinada']; 
						$TotalAzucarCruda = $TotalAzucarCruda + $ingenioazucarmercadointerno['cruda'];
						$TotalAzucar = $TotalAzucar + $ingenioazucarmercadointerno['total'];
						$TotalPrecioXqq = $TotalPrecioXqq + $ingenioazucarmercadointerno['precioxqq'];	
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
                     <td><?php echo $TotalPrecioXqq;?></td>                      
              </tr>
              </table>
		<?php 
			$TotalPrecioXqq=0;		
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
		<?php foreach ($this->data['IngenioAzucarMercadoInterno'] as $ingenioazucarmercadointerno): ?>

			<?php 
			$year = strtotime($ingenioazucarmercadointerno['fecharegistro']);
			date("Y", $year);


			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php
						$TotalAzucarRefinada = $TotalAzucarRefinada + $ingenioazucarmercadointerno['refinada']; 
						$TotalAzucarCruda = $TotalAzucarCruda + $ingenioazucarmercadointerno['cruda'];
						$TotalAzucar = $TotalAzucar + $ingenioazucarmercadointerno['total'];
						$TotalPrecioXqq = $TotalPrecioXqq + $ingenioazucarmercadointerno['precioxqq'];	
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
                     <td><?php echo $TotalPrecioXqq;?></td>                      
              </tr>
              </table>
		<?php 
			$TotalPrecioXqq=0;		
		?>
        </th>  
		</tr>
<?php }?>
			
		</tr>
	<?php }?>

</table>
<?php } ?>

</div>