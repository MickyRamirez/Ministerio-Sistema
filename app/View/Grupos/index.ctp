<h1>Grupos</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre Categoria</th>
        <th>Nonbre Subcategoria</th>
        <th>Creacion</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($grupos as $grupo): ?>
    <tr>
        <td><?php echo $grupos['Grupo']['id']; ?></td>
        <td><?php echo $grupos['Grupo']['categoria']; ?></td>
        <td><?php echo $grupos['Grupo']['subcategoria']; ?></td>
        <td><?php echo $grupos['Grupo']['creacion']; ?></td>
        
    </tr>
    <?php endforeach; ?>

</table>



<?php 
echo $this->Html->link( "Return to Dashboard",   array('action'=>'index') ); 
?>