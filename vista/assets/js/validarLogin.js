function validarLogin(){
var txtcorreo, txtpass;
txtcorreo=document.getElementById("correoLogin").value;
txtpass=document.getElementById("passwordLogin").value;
if(txtcorreo===""||txtpass==="" ){
alert("El campo esta vacio");
    }
    }