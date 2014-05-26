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
            <th><?php echo $this->Paginator->sort('', 'Nombre deposito');?></th>
            <th><?php echo $this->Paginator->sort('', 'Nombre encargado');?></th>
            <th><?php echo $this->Paginator->sort('', 'Nombre zona');?></th>
            <th><?php echo $this->Paginator->sort('', 'Telefono');?></th>
            <th><?php echo 'Cantidad de PPBB';?></th>
            <th><?php echo 'Cantidad hembras';?></th>
            <th><?php echo 'Cantidad machos';?></th>
            <th><?php echo 'Cantidad ponedoras';?></th>
            <th><?php echo 'Recria';?></th>
        </tr>
    </thead>
    <tbody> 
    <?php $count=0; ?>
    <?php foreach ($avicolas as $avicola): ?>
    <?php $count ++;?>
    <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
    <?php endif; ?>
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
                    
                        <?php if ($ultimappbb<3000 || $ultimahembras<3000 || $ultimamachos<3000 || $ultimaponedoras<3000 || $ultimarecria<3000) :   ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $avicola['Avicola']['username']; ?></td>
                                <td style="text-align: center;"><?php echo $avicola['Avicola']['nombre']; ?></td>
                                <td style="text-align: center;"><?php echo $avicola['Avicola']['apellido']; ?></td>
                                <td style="text-align: center;"><?php echo $avicola['Grupo']['categoria']; ?></td>
                                <td style="text-align: center;"><?php echo $avicola['Grupo']['subcategoria']; ?></td>
                                <td style="text-align: center;"><?php echo $avicola['Perfil']['codigogeneral']; ?></td>
                                <td style="text-align: center;"><?php echo $avicola['Perfil']['razonsocial']; ?></td>
                                <td style="text-align: center;"><?php echo $nombredep; ?></td>
                                <td style="text-align: center;"><?php echo $encargo; ?></td>
                                <td style="text-align: center;"><?php echo $direcciones; ?></td>
                                <td style="text-align: center;"><?php echo $telf; ?></td>

                                <td style="text-align: center;"><?php 
                                if ($ultimappbb<3000) {
                                    echo '<h3><strong>'.$ultimappbb.'</strong></h3>';
                                }else{
                                    echo $ultimappbb;
                                }
                                ?></td>
                                <td style="text-align: center;"><?php 
                                if ($ultimahembras<3000) {
                                    echo '<h3><strong>'.$ultimahembras.'</strong></h3>';
                                }else{
                                    echo $ultimahembras;
                                }
                                ?></td>
                                <td style="text-align: center;"><?php 
                                if ($ultimamachos<3000) {
                                    echo '<h3><strong>'.$ultimamachos.'</strong></h3>';
                                }else{
                                    echo $ultimamachos;
                                }
                                ?></td>
                                <td style="text-align: center;"><?php 
                                if ($ultimaponedoras<3000) {
                                    echo '<h3><strong>'.$ultimaponedoras.'</strong></h3>';
                                }else{
                                    echo $ultimaponedoras;
                                }
                                ?></td>
                                <td style="text-align: center;"><?php 
                                if ($ultimarecria<3000) {
                                    echo '<h3><strong>'.$ultimarecria.'</strong></h3>';
                                }else{
                                    echo $ultimarecria;
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

