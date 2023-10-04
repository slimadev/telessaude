<br/>

<div class="reply-form " >
<x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
<x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
<div class="instruction" >

<div class="row">
        <div class="col-lg-1 d-flex flex-row justify-content-end">
        <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
            
        </div>
        <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <p>
            <strong>Actualizar senha</strong>
            </p>
        </div>
</div>
<p>Certifique-se de que sua conta esteja usando uma senha longa e aleatória para se manter segura.</p>
</div>
<hr/>
<form method="post" action="{{ route('password.update') }}"  class="needs-validation" novalidate>
    @csrf
    @method('put')
    <p>Senha  </p>
    <div class="input-group form-group has-validation">
      <input type="password" class="form-control" name="password" aria-label="Text input with segmented" required>
      <div class="invalid-feedback">
        Por favor digite a senha
      </div>
    </div>

    
    <p>Confirmar Senha  </p>
    <div class="input-group form-group has-validation">
      <input type="password" class="form-control" name="password_confirmation" aria-label="Text input with segmented" required>
      <div class="invalid-feedback">
        Por favor confirme a senha
      </div>
    </div>
    
    <br/>
    <button type="submit" class="btn btn-primary">
        <span>Salvar</span>
            
          </a>
    </button>
 
</form>

</div>




