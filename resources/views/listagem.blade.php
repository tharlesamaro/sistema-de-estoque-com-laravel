@extends('principal')

@section('conteudo')

  @if(empty($produtos))
    <div class="alert-danger">Você não tem produtos cadastrados!</div>

  @else
    <h1>Listagem de Produtos</h1>

    <table class="table table-striped table-bordered">
      <thead>
      <th>Nome</th>
      <th>Valor</th>
      <th>Descrição</th>
      <th>Quantidade</th>
      <th>Detalhes</th>
      </thead>
      <tbody>
      @foreach ($produtos as $p) :
      <tr>
        <td>{{ $p->nome }}</td>
        <td>{{ $p->valor }}</td>
        <td>{{ $p->descricao }}</td>
        <td>{{ $p->quantidade }}</td>
        <td>
          <a href="/produtos/mostra/{{ $p->id }}">
            <span class="fa fa-search"></span>
          </a>
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  @endif
@stop