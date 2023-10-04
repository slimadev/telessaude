<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/preparacao') }}">Malária</a></li>
          <li><a href="">Procedimentos de preparação de artesunato</a></li>
          
        </ol>

      </div>

    </section><!-- End Breadcrumbs -->
    <section class="inner-page row d-flex justify-content-center">
    
    <div class="container row d-flex justify-content-center">
  
    @include('malaria.preparacao.step-one')
    @include('malaria.preparacao.step-two')
    @include('malaria.preparacao.step-three')
    @include('malaria.preparacao.step-four')
    </div>
    </section>
    
    @section('specific_js')
       <script src="assets/js/preparacaoStepOne.js"></script>
       <script src="assets/js/preparacaoStepTwo.js"></script>
       <script src="assets/js/preparacaoStepThree.js"></script>
       <script src="assets/js/preparacaoStepFour.js"></script>
    @endsection
     
</x-app-layout>
