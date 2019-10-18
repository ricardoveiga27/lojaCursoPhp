<?php
session_start();

$nomeSistema = "Cursos e Ai";
$usuario = isset ($_SESSION['usuario'])? $_SESSION['usuario']:[];
$nomeArquivo = __DIR__."/../produto.json";
$produtos = json_decode(file_get_contents($nomeArquivo),true);
$categorias = ["curso", "palestras", "artigos"]

?>