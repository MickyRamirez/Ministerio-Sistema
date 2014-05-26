<div class="soyaexistencias form">
<?php if($soyas){ ?>
<h3>Panel de Alarmas</h3>
<table>
    <thead>
        <tr>
			<th><?php echo $this->Paginator->sort('username', 'Nombre de Usuario');?> </th>
			<th><?php echo $this->Paginator->sort('nombre', 'Nombre (s)');?> </th>
			<th><?php echo $this->Paginator->sort('apellido', 'Apellido (s)');?> </th>

			<th><?php echo $this->Paginator->sort('categoria', 'Categoria');?></th>
			<th><?php echo $this->Paginator->sort('subcategoria', 'Sub-Categoria');?></th>
			<th><?php echo $this->Paginator->sort('codigogeneral', 'Codigo General');?></th>
			<th><?php echo $this->Paginator->sort('razonsocial', 'Nombre o Razon Social');?></th>
			<th><?php echo $this->Paginator->sort('', 'Nombre deposito');?></th>
			<th><?php echo $this->Paginator->sort('', 'Nombre encargado');?></th>
			<th><?php echo $this->Paginator->sort('', 'Nombre zona');?></th>
			<th><?php echo $this->Paginator->sort('', 'Telefono');?></th>
			<th><?php echo 'Tota Solvente Soya';?></th>
			<th><?php echo 'Torta Solvente Girasol';?></th>
			<th><?php echo 'Harina Integral Soya';?></th>
			<th><?php echo 'Harina Integeal Girasol';?></th>
			<th><?php echo 'Cascarilla de Soya';?></th>
			<th><?php echo 'Cascarilla de Girasol';?></th>
			<th><?php echo 'Aceite Crudo Soya';?></th>
			<th><?php echo 'Aceite Refinado Soya';?></th>
			<th><?php echo 'Aceite Refinado Girasol';?></th>
			<th><?php echo 'Grano Soya';?></th>
			<th><?php echo 'Grano Girasol';?></th>

		</tr>
    </thead>
    <tbody>
      <?php 
            $tortasoya=0;
            $tortagirasol=0;
            $harinasoya=0;
            $harinagirasol=0;
            $cascarillasoya=0;
            $cascarillagirasol=0;
            $aceitecrudosoya=0;
            $aceiterefinadosoya=0;
            $aceiterefinadogirasol=0;
            $granosoya=0;
            $granogirasol=0;
            $ultimadate=0;


  ?>
	<?php $count=0; ?>

<?php

    

 foreach ($soyas as $soya):

 if ($soya['Grupo']['subcategoria']=='Productor de Oleaginosas') { ?>

<?php $count ++;?>
<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
<?php endif; ?>
		<?php foreach ($soya['Deposito'] as $soyaexistencia):   
				$id=$soyaexistencia['id'];
				$nombredep=$soyaexistencia['nombredeposito'];
				$encargo=$soyaexistencia['encargado'];
				$direcciones=$soyaexistencia['zona'].' '.$soyaexistencia['calle'];
				$telf=$soyaexistencia['telefono'];
				foreach ($soya['SoyaExistencia'] as $soyaexistencia):
					$deposito_id=$soyaexistencia['deposito_id'];
					if ($id==$deposito_id) {
						$tortasoya=$soyaexistencia['tortasolventesoya'];
						$tortagirasol=$soyaexistencia['tortasolventegirasol'];
						$harinasoya=$soyaexistencia['harinaintegralsoya'];
						$harinagirasol=$soyaexistencia['harinaintegralgirasol'];
						$cascarillasoya=$soyaexistencia['cascarillasoya'];
						$cascarillagirasol=$soyaexistencia['cascarillagirasol'];
						$aceitecrudosoya=$soyaexistencia['aceitecrudosoya'];
						$aceiterefinadosoya=$soyaexistencia['aceiterefinadosoya'];
						$aceiterefinadogirasol=$soyaexistencia['aceiterefinadogirasol'];
						$granosoya=$soyaexistencia['granosoya'];
						$granogirasol=$soyaexistencia['granogirasol'];

					}
 				endforeach;
?>	
						<?php if ($tortasoya<3000 || $tortagirasol<3000 || $harinasoya<3000 || $harinagirasol<3000 || $cascarillasoya<3000 ||$cascarillagirasol<3000 || $aceitecrudosoya<3000 || $aceiterefinadosoya<3000 || $aceiterefinadogirasol<3000 || $granosoya<3000 || $granogirasol<3000) :   ?>
        					<tr>
        						<td style="text-align: center;"><?php echo $soya['Soya']['username']; ?></td>
								<td style="text-align: center;"><?php echo $soya['Soya']['nombre']; ?></td>
								<td style="text-align: center;"><?php echo $soya['Soya']['apellido']; ?></td>
								<td style="text-align: center;"><?php echo $soya['Grupo']['categoria']; ?></td>
								<td style="text-align: center;"><?php echo $soya['Grupo']['subcategoria']; ?></td>
								<td style="text-align: center;"><?php echo $soya['Perfil']['codigogeneral']; ?></td>
								<td style="text-align: center;"><?php echo $soya['Perfil']['razonsocial']; ?></td>
								<td style="text-align: center;"><?php echo $nombredep; ?></td>
								<td style="text-align: center;"><?php echo $encargo; ?></td>
								<td style="text-align: center;"><?php echo $direcciones; ?></td>
								<td style="text-align: center;"><?php echo $telf; ?></td>

            					<td style="text-align: center;"><?php 
            					if ($tortasoya<3000) {
            						echo '<h3><strong>'.$tortasoya.'</strong></h3>';
            					}else{
            						echo $tortasoya;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($tortagirasol<3000) {
            						echo '<h3><strong>'.$tortagirasol.'</strong></h3>';
            					}else{
            						echo $tortagirasol;
            					}
            					?></td>
            					


            					<td style="text-align: center;"><?php 
            					if ($harinasoya<3000) {
            						echo '<h3><strong>'.$harinasoya.'</strong></h3>';
            					}else{
            						echo $harinasoya;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($harinagirasol<3000) {
            						echo '<h3><strong>'.$harinagirasol.'</strong></h3>';
            					}else{
            						echo $harinagirasol;
            					}
            					?></td>
            													<td style="text-align: center;"><?php 
            					if ($cascarillasoya<3000) {
            						echo '<h3><strong>'.$cascarillasoya.'</strong></h3>';
            					}else{
            						echo $cascarillasoya;
            					}
            					?></td>
            					
								<td style="text-align: center;"><?php 
            					if ($cascarillagirasol<3000) {
            						echo '<h3><strong>'.$cascarillagirasol.'</strong></h3>';
            					}else{
            						echo $cascarillagirasol;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($aceitecrudosoya<3000) {
            						echo '<h3><strong>'.$aceitecrudosoya.'</strong></h3>';
            					}else{
            						echo $aceitecrudosoya;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($aceiterefinadosoya<3000) {
            						echo '<h3><strong>'.$aceiterefinadosoya.'</strong></h3>';
            					}else{
            						echo $aceiterefinadosoya;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($aceiterefinadogirasol<3000) {
            						echo '<h3><strong>'.$aceiterefinadogirasol.'</strong></h3>';
            					}else{
            						echo $aceiterefinadogirasol;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($granosoya<3000) {
            						echo '<h3><strong>'.$granosoya.'</strong></h3>';
            					}else{
            						echo $granosoya;
            					}
            					?></td>
            					<td style="text-align: center;"><?php 
            					if ($granogirasol<3000) {
            						echo '<h3><strong>'.$granogirasol.'</strong></h3>';
            					}else{
            						echo $granogirasol;
            					}
            					?></td>
            					
        					</tr>
        				<?php endif; ?>
						<?php
						
   					endforeach;	
                }
					?>
 
        <?php endforeach; ?>
        <?php unset($soya); 
        ?>
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

