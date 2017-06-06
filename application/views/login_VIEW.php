<?php
$usuario = array('name' => 'usuario', 'placeholder' => 'nombre de usuario', 'class' => 'form-control input-sm');
$password = array('name' => 'password', 'placeholder' => 'introduzca su contraseña', 'type' => 'password', 'class' => 'form-control input-sm');
$submit = array('name' => 'submit', 'value' => 'Entrar', 'title' => 'Entrar', 'class' => 'btn btn-success');
?>
<div class="col-md-offset-4 col-md-4 login">
    <div class="form-group">
        <h2 style="text-align: center; font-weight: bold;">Login</h2>
        <hr/>
        <br/>
        <?= form_open('Login_CONT/entrar') ?>
        <label for="usuario">Usuario</label>
        <?= form_input($usuario) ?><p><?= form_error('usuario') ?></p>
        <label for="password">Contraseña</label>
        <?= form_input($password) ?><p><?= form_error('password') ?></p>
        <p style="text-align: center;"><?= form_submit($submit) ?></p>
        <p style="text-align: center;"><a href="<?= base_url(); ?>index.php/Alta_CONT" class="btn btn-primary">Registrarse</a>
        </p>
        <?= form_close() ?>
        <p style="text-align: center;color: red; font-weight: bold;">
            <?php
            if ($this->session->flashdata('usuario_incorrecto'))
                echo $this->session->flashdata('usuario_incorrecto');
            ?>
        </p>
    </div>
</div>