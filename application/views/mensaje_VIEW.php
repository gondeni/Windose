<?php
/**
 * Created by PhpStorm.
 * User: Gonzalo
 * Date: 07/03/2017
 * Time: 22:39
 */

//Se debe controlar que los campos no sean nulos

$nombre_remitente = array('name' => 'remitente', 'class' => 'form-control input-sm', 'value' => $remitente['nombre'], 'readonly' => 'true');
$id_remitente = array('name' => 'id_remitente', 'class' => 'form-control input-sm hidden', 'value' => $remitente['ID']);

if (isset($destinatario[0])) {
    $nombre_destinatario = array('name' => 'destinatario', 'placeholder' => 'Para', 'class' => 'form-control input-sm', 'value' => $destinatario[0]->ID);
    $id_destinatario = array('name' => 'id_remitente', 'class' => 'form-control input-sm hidden', 'value' => $destinatario[0]->ID);
} else {
    $id_destinatario = array('name' => 'id_remitente', 'class' => 'form-control input-sm hidden', 'value' => '');
    $nombre_destinatario = array('name' => 'destinatario', 'placeholder' => 'Para', 'class' => 'form-control input-sm', 'value' => '');
}
$mensaje = array('name' => 'mensaje', 'placeholder' => 'Escriba su mensaje', 'class' => 'form-control input-sm',);
$submit = array('name' => 'submit', 'value' => 'Enviar', 'title' => 'Enviar', 'class' => 'btn btn-success');
?>
<div class="mensaje">
    <?= form_open('Mensaje_CONT/enviar') ?>
    <div class="form-group">
        <label for="remitente">Remitente</label>
        <?= form_input($nombre_remitente) ?>
        <?= form_input($id_remitente) ?>
    </div>
    <div class="form-group">
        <label for="destinatario">Destinatario</label>
        <?= form_input($nombre_destinatario) ?>
        <?= form_input($id_destinatario) ?>
    </div>
    <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <?= form_textarea($mensaje) ?>
    </div>
    <p><?= form_submit($submit) ?><!--boton volver--></p>
    <?= form_close() ?>
    <p style="text-align: center;color: red; font-weight: bold;">
        <?php
        if ($this->session->flashdata('destinatario_incorrecto'))
            echo $this->session->flashdata('destinatario_incorrecto');
        ?>
    </p>
</div>
