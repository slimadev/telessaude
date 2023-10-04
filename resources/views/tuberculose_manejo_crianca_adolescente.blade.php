<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/tuberculose_manejo_ca') }}">Tuberculose</a></li>
          <li><a href=""> Rastreio e diagnóstico </a></li>
          
        </ol>

      </div>

    </section><!-- End Breadcrumbs -->
    <section class="inner-page row d-flex justify-content-center">
    
    <div class="container row d-flex justify-content-center">
      <!-- -->
      @include('tuberculose.manejo_ca.step-one')
      @include('tuberculose.manejo_ca.step-two')
      @include('tuberculose.manejo_ca.step-tree')
      @include('tuberculose.manejo_ca.step-four')
      
      @include('tuberculose.manejo_ca.step-five')
    </div>
    </section>
    
    @section('specific_js')
        <!--<script src="assets/vendor/jsPlumb/jsPlumb-2.2.6.js"></script>-->
        
        <script src="assets/js/tuberculose_manejo_ca.js"></script>
        <script src="assets/js/tuberculose_manejo_ca_st4.js"></script>
        <script src="assets/js/tuberculose_manejo_ca_st2.js"></script>
        <script src="assets/js/tuberculose_manejo_ca_st5.js"></script>
    @endsection
     
</x-app-layout>

