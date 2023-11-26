<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class AppController extends Controller
{
    public function telaLogin(){
        return view("login");
    }

    public function login(Request $request){
        $login = $request->input("login");
        $senha = $request->input("senha");

        $usuario = Usuario::where("login", '=', $login)->first();
        
        if ($usuario && $usuario->senha == $senha) {
            return redirect()->route('usuarios.index');
        } else {
            return redirect()->route('tela.login');
        }
        }

}
