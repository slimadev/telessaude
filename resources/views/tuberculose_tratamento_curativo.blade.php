<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/tratamento_curativo') }}">Tuberculose</a></li>
          <li><a href=""> Tratamento curativo</a></li>
          
        </ol>

      </div>

    </section><!-- End Breadcrumbs -->
    <section class="inner-page row d-flex justify-content-center">
    
    <div class="container row d-flex justify-content-center">
      <!-- -->
      @include('tuberculose.tratamento_curativo.step-one')
    </div>
    </section>
    
    @section('specific_js')
        <script src="assets/js/tratamento_curativo/st1.js"></script>
    @endsection
     
</x-app-layout>

