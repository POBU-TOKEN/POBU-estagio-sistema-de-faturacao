<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard | sistema de faturação</title>

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

    .themed-grid-col {
        padding-top: .75rem;
        padding-bottom: .75rem;
        background-color: rgba(86, 61, 124, .15);
        border: 1px solid rgba(86, 61, 124, .2);
        border-radius: 5px;
        margin: 2px;
    }
    .themed-container {
        padding: .75rem;
        margin-bottom: 1.5rem;
        background-color: rgba(0, 123, 255, .15);
        border: 1px solid rgba(0, 123, 255, .2);
    }

    </style>


    <!-- Custom styles for this template -->
    <link href="./css/dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Gestão do hotal</a>
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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

          <button type="button" class="btn btn-sm btn-outline-secondary">
            {{ auth()->user()->name }}
          </button>
        </div>
      </div>
      <div>

      @if (session('sucess'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('sucess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session('erro'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('erro') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif



        <div class="row row-cols-1 row-cols-md-3 gx-4 m-1">
          <div class="col themed-grid-col">
            <h2>Reservas: ( {{ $reserva_on->count() }} )</h2>
            <div>Requisitos</div>
          </div>
            <div class="col themed-grid-col">
                <h2>Usuáios: ( {{ $user->count() }} )</h2>
                <div>Requisitos</div>
            </div>

            <div class="col themed-grid-col">
                <h2>Hospedes: ( {{ $hospedes->count() }} )</h2>
                <div>Requisitos</div>
            </div>

            <div class="col themed-grid-col">
                <h2>Quartos: ( {{ $reserva_on->count() }} )</h2>
                <div>Requisitos</div>
            </div>
        </div>
      </div>
    </main>
  </div>
</div>


    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/dashboard.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
