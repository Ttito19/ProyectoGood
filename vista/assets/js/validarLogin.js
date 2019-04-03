function validarLogin(){
var txtcorreo, txtpass;
txtcorreo=document.getElementById("correoLogin").value;
txtpass=document.getElementById("passwordLogin").value;


 
if(txtcorreo===""){

  $("body").overhang({
      type: "error",
      message: "Campo correo vacio",
      duration: 0.8,
    });
  
  return false;
      }else if(txtpass==="" ) {
        
  $("body").overhang({
    type: "error",
    message: "Campo clave vacio",
    duration: 0.8,
  });
  return false;
  }else{
          $("body").overhang({
              type: "success",
              message: "Redirigiendo...",
              duration:0.1,
            });
      }

    }