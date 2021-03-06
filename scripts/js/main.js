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

  $('.samnipoufe-1').click(function (e) {
    e.preventDefault();
    $('.ui.large.modal.samnipoufe-1-mod')
      .modal('show');
  });

  $('.samnipoufe-2').click(function (e) {
    e.preventDefault();
    $('.ui.fullscreen.modal.samnipoufe-2-mod')
      .modal('show');
  });

  $('.samnipoufe-3').click(function (e) {
    e.preventDefault();
    $('.ui.fullscreen.modal.samnipoufe-3-mod')
      .modal('show');
  });

  $('.booksifa-1').click(function (e) {
    e.preventDefault();
    $('.ui.large.modal.booksifa-1-mod')
      .modal('show');
  });

  $('.booksifa-2').click(function (e) {
    e.preventDefault();
    $('.ui.fullscreen.modal.booksifa-2-mod')
      .modal('show');
  });

  $('.booksifa-3').click(function (e) {
    e.preventDefault();
    $('.ui.large.modal.booksifa-3-mod')
      .modal('show');
  });
  
  $('.spacebullet-1').click(function (e) {
    e.preventDefault();
    $('.ui.large.modal.spacebullet-1-mod')
      .modal('show');
  });

  $('.spacebullet-2').click(function (e) {
    e.preventDefault();
    $('.ui.large.modal.spacebullet-2-mod')
      .modal('show');
  });
  
  $('.spaceship-hunt-1').click(function (e) {
    e.preventDefault();
    $('.ui.large.modal.spaceship-hunt-1-mod')
      .modal('show');
  });

  $('.spaceship-hunt-2').click(function (e) {
    e.preventDefault();
    $('.ui.large.modal.spaceship-hunt-2-mod')
      .modal('show');
  });

  $('.popup-img')
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

  $(window).resize(function () {

    if ($(window).width() < 768) {
      $('.sticky-alert, .sticky-samnipoufe, .sticky-books, .sticky-space-bullet, .sticky-spaceship-hunt')
        .removeClass('sticky')
        .sticky({
          context: false
        });
    }

  });

  if ($(window).width() < 768) {
    $('.sticky-alert, .sticky-samnipoufe, .sticky-books, .sticky-space-bullet, .sticky-spaceship-hunt')
      .removeClass('sticky')
      .sticky({
        context: false
      });
  }

  $('.ui.form')
    .form({
      on: 'blur',
      fields: {
        firstName: {
          identifier: 'firstName',
          rules: [
            {
              type: 'empty',
              prompt: 'Votre prénom est obligatoire'
            },
            {
              type   : 'minLength[2]',
              prompt : "Il faut au moins {ruleValue} caractères pour le prénom"
            }
          ]
        },
        lastName: {
          identifier: 'lastName',
          rules: [
            {
              type: 'empty',
              prompt: 'Votre nom est obligatoire'
            },
            {
              type   : 'minLength[2]',
              prompt : "Il faut au moins {ruleValue} caractères pour le nom"
            }
          ]
        },
        email: {
          identifier: 'email',
          rules: [
            {
              type: 'empty',
              prompt: 'Votre adresse email est obligatoire'
            },
            {
              type: 'email',
              prompt: "L'email n'a pas le format requis"
            }
          ]
        },
        subject: {
          identifier: 'subject',
          rules: [
            {
              type: 'empty',
              prompt: "L'objet de votre message est obligatoire"
            }
          ]
        },
        message: {
          identifier: 'message',
          rules: [
            {
              type: 'empty',
              prompt: 'Votre message ne peut être vide'
            }
          ]
        },
        checkbox: {
          identifier: 'checkbox',
          rules: [
            {
              type: 'checked',
              prompt: "Vous devez accepter les conditions générales d'utilisation"
            }
          ]
        }
      }
    })
    ;
  $('.cgu').click(function (e) {
    e.preventDefault();
    $('.ui.longer.modal')
      .modal('show')
      ;
  })
});

