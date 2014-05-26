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
<div class="soyacampana form">
<?php if($soyacampana){ ?>
<h3>Periodos de campañas</h3>
<table>
    <thead>
        <tr>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('nomcampana', 'Nombre de la Campaña');?>  </th>

            <th style="text-align: center;"><?php echo $this->Paginator->sort('catcampana','Categoria de la Campaña');?></th>

            <th style="text-align: center;"><?php echo $this->Paginator->sort('fechaini', 'Fecha Inicio de Campaña');?>  </th>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('fechafin','Fecha Fin de Campaña');?></th>

            <th style="text-align: center;"><?php echo $this->Paginator->sort('fecharegistro','Fecha de Registro');?></th>
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyacampana as $soyacampanas): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyacampanas['SoyaCampana']['nomcampana']; ?></td> 
            
            <td style="text-align: center;"><?php echo $soyacampanas['SoyaCampana']['catcampana']; ?></td> 
            
            <td style="text-align: center;"><?php echo $soyacampanas['SoyaCampana']['fechaini']; ?></td> 
            <td style="text-align: center;"><?php echo $soyacampanas['SoyaCampana']['fechafin']; ?></td>
               
            <td style="text-align: center;"><?php echo $this->Time->niceShort($soyacampanas['SoyaCampana']['fecharegistro']); ?></td>
        </tr>
        <?php endforeach; ?>
        
    </tbody>
</table>
</div>      
<?php 
}else{
     echo "<div class='no-records-found'>No se encontro ningun periodo.</div>";
 }
?>