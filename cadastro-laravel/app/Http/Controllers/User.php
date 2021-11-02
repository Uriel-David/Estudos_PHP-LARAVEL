<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Usuario as UsuarioModel;

class User extends Controller
{
    public function cadastrar()
    {
        return view('usuario.cadastro');
    }

    public function salvar(Request $request)
    {
        $request->validate([
            "nome" => "required",
            "email" => "required|email|unique:usuario,email",
            "senha" => "min:5"
        ]);

        if(UsuarioModel::cadastrar($request)) {
            return view('usuario.sucesso', [
                "fulano" => $request->input('nome')
            ]);
        } else {
            echo "Ops! Falhou ao cadastrar!";
        }

    }
}
