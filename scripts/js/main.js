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
  $('#vimeo-booksifa').embed();
  $('#vimeo-spacebullet').embed();
  $('#vimeo-spaceship-hunt').embed();

  $('.sticky-alert')
    .sticky({
      context: '#sticky-alert-stop'
    });

  $('.sticky-samnipoufe')
    .sticky({
      context: '#sticky-samnipoufe-stop'
    });

  $('.sticky-books')
    .sticky({
      context: '#sticky-books-stop'
    });

  $('.sticky-space-bullet')
    .sticky({
      context: '#sticky-space-bullet-stop'
    });

  $('.sticky-spaceship-hunt')
    .sticky({
      context: '#sticky-spaceship-hunt-stop'
    });
  
  $(window).resize(function() {

    if($(window).width() < 768)
    {
      $('.sticky-alert, .sticky-samnipoufe, .sticky-books, .sticky-space-bullet, .sticky-spaceship-hunt')
      .sticky({
        context: false
      });
    }
    
  });

  if($(window).width() < 768)
  {
    $('.sticky-alert, .sticky-samnipoufe, .sticky-books, .sticky-space-bullet, .sticky-spaceship-hunt')
    .sticky({
      context: false
    });
  }




});

