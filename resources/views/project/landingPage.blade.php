@extends('layouts.no_logged')

@section('title', 'Home')


@section('content')
@if (session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('msg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('erro'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('erro') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/estacionamento.jpg" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Estacionamento.</h1>
            <p>Temos um estacionamento super espacoso.</p>
            <p><a class="btn btn-lg btn-primary" href="/reserve-online">Fazer reserva online</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/recepsao.jpg" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption">
            <h1>Atendimento.</h1>
            <p>Os nosso profissionais estarão sempre prontos para ajudar.</p>
            <p><a class="btn btn-lg btn-primary" href="/reserve-online">Fazer reserva online</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/quarto.avif" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Quartos.</h1>
            <p>Temos qurtos capazes de acomodar toda a família.</p>
            <p><a class="btn btn-lg btn-primary" href="/reserve-online">Fazer reserva online</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Proxímo</span>
    </button>
  </div>

<div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">Nosso serviços</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Tempo de hospedagem</h4>
                <p>Se hospede em nosso hotel, pelo tempo que quiser (Tempo máximo de hospedagem é ilimitado).</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#home"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Quartos</h4>
                <p>Temos todo tipo de quartos (de 1 à 4 camas num quarto).</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Dinamismo</h4>
                <p>Resolvemos todos os seus intereces com a máxima agilidade, e efectividade.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#toggles2"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Tecnológia</h4>
                <p>Temos tecnologias de ultima geração ao seu favor.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Localização</h4>
                <p>Estamos localizados no centro da cidade.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Support</h4>
                <p>Temos um support tecnico para resolução do problema de nossos hospedes.</p>
            </div>
        </div>
    </div>
</div>
@endsection
