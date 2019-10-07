<?php include_once("config/variaveis.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrinho</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

   <?php require_once("header.php") ?>

    <main>

       

        <section class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Carrinho Compras</h1>
                </div>
                
                <div class="col-12">
                    <div class="row card">
                        <div class="col-12">
                            <h3>Voce esta comprando o <?php echo $_GET["nomeProduto"] ?></h3>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <form class="d-flex flex-column p-5" method="post" action="sucesso.php">
                                <input type="text" name="nomeCompleto" placeholder="digite seu nome aqui!">
                                <input type="number" name="cpf" placeholder="digite seu cpf aqui!">
                                <input type="date" name="validade" placeholder="data de nascimento">
                                <input type="number" name="cartao de credito" placeholder="cartao de credito">
                                <input type="password" name="codigo cartao" placeholder="digite o CV">

                                <button class="btn btn-success" type="submit">finalizar compra</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     


    </main>


</body>

</html>