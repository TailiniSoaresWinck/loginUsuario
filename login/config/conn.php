<?php

$conexao = mysqli_connect("localhost", "root", "", "caixa");
if (!$conexao) {
    die("Falha na conexao: " . mysqli_connect_error());
   }
?>