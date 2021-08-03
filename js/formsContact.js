$(document).ready(function() {

  $('#send').click(function() {

    var errorsInFieldsFront = false

    // Validacion del Formulario
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
        errorsInFieldsFront = true
      }
      form.classList.add('was-validated');
    });


    if (!errorsInFieldsFront) {
      grecaptcha.ready(function() {
        grecaptcha.execute('6Lfjx9YbAAAAAD5dEWVt8q0w6-7WgbqSLj8mst6S', {
          action: 'validarFormulario'
          }).then(function(token) {
          $('#form-contacto').prepend('<input type="hidden" name="token" value="' + token + '" >');
          $('#form-contacto').prepend('<input type="hidden" name="action" value="validarFormulario" >');
          $('#form-contacto').submit();
        });
      });
    } 

  });
});