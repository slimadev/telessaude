<x-login-layout>
  <br/>
  @if(session()->has('message'))
                  <div class="alert alert-success row d-flex justify-content-center col-12">
                      {{ session()->get('message') }}
                  </div>
               
              @endif
              @if(session()->has('messageerror'))
                  <div class="alert alert-danger row d-flex justify-content-center col-12">
                      {{ session()->get('messageerror') }}
                  </div>
               
              @endif
<x-input-error :messages="$errors->get('email')" class="mt-2" />
 <div class="reply-form">
    <h4>Entrar na aplicação</h4>
    <form method="POST"  action="{{ route('login') }}" class="needs-validation" id="login_form" onsubmit='return validacao()' novalidate>
      @csrf
      <div class="col form-group has-validation">
          <input name="email" type="email" class="form-control" placeholder="Email" id='email' required>
          <div class="invalid-feedback">
            Por favor digite o email
          </div>
      </div>
        <div class="col form-group has-validation">
          <input name="password" type="password" class="form-control" id='password' placeholder="Senha" required>
          <div class="invalid-feedback">
            Por favor digite a senha
        </div>
        </div>
      <br/>
      <button type="submit" class="btn btn-primary">
        <span>Entrar</span>
            <i class="bi bi-arrow-right"></i>
          </a>
      </button>
    </form>
    <div class="mt-4">
     
      <a href="/reset" id="reset_link">Esqueceu Senha</a>
          
      
      </div>
      
  </div>
 
 
</x-login-layout>


<script src="assets/js/user_register.js"></script>
<script>
  function validacao(){
    let email=document.getElementById("email").value;
    let password=document.getElementById("password").value;
    if(password=="" || password==null){
      alert('Por favor preencher o email');
      return false;
    }
    return; 
    
}


</script>