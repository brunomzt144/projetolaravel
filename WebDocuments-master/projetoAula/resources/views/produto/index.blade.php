@extends('layouts.app')

@section('conteudo')
    <h1>Lista de produtos</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Valor</th>
                            <th>Estoque</th>
                            <th>UF</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->produtoid }}</td>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->categoria }}</td>
                                <td>{{ $produto->valor }}</td>
                                <td>{{ $produto->estoqueinicial }}</td>
                                <td>{{ $produto->UF }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('produto.atualiza', ['id' => $produto->produtoid]) }}">Alterar</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="#" onclick="exclui({{ $produto->produtoid }})">Excluir</a> 
                                </td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script>
    function exclui(id) {
        if (confirm('Deseja excluir o produto de id: ' + id + '?')) {
            location.href = '/produtos/excluir/' + id;
        }
    }
</script>
@endsection
