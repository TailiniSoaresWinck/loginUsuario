<?php
include_once("./config/login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./cssstyle.css">
</head>
<body>
    <form action="index.php" method="POST">  
    <div id="forms-inputs">
    <div class="inputs">
            <input type="text" name="nome" placeholder="Nome">
        </div>
        <div class="inputs">
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="inputs">
            <input type="text" name="senha" placeholder="Senha">
        </div>
    </div>
        <div id="btn-entrar">
            <button type="submit" name="entrar">Entrar</button>
        </div>
    </form>
</body>
</html>
<?php

?>