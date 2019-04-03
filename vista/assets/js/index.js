$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: './combos/cboRegion.php'
  })
  .done(function(combo){
    $('#region').html(combo);
  })
  .fail(function(){
    alert('Hubo un errror al cargar las regiones')
  })




   $.ajax({
    type: 'POST',
    url: './combos/cboCargos.php'
  })
  .done(function(combo){
    $('#usuarios').html(combo)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los usuarios')
  })


   $.ajax({
    type: 'POST',
    url: './combos/cboEmpleados.php'
  })
  .done(function(combo){
    $('#tipos').html(combo)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los empleados')
  })
    $.ajax({
    type: 'POST',
    url: './combos/cboCurso.php'
  })
  .done(function(combo){
    $('#curso').html(combo)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los cursos')
  })

    $.ajax({
    type: 'POST',
    url: './combos/cboProfesor.php'
  })
  .done(function(combo){
    $('#profesor').html(combo)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los profesores')
  })


    $.ajax({
    type: 'POST',
    url: './combos/cboCliente.php'
  })
  .done(function(combo){
    $('#cliente').html(combo)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los clientes')
  })

    $.ajax({
    type: 'POST',
    url: './combos/cboCliente_Profesor.php'
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
      url: './combos/cboProvincias.php',
      data: {'id': id}
    })
    .done(function(listas_rep){
      $('#div-prov').removeAttr('hidden');
      $('#provincia').html(listas_rep)
    })
    .fail(function(){
     
    })
  })

  $('#provincia').on('change', function(){
    var id = $('#provincia').val()
    //alert(id)
   $.ajax({
      type: 'POST',
      url: './combos/cboDistritos.php',
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