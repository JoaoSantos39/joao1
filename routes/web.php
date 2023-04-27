<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Models\Categoria;
use App\Models\Produto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('index');
});

Route::resource('/produtos', ProdutoController::class);

Route::resource('/categorias', CategoriaController::class);

Route::get('categorias/{id}/produtos', function ($id) {
    $categoria = Categoria::findOrFail($id);
    $produtos = $categoria->produtos;

    return view('categorias.produtos', compact('categoria', 'produtos'));
})->name('categorias.produtos');

Route::put('/produtos/{produto}', [ProdutoController::class, 'update'])->name('produtos.update');
