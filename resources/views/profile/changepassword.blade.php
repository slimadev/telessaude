<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Perfil</a></li>
          <li><a href="">Senha do utilizador</a></li>
          
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page row d-flex justify-content-center">
    <div class="container row d-flex justify-content-center">
        @include('profile.partials.update-password-form')
    </div>
    </section>
     
</x-app-layout>

