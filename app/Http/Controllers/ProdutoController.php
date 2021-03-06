<?php namespace estoque\Http\Controllers;

use estoque\Http\Requests\ProdutosRequest;
use estoque\Produto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lista()
    {
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id)
    {
        $produto = Produto::find($id);

        if (empty($produto)) {
            return "Esse produto não existe";
        }

        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona(ProdutosRequest $request)
    {
        Produto::create($request->all());
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function altera($id)
    {
        Produto::find($id)->update([
            'nome' => Request('nome'),
            'valor' => Request('valor'),
            'descricao' => Request('descricao'),
            'quantidade' => Request('quantidade')
        ]);

        return redirect()->action('ProdutoController@lista')->withInput(Request::only('editado'));
    }

    public function alteraForm($id)
    {
        $produto = Produto::find($id);
        return view('produto.altera-formulario')->with('p', $produto);
    }

    public function remove($id)
    {
        if (Auth::guest())
        {
            return redirect('/login');
        }

        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function listaJson()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }
}
