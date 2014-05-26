<div class="azucarexistencias form">
<?php if($azucares){ ?>
<h3>Panel de Existencias en Depósitos Ingenio Azucarero</h3>
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

			<th><?php echo $this->Paginator->sort('Depositos', 'Ultimas existencias registradas por Depósito');?></th>

		</tr>
    </thead>
    <tbody> 
	<?php $count=0; 
        $ultimaazucar=0;
        $ultimaalcohol=0;
        $ultimarefinada=0;
        $ultimacruda=0;
        $ultimatotal=0;
        $ultimacachaza=0;
        $ultimamalaza=0;
        $ultimabagaza=0;
        $ultimadate=0;
        ?>
	<?php foreach ($azucares as $azucar): ?>
	<?php $count ++;?>
	<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
	<?php endif; ?>

					<td style="text-align: center;"><?php echo $azucar['Azucar']['username']; ?></td>
					<td style="text-align: center;"><?php echo $azucar['Azucar']['nombre']; ?></td>
					<td style="text-align: center;"><?php echo $azucar['Azucar']['apellido']; ?></td>

					<td style="text-align: center;"><?php echo $azucar['Grupo']['categoria']; ?></td>
					<td style="text-align: center;"><?php echo $azucar['Grupo']['subcategoria']; ?></td>
					<td style="text-align: center;"><?php echo $azucar['Perfil']['codigogeneral']; ?></td>
					<td style="text-align: center;"><?php echo $azucar['Perfil']['razonsocial']; ?></td>


					

					<td style="text-align: center;">
					<table cellspacing="5" cellpadding="2">
							<tr>
            					<td><h4><strong>Nombre Depósito</strong></h4></td>
            					<td><h4><strong>Encargado Depósito</strong></h4></td>
            					<td><h4><strong>Dirección Depósito</strong></h4></td>
            					<td><h4><strong>Teléfono Depósito</strong></h4></td>

            					<td><h4><strong>Existencia Azucar</strong></h4></td>
            					<td><h4><strong>Existencia Alcohol</strong></h4></td>
            					<td><h4><strong>Existencia Refinada</strong></h4></td>
            					<td><h4><strong>Existencia Cruda</strong></h4></td>
            					<td><h4><strong>Existencia Total</strong></h4></td>
            					<td><h4><strong>Existencia Cachaza</strong></h4></td>
            					<td><h4><strong>Existencia Malaza</strong></h4></td>
            					<td><h4><strong>Existencia Bagaza</strong></h4></td>
            					<td><h4><strong>Ultima fecha de registro</strong></h4></td>
            					
        					</tr>
					<?php
					foreach ($azucar['Deposito'] as $azucarexistencia):   
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
								$ultimadate=$azucarexistencia['fecharegistro'];
								
							}

							
						endforeach;
						?>
						
        					<tr>
								<td><?php echo $nombredep; ?></td>
								<td><?php echo $encargo; ?></td>
								<td><?php echo $direcciones; ?></td>
								<td><?php echo $telf; ?></td>
            					<td><?php echo $ultimaazucar; ?></td>
            					<td><?php echo $ultimaalcohol; ?></td>
            					<td><?php echo $ultimarefinada; ?></td>
            					<td><?php echo $ultimacruda; ?></td>
            					<td><?php echo $ultimatotal; ?></td>
            					<td><?php echo $ultimacachaza; ?></td>
            					<td><?php echo $ultimamalaza; ?></td>
            					<td><?php echo $ultimabagaza; ?></td>
            					<td><?php echo $ultimadate; ?></td>
            					
        					</tr>
        				
	
						<?php
						
   					endforeach;	
					?>
  					
        			</table>
        			</td>


			</tr>
        <?php endforeach; ?>
        <?php unset($azucar); ?>
    </tbody>
</table>
<?php 
  echo "<div class='paging'>";
        echo $this->Paginator->prev('<< ' . __('anterior ', true), array(), null, array('class'=>'disabled'));
        echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));
        echo $this->Paginator->next(__(' siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));
         echo "</div>";
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

