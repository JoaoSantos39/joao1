<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="nav d-flex justify-content-between bg-dark">
    <div></div>
    <ul class="d-flex align-content-center justify-content-center ">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/categorias">Categorias</a>
        </li>
        <li class="imagem">
            <a class="nav-link" href="/">
                <img src="logo.png" alt="logo" width="55" class="d-inline-block align-text-top">
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
<br>
<br>

<div class="container">
<h1>Lista de categorias</h1>
<div class="container">
    <div class="d-flex justify-content-end">
        <a href="{{route('categorias.create')}}" class="btn btn-light">Adicionar categoria</a>
    </div>

<br>
<br>
    <div class="row">
        @foreach ($categoria as $categoria)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="imagem-produto.jpg" class="card-img-top" alt="Imagem do Produto">
                    <div class="card-body">
                        <h5 class="card-title">{{$categoria->nome}}</h5>
                        <a href="{{ route('categorias.produtos', $categoria->id) }}" class="btn btn-dark">Ver produtos da categoria</a>
                        <a href="{{route('categorias.edit', $categoria->id)}}" class="btn btn-light">Editar categoria</a>

                        <form method="POST" action="{{route('categorias.destroy', $categoria->id)}}">
                        @csrf
                        @method ('DELETE')
                        <button type="submit" class="btn btn-danger">Apagar categoria</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
<style>
    @font-face {
        font-family: cinzel;
        src: url('CinzelDecorative-Bold.otf') format('opentype');
        font-weight: normal;
        font-style: normal;
    }

    .nav {
        font-family: cinzel, Times, serif;
        color: #d84182;
    }

    .nav-link {
        color: #d84182;
        margin-top: 10px;
        font-size: 30px;
        background: -webkit-linear-gradient(#e03881, #9a3b81);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .imagem {
        margin-bottom: 3px;
        margin-top: -15px;
    }

    ul {
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