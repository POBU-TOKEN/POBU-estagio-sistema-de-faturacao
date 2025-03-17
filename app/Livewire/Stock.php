<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Quarto;


class Stock extends Component{

    public $name;
    public $number;
    public $cNumber;
    public $address;
    public $emailAddress;
    public $country;
    public $born;
    public $checkOut;
    public $description;
    public $sexo;
    public $document;
    public $hostType;
    public $ocupantes;


    protected $rules = [
        'name' => 'required'
    ];


    public function store(){
        $quarto = new Quarto();

        dd(
            'Nome: ' . $this->name,
            'Número: ' .  $this->number,
            'Número de contribuente: ' .  $this->cNumber,
            'Indereço: ' .  $this->address,
            'Email: ' .  $this->emailAddress,
            'País: ' .  $this->country,
            'Nascimento: ' . $this->born,
            'Check - out: ' . $this->checkOut,
            'Descrição:  ' . $this->description,
            'Sexo: ' . $this->sexo,
            'Documento: ' . $this->document,
            'Tipo de hospede: ' . $this->hostType,
            'Ocupantes: ' . $this->ocupantes,
        );



    }

    public function render(){
        return view('livewire.stock');
    }
}
