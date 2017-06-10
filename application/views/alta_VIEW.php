<?php
/**
 * Created by PhpStorm.
 * User: Gonzalo
 * Date: 07/03/2017
 * Time: 13:13
 */

$nombre = array('name' => 'nombre', 'placeholder' => 'nombre completo', 'class' => 'form-control input-sm');
$ciudad = array('name' => 'ciudad', 'placeholder' => 'ciudad', 'class' => 'form-control input-sm');
$telefono = array('name' => 'telefono', 'placeholder' => 'telefono', 'class' => 'form-control input-sm');
$email = array('name' => 'email', 'placeholder' => 'email', 'class' => 'form-control input-sm email');
$preferencia = array('id' => 'preferencia', 'name' => 'preferencia', 'placeholder' => 'preferencia', 'class' => 'form-control input-sm');
$usuario = array('name' => 'usuario', 'placeholder' => 'nombre de usuario', 'class' => 'form-control input-sm usuario', 'readonly' => 'true');
$password = array('name' => 'password', 'placeholder' => 'introduzca su contraseña', 'type' => 'password', 'class' => 'form-control input-sm');
$submit = array('name' => 'submit', 'value' => 'Entrar', 'title' => 'Entrar', 'class' => 'btn btn-success'/*, 'onclick'=>'javascript:comprobarFormulario()'*/);
$opciones = array('presencial', 'skype', 'otros');
?>

<!--form_dropdown('shirts', $options, 'large');-->
<section>
    <div class="col-md-offset-4 col-md-4">
        <div class="form-group">
            <h2 style="text-align: center; font-weight: bold;">Registro</h2>
            <hr/>
            <br/>
            <?= form_open('Alta_CONT/alta') ?>
            <label for="nombre">Nombre completo</label>
            <?= form_input($nombre) ?>
            <label for="ciudad">Ciudad</label>
            <?= form_input($ciudad) ?>
            <label for="telefono">Telefono</label>
            <?= form_input($telefono) ?>
            <label for="email">Email</label>
            <?= form_input($email) ?>
            <label for="preferencia">Preferencia de la sesión</label>
            <?= form_dropdown($preferencia, $opciones, 'presencial') ?>
            <label for="usuario">Usuario</label>
            <?= form_input($usuario) ?>
            <label for="password">Contraseña</label>
            <?= form_input($password) ?><p><?= form_error('password') ?></p>
            <div class="col-md-offset-4 col-md-4"><?= form_submit($submit) ?></div>
            <?= form_close() ?>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $(".email").keyup(function () {
            $(".usuario").val($(this).val());
        });
        $(".email").on('change', function () {
            if ($(this).val() != $(".usuario").val())
                $(".usuario").val($(this).val());
        });

    });

</script>