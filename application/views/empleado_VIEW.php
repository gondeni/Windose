<?php
/**
 * Created by PhpStorm.
 * User: Gonzalo
 * Date: 07/03/2017
 * Time: 20:50
 */

?>

<div class="mensajes">
    <h3>Mensajes</h3>
    <hr>
    <?php if (count($mensajes)) { ?>
        <table class="table table-striped" style="text-align: center;">
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Remitente</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($mensajes as $mensaje) { ?>
                <tr>
                    <td><?= $mensaje->fecha ?></td>
                    <td><?= $mensaje->id_remitente ?></td> <!--No me ha dado tiempo a sacar el nombre del remitente-->
                    <td>
                        <a class="btn btn-primary btn-sm"
                           href="<?= site_url('Mensaje_CONT/index/' . $mensaje->id_remitente . '/' . $mensaje->id_destinatario); ?>">Responder</a>
                    </td>
                    <td><a class="btn btn-danger btn-sm"
                           href="<?= site_url('Mensaje_CONT/eliminar/' . $mensaje->id_remitente . '/' . $mensaje->id_destinatario); ?>">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>
            <small>No tiene mensajes nuevos</small>
        </p>
    <?php } ?>
</div>
<div class="citas">
    <h3>Citas</h3>
    <hr>
    <div id="calendar"></div>
    <?php /*if (count($citas)) { */?><!--

    <?php /*} else { */?>
        <p>
            <small>No tiene citas asignadas</small>
        </p>
    --><?php /*} */?>
</div>

