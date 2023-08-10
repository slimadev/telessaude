<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/colera') }}">Malária</a></li>
          <li><a href="">Manejo da malária</a></li>
          
        </ol>

      </div>

    </section><!-- End Breadcrumbs -->
    <section class="inner-page row d-flex justify-content-center">
    
    <div class="container row d-flex justify-content-center">
  
    @include('malaria.manejo.step-one')
    @include('malaria.manejo.step-two')
    @include('malaria.manejo.step-tree')
    

   
    </div>
    </section>
    
    @section('specific_js')
        <script src="assets/js/malaria_manejo.js"></script>
        
    @endsection
     
</x-app-layout>

