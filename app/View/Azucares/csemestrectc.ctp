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
<li> <?php echo $this->Html->link("Reporte", array('action'=>'reportecsemestrectc', $this->data['Azucar']['id'])); ?> </li>
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
<h3>Panel de Entrega por Semestre de Productos</h3>
<?php
$TotalPerdidaCachaza=0;
$TotalPerdidaMelaza=0;
$TotalPerdidaBagaza=0;
$TotalPerdidaIndet=0;
$TotalPerdidaFabril=0;
?>

<?php foreach ($distinct_years as $var)  { ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
	       	<th><?php echo 'SEMESTRE ';?> </th>
			<th><?php echo 'TOTAL PERDIDA CACHAZA';?> </th>
			<th><?php echo 'TOTAL PERDIDA MELAZA';?> </th>
			<th><?php echo 'TOTAL PERDIDA BAGAZA';?> </th>
			<th><?php echo 'TOTAL PERDIDA INDETERMINADA';?> </th>
			<th><?php echo 'TOTAL PERDIDA FABRIL';?> </th>
		</tr>
    </thead>

	<?php for ($i=1; $i <= 6 ; $i++) { ?>
		<tr><?php 

		if ($i==6) { echo '<th>Primer Semestre</th>'; }

		?>
		<?php foreach ($this->data['CtcProduccion'] as $ctcproduccion): ?>

			<?php 
			$year = strtotime($ctcproduccion['fecharegistro']);
			date("Y", $year);


			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php
						$TotalPerdidaCachaza = $TotalPerdidaCachaza + $ctcproduccion['perdidacachaza']; 

						$TotalPerdidaMelaza = $TotalPerdidaMelaza + $ctcproduccion['perdidamelaza'];
							  
						$TotalPerdidaBagaza = $TotalPerdidaBagaza + $ctcproduccion['perdidabagaza'];

						$TotalPerdidaIndet = $TotalPerdidaIndet + $ctcproduccion['perdidaindet'];

						$TotalPerdidaFabril = $TotalPerdidaFabril + $ctcproduccion['perdidafabril'];
					?>
					
				<?php } ?>
			<?php } ?>
		<?php endforeach;
		?>
			<?php if ($i==6) { ?>		
		
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (%)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $TotalPerdidaCachaza;?></td> 
                  
              </tr>
              </table>
		<?php 
			$TotalPerdidaCachaza=0;			
		?>
        </th>
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (%)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $TotalPerdidaMelaza;?></td>                      
              </tr>
              </table>
		<?php 
			$TotalPerdidaMelaza=0; 
		?>
        </th>
        <th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (%)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $TotalPerdidaBagaza;?></td>                      
	              </tr>
            </table>
		<?php 
			$TotalPerdidaBagaza=0;		
		?>
        </th>
		<th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (%)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $TotalPerdidaIndet;?></td>                      
	              </tr>
            </table>
		<?php 
			$TotalPerdidaIndet=0; 			
		?>
        </th>	
        <th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (%)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $TotalPerdidaFabril;?></td>                      
	              </tr>
            </table>
		<?php 
			$TotalPerdidaFabril=0;		
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
		<?php foreach ($this->data['CtcProduccion'] as $ctcproduccion): ?>

			<?php 
			$year = strtotime($ctcproduccion['fecharegistro']);
			date("Y", $year);


			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>
					
					<?php
						$TotalPerdidaCachaza = $TotalPerdidaCachaza + $ctcproduccion['perdidacachaza']; 

						$TotalPerdidaMelaza = $TotalPerdidaMelaza + $ctcproduccion['perdidamelaza'];
							  
						$TotalPerdidaBagaza = $TotalPerdidaBagaza + $ctcproduccion['perdidabagaza'];

						$TotalPerdidaIndet = $TotalPerdidaIndet + $ctcproduccion['perdidaindet'];

						$TotalPerdidaFabril = $TotalPerdidaFabril + $ctcproduccion['perdidafabril'];
					?>
					
				<?php } ?>
			<?php } ?>
		<?php endforeach;
		?>
			<?php if ($i==12) { ?>		
		
		<th>
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (%)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $TotalPerdidaCachaza;?></td> 
                  
              </tr>
              </table>
		<?php 
			$TotalPerdidaCachaza=0;			
		?>
        </th>
        <th>
		<table cellspacing="5" cellpadding="2">
              <tr>                
                      <th><h4><strong>Cantidad (%)</strong></h4></th>                   
              </tr>
              <tr>             
                     <td><?php echo $TotalPerdidaMelaza;?></td>                      
              </tr>
              </table>
		<?php 
			$TotalPerdidaMelaza=0; 
		?>
        </th>
        <th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (%)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $TotalPerdidaBagaza;?></td>                      
	              </tr>
            </table>
		<?php 
			$TotalPerdidaBagaza=0;		
		?>
        </th>
		<th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (%)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $TotalPerdidaIndet;?></td>                      
	              </tr>
            </table>
		<?php 
			$TotalPerdidaIndet=0; 			
		?>
        </th>	
        <th>
			<table cellspacing="5" cellpadding="2">
	              <tr>                
	                      <th><h4><strong>Cantidad (%)</strong></h4></th>                   
	              </tr>
	              <tr>             
	                     <td><?php echo $TotalPerdidaFabril;?></td>                      
	              </tr>
            </table>
		<?php 
			$TotalPerdidaFabril=0;		
		?>
        </th>
		</tr>
<?php }?>
			
		</tr>
	<?php }?>

</table>
<?php } ?>

</div>