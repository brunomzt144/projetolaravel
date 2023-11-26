<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\InicioController;

Route::get('/inicio',[InicioController::class,'inicio'])->name('inicio.inicio');

Route::get('/produtos', [ProdutoController::class,'index'])->name('produto.index');
Route::get('/produtos/cadastro', [ProdutoController::class,'cadastro'])->name('produto.cadastro');
Route::post('/produtos/novo', [ProdutoController::class,'novo'])->name('produto.novo');
Route::get('/produtos/alterar/{id}', [ProdutoController::class,'telaAlteracao'])->name('produto.atualiza'); 
Route::post('/produtos/alterar/{id}', [ProdutoController::class,'alterar'])->name('produto.alterar'); 
Route::get('/produtos/excluir/{id}', [ProdutoController::class,'excluir'])->name('produto.excluir'); 


//Rota para listar todos os usuarios
Route::get('/usuarios', [UsuarioController::class,'index'])->name('usuarios.index');

//rota que direciona para a página que tem o formulario de cadastro
Route::get('/usuarios/cadastro', [UsuarioController::class,'cadastro'])->name('usuarios.cadastro');

//Rota que direciona para o processamento do formulário
Route::post('/usuarios/novo', [UsuarioController::class,'novo'])->name('usuarios.novo');


//Rota para chamar tela de login
Route::get('/telalogin', [AppController::class, 
'telaLogin'])->name('tela.login'); 

//Rota para chamar a função de fazer login
Route::post('/login', [AppController::class, 'login'])->name('login');

//Rota para acessar a tela de alteração de usuario
Route::get('/usuario/alterar/{id}', [UsuarioController::class,'telaAlteracao'])->name('usuario.atualiza'); 

//Rota para alterar o cadastro do usuario
Route::post('/usuario/alterar/{id}', 
[UsuarioController::class,'alterar'])->name('usuario.alterar'); 

//Rota para excluir o usuario
Route::get('/usuario/excluir/{id}', 
[UsuarioController::class,'excluir'])->name('usuario.excluir'); 

