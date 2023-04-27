<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produtos.index', ['produtos' => Produto::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('produtos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $produto = new Produto();
    $produto->nome = $request->nome;
    $produto->imagem = $request->imagem;
    $produto->preco = $request->preco;

    if ($request->has('categoria')) {
        $produto->categoria_id = $request->categoria;
    } else {
        // Lidar com o caso em que a categoria não foi selecionada
        return redirect()->back()->withInput()->withErrors('Selecione uma categoria');
    }

    if ($produto->save()) {
        return redirect()->route('produtos.index');
    } else {
        dd("Erro ao salvar");
    }
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', compact('produto'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        $categorias = Categoria::all();
        return view('produtos.edit', ['produto' => $produto, 'categorias' => $categorias]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->categoria_id = $request->categoria_id;

        if($request->hasFile('imagem')){
            $imagem = $request->imagem;
            $img = $request = time() . '_' . $imagem->getClientOriginalName();
            $imgC = $imagem->storeAs('img', $img, 'public');
            $produto->imagem = $imgC;
        }

        if ($produto->save()) {
            return redirect()->route('produtos.index');
        } else {
            dd("Erro ao salvar");
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')->with('produto1', 'Produto excluído');
    }
}