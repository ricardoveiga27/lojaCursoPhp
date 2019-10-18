<?php
    
    session_start();

    //Deslogando usuário
    session_destroy();

    // voltando para home
    header('Location:index.php');

    ?>