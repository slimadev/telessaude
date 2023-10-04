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
      

      document.getElementById('dv_enquadramento').addEventListener('change', function(event) {
        const enquadramento_code = event.target.value
        console.log('You selected: ', enquadramento_code)
        if(enquadramento_code==20){
          document.getElementById("dv_professional_details").style.display = ""; 
          console.log('Mostra')
        }else{
          document.getElementById("dv_professional_details").style.display = "none"; 
          console.log('Nao Mostra')
        }

    });
      
    document.getElementById('dv_pro_required_fiels').addEventListener('change', function(event) {
          const area_id = event.target.value
          fetch(`/categories/${area_id}`)
          .then((response) => response.json())
          .then((json_array) => {
            var dv_ocupational_fiels = document.getElementById("dv_ocupational_fiels");
            dv_ocupational_fiels.innerText = null;
            var opt = document.createElement('option');
            opt.value = "";
            opt.innerHTML = "Ocupação";
            dv_ocupational_fiels.appendChild(opt);

            json_array.forEach(element => {
              var opt = document.createElement('option');
              opt.value = element.id;
              opt.innerHTML = element.description;
              dv_ocupational_fiels.appendChild(opt);
            });
            
            
            console.log(json_array)

          });
      });



  })()

 