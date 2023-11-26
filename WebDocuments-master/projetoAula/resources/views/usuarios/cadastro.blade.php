@extends('layouts.app')
@section('cadastro')
<h1>Cadastro de Usuário</h1>
<form action="{{ route('usuarios.novo')}}" method="post"> 
    @csrf 
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="login" placeholder="Login">
    <input type="text" name="senha" placeholder="Senha">
    <input type="submit" value="Enviar">
</form>
@endsection