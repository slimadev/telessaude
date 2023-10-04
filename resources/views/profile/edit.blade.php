<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Perfil</a></li>
          <li><a href="">Perfil e conta do utilizador</a></li>
          
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page row d-flex justify-content-center">
    @if(session()->has('message'))
                  <div class="alert alert-success row d-flex justify-content-center col-4">
                      {{ session()->get('message') }}
                  </div>
              @endif
    <div class="container row d-flex justify-content-center">
        @include('profile.partials.update-profile-information-form')
    </div>
    </section>
     
</x-app-layout>

