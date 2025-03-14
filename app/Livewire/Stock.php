<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Quarto;


class Stock extends Component{
    
    public $name = "";

    // $rules = [
    //     'name' 
    // ];


    public function store(){
        $quarto = new Quarto();

        $quarto->name = $this->name;




        if($quarto->save()){
            redirect('/')->with('sucess', 'Sucesso ao adicionar o hospede');
        }else{
            redirect('/')->with('erro', 'Erro ao adicionar o hospede');
        }



    }

    public function render(){
        return view('livewire.stock');
    }
}
