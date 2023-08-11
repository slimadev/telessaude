

<br/>


<div class="reply-form " >
<x-input-error class="mt-2" :messages="$errors->get('name')" />
<x-input-error class="mt-2" :messages="$errors->get('email')" />
<x-input-error class="mt-2" :messages="$errors->get('password')"/>
<x-input-error class="mt-2" :messages="$errors->get('is_admin')"/>

             
<div class="instruction" >

<div class="row">

    <div class="col-lg-1 d-flex flex-row justify-content-end">
    <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
        
    </div>
    <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <p>
        <strong>Informação  de perfil</strong> 
        </p>
    </div>
    </div>
</div>
<hr/>
<form method="post" action="{{ route('profile.update') }}"  class="needs-validation" novalidate>
    @csrf
    @method('patch')
    <p>Nome  </p>
    <input type='hidden' name='uid' value='{{$user->id}}'/>
    <div class="input-group form-group has-validation">
      <input type="text" class="form-control" name="name" aria-label="Text input with segmented" value="{{$user->name}}"required >
      <div class="invalid-feedback">
        Por favor digite o nome
      </div>
    </div>
  
    <p>Email  </p>
    <div class="input-group form-group has-validation">
      <input type="email" class="form-control" name="email" aria-label="Text input with segmented" value="{{$user->email}}" required>
      <div class="invalid-feedback">
        Por favor digite o email
      </div>
    </div>
    <div class="col form-group has-validation">
    <p>Província</p>
      <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="province_id" required>
      @foreach ($provincies as $province)
         
          @if($user->province_id == $province->id)
          <option value="{{ $province->id }}" selected > {{ $province->descrption }}</option>
          @else
          <option value="{{ $province->id }}">{{ $province->descrption }}</option>
          @endif
      @endforeach
      </select>
      <div class="invalid-feedback">
        Por favor selecione Província
      </div>
  </div>

  <div class="col form-group has-validation">
    <p>Enquandramento </p>
      <select id="dv_enquadramento" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="framing_code" required>
      @foreach ($frames as $frame)
          @if($user->framing_id == $frame->id)
            <option value="{{ $frame->code}}" selected>{{ $frame->descrption }}</option>
          @else
          <option value="{{$frame->code}}">{{ $frame->descrption }}</option>
          @endif
          
      @endforeach
      </select>
      <div class="invalid-feedback">
        Por favor selecione Enquandramento
      </div>
  </div>
  @if($user->frame->code == 20)
  <div id="dv_professional_details">
  @else
  <div id="dv_professional_details" style="display:none">
  @endif
  
    <div class="col form-group has-validation">
      <p>Área Ocupacional </p>
        <select id="dv_pro_required_fiels" class="form-control form-select  form-select-lg mb-3" aria-label=".form-select-lg example" name="categoria_id" required>
        @foreach ($categories as $category)
          @if($user->category_id == $category->id)
            <option value="{{ $category->id }}" selected> {{ $category->descrption }}</option>
          @else
            <option value="{{ $category->id }}"> {{ $category->descrption }}</option>
          @endif
            
        @endforeach
        </select>
        <div class="invalid-feedback">
          Por favor selecione Área Ocupacional
        </div>
    </div>

    <div class="col form-group has-validation">
      <p>Ocupação</p>
        <select id="dv_ocupational_fiels" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="program_id" required>
        @foreach($programas as $programa)
          @if($user->programa_id==$programa->id)
        <option value="{{$programa->id}}" selected>{{$programa->descrption}}</option>
          @else
          <option value="{{$programa->id}}" selected>{{$programa->descrption}}</option>
          @endif
        @endforeach
        </select>
        <div class="invalid-feedback">
          Por favor selecione Ocupação
        </div>
    </div>
  
    <p>NUIT  </p>
    <div class="input-group form-group has-validation">
      <input type="number" class="form-control" name="nuit" aria-label="Text input with segmented" value="{{$user->nuit}}" required >
      <div class="invalid-feedback">
        Por favor digite o NUIT
      </div>
    </div>
  </div>
  
    <button type="submit" class="btn btn-primary">
          <span>Salvar</span>
          
    </button>
 
</form>

</div>

<script>
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

  </script>

