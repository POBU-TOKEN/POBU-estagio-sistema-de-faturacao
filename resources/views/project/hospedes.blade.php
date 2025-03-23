@extends('layouts.main')
@section('title', 'Check in')
    
@section('content')
    
    <livewire:sidbar />

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3">
        <h1 class="h2">Hospedes</h1>
        <div class="btn-toolbar mb-md-0">
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Dionísio Neto
          </button>
        </div>
      </div>


      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Tipodo quarto</th>
              <th scope="col">Status</th>
              <th scope="col">Descrição</th>
              <th scope="col">Data de edição</th>
              <th scope="col">Estado do produto</th>
              <th scope="col">Data de edição</th>
              <th scope="col">Editar</th>
              <th scope="col">Ver</th>
              <th scope="col">Excluir</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($item as $itens)
              <tr>
                  <td>01</td>
                  <td>2.000.00kz</td>
                  <td>Vago</td>
                  <td>placeholder</td>
                  <td>placeholder</td>
                  <td>placeholder</td>
                  <td>placeholder</td>
                  <td>
                      <a href="" class="btn btn-primary">Editar</a>
                  </td>
                  <td>
                        <a href="" class="btn btn-primary">
                            Ver
                        </a>
                    </td>
                  <td>
                      <a href="" class="btn btn-danger">
                          Excluir
                      </a>
                  </td>
              </tr>
              @endforeach
              <hr>
              {{-- {{ $itens->links() }} --}}
          </tbody>
        </table>
      </div>
    </main>
    @endsection