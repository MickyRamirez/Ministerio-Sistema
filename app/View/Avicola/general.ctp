<div class="avicolaexistencias form">
<?php if($avicolas){ ?>
<h3>Panel de Alarmas</h3>
<table>
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('username', 'Nombre de Usuario');?> </th>
            <th><?php echo $this->Paginator->sort('nombre', 'Nombre (s)');?> </th>
            <th><?php echo $this->Paginator->sort('apellido', 'Apellido (s)');?> </th>
            <th><?php echo $this->Paginator->sort('Grupo.categoria', 'Categoria');?></th>
            <th><?php echo $this->Paginator->sort('Grupo.subcategoria', 'Sub-Categoria');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.codigogeneral', 'Codigo General');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.razonsocial', 'Nombre o Razon Social');?></th>

            <th><?php echo $this->Paginator->sort('Depositos', 'Ultimas existencias registradas por Deposito');?></th>


        </tr>
    </thead>
    <tbody> 
    <?php $count=0; ?>
    <?php foreach ($avicolas as $avicola): ?>
    <?php $count ++;?>
    <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
    <?php endif; ?>
		<td style="text-align: center;"><?php echo $avicola['Avicola']['username']; ?></td>
        <td style="text-align: center;"><?php echo $avicola['Avicola']['nombre']; ?></td>
        <td style="text-align: center;"><?php echo $avicola['Avicola']['apellido']; ?></td>
        <td style="text-align: center;"><?php echo $avicola['Grupo']['categoria']; ?></td>
        <td style="text-align: center;"><?php echo $avicola['Grupo']['subcategoria']; ?></td>
        <td style="text-align: center;"><?php echo $avicola['Perfil']['codigogeneral']; ?></td>
        <td style="text-align: center;"><?php echo $avicola['Perfil']['razonsocial']; ?></td>
		<td style="text-align: center;">
					<table cellspacing="5" cellpadding="2">
							<tr>
            					<td><h4><strong>Nombre Deposito</strong></h4></td>
            					<td><h4><strong>Encargado Deposito</strong></h4></td>
            					<td><h4><strong>Direccion Deposito</strong></h4></td>
            					<td><h4><strong>Telefono Deposito</strong></h4></td>

            					<td><h4><strong>Cantidad de PPBB</strong></h4></td>
           						<td><h4><strong>Cantidad hembras</strong></h4></td>
            					<td><h4><strong>Cantidad machos</strong></h4></td>
            					<td><h4><strong>Cantidad ponedoras</strong></h4></td>
            					<td><h4><strong>Recria</strong></h4></td>
            					
        					</tr>
        <?php foreach ($avicola['Deposito'] as $avicolaexistencia):   
                $id=$avicolaexistencia['id'];
                $nombredep=$avicolaexistencia['nombredeposito'];
                $encargo=$avicolaexistencia['encargado'];
                $direcciones=$avicolaexistencia['zona'].' '.$avicolaexistencia['calle'];
                $telf=$avicolaexistencia['telefono'];
                foreach ($avicola['AvicolaExistencia'] as $avicolaexistencia):
                    $deposito_id=$avicolaexistencia['deposito_id'];
                    if ($id==$deposito_id) {
                        $ultimappbb=$avicolaexistencia['cantidadppbb'];
                        $ultimahembras=$avicolaexistencia['cantidadhembras'];
                        $ultimamachos=$avicolaexistencia['cantidadmachos'];
                        $ultimaponedoras=$avicolaexistencia['cantidadponedoras'];
                        $ultimarecria=$avicolaexistencia['recria'];
                    }
                endforeach;
        ?>  
						
        					<tr>
								<td><?php echo $nombredep; ?></td>
								<td><?php echo $encargo; ?></td>
								<td><?php echo $direcciones; ?></td>
								<td><?php echo $telf; ?></td>
            					<td><?php echo $ultimappbb; ?></td>
            					<td><?php echo $ultimahembras; ?></td>
            					<td><?php echo $ultimamachos; ?></td>
            					<td><?php echo $ultimaponedoras; ?></td>
            					<td><?php echo $ultimarecria; ?></td>
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
<li><?php 
if($this->Session->check('Auth.User')){
echo "<br>";
echo $this->Html->link( "Cerrar Sesion",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?></li>
</ul>
<ul>
<li><?php echo $this->Html->link( "Volver Escritorio",   array('action'=>'index') ); ?></li>
</ul>

</div>

