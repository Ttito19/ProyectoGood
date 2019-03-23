function validar() {
   var nombre,apellido,correo,dni,celular,pass,expresion;
nombre=document.getElementById("nombre").value;
apellido=document.getElementById("apellido").value;
correo=document.getElementById("correo").value;
dni=document.getElementById("dni").value;
celular=document.getElementById("celular").value;
pass=document.getElementById("contra").value;
//expresion =/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
//expresion=/\w+@\w+\.+[a-z]/;
if (nombre === "" || apellido === "" || correo === "" ||dni === "" ||celular === "" ||pass === "" ) {
    alert("El campo esta vacio");
    return false;
}else if(expresion.test(correo)){
alert("el correo no es valido");
 return false;
}

}