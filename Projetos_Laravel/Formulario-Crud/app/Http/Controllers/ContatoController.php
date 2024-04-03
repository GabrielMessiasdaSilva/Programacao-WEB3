<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\contato;

class ContatoController extends Controller
{
    public function index(Request $req)
    {
        $contato = contato::all();
        return view("cadastrar")->with("contato", $contato);
    }

    public function adicionar(Request $req)
    {
        $contato = new contato;
        $contato->nome = $req->nome;
        $contato->telefone = $req->telefone;
        $contato->origem = $req->origem;
        $contato->data_de_contato = $req->data_de_contato;
        $contato->observacao = $req->observacao;
        $contato->save();
        return redirect()->back();
    }

    public function editar($id)
    {
        $contato = contato::find($id);
        return view('editar')->with("contato", $contato);
    }

    public function atualizar(Request $req, $id)
    {
        $contato = contato::find($id);
        $contato->update(
            [
                "nome" => $req->nome,
                "telefone" => $req->Nascimento,
                "origem" => $req->Senha,
                "data_de_contato" => $req->Telefone,
                "observacao" => $req->Origem,
            ]
        );

        return redirect()->back();
    }

    public function excluir(Request $req, $id)
    {
        $contato = contato::find($id);
        $contato->delete();
        return redirect()->back();
    }
}
