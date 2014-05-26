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
<?php ?>


<div class="soyaproductorderivados form">
<?php if($soyasubrubros){ ?>
<h3>Panel de Rubros </h3>
<table>
    <thead>
        <tr>
           
            <th><?php echo $this->Paginator->sort('rubro','Rubro');?></th>            
            <th><?php echo $this->Paginator->sort('subrubro','Subrubro');?></th>
  

        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyasubrubros as $soyasubrubro): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyasubrubro['SoyaRubro']['rubro']; ?></td>
            <td style="text-align: center;"><?php echo $soyasubrubro['SoyaSubrubro']['subrubro']; ?></td>
     
        </tr>
        <?php endforeach; ?>
        <?php unset($soyaproductorderivado); ?>
    </tbody>
</table>
</div>      



<?php 
}else{
     echo "<div class='no-records-found'>No se encontro existencias.</div>";
 }

?>

