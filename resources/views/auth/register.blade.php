<x-login-layout>
  <br/>
<x-input-error :messages="$errors->get('name')" class="mt-2" />
<x-input-error :messages="$errors->get('email')" class="mt-2" />
<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
<div class="reply-form " >
<div class="instruction" >
<div class="row">
    <div class="col-lg-1 d-flex flex-row justify-content-end pl-100">
    <img src="assets/img/instrucao.png"  alt="" width="50" height="50" >
        
    </div>
    <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <p>
        <strong>Criar conta do utilizador</strong>
        </p>
    </div>
    </div> 
</div>
<hr/>
<form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
@csrf
<p>Nome  </p>
    <div class="input-group form-group has-validation">
      <input type="text" class="form-control" name="name" aria-label="Text input with segmented" required >
      <div class="invalid-feedback">
        Por favor digite o nome
      </div>
    </div>
    <p>Email  </p>
    <div class="input-group form-group has-validation">
      <input type="email" class="form-control" name="email" aria-label="Text input with segmented" required>
      <div class="invalid-feedback">
        Por favor digite o email
      </div>
    </div>
   
  <div class="col form-group has-validation">
  <p>Província </p>
      <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="province_id" required>
      <option value="" selected>Província </option>
      @foreach ($provincies as $province)
          <option value="{{ $province->id }}">{{ $province->descrption }}</option>
      @endforeach
      </select>
      <div class="invalid-feedback">
        Por favor selecione Província
      </div>
  </div>

  <div class="col form-group has-validation">
    <p>Enquandramento </p>
      <select id="dv_enquadramento" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="framing_code" required>
      <option value="" selected>Enquandramento </option>
      @foreach ($frames as $frame)
          <option value="{{ $frame->code }}">{{ $frame->descrption }}</option>
      @endforeach
      </select>
      <div class="invalid-feedback">
        Por favor selecione Enquandramento
      </div>
  </div>


  <div id="dv_professional_details" style="display:none">
    <div class="col form-group has-validation">
      <p>Área Ocupacional </p>
        <select id="dv_pro_required_fiels" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
        <option value="" selected>Área Ocupacional </option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}"> {{ $category->descrption }}</option>
        @endforeach
        </select>
        <div class="invalid-feedback">
          Por favor selecione Área Ocupacional
        </div>
    </div>

    <div class="col form-group has-validation">
      <p>Ocupação</p>
        <select id="dv_ocupational_fiels" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="category_id" required>
        <option value="" selected>Ocupação</option>
        </select>
        <div class="invalid-feedback">
          Por favor selecione Ocupação
        </div>
    </div>
  
    <p>NUIT  </p>
    <div class="input-group form-group has-validation">
      <input type="number" class="form-control" name="nuit" aria-label="Text input with segmented" required >
      <div class="invalid-feedback">
        Por favor digite o NUIT
      </div>
    </div>
  </div>
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
    <button type="submit" class="btn btn-primary">
          <span>Salvar</span>
    </button>
 
</form>

</div>
</x-login-layout>
