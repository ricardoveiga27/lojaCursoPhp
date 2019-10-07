<?php include_once("config/variaveis.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<?php require_once("header.php") ?>

    <main>

       

        <section class="container mt-4">

            <div class="row justify-content-around">

                <?php if (isset($produtos) && $produtos != []) { ?>

                    <?php foreach ($produtos as $produto) { ?>

                        <div class="col-lg-3 card text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title"> <?php echo $produto['nome'] ?> </h2>
                                    <img class="card-img-top img-fluid" src="<?php echo $produto["image"] ?>" alt="Imagem de capa do card">
                                    <h5 class="card-text p-3"> <?php echo "R$ " . $produto['preco'] ?> </h5>
                                    <a href="carrinho.php?nomeProduto=<?php echo $produto["nome"] ?>" class="btn btn-primary">comprar</a>
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