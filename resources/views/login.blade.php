<x-login-layout>
  <br/>
<x-input-error :messages="$errors->get('email')" class="mt-2" />
 <div class="reply-form">
    <h4>Entrar na aplicação</h4>
    <form method="POST"  action="{{ route('login') }}" class="needs-validation" novalidate>
      @csrf
      <div class="col form-group has-validation">
          <input name="email" type="email" class="form-control" placeholder="Email" required>
          <div class="invalid-feedback">
            Por favor digite o email
        </div>
      </div>
        <div class="col form-group has-validation">
          <input name="password" type="password" class="form-control" placeholder="Senha" required>
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

  </div>
</x-login-layout>