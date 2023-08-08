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

    <div class="result-form " >
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Anexo</th>
      <th scope="col">Descrição</th>
      <th scope="col">Programa</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  @foreach ($documents as $document)
    <tr>
      
      <th scope="row"><a href="{{url('/download/'.$document->url)}}">{{ $document->url }}</a></th>
      <td>{{ $document->name }}</td>
      <td>{{ $document->program->descrption }}</td>
      @if(Auth::user()->is_admin)
      <td>
      <form method="POST" action="{{ route('documents_show') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $document->id }}"/>
                    <a href="route('documents_show')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class="bi bi-pencil-square"></i>
                    </a>
      </form>
    </td>
    @endif
    </tr>
  @endforeach
    
  </tbody>
</table>
    </div>
                  
    </div>
    </section>
    @section('specific_js')
        <script src="assets/js/form_validate.js"></script>
    @endsection
</x-app-layout>

