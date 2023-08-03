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
      <select id="dv_enquadramento" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="framing_id" required>
      @foreach ($frames as $frame)
          @if($user->frame_id == $frame->id)
            <option value="{{ $frame->id }}" selected>{{ $frame->descrption }}</option>
          @else
          <option value="{{ $frame->id }}">{{ $frame->descrption }}</option>
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
        <select id="dv_pro_required_fiels" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
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
  
    <button type="submit" class="btn btn-primary">
          <span>Salvar</span>
          
    </button>
 
</form>

</div>



