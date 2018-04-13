@extends('layout.principal')

@section('conteudo')

    @if(empty($produtos))
        <div class="alert-danger">Você não tem produtos cadastrados!</div>

    @else
        <h1 class="margem-20">Listagem de Produtos</h1>
        <hr>

        @if(old('editado'))
            <div class="alert alert-success">
                <strong>Sucesso!</strong>
                O produto {{ old('nome') }} foi editado.
            </div>
        @endif

        @if(old('nome'))
            <div class="alert alert-success">
                <strong>Sucesso!</strong>
                O produto {{ old('nome') }} foi adicionado.
            </div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Detalhes</th>
            <th>Editar</th>
            <th>Excluir</th>
            </thead>
            <tbody>
            @foreach ($produtos as $p)
                <tr class="{{ $p->quantidade <= 1 ? 'bg-danger' : '' }}">
                    <td>{{ $p->nome }}</td>
                    <td>R$ {{ $p->valor }}</td>
                    <td>{{ $p->descricao }}</td>
                    <td>{{ $p->quantidade }}</td>
                    <td>
                        <a href="/produtos/mostra/{{ $p->id }}">
                            <span class="fa fa-search"></span>
                        </a>
                    </td>
                    <td>
                        <a href="/produtos/altera/{{ $p->id }}">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ action('ProdutoController@remove', $p->id) }}">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    <h4>
      <span class="badge badge-danger pull-right">
        Um ou menos itens no estoque
      </span>
    </h4>

@stop