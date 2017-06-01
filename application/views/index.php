<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Windose</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url(); ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url(); ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>lib/animate-css/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">

</head>

<body>
<!--<div id="preloader"></div>-->

<!--==========================
  Seccion Windose
============================-->
<section id="windose">
    <div class="windose-container">
        <div class="wow fadeIn">
            <div class="windose-logo">

            </div>

            <h1>Windose</h1>
            <h2>Nosotros abrimos <span class="rotating">ventanas</span></h2>
            <div class="actions">
                <a href="#que" class="btn-get-started">Empezar</a>
                <a href="#" id="login_entrar" class="btn-login">Entrar/Registrarse</a>
            </div>
        </div>
    </div>
</section>

<!-- Modal Login-->
<div class="modal fade" id="modal_login" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">

                <form role="form" id="form_entrar">
                    <div class="form-group">
                        <label for="usuario"><span class="glyphicon glyphicon-user"></span> Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="Usuario"
                               placeholder="Introduzca su email">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
                        <input type="password" class="form-control" id="psw" placeholder="Introduzca su contraseña">
                    </div>
                    <!--<div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>-->

                    <div class="form-group">
                        <div class="col-md-offset-5">
                            <div id="messages"></div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-block" id="entrar"><span
                                class="glyphicon glyphicon-off"></span> Entrar
                    </button>
                </form>
            </div>

            <div class="modal-footer">
                <div class="col-md-5 col-md-offset-3">
                    <p>¿No eres miembro? <a href="#">Regístrate</a></p>
                    <p>¿Has olvidado tu <a href="#">Contraseña?</a></p>
                </div>
            </div>
        </div>

    </div>
</div>

<!--==========================
  Seccion Header
============================-->

<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1 style="color: whitesmoke;">Windose</h1>
            <!--<a href="#windose"><img src="img/logo.png" alt="" title="" /></img></a>-->
            <!--text image -->
            <!--<h1><a href="#windose">Header 1</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#windose">Inicio</a></li>
                <li><a href="#que">Qué</a></li>
                <li><a href="#como">Cómo</a></li>
                <li><a href="#quien">Quién</a></li>
                <li><a href="#contacta">Contacta</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Seccion "Qué"
============================-->
<section id="que">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-6">
                <h3 class="section-title">Qué</h3>
                <div class="section-title-divider"></div>
            </div>
        </div>
    </div>
    <div class="container que-container wow fadeInUp">
        <div class="row">
            <div class="col-md-6">
                <div class="que-content ">
                    <p class="que-text">
                        <span style="font-weight: bold; font-size: 1.5em;">Windose</span> es una consultoría de
                        innovación
                        personal formada por
                        dos psicólogos que trabajan en la
                        innovación tecnológica y comercial.
                    </p>
                    <p class="que-text">
                        Abrimos ventanas; sabemos mucho de muchos de los campos que moldean al ser humano moderno, pero
                        sobre todo hacemos preguntas brillantemente.
                    </p>
                    <p class="que-text">
                        Si estás en una encrucijada en tu vida, llámanos. Te daremos nuevas herramientas con las que
                        articular tu situación y obtener mayor rendimiento de las decisiones a tomar.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==========================
  Sección "Cómo"
============================-->
<section id="como">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-offset-6">
                <h3 class="section-title">Cómo</h3>
                <div class="section-title-divider"></div>
            </div>
            <div class="col-md-offset-6">
                <p class="como-text">
                    En nuestro primer encuentro, evaluaremos la situación y su potencial para la innovación personal, y
                    estableceremos juntos unos objetivos, unos métodos y unos marcadores de éxito, que regirán las
                    sesiones siguientes.
                </p>
                <p class="como-text">
                    A lo largo de 2 a 6 meses, te reunirás con tu consultor donde a ti más te convenga y afinaréis la
                    trayectoria, ya sea realizando una actividad cultural específica o comentando impresiones desde la
                    última.
                </p>
                <p class="como-text">
                    Todos los costes de tales actividades, así como de los materiales a ser preparados entre sesiones,
                    corren a cuenta de Windose.
                </p>
            </div>
        </div>
    </div>
    </div>
</section>

<!--==========================
  Sección "Más"
============================-->
<section id="mas">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-8">
                <h3 class="mas-title">¿Quieres saber más?</h3>
                <p class="mas-text">¿Estás preparado/a para saber más ya? Registrate ya y empezaremos cuanto antes</p>
            </div>
            <div class="col-md-4 mas-btn-container">
                <a class="mas-btn" href="#login">Registrate</a>
            </div>
        </div>
    </div>
</section>

<!--==========================
  Sección "Quién"
============================-->
<section id="quien">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Quién</h3>
                <div class="section-title-divider"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="miembro">
                    <div class="pic"><img src="img/GH.jpg"></div>
                    <h4>Guillermo Hugo</h4>
                    <span class="texto hidden">Estudió Psicología en la Universidad de Harvard, ha vivido en 7 países
                        alrededor del Atlántico y no se quiere ir ya más. Tiene un grado superior en Diseño Urbano y
                        experiencia en publicidad, innovación comercial y promoción cultural. Es consultor de marketing,
                        miembro de tres organizaciones sociales y vende algunas de sus fotos, últimamente impresas sobre
                        ropa.</span>
                    <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="miembro">
                    <div class="pic"><img src="img/LM.jpg"></div>
                    <h4>Luis Miguel</h4>
                    <span class="texto hidden">Estudió Psicología en la Universidad de Harvard, ha vivido en 7 países
                        alrededor del Atlántico y no se quiere ir ya más. Tiene un grado superior en Diseño Urbano y
                        experiencia en publicidad, innovación comercial y promoción cultural. Es consultor de marketing,
                        miembro de tres organizaciones sociales y vende algunas de sus fotos, últimamente impresas sobre
                        ropa.</span>
                    <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==========================
  contacta Section
============================-->
<section id="contacta">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Contacta</h3>
                <div class="section-title-divider"></div>
            </div>

            <div class="row">
                <div class="col-md-3 col-md-push-2">
                    <div class="info">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>Paseo de los Parques 7<br>Alcobendas, Madrid 28055</p>
                        </div>
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>Calle del Dr Calero<br>Majadahonda, Madrid 28221</p>
                        </div>

                        <div>
                            <i class="fa fa-envelope"></i>
                            <p>info@windose.com</p>
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <p>123456789</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-5 col-md-push-2">
                    <div class="form">
                        <div>Your message has been sent. Thank you</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactaForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="nombre" placeholder="Tu nombre"
                                       data-rule="minlen:4" data-msg="Introduzca al menos 4 caracteres"/>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Tu email"
                                       data-rule="email" data-msg="Introduzca un email válido"/>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="asunto" id="asunto"
                                       placeholder="Asunto"
                                       data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" name="mensaje" rows="5" data-rule="required"
                                      data-msg="Escríbanos algo" placeholder="Mensaje"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Envíar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    &copy; Copyright <strong>Windose</strong>. All Rights Reserved
                </div>
            </div>
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="volver_arriba"><i class="fa fa-chevron-up"></i></a>

<!-- Required JavaScript Libraries -->
<script src="<?php echo base_url(); ?>lib/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>lib/jquery/jquery-migrate.min.js"></script>
<script src="<?php echo base_url(); ?>lib/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>lib/superfish/hoverIntent.js"></script>
<script src="<?php echo base_url(); ?>lib/superfish/superfish.min.js"></script>
<script src="<?php echo base_url(); ?>lib/morphext/morphext.min.js"></script>
<script src="<?php echo base_url(); ?>lib/wow/wow.min.js"></script>
<script src="<?php echo base_url(); ?>lib/stickyjs/sticky.js"></script>
<script src="<?php echo base_url(); ?>lib/easing/easing.js"></script>
<script src="<?php echo base_url(); ?>plugins/bootbox.min.js"></script>
<!-- Template Specisifc Custom Javascript File -->
<script src="<?php echo base_url(); ?>js/custom.js"></script>
<script src="<?php echo base_url(); ?>js/funciones_auxiliares.js"></script>
</body>
</html>