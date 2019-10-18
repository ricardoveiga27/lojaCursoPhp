<?php 
$usuario = ["email"=>"veiga@outlook.com.br", "senha"=>'$2y$10$LFwmSRXTuYm.wWPXy0HCKuPI9FaZiJC7I4tiVza2jJpm0tvpynec6'];

if($_POST){
    $email= $_POST['email'];
    $senha= $_POST['senha'];
//validando email
    if($email == $usuario['email']){ 
    
        //validando senha
        if(password_verify($senha, $usuario['senha'])){
            session_start();
            $_SESSION['usuario']= ['nome'=>"Ricardo"];
            header('Location:index.php');

        }else{
            echo ' senha inválidas';
        }
    } else{
        echo 'email ou senha inválidas';
    }

} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <?php include_once "header.php" ?>

    <main class="d-flex justify-content-center align-items-center p-5">
        <form action="login.php" method="post" class="card p-2">
            <H2 class="p-3">Login</H2>
            <div class="form-group">   
            <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="senha">senha</label>
                <input type="password" name="senha" id="senha" class="form-control" required>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-success" type="submit">Logar</button>
            </div>

        </form>
    </main>
    
</body>
</html>