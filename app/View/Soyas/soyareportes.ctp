<div class="azucarexistencias form">
<?php if($soyas){ ?>
<h3>Panel de Reportes Generales</h3>
<table>
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('username', 'Nombre de Usuario');?> </th>
            <th><?php echo $this->Paginator->sort('nombre', 'Nombre (s)');?> </th>
            <th><?php echo $this->Paginator->sort('apellido', 'Apellido (s)');?> </th>
            <th><?php echo $this->Paginator->sort('email', 'Email');?></th>
            <th><?php echo $this->Paginator->sort('Grupo.categoria', 'Categoría');?></th>
            <th><?php echo $this->Paginator->sort('Grupo.subcategoria', 'Sub-Categoría');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.codigogeneral', 'Codigo General');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.razonsocial', 'Nombre o Razón Social');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.nombrecomercial', 'Nombre Comercial');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.nit', 'NIT');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.nummatricula', 'Número Matricula');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.subciudad', 'Ciudad');?></th>
            <th><?php echo $this->Paginator->sort('aprobacion', 'Usuario activado?');?></th>
	        <th>Soya existencia</td>
            <th>Soya productor compra</td>
            <th>Soya productor derivado</td>
            <th>Producción</th>
            <th>Exportación</th>
            <th>Venta local</th>
            <th>Compra grano</th>
         
        </tr>
    </thead>
    <tbody> 
    <?php $count=0; ?>
    <?php foreach ($soyas as $soya): ?>
    <?php $count ++;?>
    <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
    <?php endif; ?>
            <td style="text-align: center;"><?php echo $soya['Soya']['username']; ?></td>
            <td style="text-align: center;"><?php echo $soya['Soya']['nombre']; ?></td>
            <td style="text-align: center;"><?php echo $soya['Soya']['apellido']; ?></td>
            <td style="text-align: center;"><?php echo $soya['Soya']['email']; ?></td>
            <td style="text-align: center;"><?php echo $soya['Grupo']['categoria']; ?></td>
            <td style="text-align: center;"><?php echo $soya['Grupo']['subcategoria']; ?></td>
            <td style="text-align: center;"><?php echo $soya['Perfil']['codigogeneral']; ?></td>
            <td style="text-align: center;"><?php echo $soya['Perfil']['razonsocial']; ?></td>
            <td style="text-align: center;"><?php echo $soya['Perfil']['nombrecomercial']; ?></td>
            <td style="text-align: center;"><?php echo $soya['Perfil']['nit']; ?></td>
            <td style="text-align: center;"><?php echo $soya['Perfil']['nummatricula']; ?></td>
            <td style="text-align: center;"><?php echo $soya['Perfil']['subciudad']; ?></td>
            <td style="text-align: center;"><?php 
            if($soya['Soya']['aprobacion']==1){
                    echo 'Usuario activado';

                } else{
                    echo 'Usuario no activado';
                }
                ?></td>

        <td><?php echo $this->Html->link('Reporte', array('action' => 'reportsoyaexistencias', $soya['Soya']['id'])); ?>
        </td>
         <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportsoyaproductorcompras', $soya['Soya']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportesoyaproductorderivados', $soya['Soya']['id'])); ?>
        </td>
         <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportesoyaproducciones', $soya['Soya']['id'])); ?>
        </td>
         <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportesoyaexportaciones', $soya['Soya']['id'])); ?>
        </td>
         <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportesoyaventaslocales', $soya['Soya']['id'])); ?>
        </td>
         <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportesoyacomprasgranos', $soya['Soya']['id'])); ?>
        </td>




         
    </tr>
      <?php endforeach; ?>
    <?php unset($soya); ?>
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
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'operaciones') ); ?></li>
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


</di
