<div class="azucarexistencias form">
<?php if($azucarreportes){ ?>
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
            <th>Ingenio alcohol exportación</th>
            <th>Ingenio alcohol mercado interno</th>
            <th>Ingenio azucar exportación</th>
            <th>Ingenio azucar mercado interno</th>
            <th>Ingenio azucar entrega</th>
            <th>Ingenio Producción</th>
            <th>Ingenio Recepción</th>
            <th>Institucion alcohol exportación</th>
            <th>Institucion alcohol mercado interno</th>
            <th>Institucion azucar exportación</th>
            <th>Institucion azucar mercado interno</th>
		    <th>Institucion segun derecho propietario</th>
            <th>Azucar existencia</th>
            <th>Control Tecnico Cañero produccion</th>
            <th>Control Tecnico Cañero recepcion</th>
        </tr>
    </thead>
    <tbody> 
<?php $count=0; ?>
<?php foreach ($azucarreportes as $azucarreporte): ?>
<?php $count ++;?>
<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
<?php endif; ?>
            <td style="text-align: center;"><?php echo $azucarreporte['Azucarreporte']['username']; ?></td>
            <td style="text-align: center;"><?php echo $azucarreporte['Azucarreporte']['nombre']; ?></td>
            <td style="text-align: center;"><?php echo $azucarreporte['Azucarreporte']['apellido']; ?></td>
            <td style="text-align: center;"><?php echo $azucarreporte['Azucarreporte']['email']; ?></td>
            <td style="text-align: center;"><?php echo $azucarreporte['Grupo']['categoria']; ?></td>
            <td style="text-align: center;"><?php echo $azucarreporte['Grupo']['subcategoria']; ?></td>
            <td style="text-align: center;"><?php echo $azucarreporte['Perfil']['codigogeneral']; ?></td>
            <td style="text-align: center;"><?php echo $azucarreporte['Perfil']['razonsocial']; ?></td>
            <td style="text-align: center;"><?php echo $azucarreporte['Perfil']['nombrecomercial']; ?></td>
            <td style="text-align: center;"><?php echo $azucarreporte['Perfil']['nit']; ?></td>
            <td style="text-align: center;"><?php echo $azucarreporte['Perfil']['nummatricula']; ?></td>
            <td style="text-align: center;"><?php echo $azucarreporte['Perfil']['subciudad']; ?></td>
            <td style="text-align: center;"><?php 
            if($azucarreporte['Azucarreporte']['aprobacion']==1){
                    echo 'Usuario activado';

                } else{
                    echo 'Usuario no activado';
                }
                ?></td>
        <td>
            <?php echo $this->Html->link('ingenioalcoholexportacion', array('controller' => 'Reportealcoholexportaciones', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
         <td>
            <?php echo $this->Html->link('ingenioalcoholmercadointerno', array('controller' => 'Reportealcoholmercadointernos', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
         <td>
            <?php echo $this->Html->link('ingenioazucarexportacion', array('controller' => 'Reporteazucarexportaciones', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('ingenioazucarmercadointerno', array('controller' => 'Reporteazucarmercadointernos', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
          <td>
            <?php echo $this->Html->link('ingenioentrega', array('controller' => 'Reporteazucarentregas', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
           <td>
            <?php echo $this->Html->link('ingenioproduccion', array('controller' => 'Reporteingenioproducciones', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('ingeniorecepcion', array('controller' => 'Reporteingeniorecepciones', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
          <td>
            <?php echo $this->Html->link('institucionalcoholexportacion', array('controller' => 'Reporteinstitucionalalcoholexportaciones', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
         <td>
            <?php echo $this->Html->link('institucionalcoholmercadointerno', array('controller' => 'Reporteinstitucionalcoholmercadointernos', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
         <td>
            <?php echo $this->Html->link('institucionazucarexportacion', array('controller' => 'Reporteinstitucionazucarexportaciones', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
          <td>
            <?php echo $this->Html->link('institucionazucarmercadointerno', array('controller' => 'Reporteinstitucionazucarmercadointernos', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('institucionsegunpropietario', array('controller' => 'Reporteinstitucionsegunpropietarios', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
          <td>
            <?php echo $this->Html->link('azucarexistencia', array('controller' => 'Reporteazucarexistencias', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
        <td><?php echo $this->Html->link('ctcproduccion', array('controller' => 'Reportectcproducciones', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
         <td><?php echo $this->Html->link('ctcrecepcion', array('controller' => 'Reportectcrecepciones', 'action' => 'export_xls', $azucarreporte['Azucarreporte']['id'])); ?>
        </td>
               

    </tr>
    <?php endforeach; ?>
    <?php unset($azucarreporte); ?>
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
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'view') ); ?></li>
</ul>

</div>

