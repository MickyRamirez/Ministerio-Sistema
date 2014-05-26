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
<div class="soyaproductorcompras form">
<?php if($soyaproveedores){ ?>
<h3>Proveedores para Compra de Grano</h3>
<table>
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id','Id de Proveedor');?></th>
            <th><?php echo $this->Paginator->sort('Soya.username','Nombre');?></th>
            
            <th><?php echo $this->Paginator->sort('nombre','Nombre Proveedor o Razon Social');?></th>
            <th><?php echo $this->Paginator->sort('cionit', 'Carnet o NIT');?></th>
            <th><?php echo $this->Paginator->sort('codigo','Codigo de Proveedor');?></th>
            <th><?php echo $this->Paginator->sort('regimen','Regimen Tributario');?></th>
            <th><?php echo $this->Paginator->sort('fecharegistro','Fecha Registro');?></th>
            

        </tr>
    </thead>
    <tbody>                       
        <?php $count=0; ?>
        <?php foreach($soyaproveedores as $soyaproveedor): ?>               
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>

            <td style="text-align: center;"><?php echo $soyaproveedor['SoyaProveedor']['id']; ?></td>
            <td style="text-align: center;"><?php echo $soyaproveedor['Soya']['username']; ?></td>
            <td style="text-align: center;"><?php echo $soyaproveedor['SoyaProveedor']['nombre']; ?></td>

            <td style="text-align: center;"><?php echo $soyaproveedor['SoyaProveedor']['cionit']; ?></td>
            <td style="text-align: center;"><?php echo $soyaproveedor['SoyaProveedor']['codigo']; ?></td>
            <td style="text-align: center;"><?php echo $soyaproveedor['SoyaProveedor']['regimen']; ?></td>
            <td style="text-align: center;"><?php echo $soyaproveedor['SoyaProveedor']['fecharegistro']; ?></td>
            
        </tr>
        <?php endforeach; ?>
        <?php unset($soyaproveedor); ?>
    </tbody>
</table>
</div>    
<?php 
}else{
     echo "<div class='no-records-found'>No se encontro existencias.</div>";
 }
 ?>