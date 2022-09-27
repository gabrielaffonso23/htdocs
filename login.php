<?php
require('db.php');

$result = $conn->query("SELECT COUNT(*) FROM usuarios");
$row = $result;
if ($row[0] > 0) {
    echo "Usuario já cadastrado";
} else {
    $conn->query("Insert into usuarios (nome,sobre,email,senha) values (
    '$_POST[usuario_data]',
    '$_POST[usuario_endereco]',
    '$_POST[usuario_nick]',
    '$_POST[usuario_email]',
    '$_POST[usuario_password]')");
};

echo '<div> Usuario cadastrado </div>';


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cyberpunk Games</title>
</head>

<body>

    <body>
        <header>
            <div class="wrap">

                <header>
                    <a href="index.php" title="Página inicial"><img src="/img/EQUIPE_Cyberpunk-removebg-preview.png"
                            alt="Logotipo de Cyberpunk Games "></a>
                    <h1><a href="index.php"> Cyberpunk Games</a><small>Encontre o mundo dos Games Aqui</small></h1>
                </header>

                <nav id="menu">

                    <a href="/" title="Página inicial">
                        <i class="fa-solid fa-house fa-fw"></i>
                        <span>Início</span>
                    </a>
                    <a href="contato.php" title="Faça contato">
                        <i class="fa-solid fa-comments fa-fw"></i>
                        <span>Contatos</span>
                    </a>


                    <div class="dropdown">
                        <button class="dropbtn">Computador</button>
                        <div class="dropdown-content">
                            <a href="#">Steam</a>
                            <a href="#">Origin</a>
                            <a href="#">EA Play</a>
                        </div>
                    </div>
                    <div id="usuario">
                        <a href="/login.php" title="Logue-se...">
                            <i class="fa-solid fa-user fa-fw"></i>
                            <span>Entrar</span>
                        </a>

                    </div>

                </nav>
                <br>
                <main>

                    <article>
                        <form action="login.php" method="post">
                            <div class="imgcontainer">
                              <img src="/img/EQUIPE_Cyberpunk-removebg-preview.png" class="avatar">
                            </div>
                          
                            <div class="container">
                              <label for="uname"><b>Username</b></label>
                              <input type="text" placeholder="Enter Username" name="usuario_nick" required>
                          
                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="usuario_password" required>
                          
                              <button type="submit">Login</button>
                              <label class="remenber">
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                              </label>
                            </div>
                          
                            <div class="container" style="background-color:#f1f1f1">
                              <button type="button" class="cancelbtn">Cancel</button>
                              <span class="psw">Forgot <a href="#">password?</a></span>
                            </div>
                          </form>
                    </article>
                </main>

                <footer>
                    <div class="footer">
                        &copy;
                        <script>document.write(new Date().getFullYear());</script> Por Henderson Eric Gabriel Guilhemer
                        <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">CyberPunk</a>
                    </div>
                </footer>

            </div>


    </body>
<script src="scrpit.js"></script>
</html>