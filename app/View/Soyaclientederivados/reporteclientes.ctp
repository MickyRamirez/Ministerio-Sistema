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
<?php if($soyaclientederivados){ ?>
<h3>Clientes de las Empresas Oleaginosas para Venta de Grano</h3>
<table>
    <thead>
        <tr>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('id', 'ID');?>  </th>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('razonsocial', 'Nombre o Razon Social');?>  </th>
             <th style="text-align: center;"><?php echo $this->Paginator->sort('nit','Nombre de la Empresa');?></th>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('nit','NIT');?></th>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('nombres', 'Asociacion');?></th>
            <th style="text-align: center;"><?php echo $this->Paginator->sort('fecharegistro','Fecha de Registro');?></th>
        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyaclientederivados as $soyaclientederivado): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $soyaclientederivado['SoyaClienteDerivado']['id']; ?></td>
            <td style="text-align: center;"><?php echo $soyaclientederivado['SoyaClienteDerivado']['razonsocial']; ?></td> 
            <td style="text-align: center;"><?php echo $soyaclientederivado['User']['username']; ?></td> 

            <td style="text-align: center;"><?php echo $soyaclientederivado['SoyaClienteDerivado']['nit']; ?></td>
            <td style="text-align: center;"><?php 
            if(empty($soyaclientederivado['SoyaAsociaciones']['nombre']))
            { 
                echo 'No Pertenece a Ninguna Asociación'; 
            }else{ 
                echo $soyaclientederivado['SoyaAsociaciones']['nombre']; 
            } 
            ?></td>
               
            <td style="text-align: center;"><?php echo $this->Time->niceShort($soyaclientederivado['SoyaClienteDerivado']['fecharegistro']); ?></td>
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


