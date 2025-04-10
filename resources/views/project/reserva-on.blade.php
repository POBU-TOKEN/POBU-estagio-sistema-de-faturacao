@extends('layouts.no_logged')

@section('title','Marcar reserva')



@section('content')
<div class="container">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Marcar reserva</h1>
</div>
@if (session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('erro'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
        <form action="/storage-reserva-on" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="name" class="form-label">
                        Nome do hospede
                        <span>
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </label>
                    <input type="text" class="form-control" id="name" name='name' placeholder="Digite o nome completo">
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="phone-number" class="form-label">
                        Número de telefone
                        <span>
                            @error('number')
                                {{ $message }}
                            @enderror
                        </span>
                    </label>
                    <input type="text" class="form-control" id="phone-number" name='number'  placeholder="Digite o número de telefone">
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="numberContribuethor" class="form-label">Número de contribuente</label>
                    <input type="text" class="form-control" id="numberContribuethor" name='cNumber'  placeholder="Digite número de contribuente">
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="address" class="form-label">Morada</label>
                    <input type="text" class="form-control" id="address" name='address'  placeholder="Digite a morada">
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="emailAddress" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="emailAddress" name='emailAddress'  placeholder="Digite endereço de e-mail">
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="country" class="form-label">Nacionalidade</label>
                    <input type="text" class="form-control" id="country" name='country'  placeholder="Digite a nacionalidade">
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="hostType" class="form-label">Tipo de hospede</label>
                    <select class="form-select" id="hostType">
                        <option value="Singular" name='hostType'>Singular</option>
                        <option value="Empresa" name='hostType'>Empresa</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="state" class="form-label">Tipo de documento de identificação</label>
                    <select class="form-select" id="state">
                        <option  value="bi" name='document'>B.I</option>
                        <option value="passa porte" name='document'>Passa porte</option>
                    </select>
                </div>


                <div class="col-sm-6">
                    <label for="born" class="form-label">Data de nascimento</label>
                    <input type="date" class="form-control" id="born" name='born'>
                    <div class="invalid-feedback">
                        @error('lancament')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="checkOut" class="form-label">Data de check Out</label>
                    <input type="date" class="form-control" id="checkOut" name='checkOut'>
                    <div class="invalid-feedback">
                        @error('lancament')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="checkOut" class="form-label">Hospedes ocupantes</label>
                    <input type="number" class="form-control" id="checkOut" name='ocupantes' placeholder="Digite quantas passoas vão ocupar o quarto">
                    <div class="invalid-feedback">
                        @error('lancament')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Descrição</label>
                    <div class="input-group has-validation">
                        <textarea id="description" rows="5" class="form-control" placeholder="Descreva de forma detalhada o produto" name='description'></textarea>
                        <div class="invalid-feedback">
                            @error('descricao')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <fieldset class="mb-1">
                <legend>Sexo</legend>
                <div class="form-check">
                  <input type="radio" name='sex' class="form-check-input" id="exampleRadio1" value="M">
                  <label class="form-check-label" for="exampleRadio1">Masculino</label>
                </div>
                <div class="mb-3 form-check">
                  <input type="radio" name='sex' class="form-check-input" id="exampleRadio2" value="F">
                  <label class="form-check-label" for="exampleRadio2">Feminino</label>
                </div>
            </fieldset>

            <hr>


            <h4 class="mb-3">Estado de saúde</h4>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Deficiência</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Desmaio</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Acessório</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Gastável</label>
            </div>

            <hr>

            <button class="w-100 btn btn-primary btn-lg my-2" type="submit">Marcar reserva</button>
        </form>
    </div>
@endsection
