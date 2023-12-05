//*--------Mostar la seccion activa en sidebar---------

let modulo = document.getElementById('moduloBAA');
let ul = document.getElementById('moduloBAA-nav');
let active = document.getElementById('consultarActividad');
modulo.classList.remove('collapsed');
active.classList.add('active');
ul.classList.add('show');

//* ---------------------------------------------------


// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()