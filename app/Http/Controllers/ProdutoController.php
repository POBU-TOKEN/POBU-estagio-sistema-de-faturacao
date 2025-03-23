<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\{
    Quarto,
    Hospede,
    user,
};

class ProdutoController extends Controller{
    public function index(){
        $quarto = new Quarto;
        $hospedes = new Hospede;
        $user = new User;
        return view(
            'project.index',
            [
                'quarto' => $quarto,
                'hospedes' => $hospedes,
                'user ' => $user,
            ]
        );
    }

    public function fatura(){
        return view('project.fatura');
    }

    public function add_quarto(){
        return view('project.add-quarto');
    }

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

    public function destroy(Request $request){

    }

    public function reserva_on(){
        return view('project.reserva-on');
    }
}
