<div class="azucarexistencias form">
<?php if($soyareportes){ ?>
<h3>Panel de Reportes Generales</h3>
<table>
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('username', 'Nombre de Usuario');?> </th>
            <th><?php echo $this->Paginator->sort('nombre', 'Nombre (s)');?> </th>
            <th><?php echo $this->Paginator->sort('apellido', 'Apellido (s)');?> </th>
            <th><?php echo $this->Paginator->sort('email', 'Email');?></th>
            <th><?php echo $this->Paginator->sort('Grupo.categoria', 'Categoria');?></th>
            <th><?php echo $this->Paginator->sort('Grupo.subcategoria', 'Sub-Categoria');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.codigogeneral', 'Codigo General');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.razonsocial', 'Nombre o Razon Social');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.nombrecomercial', 'Nombre Comercial');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.nit', 'NIT');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.nummatricula', 'Numero Matricula');?></th>
            <th><?php echo $this->Paginator->sort('Perfil.subciudad', 'Ciudad');?></th>
            <th><?php echo $this->Paginator->sort('aprobacion', 'Usuario activado?');?></th>
	        <th>Soya existencia</td>
            <th>Soya productor compra</td>
            <th>Soya productor derivado</td>
            <th>Soya productor venta</th>
            <th>Soya soyero venta</th>
        </tr>
    </thead>
    <tbody> 
    <?php $count=0; ?>
    <?php foreach ($soyareportes as $soyareporte): ?>
    <?php $count ++;?>
    <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
    <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyareporte['Soyareporte']['username']; ?></td>
            <td style="text-align: center;"><?php echo $soyareporte['Soyareporte']['nombre']; ?></td>
            <td style="text-align: center;"><?php echo $soyareporte['Soyareporte']['apellido']; ?></td>
            <td style="text-align: center;"><?php echo $soyareporte['Soyareporte']['email']; ?></td>
            <td style="text-align: center;"><?php echo $soyareporte['Grupo']['categoria']; ?></td>
            <td style="text-align: center;"><?php echo $soyareporte['Grupo']['subcategoria']; ?></td>
            <td style="text-align: center;"><?php echo $soyareporte['Perfil']['codigogeneral']; ?></td>
            <td style="text-align: center;"><?php echo $soyareporte['Perfil']['razonsocial']; ?></td>
            <td style="text-align: center;"><?php echo $soyareporte['Perfil']['nombrecomercial']; ?></td>
            <td style="text-align: center;"><?php echo $soyareporte['Perfil']['nit']; ?></td>
            <td style="text-align: center;"><?php echo $soyareporte['Perfil']['nummatricula']; ?></td>
            <td style="text-align: center;"><?php echo $soyareporte['Perfil']['subciudad']; ?></td>
            <td style="text-align: center;"><?php 
            if($soyareporte['Soyareporte']['aprobacion']==1){
                    echo 'Usuario activado';

                } else{
                    echo 'Usuario no activado';
                }
                ?></td>

        <td><?php echo $this->Html->link('soyaexistencia', array('controller' => 'Reportesoyaexistencias', 'action' => 'export_xls', $soyareporte['Soyareporte']['id'])); ?>
        </td>
         <td>
            <?php echo $this->Html->link('soyaproductorcompra', array('controller' => 'Reportesoyaproductorcompras', 'action' => 'export_xls', $soyareporte['Soyareporte']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('soyaproductorderivado', array('controller' => 'Reportesoyaproductorderivados', 'action' => 'export_xls', $soyareporte['Soyareporte']['id'])); ?>
        </td>
         <td>
            <?php echo $this->Html->link('soyaproductorventa', array('controller' => 'Reportesoyaproductorventas', 'action' => 'export_xls', $soyareporte['Soyareporte']['id'])); ?>
        </td>
         <td>
            <?php echo $this->Html->link('soyasoyeroventa', array('controller' => 'Reportesoyasoyeroventas', 'action' => 'export_xls', $soyareporte['Soyareporte']['id'])); ?>
        </td>
    </tr>
      <?php endforeach; ?>
    <?php unset($soyarreporte); ?>
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
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'view') ); ?></li>
</ul>
<ul>
<li><?php 
if($this->Session->check('Auth.User')){
echo "<br>";
echo $this->Html->link( "Cerrar Sesión",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?></li>
</ul>


</di