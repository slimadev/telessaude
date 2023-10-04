<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/colera') }}">Malária</a></li>
          <li><a href="">Cálculo da dose de artesunato</a></li>
          
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->
    <section class="inner-page row d-flex justify-content-center">
    
    <div class="container row d-flex justify-content-center">
    @if($step ==1)
    @include('malaria.calculo.step-one')
    @else
    @include('malaria.calculo.resultado')
    @endif
    

   
    </div>
    </section>
    
    @section('specific_js')
        <script src="assets/js/colera_clinico.js"></script>
        
    @endsection
     
</x-app-layout>

