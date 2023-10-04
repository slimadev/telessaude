<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/procedimentos') }}">Malária</a></li>
          <li><a href="">Procedimentos de teste rapido</a></li>
          
        </ol>

      </div>

    </section><!-- End Breadcrumbs -->
    <section class="inner-page row d-flex justify-content-center">
    
    <div class="container row d-flex justify-content-center">
  
    @include('malaria.procedimentos.step-one')
    @include('malaria.procedimentos.step-two')
    @include('malaria.procedimentos.step-three')
    @include('malaria.procedimentos.step-four')
    @include('malaria.procedimentos.step-five')
    @include('malaria.procedimentos.step-six')
    @include('malaria.procedimentos.step-seven')
    @include('malaria.procedimentos.step-eight')
    @include('malaria.procedimentos.step-nine')
    @include('malaria.procedimentos.step-ten')
    @include('malaria.procedimentos.step-eleven')
    @include('malaria.procedimentos.step-twelve')
    @include('malaria.procedimentos.step-thirteen')
    @include('malaria.procedimentos.step-fourteen')
    @include('malaria.procedimentos.step-fifteen')
    @include('malaria.procedimentos.step-sixteen')
    </div>
    </section>
    
    @section('specific_js')
       <script src="assets/js/procedimentosStepOne.js"></script>
       <script src="assets/js/procedimentosStepTwo.js"></script>
       <script src="assets/js/procedimentosStepThree.js"></script>
       <script src="assets/js/procedimentosStepFour.js"></script>
       <script src="assets/js/procedimentosStepFive.js"></script>
       <script src="assets/js/procedimentosStepSix.js"></script>
       <script src="assets/js/procedimentosStepSeven.js"></script>
       <script src="assets/js/procedimentosStepEight.js"></script>
       <script src="assets/js/procedimentosStepNine.js"></script>
       <script src="assets/js/procedimentosStepTen.js"></script>
       <script src="assets/js/procedimentosStepEleven.js"></script>
       <script src="assets/js/procedimentosStepTwelve.js"></script>
       <script src="assets/js/procedimentosStepThirteen.js"></script>
       <script src="assets/js/procedimentosStepFourteen.js"></script>
       <script src="assets/js/procedimentosStepFifteen.js"></script>
       <script src="assets/js/procedimentosStepSixteen.js"></script>
    @endsection
     
</x-app-layout>

