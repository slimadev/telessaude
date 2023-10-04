<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/colera') }}">Cólera</a></li>
          <li><a href="">Cuidados de Enfermagem</a></li>
          
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->
    <section class="inner-page row d-flex justify-content-center">
    
    @if($step !=1) @include('colera.clinico.result-details') @endif
    <div class="container row d-flex justify-content-center">


    

    @if($step ==1)
      @include('colera.enfermagem.step-one')
      @include('colera.enfermagem.step-two')
      @include('colera.enfermagem.step-tree')
    @elseif($step ==41)
        @include('colera.enfermagem.resultado_1')
    @elseif($step ==42)
        @include('colera.enfermagem.resultado_2')
    @elseif($step ==43)
        @include('colera.enfermagem.resultado_3')
    @endif
    </div>
    </section>
    
    @section('specific_js')
        <script src="assets/js/colera.js"></script>
        
    @endsection
     
</x-app-layout>

