<?php
/**
 * Created by PhpStorm.
 * User: Gonzalo
 * Date: 07/03/2017
 * Time: 22:39
 */

//Se debe controlar que los campos no sean nulos

$remitente = array('name' => 'remitente', 'class' => 'form-control input-sm', 'value' => $remitente[0]->ID);
$destinatario = array('name' => 'destinatario', 'placeholder' => 'Para', 'class' => 'form-control input-sm', 'value' =>$destinatario[0]->ID);
$mensaje = array('name' => 'mensaje', 'placeholder' => 'Escriba su mensaje', 'class' => 'form-control input-sm',);
$submit = array('name' => 'submit', 'value' => 'Enviar', 'title' => 'Enviar', 'class' => 'btn btn-success');
?>
<div class="mensaje">
    <?=form_open('Mensaje_CONT/enviar')?>
        <!--<input type="hidden" name="id_remitente" id="id_remitente" value="<?/*= $remitente[0]->ID */?>">
        <input type="hidden" name="id_destinatario" id="id_destinatario" value="<?/*= $destinatario[0]->ID */?>">-->
        <div class="form-group">
            <label for="remitente">Remitente</label>
            <?= form_input($remitente)?>
        </div>
        <div class="form-group">
            <label for="destinatario">Destinatario</label>
            <?= form_input($destinatario)?>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <?= form_textarea($mensaje) ?>
        </div>
        <p><?= form_submit($submit) ?></p>
    <?=form_close()?>
</div>
