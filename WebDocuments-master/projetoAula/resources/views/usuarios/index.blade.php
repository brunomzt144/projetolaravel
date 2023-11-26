@extends('layouts.app')
@section('conteudo')
<h1>Lista de Usuários</h1>
<div class="table-responsive"> <table class="table table-striped"> <thead>
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Login</th>
    <th>Senha</th>
    <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($usuarios as $usuario)
    <tr>
    <td>{{ $usuario->id }}</td>
    <td>{{ $usuario->nome }}</td>
    <td>{{ $usuario->login }}</td>
    <td>{{ $usuario->senha }}</td>
    <td>
        <a class="btn btn-warning" href="{{
        route('usuario.atualiza', ['id' => $usuario->id]) }}">Alterar</a>
        <a class="btn btn-danger" href="#" onclick="exclui({{ $usuario->id }})">Excluir</a> </td> </tr>
            @endforeach
            </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('usuarios.cadastro')}}"> Cadastrar Novo </a>
</div>
<script>
    function exclui(id) {
        if (confirm('Deseja excluir o usuário de id: ' + id + '?')) {
            location.href = '/usuario/excluir/' + id;
        }
    }
</script>
@endsection