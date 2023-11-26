@extends('layouts.app')
@section('alterar')
    <h1>Alteração de Usuário</h1>
    <form method="post" action="{{ route('usuario.alterar' , ['id' => $u->id]) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="nome" placeholder="Nome" value="{{ $u ->nome }}">
        <input type="text" name="login" placeholder="Login" value="{{ $u ->login }}">
        <input type="text" name="senha" placeholder="Senha" value="{{ $u ->senha }}">
        <input type="submit" value="Enviar">
    </form> 
@endsection