<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/usage_statistics') }}">Estatística</a></li>
          <li><a href="">Uso de aplicativo</a></li>
          
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
                <p>Ano </p>
                <div class="col form-group">
                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="sb_year" id="sb_year">
                    <option value="2023" selected>  2023</option>
                    <option value="2022"> 2022 </option>
                    </select>
                </div>
                </div>
            </div>
        </div>
    </div>

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
        <div class="col-md-4 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chDonut1"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-8 py-1">
            <div class="card">
                <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">Província</th>
      <th scope="col">Cólera</th>
      <th scope="col">Malária</th>
      <th scope="col">Tuberculose</th>
    </tr>
  </thead>
  <tbody>
  

  @foreach ($provincies_dashboard as $province_dashboard)
    <tr>
      <th scope="row">{{ $province_dashboard->descrption }}</th>
      <td>{{ $province_dashboard->colera }}</td>
      <td>{{ $province_dashboard->malaria }}</td>
      <td>{{ $province_dashboard->tuberculose }}</td>
    </tr>
  @endforeach

  </tbody>
</table>


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
        <script src="assets/js/statistics.js"></script>
    @endsection
</x-app-layout>

