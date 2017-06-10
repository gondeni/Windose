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
                        <div class="col-sm-offset-1 col-sm-10 frame">
                            <ul></ul>
                            <div>
                                <div class="msj-rta macro" style="margin:auto">
                                    <div class="text text-r" style="background:whitesmoke !important">
                                        <input class="mytext" placeholder="Type a message"/>
                                    </div>
                                </div>
                            </div>
                        </div>
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

