(function () {
    'use strict'
   console.log('Inicializar JS')
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            console.log('Inicializar JS 2')
          if (!form.checkValidity()) {
            //event.preventDefault()
            event.stopPropagation()
          }
  
          //form.classList.add('was-validated')
        }, false)
      })



  })()