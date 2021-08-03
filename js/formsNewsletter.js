$(document).ready(function() {

  $('#send_newsletter').click(function() {

    var errorsInFieldsFront = false

    // Validacion del Formulario
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var form = document.getElementById('form-newsletter');

    // Loop over them and prevent submission
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
      errorsInFieldsFront = true
    }
    form.classList.add('was-validated');

    if (!errorsInFieldsFront) {
      grecaptcha.ready(function() {
        grecaptcha.execute('6Lfjx9YbAAAAAD5dEWVt8q0w6-7WgbqSLj8mst6S', {
          action: 'validarNewsletter'
          }).then(function(token) {
          $('#form-newsletter').prepend('<input type="hidden" name="token" value="' + token + '" >');
          $('#form-newsletter').prepend('<input type="hidden" name="action" value="validarNewsletter" >');
          $('#form-newsletter').submit();
        });
      });
    } 

  });
});