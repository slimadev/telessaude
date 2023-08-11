<x-app-layout>
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/usage_statistics') }}">Administração</a></li>
          <li><a href="">Utilizadores</a></li>
          
        </ol>

      </div>
    </section><!-- End Breadcrumbs class="btn btn-primary" -->
            
    <section class="inner-page row d-flex justify-content-center">
    @if(session()->has('message'))
                  <div class="alert alert-success row d-flex justify-content-center col-4">
                      {{ session()->get('message') }}
                  </div>
              @endif
    <div class="container row d-flex justify-content-center">
             
    <div class="result-form " >
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Perfil</th>
      <th scope="col">Programa</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  @foreach ($users as $user)
    <tr>
      <th scope="row">{{ $user->name }}</th>
      <td>{{ $user->email }}</td>
      <td>
      @if($user->is_admin ==1) 
      Administrador
      @else
      Agente de Consulta
      @endif
      </td>
      <td>
      @if(!empty($user->framing_id)) 
             
               {{$user->descrption}}
      @endif
      </td>
      <td>
      <form method="POST" action="{{ route('users_show') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}"/>
                    <a href="route('users_show')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class="bi bi-pencil-square"></i>
                    </a>
      </form>
    </td>
    </tr>
  @endforeach
    
  </tbody>
</table>
    </div>
                  
    </div>
    </section>
    @section('specific_js')
        <script src="assets/js/form_validate.js"></script>
    @endsection
</x-app-layout>

