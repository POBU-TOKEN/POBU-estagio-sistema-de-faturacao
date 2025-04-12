<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Reservas | sistema de gestão de hotel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="./css/dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Sistema de faturação</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      @auth
      <form method="POST" action="{{ route('logout') }}"  class="nav-link px-3">
          @csrf
          <a
              href="./logout"
              onclick="event.preventDefault();
              this.closest('form').submit();"
              class="nav-link px-3"
          >
              Terminar sessão
          </a>
      </form>
      @endauth
      @guest
      <a class="nav-link px-3" href="/login">Iniciar sessão</a>
      @endguest
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <livewire:sidbar />

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3">
        <h1 class="h2">Reservas</h1>
        <div class="btn-toolbar mb-md-0">
            <a href="/add-quarto">
                <button type="button" class="btn btn-sm btn-outline-secondary m-1">
                    Adicionar um quato
                </button>
            </a>
          
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle  m-1">
            <span data-feather="calendar"></span>
            {{-- {{ Auth::name }} --}}
          </button>
        </div>
      </div>


      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">N telefone</th>
              <th scope="col">N contribuente</th>
              <th scope="col">Morada</th>
              <th scope="col">E-mail</th>
              <th scope="col">País</th>
              <th scope="col">Sexo</th>
              <th scope="col">Descrição</th>
              <th scope="col">Ocupantes</th>
              <th scope="col">Tipo de hospede</th>
              <th scope="col">Check-out</th>
              <th scope="col">Nascimento</th>
              <th scope="col">Ocupantes</th>
              <th scope="col">Editar</th>
              <th scope="col">Ver</th>
              <th scope="col">Excluir</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($item as $itens)
              <tr>
                  <td>{{ $itens->name }}</td>
                  <td>{{ $itens->phone_number }}</td>
                  <td>{{ $itens->numbe_of_contribuethor }}</td>
                  <td>{{ $itens->address }}</td>
                  <td>{{ $itens->email }}</td>
                  <td>{{ $itens->country }}</td>
                  <td>{{ $itens->was_born }}</td>
                  <td>{{ $itens->check_out_date }}</td>
                  <td>{{ $itens->description }}</td>
                  <td>{{ $itens->sex }}</td>
                  <td>{{ $itens->document }}</td>
                  <td>{{ $itens->host_type }}</td>
                  <td>{{ $itens->people }}</td>
                  <td>
                      <a href="/editar-reserva-{{ $itens->id }}" class="btn btn-primary">Editar</a>
                  </td>
                  <td>
                        <a href="/ver-reserva-{{ $itens->id }}" class="btn btn-primary">
                            Ver
                        </a>
                    </td>
                  <td>
                      <a href="/excluir-reserva-{{ $itens->id }}" class="btn btn-danger">
                          Excluir
                      </a>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
      <hr>
      <div>
        {{ $item->links() }}
      </div>
    </main>
  </div>
</div>


    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/dashboard.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
