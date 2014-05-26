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
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'recepcion') ); ?></li>
</ul>
<ul>
<li> <?php echo $this->Html->link("Reporte", array('action'=>'reporteranoingenio', $this->data['Azucar']['id'])); ?> </li>
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
<h3>Panel de Control de Recepción de Sacarosa</h3>
<?php
$Sacarosa=0;
$TotalSacarosa=0;
?>

<?php foreach ($distinct_years as $var)  { ?>

<table>
    <thead>
        <tr>
       	<th><?php echo 'AÑO ';?> </th>
		<th><?php echo 'SACAROSA';?> </th>
		<th><?php echo 'TOTAL SACAROSA';?> </th>		
		</tr>
    </thead>
<tr> <th>
	<?php for ($i=1; $i <= 12 ; $i++) { ?>
		<?php 
		if ($i==12) { echo $var; }
		?>
		
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
		
		<?php }?>
		</th>
		<th>
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
	
</table>
<?php } ?>

</div>