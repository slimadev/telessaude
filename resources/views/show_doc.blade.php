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
      {{$document->name}}
    </div>
                  
    </div>
    </section>
    @section('specific_js')
        <script src="assets/js/form_validate.js"></script>
    @endsection
</x-app-layout>

