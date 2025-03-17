<?php

namespace App\Http\Controllers;
use App\Models\Quarto;
use Illuminate\Http\Request;

class ProdutoController extends Controller{
    public function quarto(){
        $item = new Quarto;
        return view
        (
            'project.quarto',
            ["item" => $item],
        );
    }

    public function checkin(){
        return view('project.checkin');
    }

    public function storage(){

    }

    public function hospedes(){
        $item = new Quarto;

        return view(
            'project.hospedes',
            ["item" => $item],
        );
    }

    public function destroy(){

    }
}
