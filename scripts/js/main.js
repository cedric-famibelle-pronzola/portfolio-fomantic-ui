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
        .sticky({
          context: false
        });
    }

  });

  if ($(window).width() < 768) {
    $('.sticky-alert, .sticky-samnipoufe, .sticky-books, .sticky-space-bullet, .sticky-spaceship-hunt')
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
            }
          ]
        },
        lastName: {
          identifier: 'lastName',
          rules: [
            {
              type: 'empty',
              prompt: 'Votre nom est obligatoire'
            }
          ]
        },
        email: {
          identifier: 'email',
          rules: [
            {
              type: 'empty',
              prompt: 'Votre adresse email est obligatoire'
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
        gift: {
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

