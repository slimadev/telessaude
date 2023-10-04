<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/usage_statistics') }}">Administração</a></li>
          <li><a href="">Documentos</a></li>
          
        </ol>

      </div>
    </section><!-- End Breadcrumbs class="btn btn-primary" -->

    <section class="inner-page row d-flex justify-content-center">
    <div class="container row d-flex justify-content-center">

    <div class="reply-form" id="dvStepOne" style="display:">
    <div class="instruction">
          <div class="row">
                  @if(isset($message))
                      <div class="alert alert-success">
                          {{$message}}
                      </div>
                  @endif


          
              <div class="col-lg-1 d-flex flex-row justify-content-end">
              <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
                  
              </div>
              <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
                  <p>
                  <strong>Editar documento</strong>
                  </p>
              </div>
              </div>
          </div>
          <hr/>
      <form action="{{route('documents.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$document->id}}">
        <p>Anexo  </p>
        <div class="input-group form-group has-validation">
          <input type="text" class="form-control" name="url" aria-label="Text input with segmented" value="{{$document->url}}" readonly>
        </div>
        <p>Descrição  </p>
        <div class="input-group form-group has-validation">
          <input type="text" class="form-control" name="name" aria-label="Text input with segmented" value="{{$document->name}}" required >
          <div class="invalid-feedback">
            Por favor digite a Descrição
          </div>
        </div>

        <p>Novo Ficheiro  </p>
        <div class="input-group form-group has-validation">
          <input type="file" class="form-control" name="file" aria-label="Text input with segmented" required >
          <div class="invalid-feedback">
            Por favor digite a Descrição
          </div>
        </div>
        <hr/>
        <button id="btn_step_one_ajax" class="btn btn-primary">Salvar </button>
        <a id="btn_step_one_ajax" class="btn btn-primary" href="{{ url('/documents') }}">Cancelar</a>
      </form> 
    </div>   
          
</div>

</x-app-layout>