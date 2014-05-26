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
<div class="soyaproductorderivados form">
<?php if($soyaasociacioneses){ ?>
<h3>Clientes de los Productores de Soya</h3>
<table>
    <thead>
        <tr>
          
            <th><?php echo $this->Paginator->sort('nombre', 'Nombre Asociacion');?></th>

            <th><?php echo $this->Paginator->sort('rubro', 'Nombre Asociacion');?></th>

            <th><?php echo $this->Paginator->sort('subrubro', 'Nombre Asociacion');?></th>
            <th><?php echo $this->Paginator->sort('Ciudad.nom_ciudad', 'Ciudad');?></th>

            <th><?php echo $this->Paginator->sort('fecha','Fecha de Registro');?></th>
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyaasociacioneses  as $soyaasociaciones): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyaasociaciones['SoyaAsociaciones']['nombre']; ?></td>
            <td style="text-align: center;"><?php echo $soyaasociaciones['SoyaRubro']['rubro']; ?></td>
            <td style="text-align: center;"><?php echo $soyaasociaciones['SoyaSubrubro']['subrubro']; ?></td>
            <td style="text-align: center;"><?php echo $soyaasociaciones['Ciudad']['nom_ciudad']; ?></td>
   
            <td style="text-align: center;"><?php echo $this->Time->niceShort($soyaasociaciones['SoyaAsociaciones']['fecha']); ?></td>
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
