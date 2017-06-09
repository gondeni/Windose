<?php
/**
 * Created by PhpStorm.
 * User: Gonzalo
 * Date: 07/03/2017
 * Time: 20:50
 */
?>

<div class="mensajes">
    <div class="row">
        <div class="col-md-2">
            <h3>Mensajes</h3>
            <hr>
        </div>
        <div class="col-md-2">
            <div class="align-left">
                <a style="margin-top: 20px" class="btn btn-default btn-sm" id="nuevo_mensaje" name="nuevo mensaje"
                   href="<?= site_url('Mensaje_CONT/index/' . $this->session->userdata('ID')); ?>">
                    Nuevo mensaje
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <?php if (count($mensajes)) { ?>
            <table class="table table-striped" style="text-align: center;">
                <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Remitente</th>
                    <th>Mensaje</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($mensajes as $mensaje) { ?>
                    <tr>
                        <td><?= $mensaje->fecha ?></td>
                        <td><?php
                            foreach ($remitentes as $remitente) {
                                if ($remitente->ID == $mensaje->cod_remitente)
                                    echo $remitente->nombre;
                            }
                            ?>
                        </td>
                        <td>
                            <?= $mensaje->mensaje ?>
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm"
                               href="<?= site_url('Mensaje_CONT/index/' . $mensaje->cod_remitente . '/' . $mensaje->cod_destinatario); ?>">Responder</a>
                        </td>
                        <td><a class="btn btn-danger btn-sm"
                               href="<?= site_url('Mensaje_CONT/eliminar/' . $mensaje->cod_remitente . '/' . $mensaje->cod_destinatario); ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="col-md-offset-6">
                <p>
                    <small style="text-align: center">No tiene mensajes nuevos</small>
                </p>
            </div>
        <?php } ?>
    </div>
</div>
<div class="row">
    <div class="citas">
        <h3>Citas</h3>
        <hr>
        <div id="calendar"></div>
    </div>
</div>

