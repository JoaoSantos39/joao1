<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>

<div class="nav d-flex justify-content-between bg-dark">  
    <div></div>
    <ul class="d-flex align-content-center justify-content-center ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/categorias">Categorias</a>
        </li>
        <li class="imagem">
          <a class="nav-link" href="/Inicio">
          <img src="logo.png" alt="logo" width="55"  class="d-inline-block align-text-top">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/produtos">Produtos</a>
        </li>
    </ul>
    <div class="botao">
        <button type="button" class="btn btn-outline-purple">Login</button>
    </div>
</div>  


<div class="container">
        <h1>Editar produto</h1>

        <form action="{{ route('produtos.update', $produto->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">Nome do produto:</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ $produto->nome }}">
            </div>

            <div class="mb-3">
                <label for="imagem" class="form-label">Nova imagem do produto:</label>
                <input type="file" id="imagem" name="imagem" class="form-control">
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço do produto:</label>
                <input type="text" id="preco" name="preco" class="form-control" value="{{ $produto->preco }}">
            </div>

            <div class="mb-3">
    <label for="categoria_id" class="form-label">Selecione a categoria do produto:</label>
    <select id="categoria_id" name="categoria_id" class="form-control">
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ $produto->categoria_id == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->nome }}
            </option>
        @endforeach
    </select>
</div>



            <button class="btn btn-dark" type="submit">Salvar</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<style>
    .form-group label {
      font-weight: bold;
    }
    @font-face{
        font-family: cinzel;
        src: url('CinzelDecorative-Bold.otf') format('opentype');
        font-weight: normal;
        font-style: normal;
    }
    .nav{
        font-family: cinzel, Times, serif;
        color: #d84182;
        }
    .nav-link{
        color: #d84182;
        margin-top: 10px;
        font-size: 30px;
        background: -webkit-linear-gradient(#e03881, #9a3b81);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .imagem{
        margin-bottom: 3px;
        margin-top: -15px;
    }
    ul{
        list-style-type: none;
    }
    .btn-outline-purple {
    margin-top: 22px;
    margin-right: 10px;
    color: #b63981;
    border-color: #b63981;
    }

    .btn-outline-purple:hover {
    background-color: #9a3b81;
    color: #fff;
    }
  </style>
</html>