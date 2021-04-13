$('#myModal').modal({
    keyboard: false
  })
  $('#myModal').modal('toggle')
  $('#myModal').modal('show')
  $('#myModal').modal('hide')
  $('#myModal').modal('handleUpdate')
  $('#myModal').on('hidden.bs.modal', function (e) {
    // do something...
  })
  $('[data-spy="scroll"]').on('activate.bs.scrollspy', function () {
    // do something...
  })
