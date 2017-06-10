<?php
/**
 * Created by PhpStorm.
 * User: Gonzalo
 * Date: 07/03/2017
 * Time: 20:39
 */
?>
<div id="cabecera">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-sm-2">
                <div id="reloj"></div>
            </div>
            <div class="col-sm-offset-10">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="cabecera-text">
                            <label>Bienvenido</label><br>
                            <?= $nombre ?>
                        </p>
                    </div>
                    <div class="col-sm-offset-2">
                        <p class="cabecera-text">
                            <a href="<?= site_url('Login_CONT/salir') ?>" class="btn btn-danger">Salir</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>