<?php
include_once("config/variaveis.php");

function cadastrarProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto)
{
    $nomeArquivo = "produto.json";

    if (file_exists($nomeArquivo)) {

        //abrindo e pegando informações do arquivo
        $arquivo = file_get_contents($nomeArquivo);
        // transforma o json em array
        $produtos = json_decode($arquivo, true);
        //adicionando um novo produto no array
        $produtos[] = ["nome" => $nomeProduto, "preco" => $precoProduto, "desc" => $descProduto, "img" => $imgProduto];
        //transformando array em json
        $json = json_encode($produtos);
        //salvando json dentro de um arquivo
        $deuCerto = file_put_contents($nomeArquivo, $json);

        if ($deuCerto) {
            return "deu certo";
        } else {
            return "deu errado";
        }

        var_dump($produtos);
    } else {
        $produtos = [];
        //array_push
        $produtos[] = ["nome" => $nomeProduto, "preco" => $precoProduto, "desc" => $descProduto, "img" => $imgProduto];
        //transformando array em json
        $json = json_encode($produtos);
        //salvando json dentro de um arquivo
        $deuCerto = file_put_contents($nomeArquivo, $json);

        if ($deuCerto) {
            return "deu certo";
        } else {
            return "deu errado";
        }
    }
}

if ($_POST) {
    // salvando arquivo imagem
    $nomeImg = $_FILES['imgProduto']['name'];
    $localTmp = $_FILES['imgProduto']['tmp_name'];
    $dataAtual = date("d-m-y");
    $caminhoSalvo = 'images/' . $dataAtual . $nomeImg;

    $deuCerto =  move_uploaded_file($localTmp, $caminhoSalvo);

    echo cadastrarProduto($_POST["nomeProduto"], $_POST["descProduto"], $caminhoSalvo, $_POST["precoProduto"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Produto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="col-12">
            <h1>Cadastro Produto</h1>

        </div>
        <div class="col-6">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" name="nomeProduto" placeholder="Nome do Produto">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="descProduto" placeholder="Descrição do Produto">
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="imgProduto" placeholder="Imagem do Produto">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="precoProduto" placeholder="Preço Produto">
                </div>
                <button class="btn btn-success">Cadastrar Produto</button>
            </form>

        </div>

    </main>
</body>

</html>