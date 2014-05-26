<style type="text/css">

th,td {
           border-style: inset;
           border-collapse: collapse; 
      }
td {font-size:10pt;
    font-family:Arial;
    text-align: center;
    background-color: #C0D9D9;
    }

th {font-size:15pt;
    font-family:Arial;
    text-align: center;
    font-weight: bold; 
    background-color: #7093DB;}

</style> 
<div class="soyacambiodolar form">
<?php if($soyapreciointernacionales){ ?>
<h3>Soya precio internacional</h3>
<table>
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('cliente','Nombre Usuario');?></th>
            <th><?php echo $this->Paginator->sort('nombre','Nombre');?></th>
            <th><?php echo $this->Paginator->sort('apellido', 'Apellidos');?></th>
            <th><?php echo $this->Paginator->sort('asociacion','Pais');?></th>  
            <th><?php echo $this->Paginator->sort('asociacion','Precio');?></th>

            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha Registro');?></th>
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyapreciointernacionales as $soyapreciointernacional): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyapreciointernacional['User']['username']; ?></td>
            <td style="text-align: center;"><?php echo $soyapreciointernacional['User']['nombre']; ?></td>
            <td style="text-align: center;"><?php echo $soyapreciointernacional['User']['apellido']; ?></td>
            <td style="text-align: center;"><?php echo $soyapreciointernacional['SoyaPrecioInternacional']['pais']; ?></td>
	    <td style="text-align: center;"><?php echo $soyapreciointernacional['SoyaPrecioInternacional']['precio']; ?></td>
            <td style="text-align: center;"><?php echo $this->Time->niceShort($soyapreciointernacional['SoyaPrecioInternacional']['fecha']); ?></td>
        </tr>
        <?php endforeach; ?>
        <?php unset($soyaclientederivados); ?>
    </tbody>
</table>
</div>      
<?php 
}else{
     echo "<div class='no-records-found'>No se encontro existencias.</div>";
 }
?>

