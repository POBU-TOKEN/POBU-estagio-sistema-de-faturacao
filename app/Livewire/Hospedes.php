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
            'name' => 'required|string',
            'number' => 'required|numeric',
            'cNumber' => 'required|numeric',
            'address' => 'required',
            'emailAddress' => 'required|email',
            'country' => 'required',
            'born' => 'required',
            'checkOut' => 'required',
            'description' => 'required',
            'sexo' => 'required',
            'document' => 'required',
            'hostType' => 'required',
            'ocupantes' => 'required|numeric',
        ],[
            'name.required' => 'O nome é necessário', 
            'name.string' => 'Os caracteres não devem ser numeríco ou simbolos',
            'number.required' => 'O número de telefone é obrigatório',
            'number.numeric' => 'O número de telefone deve ser apenas numeríco',
            'cNumber.required' => 'O número de contribuente é obrigatório',
            'cNumber.numeric' => 'O número de contribuente deve ser apenas numeríco',
            'address.required' => 'A morada é necessária',
            'emailAddress.required' => 'O email é necessário',
            'emailAddress.email' => 'O email não existe',
            'country.required' => 'O país é necessário',
            'born.required' => 'A data de nasciento é necessária',
            'checkOut' => 'A data de checkout é necessário',
            'description' => 'A descrição é necessário',
            'sexo' => 'O sexo é necessário',
            'document' => 'O documento é necessário',
            'hostType' => 'O tipo de hospede é necessário',
            'ocupantes' => 'O número de ocupantes é necessário',
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
            session()->flash('msg', 'O hospede ' . $this->name .' foi adicionado com sucesso');
            
            $this->name = $this->number = $this->cNumber = 
            $this->address = $this->emailAddress = $this->country =
            $this->born = $this->checkOut = $this->description =
            $this->sexo = $this->document = $this->hostType =
            $this->ocupantes = null;
        }else{
            session()->flash('erro', 'Ocorreu algum erro ao adicionar hospede, atualize o navegador e tente novamente');
        }
    }
    public function render(){
        return view('livewire.hospedes');
    }
}