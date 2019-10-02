<?php
$nomeSistema = "Cursos e Ai";
$usuario = ["nome" => " Ricardo Veiga"];

$produtos = [
    ["nome" => "curso Fullstack", "preco" => 1200.00, "ducaao" => "5 meses"],
    ["nome" => "curso Marketing", "preco" => 900.00, "duracao" => "4 meses"],
    ["nome" => "curso Fullstack", "preco" => 1200.00, "ducaao" => "5 meses"],
    ["nome" => "curso Marketing", "preco" => 900.00, "duracao" => "4 meses"],
    ["nome" => "curso Fullstack", "preco" => 1200.00, "ducaao" => "5 meses"],
    ["nome" => "curso Marketing", "preco" => 900.00, "duracao" => "4 meses"],
];

$categorias = ["curso", "palestras", "artigos"]

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
            echo "   " . $nometeste . "    " . $sobrenome ?>
        </h1>
        <nav>
            <ul class="nav">

                <?php if (isset($usuario) && $usuario != []) { ?>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Ola <?php echo $usuario['nome'] ?> </a>
                    </li>
                <?php } else { ?>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                    </li>

                <?php } ?>

            </ul>
        </nav>
    </header>

    <main>

        <section class="navbar bg-dark">

            <nav>
                <?php if(isset($categorias) && $categorias != []){} ?>
                <ul class="nav">
                    <?php foreach ($categorias as $catetegoria) { ?>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"> <?php echo $catetegoria . " >>>>>>>" ?> </a>
                        </li>

                    <?php } ?>

                </ul>
            </nav>

        </section>

        <section class="container mt-4">

            <div class="row justify-content-around">

                <?php if (isset($produtos) && $produtos != []) { ?>

                    <?php foreach ($produtos as $produto) { ?>

                        <div class="col-lg3 card text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title"> <?php echo $produto['nome'] ?> </h2>
                                    <img class="card-img-top" src="images/imagem1.png" alt="Imagem de capa do card">
                                    <h5 class="card-text p-3"> <?php echo "R$ " . $produto['preco'] ?> </h5>
                                    <a href="#" class="btn btn-primary">comprar</a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                <?php } else { ?>
                    <h1> Não tem nada nessa seçao :( </h1>
                <?php } ?>



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