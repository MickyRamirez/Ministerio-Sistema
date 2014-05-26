<div class="azucarexistencias form">
<?php if($azucares){ ?>
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
      
            <th><?php echo $this->Paginator->sort('aprobacion', 'Usuario activado?');?></th>
            <th>Ingenio alcohol exportación</th>
            <th>Ingenio alcohol mercado interno</th>
            <th>Ingenio azucar exportación</th>
            <th>Ingenio azucar mercado interno</th>
            <th>Ingenio azucar entrega</th>
            <th>Ingenio Producción</th>
            <th>Ingenio Recepción</th>
            <th>Azucar Existencia</th>

        </tr>
    </thead>
    <tbody> 
<?php $count=0; ?>
<?php foreach ($azucares as $azucar): ?>
<?php $count ++;?>
<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
<?php endif; ?>
            <td style="text-align: center;"><?php echo $azucar['Azucar']['username']; ?></td>
            <td style="text-align: center;"><?php echo $azucar['Azucar']['nombre']; ?></td>
            <td style="text-align: center;"><?php echo $azucar['Azucar']['apellido']; ?></td>
            <td style="text-align: center;"><?php echo $azucar['Azucar']['email']; ?></td>
            <td style="text-align: center;"><?php echo $azucar['Grupo']['categoria']; ?></td>
            <td style="text-align: center;"><?php echo $azucar['Grupo']['subcategoria']; ?></td>
            <td style="text-align: center;"><?php echo $azucar['Perfil']['codigogeneral']; ?></td>
            <td style="text-align: center;"><?php echo $azucar['Perfil']['razonsocial']; ?></td>
            <td style="text-align: center;"><?php echo $azucar['Perfil']['nombrecomercial']; ?></td>
            <td style="text-align: center;"><?php echo $azucar['Perfil']['nit']; ?></td>
            <td style="text-align: center;"><?php echo $azucar['Perfil']['nummatricula']; ?></td>
 
            <td style="text-align: center;"><?php 
            if($azucar['Azucar']['aprobacion']==1){
                    echo 'Usuario activado';

                } else{
                    echo 'Usuario no activado';
                }
                ?></td>
        <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportalcoholexportaciones', $azucar['Azucar']['id'])); ?>
        </td>

        <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportalcoholmercadosinternos', $azucar['Azucar']['id'])); ?>
        </td>
         <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportazucarexportaciones', $azucar['Azucar']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportazucarmercadosinternos', $azucar['Azucar']['id'])); ?>
        </td>
          <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportazucarentregas', $azucar['Azucar']['id'])); ?>
        </td>
           <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportazucaringenioproducciones', $azucar['Azucar']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportazucaringeniorecepciones', $azucar['Azucar']['id'])); ?>
        </td>
         
           
          <td>
            <?php echo $this->Html->link('Reporte', array('action' => 'reportazucarexistencias', $azucar['Azucar']['id'])); ?>
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
<li><?php echo $this->Html->link( "Volver Atras",   array('action'=>'view') ); ?></li>
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

