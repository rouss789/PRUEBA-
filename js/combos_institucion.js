// Desarrollado por: Manuel Cortes Crisanto
// Web: https://www.facebook.com/pages/Programacion-en-PHP/153571761391652
// www.desarrollosphp.com
$(document).ready(function () {
//
// $('#institucion').append("<option value='0'>Seleccione una opción...</option>")
  $('#unidad').append("<option value='0'>Seleccione una opción...</option>")
  $('#institucion').prop('disabled', false)
  $('#unidad').prop('disabled', true)

  // Cargamos Instituciones
  var comboInstitucion = $('#institucion')
  comboInstitucion.append("<option value='0'>Cargando Instituciones...</option>")
  $.getJSON('cargarcombos.php', { bandera: '1', filtro: '0' }, function (objetosretorna) {
    comboInstitucion.empty()
    comboInstitucion.append("<option value='0'>Elige Institución...</option>")
    $.each(objetosretorna, function (i, instituciones) {
      var nuevaFila = "<option value='" + instituciones.Id_Institucion + "'>" + instituciones.Nombre + '</option>'
      comboInstitucion.append(nuevaFila)
    })
  })
  // Fin Cargar Instituciones
  // Seleccionamos Institución
  $('#institucion').change(function () {
    var Institucion = $('#institucion').val()
    $('#unidad').empty()
    if (Institucion === 0) {
      $('#unidad').append("<option value='0'>Elige Unidad o Facultad...</option>")
      $('#unidad').prop('disabled', true)
    } else {
      $('#unidad').append("<option value='0'>Cargando Unidades y Facultades...</option>")
      $.getJSON('cargarcombos.php', { bandera: '2', filtro: $('#institucion').val() }, function (objetosretorna) {
        $('#unidad').empty()
        $('#unidad').append("<option value='0'>Elige Unidad o Facultad...</option>")
        $.each(objetosretorna, function (i, unidad) {
          $('#unidad').append("<option value='" + unidad.Id_Unidad + "'>" + unidad.Nombre + '</option>')
        })
      })
      $('#unidad').prop('disabled', false)
    }        
  })
  // Fin Seleccionar Institución
  // Seleccionamos Unidad
  $('#unidad').on('change', { function () { var unidad = $('#unidad').val() } })
  // Fin Seleccionar estados
})
