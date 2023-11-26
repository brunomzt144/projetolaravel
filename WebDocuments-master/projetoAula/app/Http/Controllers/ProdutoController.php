<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all(); //buscar todos os registro no banco
        return view("produto.index",compact("produtos"));
    }
    public function cadastro(){
        return view("produto.cadastroProduto");
    }

    public function novo(Request $req){
        $nome = $req->nome;
        $categoria = $req->categoria;
        $valor = $req->valor;
        $estoque = $req->estoque;
        $estado = $req->estado;

        $produto = new Produto();
        $produto->nome = $nome;
        $produto->categoria = $categoria;
        $produto->valor = $valor;
        $produto->estoqueinicial = $estoque;
        $produto->uf = $estado;
        if($produto->save()){
            $mensagem = "Produto $nome inserido com sucesso";
        }else{
            $mensagem = "Não foi possível inserir";
        }
        return view("produto.resultado",compact("mensagem")); 
    }

    public function telaAlteracao($id){
        $produto = Produto::find($id); 
        $estados = [
            'AC' => 'Acre',
            'AL' => 'Alagoas',
            'AP' => 'Amapá',
            'AM' => 'Amazonas',
            'BA' => 'Bahia',
            'CE' => 'Ceará',
            'DF' => 'Distrito Federal',
            'ES' => 'Espírito Santo',
            'GO' => 'Goiás',
            'MA' => 'Maranhão',
            'MT' => 'Mato Grosso',
            'MS' => 'Mato Grosso do Sul',
            'MG' => 'Minas Gerais',
            'PA' => 'Pará',
            'PB' => 'Paraíba',
            'PR' => 'Paraná',
            'PE' => 'Pernambuco',
            'PI' => 'Piauí',
            'RJ' => 'Rio de Janeiro',
            'RN' => 'Rio Grande do Norte',
            'RS' => 'Rio Grande do Sul',
            'RO' => 'Rondônia',
            'RR' => 'Roraima',
            'SC' => 'Santa Catarina',
            'SP' => 'São Paulo',
            'SE' => 'Sergipe',
            'TO' => 'Tocantins',
        ];
        return view("produto.alterarProduto", ["produto" => $produto, "estados" =>$estados]);
    }

    
    public function alterar(Request $req, $id){
        $nome = $req->input("nome");
        $categoria = $req->input("categoria");
        $valor = $req->input("valor");
        $estoque = $req->input("estoque");
        $estado  = $req->input("estado");

        $produto = Produto::find($id);
        $produto->nome = $nome;
        $produto->categoria = $categoria;
        $produto->valor = $valor;
        $produto->estoqueinicial = $estoque;
        $produto->uf = $estado;

        if ($produto->save()){
            $msg = "Produto atualizado com sucesso";
        }else{
            $msg = "Produto não foi atualizado";
        }
        return view("produto.resultado", ["mensagem" => $msg]);
    }

    public function excluir($id){
        $produto = Produto::find($id);
        
        if($produto->delete()){ 
            $msg = "Produto excluído com sucesso";
        }else{
            $msg = "Não foi possível excluir o produto";
        }
        return view("produto.resultado", ["mensagem"=> $msg]);
    }
}
