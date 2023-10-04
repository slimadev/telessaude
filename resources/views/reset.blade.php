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
    <h4>Resetar a senha</h4>
    <form method="POST"  action="{{ route('reset_password_p') }}" class="needs-validation" id="reset_password" novalidate>
      @csrf
      <div class="col form-group has-validation">
          <input name="email" type="email" class="form-control" placeholder="Email" required>
          <div class="invalid-feedback">
            Por favor digite o email
        </div>
      </div>
      
      <br/>
      <button type="submit" class="btn btn-primary">
        <span>Resetar</span>
            <i class="bi bi-arrow-right"></i>
          </a>
      </button>
    </form>
   
      
  </div>
 
 
</x-login-layout>


<script src="assets/js/user_register.js"></script>