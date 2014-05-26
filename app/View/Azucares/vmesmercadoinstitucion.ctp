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
<li> <?php echo $this->Html->link("Reporte", array('action'=>'reportevmesmercadoinstitucion', $this->data['Azucar']['id'])); ?> </li>
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
$TotalPrecio=0;
?>

<?php foreach ($distinct_years as $var)  { ?>
<?php echo '<h2>'.$var.'</h2>';?>
<?php echo '<br \>';?>
<table>
    <thead>
        <tr>
	       	<th><?php echo 'MES';?> </th>
			<th><?php echo 'AZUCAR REFINADA';?> </th>
			<th><?php echo 'AZUCAR CRUDA';?> </th>
			<th><?php echo 'TOTAL DE AZUCAR';?> </th>
			<th><?php echo 'PRECIO';?> </th>
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
		<?php foreach ($this->data['InstitucionAzucarMercadoInterno'] as $institucionazucarmercadointerno): ?>

			<?php 
			$year = strtotime($institucionazucarmercadointerno['fecharegistro']);
			date("Y", $year);


			if (date("m", $year)==$i) { ?>
				<?php if (date("Y", $year)==$var) { ?>					
					<?php
						$TotalAzucarRefinada = $TotalAzucarRefinada + $institucionazucarmercadointerno['refinada']; 
						$TotalAzucarCruda = $TotalAzucarCruda + $institucionazucarmercadointerno['cruda'];
						$TotalAzucar = $TotalAzucar + $institucionazucarmercadointerno['total'];
						$TotalPrecio = $TotalPrecio + $institucionazucarmercadointerno['precio'];
					?>					
				<?php } ?>
			<?php } ?>
		<?php endforeach;
		?>	
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
                     <td><?php echo $TotalPrecio;?></td>                      
              </tr>
              </table>
		<?php 
			$TotalPrecio=0;		
		?>
        </th>  			
		</tr>
	<?php }?>	
</table>
<?php } ?>

</div>