
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
