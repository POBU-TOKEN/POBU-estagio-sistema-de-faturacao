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

        $req->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|numeric',
            'cNumber' => 'required|numeric',
            'address' => 'required',
            'emailAddress' => 'required|email|max:255',
            'country' => 'required|string',
            'sex' => 'required',
            'description' => 'required',
            'ocupantes' => 'required|numeric|max:8',
            'hostType' => 'required|string|max:255',
            'checkOut' => 'required|date',
            'born' => 'required|date',
        ],
        [
            'name.required' => 'O nome é necessário!',
            'name.string' => 'Tende ser caracteres não númericos',
            'name.max' => 'Valor máximo é :max',
            'number.required' => 'O número de telefone é necessário',
            'number.numeric' => 'Valor deve ser numerico',
            'cNumber.required' => 'O número de contribuente é necessário',
            'cNumber.numeric' => 'Valor deve ser numerico',
            'address.required' => 'O indereço é obrigatório',
            'address.max' => 'Valor máximo é :max',
            'emailAddress.required' => 'O campo email é necessário',
            'emailAddress.max' => 'Valor máximo é :max',
            'country.required' => 'O campo país é necessário',
            'country.string' => 'O não valor deve ser numeríco',
            'sex.required' => 'O campo sexo é necessário',
            'description.required' => 'A descrição é obrigatória',
            'ocupantes.required' => 'O número de ocupantes é necessário',
            'hostType.required' => 'O tipo de hospede é necessário',
            'checkOut.required' => 'Data de checkout é necessário',
            'born.required' => 'Data de nascimento é necessário',
            ]);

        $res = new Reserva_on();
        $res->name = $req->name;
        $res->phone_number = $req->number;
        $res->number_of_contribuethor = $req->cNumber;
        $res->address = $req->address;
        $res->email = $req->emailAddress;
        $res->country = $req->country;
        $res->was_born = $req->born;
        $res->check_out_date = $req->checkOut;
        $res->description = $req->description;
        $res->sex = $req->sex;
        $res->document = $req->document;
        $res->host_type = $req->hostType;
        $res->people = $req->ocupantes;


        if($res->save()){
            return redirect('/')->with('msg', 'A sua reserva foi salva com sucesso, dirija-se antes ou a hora marcada, deseja salvar PDF?');
        }else{
            return redirect('/')->with('erro', 'Algo deu errado, tente mais tarde ou actualize seu browser e tente novamente.');
        }
    }
}
