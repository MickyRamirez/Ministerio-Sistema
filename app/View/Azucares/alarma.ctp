<div class="azucarexistencias form">
<?php if($azucares){ ?>
<h3>Panel de Alarmas Ingenios Azucareros</h3>
<table>
    <thead>
        <tr>
			<th><?php echo $this->Paginator->sort('username', 'Nombre de Usuario');?> </th>
			<th><?php echo $this->Paginator->sort('nombre', 'Nombre (s)');?> </th>
			<th><?php echo $this->Paginator->sort('apellido', 'Apellido (s)');?> </th>
			<th><?php echo $this->Paginator->sort('Grupo.categoria', 'Categoría');?></th>
			<th><?php echo $this->Paginator->sort('Grupo.subcategoria', 'Sub-Categoría');?></th>
			<th><?php echo $this->Paginator->sort('Perfil.codigogeneral', 'Codigo General');?></th>
			<th><?php echo $this->Paginator->sort('Perfil.razonsocial', 'Nombre o Razón Social');?></th>
			<th><?php echo $this->Paginator->sort('', 'Nombre depósito');?></th>
			<th><?php echo $this->Paginator->sort('', 'Nombre encargado');?></th>
			<th><?php echo $this->Paginator->sort('', 'Nombre zona');?></th>
			<th><?php echo $this->Paginator->sort('', 'Teléfono');?></th>
			<th><?php echo 'Azucar (46 kilos/quintal)';?></th>
			<th><?php echo 'Alcohol (LT)';?></th>
			<th><?php echo 'Refinada (46 kilos/quintal)';?></th>
			<th><?php echo 'Cruda (46 kilos/quintal)';?></th>
			<th><?php echo 'Total';?></th>
			<th><?php echo 'Cachaza (46 kilos/quintal)';?></th>
			<th><?php echo 'Malaza (46 kilos/quintal)';?></th>
			<th><?php echo 'Bagaza (46 kilos/quintal)';?></th>


		</tr>
    </thead>
    <tbody> 
	<?php 
        $count=0; 
        $ultimaazucar=0;
        $ultimaalcohol=0;
        $ultimarefinada=0;
        $ultimacruda=0;
        $ultimatotal=0;
        $ultimacachaza=0;
        $ultimamalaza=0;
        $ultimabagaza=0;
                ?>
	<?php foreach ($azucares as $azucar): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>
		<?php foreach ($azucar['Deposito'] as $azucarexistencia):   
				$id=$azucarexistencia['id'];
				$nombredep=$azucarexistencia['nombredeposito'];
				$encargo=$azucarexistencia['encargado'];
				$direcciones=$azucarexistencia['zona'].' '.$azucarexistencia['calle'];
				$telf=$azucarexistencia['telefono'];
				foreach ($azucar['AzucarExistencia'] as $azucarexistencia):
					$deposito_id=$azucarexistencia['deposito_id'];
					if ($id==$deposito_id) {
						$ultimaazucar=$azucarexistencia['azucar'];
						$ultimaalcohol=$azucarexistencia['alcohol'];
						$ultimarefinada=$azucarexistencia['refinada'];
						$ultimacruda=$azucarexistencia['cruda'];
						$ultimatotal=$azucarexistencia['total'];
						$ultimacachaza=$azucarexistencia['cachaza'];
						$ultimamalaza=$azucarexistencia['malaza'];
						$ultimabagaza=$azucarexistencia['bagaza'];
					}
 				endforeach;
		?>	
					
						<?php if ($ultimaazucar<3000 || $ultimaalcohol<3000 || $ultimarefinada<3000 || $ultimacruda<3000 || $ultimacachaza<3000 ||$ultimamalaza<3000 || $ultimabagaza<3000) :   ?>
        					<tr>
        						<td style="text-align: center;"><?php echo $azucar['Azucar']['username']; ?></td>
								<td style="text-align: center;"><?php echo $azucar['Azucar']['nombre']; ?></td>
								<td style="text-align: center;"><?php echo $azucar['Azucar']['apellido']; ?></td>
								<td style="text-align: center;"><?php echo $azucar['Grupo']['categoria']; ?></td>
								<td style="text-align: center;"><?php echo $azucar['Grupo']['subcategoria']; ?></td>
								<td style="text-align: center;"><?php echo $azucar['Perfil']['codigogeneral']; ?></td>
								<td style="text-align: center;"><?php echo $azucar['Perfil']['razonsocial']; ?></td>
								<td style="text-align: center;"><?php echo $nombredep; ?></td>
								<td style="text-align: center;"><?php echo $encargo; ?></td>
								<td style="text-align: center;"><?php echo $direcciones; ?></td>
								<td style="text-align: center;"><?php echo $telf; ?></td>

            					<td style="text-align: center;"><?php 
            					if ($ultimaazucar<3000) {
            						echo '<h3><strong>'.$ultimaazucar.'</strong></h3>';
            					}else{
            						echo $ultimaazucar;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($ultimaalcohol<3000) {
            						echo '<h3><strong>'.$ultimaalcohol.'</strong></h3>';
            					}else{
            						echo $ultimaalcohol;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($ultimarefinada<3000) {
            						echo '<h3><strong>'.$ultimarefinada.'</strong></h3>';
            					}else{
            						echo $ultimarefinada;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($ultimacruda<3000) {
            						echo '<h3><strong>'.$ultimacruda.'</strong></h3>';
            					}else{
            						echo $ultimacruda;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($ultimatotal<3000) {
            						echo '<h3><strong>'.$ultimatotal.'</strong></h3>';
            					}else{
            						echo $ultimatotal;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($ultimacachaza<3000) {
            						echo '<h3><strong>'.$ultimacachaza.'</strong></h3>';
            					}else{
            						echo $ultimacachaza;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($ultimamalaza<3000) {
            						echo '<h3><strong>'.$ultimamalaza.'</strong></h3>';
            					}else{
            						echo $ultimamalaza;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($ultimabagaza<3000) {
            						echo '<h3><strong>'.$ultimabagaza.'</strong></h3>';
            					}else{
            						echo $ultimabagaza;
            					}
            					?></td>
            					
        					</tr>
        				<?php endif; ?>
	
						<?php
						
   					endforeach;	
					?>
 
        <?php endforeach; ?>
        <?php unset($azucar); ?>
    </tbody>
</table>
<?php 
        echo "<div class='paging'>"; 
        echo $this->Paginator->prev('<< ' . __('anterior ', true), array(), null, array('class'=>'disabled'));
        echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));
        echo $this->Paginator->next(__(' siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));
        echo "</div>"
?>
<?php 
}else{
     echo "<div class='no-records-found'>No se encontro existencias.</div>";
}
?>
</div>






<div class="actions">
<h3>Acciones</h3>

<ul>
<li><?php echo $this->Html->link( "Volver Escritorio",   array('action'=>'index') ); ?></li>
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

