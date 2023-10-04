<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/user_statistics') }}">Estatística</a></li>
          <li><a href="">Utilizadores</a></li>
          
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page row d-flex justify-content-center">
    <div class="container row d-flex justify-content-center">
    <div class="result-form">
        
    <div class="container">
  
    <div class="row my-2">
        
        <div class="col-md-12 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chBar"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-md-6 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chDonut1"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 py-1">
            <div class="card">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>


    </div>        
    </div>
    </section>
    @section('specific_js')
    <script src="assets/js/chart.js"></script>
        <script src="assets/js/statistics_users.js"></script>
    @endsection
</x-app-layout>

