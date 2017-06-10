<?php
/**
 * Created by PhpStorm.
 * User: Gonzalo
 * Date: 07/03/2017
 * Time: 22:39
 */

$nombre_remitente = array('name' => 'nombre_remitente', 'class' => 'form-control input-sm', 'value' => $remitente['nombre'], 'readonly' => 'true');
$id_remitente = array('name' => 'id_remitente', 'class' => 'form-control input-sm hidden', 'value' => $remitente['ID']);

if (isset($destinatario[0])) {
    $nombre_destinatario = array('name' => 'nombre_destinatario', 'placeholder' => 'Para', 'class' => 'form-control input-sm', 'value' => $destinatario[0]->ID);
    $id_destinatario = array('name' => 'id_remitente', 'class' => 'form-control input-sm hidden', 'value' => $destinatario[0]->ID);
} else {
    $id_destinatario = array('name' => 'id_destinatario', 'class' => 'form-control input-sm hidden', 'value' => '');
    $nombre_destinatario = array('name' => 'nombre_destinatario', 'placeholder' => 'Para', 'class' => 'form-control input-sm', 'value' => '');
}
$asunto = array('name' => 'asunto', 'placeholder' => 'Asunto', 'class' => 'form-control input-sm', 'value' => '');
$mensaje = array('name' => 'mensaje', 'placeholder' => 'Escriba su mensaje', 'class' => 'form-control input-sm', 'value' => '');
$submit = array('name' => 'submit', 'value' => 'Enviar', 'title' => 'Enviar', 'class' => 'btn btn-success');

?>
<section id="mensajes">
    <div class="row">
        <div class="container mensajes">
            <div class="row">
                <h3 class="section-title">Nuevo Mensaje</h3>
            </div>
            <div class="section-title-divider"></div>
            <div class="row">
                <div class="container mensajes-container wow">
                    <div class="row">
                        <?= form_open('Mensaje_CONT/enviar') ?>
                        <div class=" form-group">
                            <label for="nombre_remitente">Remitente</label>
                            <?= form_input($nombre_remitente) ?>
                            <?= form_input($id_remitente) ?>
                        </div>
                        <div class="form-group">
                            <label for="nombre_destinatario">Destinatario</label>
                            <?= form_input($nombre_destinatario) ?>
                            <?= form_input($id_destinatario) ?>
                        </div>
                        <div class="form-group">
                            <label for="asunto">Asunto</label>
                            <?= form_input($asunto) ?>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <?= form_textarea($mensaje) ?>
                        </div>
                        <p>
                            <?= form_submit($submit) ?>
                            <a class="btn btn-danger" href="<?php
                            if ($this->session->userdata('permisos') == 0)
                                echo base_url() . "index.php/Cliente_CONT";
                            else
                                echo base_url() . "index.php/Empleado_CONT";
                            ?>">Volver</a>
                        </p>
                        <?= form_close() ?>
                        <p style="text-align: center;color: red; font-weight: bold;">
                            <?php
                            if ($this->session->flashdata('error'))
                                echo $this->session->flashdata('error');
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
