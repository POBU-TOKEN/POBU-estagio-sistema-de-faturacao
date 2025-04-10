<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\{
    Quarto,
    Hospede,
    user,
    Reserva_on,
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

    public function storage_reserva_on(Request $req){
        $res = new Reserva_on();
        $res->name = $req->name;
        $res->phone_number = $req->number;
        $res->number_of_contribuethor = $req->cNumber;
        $res->address = $req->address;
        $res->email = $req->emailAddress;
        $res->country = $req->country;
        // $res->was_born = $req->born;
        // $res->check_out_date = $req->checkOut;
        $res->description = $req->description;
        $res->sex = $req->sex;
        $res->document = $req->document;
        $res->host_type = $req->hostType;
        $res->people = $req->ocupantes;


        if($res->save()){
            dd("sucesso");
            redirect('/')->with('msg', 'A sua reserva foi salva com sucesso, deseja salvar PDF?');
        }else{
            redirect('/')->with('erro', 'Algo deu errado, tente mais tarde ou actualize seu browser e tente novamente.');
        }
    }
}
