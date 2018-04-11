@extends('layout.principal')

@section('conteudo')
<h1 class="margem-20">Detalhes do produto: {{ $p->nome }}</h1>
<ul>
  <li>
    <b>Valor:</b> R$ {{ $p->valor }}
  </li>
  <li>
    <b>Descrição:</b> {{ $p->descricao }}
  </li>
  <li>
    <b>Quantiade em estoque:</b> {{ $p->quantidade }}
  </li>
</ul>
@stop