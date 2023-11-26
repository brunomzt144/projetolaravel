@extends('layouts.app')
@section('alterarProduto')
    <h1>Alteração de Producto</h1>
    <form method="post" action="{{ route('produto.alterar' , ['id' => $produto->produtoid]) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="nome" placeholder="Nome" value="{{ $produto ->nome }}">
        <input type="text" name="categoria" placeholder="Categoria" value="{{ $produto ->categoria }}">
        <input type="number" name="estoque" placeholder="Estoque" value="{{ $produto ->estoqueinicial }}">
        <input type="number" name="valor" placeholder="Valor" value="{{ $produto ->valor }}">
        
        <label for="estado">Selecione o estado:</label>
        <select name="estado" id="estado">
            <option value="">Selecione...</option>
            @foreach($estados as $sigla => $nome)
                <option value="{{ $sigla }}" {{ $produto->UF === $sigla ? 'selected' : '' }}>{{ $nome }}</option>
            @endforeach
        </select>

        <input type="submit" value="Enviar">
    </form> 
@endsection