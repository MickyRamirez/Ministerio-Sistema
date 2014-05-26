<div class="soyaexistencias form">
<?php if($soyas){ ?>
<h3>Panel de Existencias en Depositos</h3>
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
<?php foreach ($soyas as $soya): ?>
<?php $count ++;?>
<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
<?php endif; ?>
                <td style="text-align: center;"><?php echo $soya['Soya']['username']; ?></td>
                <td style="text-align: center;"><?php echo $soya['Soya']['nombre']; ?></td>
                <td style="text-align: center;"><?php echo $soya['Soya']['apellido']; ?></td>
                <td style="text-align: center;"><?php echo $soya['Grupo']['categoria']; ?></td>
                <td style="text-align: center;"><?php echo $soya['Grupo']['subcategoria']; ?></td>
                <td style="text-align: center;"><?php echo $soya['Perfil']['codigogeneral']; ?></td>
                <td style="text-align: center;"><?php echo $soya['Perfil']['razonsocial']; ?></td>


          

          <td style="text-align: center;">
          <table cellspacing="5" cellpadding="2">
              <tr>
                      <td><h4><strong>Nombre Deposito</strong></h4></td>
                      <td><h4><strong>Encargado Deposito</strong></h4></td>
                      <td><h4><strong>Direccion Deposito</strong></h4></td>
                      <td><h4><strong>Telefono Deposito</strong></h4></td>
                      <th><h4><strong>Tota Solvente Soya</strong></h4></th>
                      <th><h4><strong>Torta Solvente Girasol</strong></h4></th>
                      <th><h4><strong>Harina Integral Soya</strong></h4></th>
                      <th><h4><strong>Harina Integeal Girasol</strong></h4></th>
                      <th><h4><strong>Cascarilla de Soya</strong></h4></th>
                      <th><h4><strong>Cascarilla de Girasol</strong></h4></th>
                      <th><h4><strong>Aceite Crudo Soya</strong></h4></th>
                      <th><h4><strong>Aceite Refinado Soya</strong></h4></th>
                      <th><h4><strong>Aceite Refinado Girasol</strong></h4></th>
                      <th><h4><strong>Grano Soya</strong></h4></th>
                      <th><h4><strong>Grano Girasol</strong></h4></th>
                      <td><h4><strong>Ultima fecha que se registro</strong></h4></td>
                      
              </tr>
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
            $ultimadate=$soyaexistencia['fecharegistro'];

          }
        endforeach;
?>  
             <tr>
                <td><?php echo $nombredep; ?></td>
                <td><?php echo $encargo; ?></td>
                <td><?php echo $direcciones; ?></td>
                <td><?php echo $telf; ?></td>
                <td><?php echo $tortasoya; ?></td>
                <td><?php echo $tortagirasol; ?></td>
                <td><?php echo $harinasoya; ?></td>
                <td><?php echo $harinagirasol; ?></td>
                <td><?php echo $cascarillasoya; ?></td>
                <td><?php echo $cascarillagirasol; ?></td>
                <td><?php echo $aceitecrudosoya; ?></td>
                <td><?php echo $aceiterefinadosoya; ?></td>
                <td><?php echo $aceiterefinadogirasol; ?></td>
                <td><?php echo $granosoya; ?></td>
                <td><?php echo $granogirasol; ?></td>
                <td><?php echo $ultimadate; ?></td>
                      
              </tr>
            <?php endforeach; ?>
              </table>
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

