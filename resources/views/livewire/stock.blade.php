<div>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Check In</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                Dionísio Neto
            </button>
            @if(session('msg'))
                {{ session('msg') }}
            @endif
            @if(session('Erro'))
                {{ session('Erro') }}
            @endif
            </div>
        </div>
        <div>
            <div>
                <form wire:submit.prevent='store' method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="nome" class="form-label">Nome do hospede</label>
                            <input type="text" class="form-control" id="nome" wire:model='name' placeholder="Digite o nome completo"> 
                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="nome" class="form-label">Número de telefone</label>
                            <input type="text" class="form-control" id="nome" wire:model='name'  placeholder="900 000 000"> 
                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>                        


                        <div class="col-sm-6">
                            <label for="lancamento" class="form-label">Data de check Out</label>
                            <input type="date" class="form-control" id="lancamento" wire:model='lancament'>
                            <div class="invalid-feedback">
                                @error('lancament')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="img" class="form-label">Imagem do produto</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="img" wire:model='img'>
                            <div class="invalid-feedback">
                                @error('img')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="valor" class="form-label">Valor do produto em kwanza</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="valor" placeholder="EX: 1500" wire:model='valor'>
                            <span class="input-group-text">AOA</span>
                            <div class="invalid-feedback">
                                @error('valor')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="quantidade" class="form-label">Quantidade</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="quantidade" placeholder="Diz a quantidades em unidade (S). EX: 2" wire:model='qt'>
                            <span class="input-group-text">Unidades</span>
                            <div class="invalid-feedback">
                                @error('qt')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <label for="descricao" class="form-label">Descrição</label>
                        <div class="input-group has-validation">
                            <textarea id="descricao" rows="5" class="form-control" placeholder="Descreva de forma detalhada o produto" wire:model='descricao'></textarea>
                            <div class="invalid-feedback">
                                @error('descricao')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="col-md-5">
                        <label for="country" class="form-label">Estado do produto</label>
                        <select class="form-select" id="country" wire:model='estado'>
                            <option value="">Escolher...</option>
                            <option>Novo</option>
                            <option>Recíclado</option>
                            <option>Usado</option>
                        </select>
                        <div class="invalid-feedback">
                            @error('estado')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state" required>
                        <option value="">Choose...</option>
                        <option>California</option>
                        </select>
                        <div class="invalid-feedback">
                        Please provide a valid state.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="cor" class="form-label">Cor do produto</label>
                        <input type="color" class="form-control" id="cor" wire:model='cor'>
                        <div class="invalid-feedback">
                            @error('cor')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Categoría do produto</h4>
                    <fieldset class="mb-3">
                        <legend>Radios buttons</legend>
                        <div class="form-check">
                          <input type="radio" name="radios" class="form-check-input" id="exampleRadio1">
                          <label class="form-check-label" for="exampleRadio1">Default radio</label>
                        </div>
                        <div class="mb-3 form-check">
                          <input type="radio" name="radios" class="form-check-input" id="exampleRadio2">
                          <label class="form-check-label" for="exampleRadio2">Another radio</label>
                        </div>
                      </fieldset>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Telefone</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info">Computador</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info">Acessório</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info">Gastável</label>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg my-2" type="submit">Salvar dados</button>
                </form>
            </div>
        </div>
    </main>
</div>
