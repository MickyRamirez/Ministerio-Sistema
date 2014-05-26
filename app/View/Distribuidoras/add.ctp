<h1>Area de registro de Distribuidora</h1>
<div class="distribuidoras form">
 
<?php echo $this->Form->create('Distribuidora');?>
    <fieldset>
        <legend><?php echo ('Agregar Distribuidora'); ?></legend>
<?php 

        echo $this->Form->input('razonsocial', array('label' => 'Razón social o Nombre empresa', 'maxLength' => 60));
        echo $this->Form->input('nombrecomercial', array('label' => 'Nombre comercial', 'maxLength' => 60));
        echo $this->Form->input('nit', array('label' => 'Número de Identificación tributaria - NIT', 'maxLength' => 60));
        echo $this->Form->input('nummatricula', array('label' => 'Número de matricula de comercio', 'maxLength' => 60));
        echo $this->Form->input('direccionempresa', array('label' => 'Dirección de la empresa', 'maxLength' => 60));
        echo $this->Form->input('subdepartamento', array('label' => 'Departamento:', 'maxLength' => 60));

        echo $this->Form->input('subdireccion', array('label' => 'Avenida y Nº:', 'maxLength' => 60));
        echo $this->Form->input('subcalle', array('label' => 'Calle:', 'maxLength' => 60));
        echo $this->Form->input('subreferencia', array('label' => 'Referencia entre que calles:', 'maxLength' => 240));
        echo $this->Form->input('subtelefono', array('label' => 'Telefono:', 'maxLength' => 60));
        echo $this->Form->input('subpagweb', array('label' => 'Pagina web', 'maxLength' => 60));
        echo $this->Form->input('subemail', array('label' => 'Direccion Email:', 'maxLength' => 60));
        echo $this->Form->input('rai', array('label' => 'Registro Ambiental Industrial (RAI):', 'maxLength' => 60));


        echo $this->Form->submit('Agregar Distribuidora', array('class' => 'form-submit',  'title' => 'Presione aqui para agregar Distriuidora')); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<?php 
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Cerrar sesion",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar al login de usuarios",   array('action'=>'login') ); 
}
?>