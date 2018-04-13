@extends('layout.principal')

@section('conteudo')

    <h1 class="margem-20">Alterar Produto</h1>

    <form action="{{ action('ProdutoController@altera', $p->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <input type="hidden" name="editado" value="editado">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $p->nome }}">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" class="form-control" value="{{ $p->descricao }}">
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" name="valor" class="form-control" value="{{ $p->valor }}">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" class="form-control" value="{{ $p->quantidade }}">
        </div>
        <button type="submit" class="btn btn-primary">Alterar</button>
    </form>

@stop