<x-login-layout>
  <br/>
 
<x-input-error :messages="$errors->get('email')" class="mt-2" />
 <div class="reply-form">
    <h4>Nova Senha</h4>
    <form method="POST"  action="{{ route('reset_password_post') }}" class="needs-validation" id="reset_password" novalidate>
      @csrf

      <input name="token" type="text" hidden value="{{$token}}">
      <input name="email" type="email" hidden value="{{$email}}">
    
      <div class="col form-group has-validation">
          <input name="password" type="password" class="form-control" placeholder="Password" required>
          <div class="invalid-feedback">
            Por favor digite a senha
        </div>
      </div>
      
      <br/>
      <div class="col form-group has-validation">
          <input name="r_password" type="password" class="form-control" placeholder="Repetir Senha" required>
          <div class="invalid-feedback">
            Por favor repetir a senha
        </div>
      </div>
      
      <br/>
      <button type="submit" class="btn btn-primary">
        <span>Alterar senha</span>
            <i class="bi bi-arrow-right"></i>
          </a>
      </button>
    </form>
   
      
  </div>
 
 
</x-login-layout>


<script src="/assets/js/user_register.js"></script>