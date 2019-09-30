<?php
    $nomeSistema = "Cursos e Ai";
    $usuario = ["nome"=>" Ricardo Veiga"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<header class="navbar">
    <h1 id="logo">
     <?php echo $nomeSistema; 
     echo "   ".$nometeste."    ". $sobrenome ?>
      </h1>
        <nav>
            <ul class="nav">

                <?php if(isset($usuario) && $usuario != []){?>

                <li class="nav-item">
                    <a class="nav-link" href="#">Cursos</a>
                    </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Ola <?php echo $usuario ['nome']?> </a>
                    </li>
                <?php }else {?>

                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar</a>
                    </li>

                <?php }?>

            </ul>
        </nav>
</header>

<main>
    <section class="container mt-4">

        <div class="row justify-content-around">
            <div class="col-lg3 card text-center">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Título Produto</h2>
                        <img class="card-img-top" src="images/imagem1.png" alt="Imagem de capa do card">
                        <h5 class="card-text">R$ 100,00</h5>
                        <a href="#" class="btn btn-primary">comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg3 card text-center">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Título Produto</h2>
                        <img class="card-img-top" src="images/imagem1.png" alt="Imagem de capa do card">
                        <h5 class="card-text">R$ 100,00</h5>
                        <a href="#" class="btn btn-primary">comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg3 card text-center">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Título Produto</h2>
                        <img class="card-img-top" src="images/imagem1.png" alt="Imagem de capa do card">
                        <h5 class="card-text">R$ 100,00</h5>
                        <a href="#" class="btn btn-primary">comprar</a>
                    </div>
                </div>
            </div>

    

        </div>

    </section>


</main>

    <?php
        // $nome="ricardo";
        // $usuario=["ricardo","veiga", 38];

        // echo $nome;
    ?>
    
    
</body>
</html>