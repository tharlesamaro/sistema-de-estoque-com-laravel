<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ProdutoController extends Controller
{
  public function lista()
  {
    $produtos = DB::select('SELECT * FROM produtos');

    $data = [
        'produtos' => $produtos
    ];

    return view('listagem', $data);
  }

  public function mostra($id)
  {
    //$id = Request::route('id');

    $resposta = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);

    if (empty($resposta)) {
      return "Esse produto não existe";
    }

    return view('detalhes')->with('p', $resposta[0]);
  }
}
