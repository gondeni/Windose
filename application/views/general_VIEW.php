<?php
/**
 * Created by PhpStorm.
 * User: Gonzalo
 * Date: 07/03/2017
 * Time: 20:50
 */
/*var_dump($mensajes);
die();*/
?>

<section id="mensajes">
    <div class="container mensajes">
        <div class="row">
            <div class="col-md-2">
                <h3 class="section-title">Mensajes</h3>
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
        <div class="section-title-divider"></div>
        <div class="container mensajes-container wow">
            <div class="row">
                <div class="mensajes-content">
                    <?php if (count($mensajes)) { ?>
                        <table class="table table-striped tabla_mensajes" style="text-align: center;">
                            <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Remitente</th>
                                <th>Asunto</th>
                                <th>Mensaje</th>
                                <?php
                                if ($this->session->userdata('permisos') == 1) {
                                    echo "<th></th>";
                                }
                                ?>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($mensajes as $mensaje) { ?>
                                <tr>
                                    <td id="fecha"><?php
                                        $fecha_formateada=explode(' ',$mensaje->fecha);
                                        $hora = $fecha_formateada[2];
                                        $fecha = $fecha_formateada[1];
                                        echo $hora."<br>".$fecha;
                                        ?>
                                    </td>
                                    <td><?php
                                        $fuente = substr($mensaje->cod_remitente, 0, 1);
                                        $id_remitente = substr($mensaje->cod_remitente, 1);
                                        if ($fuente == 'e') {
                                            foreach ($empleados as $empleado) {
                                                if ($empleado->ID == $id_remitente)
                                                    echo $empleado->nombre;
                                            }
                                        } else {
                                            foreach ($clientes as $cliente) {
                                                if ($cliente->ID == $id_remitente)
                                                    echo $cliente->nombre;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?= $mensaje->asunto ?>
                                    </td>
                                    <td>
                                        <?= $mensaje->mensaje ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm"
                                           href="<?= site_url('Mensaje_CONT/index/' . $mensaje->cod_remitente . '/' . $mensaje->cod_destinatario); ?>">Responder</a>
                                    </td>
                                    <?php
                                    if ($this->session->userdata('permisos') == 1) {
                                        $out = '<td><a class="btn btn-danger btn-sm" href="' . site_url("Mensaje_CONT/eliminar/" . $mensaje->cod_remitente . "/" . $mensaje->cod_destinatario) . '">Eliminar</a></td>';
                                        echo $out;
                                    }
                                    ?>

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
        </div>
    </div>
</section>
<section id="citas">
    <div class="container citas">
        <div class="citas">
            <div class="row">
                <div class="col-md-2">
                    <h3 class="section-title">Citas</h3>
                </div>
                <div class="col-md-2">
                    <div class="align-left">
                        <a style="margin-top: 20px" class="btn btn-default btn-sm" id="nueva_cita" name="nueva_cita"
                           href="<?= site_url('Cita_CONT/index'); ?>">
                            Nueva cita
                        </a>
                    </div>
                </div>
            </div>
            <div class="section-title-divider"></div>
            <div class="container citas-container wow">
                <div class="row">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</section>

