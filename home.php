<?php

    var_dump($_POST['senha']); //valor do name deve ser o valor da posição no POST;

    if (strlen($_POST['senha']) > 5) {
        echo "Usuário cadastrado com sucesso";
    } else {
        echo "A senha precisa ter mais que 5 caracteres";
    }
    // validação de informação

    if (isset($_POST['nome']) == "") {
        echo "Há campos que precisam ser preenchidos";
    }

    //tamanho mínimo ou máximo
    //email, verificar formato

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="home.php" method="post">
        <input type="text" name="nome" placeholder="nome">
        <br>
        <input type="text" name="sobrenome" placeholder="sobrenome">
        <br>
        <input type="email" name="email" placeholder="email">
        <br>
        <input type="password" name="senha" placeholder="senha">
        <br>
        <button>Enviar</button>
    </form>
</body>
</html>