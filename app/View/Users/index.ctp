<div class="users form">
<h1>Usuarios</h1>
<table>
    <thead>
        <tr>
            <th><?php echo $this->Form->checkbox('all', array('nombre' => 'CheckAll',  'id' => 'CheckAll')); ?></th>
            
            <th><?php echo $this->Paginator->sort('username', 'Nombre de Usuario');?>  </th>
            <th><?php echo $this->Paginator->sort('nombre','Nombre');?></th>
            <th><?php echo $this->Paginator->sort('apellido','Apellidos');?></th>
            <th><?php echo $this->Paginator->sort('email', 'E-Mail');?></th>
            <th><?php echo $this->Paginator->sort('creacion', 'Fecha Creación');?></th>
            <th><?php echo $this->Paginator->sort('grupo_id','Categoría');?></th>
            <th><?php echo $this->Paginator->sort('grupo_id','Sub-Categoría');?></th>
            <th><?php echo $this->Paginator->sort('aprobacion','Usuario Activado');?></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($users as $user): ?>                
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td><?php echo $this->Form->checkbox('User.id.'.$user['User']['id']); ?></td>
            <td><?php echo $this->Html->link( $user['User']['username']  ,   array('action'=>'edit', $user['User']['id']),array('escape' => false) );?></td>
            <td style="text-align: center;"><?php echo $user['User']['nombre']; ?></td>
            <td style="text-align: center;"><?php echo $user['User']['apellido']; ?></td>
            <td style="text-align: center;"><?php echo $user['User']['email']; ?></td>
            <td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['creacion']); ?></td>
            <td style="text-align: center;"><?php echo $user['Grupo']['categoria']; ?></td>
            <td style="text-align: center;"><?php echo $user['Grupo']['subcategoria']; ?></td>
            <td style="text-align: center;"><?php echo $user['User']['aprobacion']; ?></td>
            <td >
            <?php echo $this->Html->link("Editar", array('action'=>'edit', $user['User']['id']) ); ?> | 
            <?php
                if( $user['User']['aprobacion'] != 0){ 
                    echo $this->Html->link("Borrar", array('action'=>'delete', $user['User']['id']));}else{
                    echo $this->Html->link("Re-Activar", array('action'=>'activate', $user['User']['id']));
                    }
            ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php unset($user); ?>
    </tbody>
</table>
<?php echo $this->Paginator->prev('<< ' . __('anterior ', true), array(), null, array('class'=>'disabled'));?>
<?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php echo $this->Paginator->next(__(' siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));?>
</div>   
<div class="actions">             
<h3>Acciones</h3>
<ul>

<li><?php echo $this->Html->link( "Agregar un Nuevo Usuario.",   array('action'=>'add'),array('escape' => false) ); ?></li>
<br/>
</ul>
<ul>

<li><?php 
echo $this->Html->link( "Salir",   array('action'=>'logout') ); 
?></li>
</ul>
</div>
