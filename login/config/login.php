<?php
include_once("./config/conn.php");
if(isset($_POST['entrar'])){
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$result=mysqli_query($conexao, "SELECT nome, email, senha FROM usuario ;");
    if($result->num_rows>0){
        $user=$result->fetch_array(MYSQLI_ASSOC);
    }
    if( $user['email']==$email && $user['senha']==md5($senha)){
        setcookie('nome',$nome, time()+180000);
        echo "Login realizado com sucesso ";
        echo $_COOKIE['nome'];
    }
    else{
        echo "Erro ao logar, digite as informações novamente";
    }
}