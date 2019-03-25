$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '../cargar_listas.php'
  })
  .done(function(listas_rep){
    $('#lista_reproduccion').html(listas_rep);
  })
  .fail(function(){
    alert('Hubo un errror al cargar las regiones')
  })




   $.ajax({
    type: 'POST',
    url: '../cargos.php'
  })
  .done(function(listas_rep){
    $('#usuarios').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los usuarios')
  })


   $.ajax({
    type: 'POST',
    url: '../empleados.php'
  })
  .done(function(listas_rep){
    $('#tipos').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los empleados')
  })




    $.ajax({
    type: 'POST',
    url: '../curso.php'
  })
  .done(function(listas_rep){
    $('#curso').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los cursos')
  })

    $.ajax({
    type: 'POST',
    url: '../profesor.php'
  })
  .done(function(listas_rep){
    $('#profesor').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los profesores')
  })


    $.ajax({
    type: 'POST',
    url: '../cliente.php'
  })
  .done(function(listas_rep){
    $('#cliente').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los clientes')
  })







    $.ajax({
    type: 'POST',
    url: '../clipro.php'
  })
  .done(function(listas_rep){
    $('#clipro').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los clientes')
  })






  $('#lista_reproduccion').on('change', function(){
    var id = $('#lista_reproduccion').val()
    //alert(id)
   $.ajax({
      type: 'POST',
      url: '../cargar_videos.php',
      data: {'id': id}
    })
    .done(function(listas_rep){
      $('#div-prov').removeAttr('hidden');
      $('#videos').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar las provincias')
    })
  })



  $('#videos').on('change', function(){
    var id = $('#videos').val()
    //alert(id)
   $.ajax({
      type: 'POST',
      url: '../distritos.php',
      data: {'id': id}
    })
    .done(function(listas_rep){
      $('#div-dis').removeAttr("hidden");
      $('#dis').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un error al cargar los distritos')
    })
  })





  $('#enviar').on('click', function(){
    var resultado = 'Lista de reproducción: ' + $('#lista_reproduccion option:selected').text() +
    ' Video elegido: ' + $('#videos option:selected').text()

    $('#resultado1').html(resultado)
  })

})