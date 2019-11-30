$(function () {

  $('.alertifa-1').click(function (e) {
    e.preventDefault();
    $('.ui.large.modal.alertifa-1-mod')
      .modal('show');
  });

  $('.alertifa-2').click(function (e) {
    e.preventDefault();
    $('.ui.fullscreen.modal.alertifa-2-mod')
      .modal('show');
  });

  $('.alertifa-3').click(function (e) {
    e.preventDefault();
    $('.ui.fullscreen.modal.alertifa-3-mod')
      .modal('show');
  });

  $('.alertifa-img')
    .popup();

  $('#vimeo-alertifa').embed();
  $('#vimeo-samnipoufe').embed();

  $('.sticky-alert')
    .sticky({
      context: '#sticky-alert-stop'
    });

  $('.sticky-samnipoufe')
    .sticky({
      context: '#sticky-samnipoufe-stop'
    });

});

