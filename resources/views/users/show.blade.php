<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/dashboard') }}">Administração</a></li>
          <li><a href="">Utilizador</a></li>
          
        </ol>

      </div>
    </section><!-- End Breadcrumbs class="btn btn-primary" -->

    <section class="inner-page row d-flex justify-content-center">
    <div class="container row d-flex justify-content-center">

    <div class="reply-form" id="dvStepOne" style="display:">
    <div class="instruction">
          <div class="row">
              <div class="col-lg-1 d-flex flex-row justify-content-end">
              <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
                  
              </div>
              <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
                  <p>
                  <strong>Editar utilizador</strong>
                  </p>
              </div>
              </div>
          </div>
          <hr/>
      <form action="{{route('users.update')}}" method="post">
      @csrf 
      <input type="hidden" name="id" value="{{$user->id}}"/>
        <p>Nome  </p>
        <div class="input-group form-group has-validation">
          <input type="text" class="form-control" name="url" aria-label="Text input with segmented" value="{{$user->name}}" disabled >
        </div>
        <p>Email  </p>
        <div class="input-group form-group has-validation">
          <input type="text" class="form-control" name="name" aria-label="Text input with segmented" value="{{$user->email}}" required >
          <div class="invalid-feedback">
            Por favor digite a Descrição
          </div>
        </div>
        <p>Perfil  </p>
          <div class="row">
          <div class="col-md-6 form-check ">
              <input class="form-check-input" type="radio" name="rbProfile" value="1" @if($user->is_admin ==1) checked @endif>
              <label class="form-check-label" for="rbProfile">
              Administrador
              </label>
          </div>
          <div class="col-md-6 form-check ">
              <input class="form-check-input" type="radio" value="0" name="rbProfile"  @if($user->is_admin ==0) checked @endif>
              <label class="form-check-label" for="rbProfile">
              Agente de Consulta
              </label>
          </div>


          </div>
        <div class="col form-group has-validation dvProgram" @if($user->is_admin ==0) style="display:none" @endif>
          <p>Programa </p>
            <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="program_id" required>
            <option value="0" selected>Programa </option>
            @foreach ($programs as $program)
                <option value="{{ $program->id }}">{{ $program->descrption }}</option>
            @endforeach
            </select>
        </div>
        <hr/>
        <button id="btn_step_one_ajax" class="btn btn-primary">Salvar </button>
        <a id="btn_step_one_ajax" class="btn btn-primary" href="{{ url('/users') }}">Cancelar</a>
      </form> 
    </div>   
          
</div>
@section('specific_js')
    <script src="assets/js/user.js"></script>
@endsection
</x-app-layout>

