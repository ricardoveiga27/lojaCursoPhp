<?php
    $nomeSistema = "siteTeste";
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

<header class="d-flex justify-content-between aling-items-center">
    <h1 id="logo">
     <?php echo $nomeSistema; ?>
      </h1>
        <nav>
            <ul class="nav">
                <li class="nav-item">Cursos</li>
                <li class="nav-item">login</li>
                <li class="nav-item">login</li>
            </ul>
        </nav>


</header>

    <?php
        $nome="ricardo";
        $idade=10;
        $usuario=["ricardo","veiga", 38];

        echo $nome;
    ?>
    
</body>
</html>