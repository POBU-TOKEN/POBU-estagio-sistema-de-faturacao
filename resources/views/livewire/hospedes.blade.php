<div>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Check In</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button type="button" class="btn btn-sm btn-outline-secondary m-1">
                    Importar CSV
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary  m-1">
                    {{ auth()->user()->name }}
                </button>
               
            </div>
        </div>
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
        <div>
            <div>
                <form wire:submit.prevent='store' method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="name" class="form-label">
                                Nome do hospede
                                <span class="text-danger">
                                    @error('name')
                                        ({{ $message }})
                                    @enderror
                                </span>
                            </label>
                            <input type="text" class="form-control" id="name" wire:model='name' placeholder="Digite o nome completo">
                        </div>

                        <div class="col-sm-6">
                            <label for="phone-number" class="form-label">
                                Número de telefone 
                                <span class="text-danger">
                                    @error('number')
                                        ({{ $message }})
                                    @enderror
                                </span>
                            </label>
                            <input type="text" class="form-control" id="phone-number" wire:model='number'  placeholder="Digite o número de telefone">
                        </div>

                        <div class="col-sm-6">
                            <label for="numberContribuethor" class="form-label">
                                Número de contribuente
                                <span class="text-danger">
                                    @error('cNumber')
                                        ({{ $message }})
                                    @enderror
                                </span>
                            </label>
                            <input type="text" class="form-control" id="numberContribuethor" wire:model='cNumber'  placeholder="Digite número de contribuente">
                        </div>

                        <div class="col-sm-6">
                            <label for="address" class="form-label">
                                Morada
                                <span class="text-danger">
                                    @error('address')
                                        ({{ $message }})
                                    @enderror
                                </span>
                            </label>
                            <input type="text" class="form-control" id="address" wire:model='address'  placeholder="Digite a morada">
                        </div>

                        <div class="col-sm-6">
                            <label for="emailAddress" class="form-label">
                                E-mail
                                <span class="text-danger">
                                    @error('emailAddress')
                                        ({{ $message }})
                                    @enderror
                                </span>
                            </label>
                            <input type="text" class="form-control" id="emailAddress" wire:model='emailAddress'  placeholder="Digite endereço de e-mail">
                        </div>

                        <div class="col-sm-6">
                            <label for="country" class="form-label">
                                Nacionalidade
                                <span class="text-danger">
                                    @error('country')
                                        ({{ $message }})
                                    @enderror
                                </span>
                            </label>
                            <input type="text" class="form-control" id="country" wire:model='country'  placeholder="Digite a nacionalidade">
                        </div>

                        <div class="col-md-6">
                            <label for="hostType" class="form-label">
                                Tipo de hospede
                                <span class="text-danger">
                                    @error('hostType')
                                        ({{ $message }})
                                    @enderror
                                </span>
                            </label>
                            <select class="form-select" id="hostType" wire:model='hostType'>
                                <option value="Singular">Singular</option>
                                <option value="Empresa">Empresa</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="state" class="form-label">
                                Tipo de documento de identificação
                                <span class="text-danger">
                                    @error('document')
                                        ({{ $message }})
                                    @enderror
                                </span>
                            </label>
                            <select class="form-select" id="state" wire:model='document'>
                                <option  value="bi">B.I</option>
                                <option value="passa porte">Passa porte</option>
                            </select>
                        </div>

                        
                        <div class="col-sm-6">
                            <label for="born" class="form-label">
                                Data de nascimento
                                <span class="text-danger">
                                    @error('born')
                                        ({{ $message }})
                                    @enderror
                                </span>
                            </label>
                            <input type="date" class="form-control" id="born" wire:model='born'>
                        </div>

                        <div class="col-sm-6">
                            <label for="checkOut" class="form-label">
                                Data de check Out
                                <span class="text-danger">
                                    @error('checkOut')
                                        ({{ $message }})
                                    @enderror
                                </span>
                            </label>
                            <input type="date" class="form-control" id="checkOut" wire:model='checkOut'>
                        </div>

                        <div class="col-sm-12">
                            <label for="checkOut" class="form-label">
                                Hospedes ocupantes
                                <span class="text-danger">
                                    @error('ocupantes')
                                        ({{ $message }})
                                    @enderror
                                </span>
                            </label>
                            <input type="number" class="form-control" id="checkOut" wire:model='ocupantes' placeholder="Digite quantas passoas vão ocupar o quarto">
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label">
                                Descrição
                                <span class="text-danger">
                                    @error('description')
                                        ({{ $message }})
                                    @enderror
                                </span>
                            </label>
                            <div class="input-group has-validation">
                                <textarea id="description" rows="5" class="form-control" placeholder="Descreva de forma detalhada o produto" wire:model='description'></textarea>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <fieldset class="mb-1">
                        <legend>
                            Sexo
                            <span class="text-danger">
                                @error('sexo')
                                    ({{ $message }})
                                @enderror
                            </span>
                        </legend>
                        <div class="form-check">
                          <input type="radio" name="radios" class="form-check-input" id="exampleRadio1" wire:model='sexo' value="M">
                          <label class="form-check-label" for="exampleRadio1">Masculino</label>
                        </div>
                        <div class="mb-3 form-check">
                          <input type="radio" name="radios" class="form-check-input" id="exampleRadio2"  wire:model='sexo' value="F">
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

                    <button class="w-100 btn btn-primary btn-lg my-2" type="submit">Salvar dados</button>
                </form>
            </div>
        </div>
    </main>
</div>
