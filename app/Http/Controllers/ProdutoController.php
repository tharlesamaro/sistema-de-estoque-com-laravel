<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ProdutoController extends Controller
{
  public function lista()
  {
    $produtos = DB::select('SELECT * FROM produtos');

    return view('produto/listagem')->with('produtos', $produtos);
  }

  public function mostra($id)
  {
    $resposta = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);

    if (empty($resposta)) {
      return "Esse produto não existe";
    }

    return view('produto/detalhes')->with('p', $resposta[0]);
  }

  public function novo()
  {
    return view('produto/formulario');
  }

  public function adiciona()
  {
    $nome = Request::input('nome');
    $descricao = Request::input('descricao');
    $valor = Request::input('valor');
    $quantidade = Request::input('quantidade');

    DB::table('produtos')->insert(
        [
            'nome' => $nome,
            'valor' => $valor,
            'descricao' => $descricao,
            'quantidade' => $quantidade
        ]
    );

    return view('/produto/adicionado')->with('nome', $nome);
  }
}
