<?php
require_once('../../config.php');
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT * from `tenants` where id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=stripslashes($v);
        }
    }
}
?>
<style>
    #uni_modal .modal-footer{
        display:none
    }
</style>
<div class="container fluid">
    <callout class="callout-primary">
        <dl class="row">
            <dt class="col-md-4">Arrendatari@</dt>
            <dd class="col-md-8">: <?php echo $fullname ?></dd>
            <dt class="col-md-4">Género</dt>
            <dd class="col-md-8">: <?php echo $gender ?></dd>
            <dt class="col-md-4">Fecha Nacimiento</dt>
            <dd class="col-md-8">: <?php echo date("M d,Y",strtotime($dob)) ?></dd>
            <dt class="col-md-4">Contacto</dt>
            <dd class="col-md-8">: <?php echo $contact ?></dd>
            <dt class="col-md-4">Dirección</dt>
            <dd class="col-md-8">: <?php echo $address ?></dd>
            <dt class="col-md-4">Tipo de identificación proporcionado</dt>
            <dd class="col-md-8">: <?php echo $id_type ?></dd>
            <dt class="col-md-4">Número de identificación proporcionado</dt>
            <dd class="col-md-8">: <?php echo $id_no ?></dd>
        </dl>
    </callout>
    <div class="row px-2 justify-content-end">
        <div class="col-1">
            <button class="btn btn-dark btn-flat btn-sm" type="button" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</div>