/* Funcion para hacer scroll con el menu de navegacion */
(function($) {

  "use strict";

  /* ==============================================
  Smooth Scroll To Anchor
  =============================================== */
  //jQuery for page scrolling feature - requires jQuery Easing plugin
  $(function() {
      $('.btn_to_form').bind('click', function(event) {
          var $anchor = $(this);
          $('html, body').stop().animate({
              scrollTop: $($anchor.attr('href')).offset().top - 350
          }, 1500, 'easeInOutExpo');
          event.preventDefault();
      });
  });
})(jQuery);

/* Validacion de Forms */
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        event.preventDefault();
        event.stopPropagation();
        form.classList.add('was-validated');

        if (form.checkValidity() === false) {
          return;
        }

        // reCAPTCHA v3: request a fresh token right before submitting
        var siteKey = form.getAttribute('data-recaptcha-key');
        var submitButton = form.querySelector('[type="submit"]');
        if (submitButton) {
          submitButton.disabled = true;
        }

        var recaptchaFailed = function() {
          if (submitButton) {
            submitButton.disabled = false;
          }
          alert('No pudimos validar el formulario, por favor intentá nuevamente.');
        };

        try {
          grecaptcha.ready(function() {
            try {
              grecaptcha.execute(siteKey, { action: 'form_contacto' }).then(function(token) {
                form.querySelector('[name="recaptcha_token"]').value = token;
                form.submit();
              }, recaptchaFailed);
            } catch (error) {
              recaptchaFailed();
            }
          });
        } catch (error) {
          recaptchaFailed();
        }
      }, false);
    });
  }, false);
})();

/* Efecto Wow */
wow = new WOW(
  {
    animateClass: 'animated',
    offset:       100,
    callback:     function(box) {
      // console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
  }
);
wow.init();

let found = window.location.href.search("gracias");

if (found === -1) {
  /* Magnific PopUP */
  $('.gallery-v').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    gallery:{enabled:true}
  });

  $('.gallery-o').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    gallery:{enabled:true}
  });
}


