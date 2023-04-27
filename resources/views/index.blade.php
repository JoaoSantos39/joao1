<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Início</title>
</head>
<body>

<div class="nav d-flex justify-content-between bg-dark">  
    <div></div>
    <ul class="d-flex align-content-center justify-content-center ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="imagem">
          <a class="nav-link" href="/Inicio">
          <img src="logo.png" alt="logo" width="55"  class="d-inline-block align-text-top">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>

    </ul>
    <div class="botao">
        <button type="button" class="btn btn-outline-purple">Login</button>
    </div>
</div>  
<br>
<br>
<img class="vinho" src="vinho.jpg" alt="vinho">
<br>
<br>
<p align="justify" style="padding-left: 25%; padding-right: 25%;">A história do vinho tem grande importância histórica, pois o seu surgimento em tempos remotos tornou-o um produto que acompanhou grande parte da evolução econômica e sociocultural de várias civilizações ocidentais e orientais.

O vinho possui uma longínqua importância histórica e religiosa e remonta diversos períodos da humanidade. Cada cultura conta seu surgimento de uma forma diferente. Os cristãos, embasados no Antigo Testamento, acreditam que foi Noé quem plantou um vinhedo e com ele produziu o primeiro vinho do mundo ("E começou Noé a cultivar a terra e plantou uma vinha." Gênesis, capítulo 9, versículo 20). Já os gregos consideraram a bebida uma dádiva dos deuses. Hititas, babilônicas, sumérias, as histórias foram adaptadas de acordo com a tradição e crença do povo sob perspectiva.

Do ponto de vista histórico, sua origem precisa é impossível, pois o vinho nasceu antes da escrita. Os enólogos dizem que a bebida surgiu por acaso, talvez por um punhado de uvas amassadas esquecidas num recipiente, que sofreram posteriormente os efeitos da fermentação. Mas o cultivo das videiras para a produção do vinho só foi possível quando os nômades se tornaram sedentários. Existem referências que indicam a Geórgia como o local onde provavelmente se produziu vinho pela primeira vez, sendo que foram encontradas neste local graínhas datadas entre 8000 a.c. e 5000 a.c.</p>
<br>
<br>
<div class="container" align="justify">
  <div class="row">
    <div class="col order-last">
    <img class="vinho2" src="vinho2.jpg" alt="vinho2" width="300">
    </div>
    <div class="col">
    <img class="vinho3" src="vinho3.jpg" alt="vinho3" width="300">
    </div>
    <div class="col order-first">
    <img class="vinho4" src="vinho4.jpg" alt="vinho4" width="300">
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
<style>
    .vinho{
    margin-top: 50px;
    width: 50%;
    margin: auto;
    display: block;    
    }
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
    }
</style>
</html>