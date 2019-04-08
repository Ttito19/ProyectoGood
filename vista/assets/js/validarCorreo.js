
function validarCorreo(){
document.getElementById('correoLogin').addEventListener('input', function() {
    evento = event.target;
    validar1 = document.getElementById('correcto');
    
    emailRegex = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(evento.value)) {
      validar1.innerText = "Correo válido";
      validar1.style.color='#7FFF00';
   //   validar.style.display = 'none';
    } else {
      validar1.innerText = " Correo incorrecto";
      validar1.style.color='#DC143C';
    }
});
}




