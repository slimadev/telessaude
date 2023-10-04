<x-login-layout>
 <div class="reply-form">
    <h4>Entrar na aplicação</h4>
    <form method="POST"  action="{{ route('login') }}">
              @csrf
      <div class="row">
        <div class="col form-group">
          <input name="email" type="email" class="form-control" placeholder="Email">
        </div>
      </div>
      <br/>
      <div class="row">
        <div class="col form-group">
          <input name="password" type="password" class="form-control" placeholder="Senha">
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