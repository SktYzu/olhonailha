<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/usuario.php';


try {
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    if (utilitarios::validEmail($_POST["email"])) {
        $email = utilitarios::sanitizaEmail($_POST["email"]);
    } else {
        throw new pdoException("Email Invalido");
    }
    $nome = $_POST["nome"];
    $celular = $_POST["celular"];
    $endereco = $_POST["endereco"];

    $usuario = new usuario();
    $usuario->nome = $nome;
    $usuario->email = $email;
    $usuario->senha = $senha;

    $usuario->criar();
    setcookie('msg','O usuario foi CRIADO com sucesso', time()+ 5,'/');
    setcookie('tipo','sucesso', time()+5,'/');
    header("location:../views/login.php");
    exit();
} catch (pdoException $e) {
    echo $e->getMessage();
}


?>