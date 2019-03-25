$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '../cargar_listas.php'
  })
  .done(function(combo){
    $('#region').html(combo);
  })
  .fail(function(){
    alert('Hubo un errror al cargar las regiones')
  })




   $.ajax({
    type: 'POST',
    url: '../cargos.php'
  })
  .done(function(combo){
    $('#usuarios').html(combo)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los usuarios')
  })


   $.ajax({
    type: 'POST',
    url: '../empleados.php'
  })
  .done(function(combo){
    $('#tipos').html(combo)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los empleados')
  })
    $.ajax({
    type: 'POST',
    url: '../curso.php'
  })
  .done(function(combo){
    $('#curso').html(combo)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los cursos')
  })

    $.ajax({
    type: 'POST',
    url: '../profesor.php'
  })
  .done(function(combo){
    $('#profesor').html(combo)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los profesores')
  })


    $.ajax({
    type: 'POST',
    url: '../cliente.php'
  })
  .done(function(combo){
    $('#cliente').html(combo)
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






  $('#region').on('change', function(){
    var id = $('#region').val()
    //alert(id)
   $.ajax({
      type: 'POST',
      url: '../cargar_videos.php',
      data: {'id': id}
    })
    .done(function(listas_rep){
      $('#div-prov').removeAttr('hidden');
      $('#provincia').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar las provincias')
    })
  })



  $('#provincia').on('change', function(){
    var id = $('#provincia').val()
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





})