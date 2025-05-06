<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Hospedes | sistema de gestão de hotel</title>

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

      
/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
/* rtl:end:ignore */


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 900;
  line-height: 1;
  /* rtl:remove */
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
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
          <h1 class="h2">Detalhes da Reserva</h1>
          <div class="btn-toolbar mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="user"></span>
              {{ auth()->user()->name }}
            </button>
          </div>
        </div>
      
        <hr>
      
        <div class="card shadow-sm p-4">
          <div class="row g-4">
            <div class="col-12">
              <h2 class="mb-3">Informações do Hóspede</h2>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nome:</strong> {{ $item->name }}</li>
                <li class="list-group-item"><strong>Número de Telefone:</strong> {{ $item->phone_number }}</li>
                <li class="list-group-item"><strong>Morada:</strong> {{ $item->address }}</li>
                <li class="list-group-item"><strong>Número de Contribuinte:</strong> {{ $item->number_of_contribuethor }}</li>
                <li class="list-group-item"><strong>País:</strong> {{ $item->country }}</li>
                <li class="list-group-item"><strong>Sexo:</strong> {{ $item->sex }}</li>
                <li class="list-group-item"><strong>Data de Nascimento:</strong> {{ $item->was_born }}</li>
                <li class="list-group-item"><strong>Tipo de Hóspede:</strong> {{ $item->host_type }}</li>
                <li class="list-group-item"><strong>Descrição:</strong> {{ $item->description }}.</li>
              </ul>
      
              <div class="mt-4">
                <span class="badge bg-success me-2">Reserva Confirmada</span>
                <button class="btn btn-outline-primary btn-sm">Editar Reserva</button>
              </div>
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
