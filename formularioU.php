|<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/header.php');

    require('db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") :

        $sql =  "
INSERT INTO usuario(usuario_data, usuario_endereco, usuario_nick, usuario_email, usuario_password) VALUES (
'$_POST[usuario_data]',
'$_POST[usuario_endereco]',
'$_POST[usuario_nick]',
'$_POST[usuario_email]',
SHA1('$_POST[usuario_password]')
);";

        $conn->query($sql);

        echo '<div>Usuario cadastrado.</div>';

    endif;


    ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario</title>
</head>

<body>

    <h1>Novos Usuario</h1><strong>Cadastrar</strong>

    <h2>Cadastro de Usuario:</h2>

    <form method="post" action="formularioU.php">

        <p>
            <label for="id">Nome:</label>

            <input type="text" name="usuario_nick">
        </p>
        <p>
            <label for="id">Endereço:</label>

            <input type="text" name="usuario_endereco" size="20" maxlength="20">
        </p>

        <p>
            <label for="id">Data de nascimento:</label>

            <input type="text" name="usuario_data" size="11" maxlength="11">
        </p>

        <p>
            <label for="id">E-mail:</label>

            <input type="text" name="usuario_email">
        </p>
        <p>
            <label for="id">Senha:</label>

            <input type="text" name="usuario_password">
        </p>

        <p>
            <button type="submit" class="primary">Enviar Formulario</button>
        </p>

    </form>
</body>

</html>