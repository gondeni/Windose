/**
 * Created by Gonzalo on 01/06/2017.
 */

/*$(document).ready(function () {

    //Se muestra el modal Login
    $("#login_entrar").click(function () {
        $("#modal_login").modal();
    });

    $("#entrar").click(function () {

        var usuario = $("#usuario");
        var psw = $("#psw");
        var campos = [usuario, psw];
        var val_result = validar_formulario(campos);

        // alert(val_result);
        // $('label[for="usuario"]').text()

        // bootbox.alert(val_result);

    })
});*/

function validar_formulario(campos) {

    var len = campos.length;
    var nombres = [];
    var regEx_num = '^\d+$';
    var regEx_telef = '^\d[9]$';
    var regEx_abc = '^\w+$';
    var regEx_email = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

    for (var i = 0; i < len; i++) {
        var nombre = $('label[for="' + campos[i].attr("id") + '"]').text();
        nombres.push(nombre);
    }

    for (var i = 0; i < len; i++) {
        if (campos[i].val() == "" || campos[i].val() == null) {
            var error = "<p id='" + nombres[i] + "'>Campo " + nombres[i] + " erroneo</p>"

            $("#messages p :not(:has(nombres[i]))").append(error);
        }
    }
}