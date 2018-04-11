<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
  public function lista()
  {
    $produtos = DB::select('SELECT * FROM produtos');

    return view('listagem')->with('produtos', $produtos);
  }

  public function mostra($id)
  {
    $resposta = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);

    if (empty($resposta)) {
      return "Esse produto não existe";
    }

    return view('detalhes')->with('p', $resposta[0]);
  }
}
