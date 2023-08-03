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
    <div class="container row d-flex justify-content-center">

        @if($step ==0)
          @include('colera.cuidados_de_enfermagem.step-one')
        @elseif($step ==1)
          @include('colera.cuidados_de_enfermagem.step-two_adult')
        @elseif($step ==21)
          @include('colera.cuidados_de_enfermagem.step-two_child')
        @elseif($step ==22)
            @include('colera.cuidados_de_enfermagem.step-two_adult')
        @elseif($step ==3)
            @include('colera.cuidados_de_enfermagem.step-tree')
        @elseif($step ==41)
            @include('colera.cuidados_de_enfermagem.resultado_1')
        @elseif($step ==42)
            @include('colera.cuidados_de_enfermagem.resultado_2')
        @elseif($step ==43)
            @include('colera.cuidados_de_enfermagem.resultado_3')
        @endif
                  
    </div>
    </section>
    @section('specific_js')
        <script src="assets/js/form_validate.js"></script>
    @endsection
</x-app-layout>

