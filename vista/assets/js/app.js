/*$(document).ready(function() {
    $("#loginForm").bind("submit", function() {

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function() {
                $("#loginForm button[type=submit]").html("enviando...");
                $("#loginForm button[type=submit]").attr("disabled", "disabled");
            },

            success: function(response) {
                   $('#login').click(function(){
                   var user = $('#correo').val();
                  var pass = $('#password').val();
       //     if ($.trim(user).length > 0 && $.trim(pass).length > 0) {



                if (response.estado == "true") {
                    $("body").overhang({
                        type: "success",
                        message: "Usuario encontrado, te estamos redirigiendo...",
                        callback: function() {
                            window.location.href = "admin.php";
                        }
                    });
                } else {
                    $("body").overhang({
                        type: "error",
                        message: "Usuario o password incorrecto!"
                    });
                }

                $("#loginForm button[type=submit]").html("Ingresar");
                $("#loginForm button[type=submit]").removeAttr("disabled");
/*
             }else{
                 $("body").overhang({
                        type: "error",
                        message: "Datos Incompletos"
                    });
             }
             */

   });

            },
            error: function() {
                $("body").overhang({
                    type: "error",
                    message: "Usuario o password incorrecto!"
                });       
                $("#loginForm button[type=submit]").html("Ingresar");
                $("#loginForm button[type=submit]").removeAttr("disabled");
            }
        });

        return false;
    });

});