

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
                    <div>
                        <a href="/user" title="Logue-se...">
                            <i class="fa-solid fa-user fa-fw"></i>
                            <span>Entrar</span>
                        </a>
                    </div>
    
                </nav>
</body>


<div class="container">
  <form action="action_page.php">
    <label for="fname">nome</label>
    <input type="text" id="fname" name="Nome" placeholder="Your name..">
    <label for="lname">sobrenome</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <label for="country">pais</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="usa">Brasil</option>
    </select>
    <label for="subject">Objetivo do contato</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    <input type="submit" value="Submit">
  </form>
</div>
</html>