<?php

namespace App\Livewire;

use App\Models\Hospede;
use Livewire\Component;

class Hospedes extends Component{
    
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

    public function store(){

        $this->validate([
            'name' => 'required',
            'number' => 'required|numeric',
            'cNumber' => 'required|numeric',
            'address' => 'required',
            'emailAddress' => 'required',
            'country' => 'required',
            'born' => 'required',
            'checkOut' => 'required',
            'description' => 'required',
            'sexo' => 'required',
            'document' => 'required',
            'hostType' => 'required',
            'ocupantes' => 'required|numeric',

        ]);

        $quarto = new Hospede();

        $quarto->name = $this->name;
        $quarto->phone_number = $this->number;
        $quarto->number_of_contribuethor = $this->cNumber;
        $quarto->address = $this->address;
        $quarto->email = $this->emailAddress;
        $quarto->country = $this->country;
        $quarto->was_born = $this->born;
        $quarto->check_out_date = $this->checkOut;
        $quarto->description = $this->description;
        $quarto->sex = $this->sexo;
        $quarto->document = $this->document;
        $quarto->host_type = $this->hostType;
        $quarto->people = $this->ocupantes;
        $quarto->user_id = auth()->user()->id;

        if($quarto->save()){
            session('msg', 'O hospede, ' . $this->name .'foi adicionado com sucesso');
            $this->name = $this->number = $this->cNumber = 
            $this->address = $this->emailAddress = $this->country =
            $this->born = $this->checkOut = $this->description =
            $this->sexo = $this->document = $this->hostType =
            $this->ocupantes = null;
        }else{
            session('erro', 'Ocorreu algum erro ao adicionar hospede, atualize o navegador e tente novamente');
        }
    }
    public function render(){
        return view('livewire.hospedes');
    }
}