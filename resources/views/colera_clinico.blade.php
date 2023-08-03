<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/colera') }}">Cólera</a></li>
          <li><a href="">Clínico</a></li>
          
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->
    <section class="inner-page row d-flex justify-content-center">
    
    @if($step !=1) @include('colera.clinico.result-details') @endif
    <div class="container row d-flex justify-content-center">


    

    @if($step ==1)
      @include('colera.clinico.step-one')
      @include('colera.clinico.step-two')
      @include('colera.clinico.step-tree')
    @elseif($step ==41)
        @include('colera.clinico.resultado_1')
    @elseif($step ==42)
        @include('colera.clinico.resultado_2')
    @elseif($step ==43)
        @include('colera.clinico.resultado_3')
    @endif
    </div>
    </section>
    
    @section('specific_js')
        <script src="assets/js/colera_clinico.js"></script>
        
    @endsection
     
</x-app-layout>

