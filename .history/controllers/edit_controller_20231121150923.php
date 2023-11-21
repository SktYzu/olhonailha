<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/usuario.php';

try {
    $id_usuario = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $usuario = new usuario($id_usuario);
    $usuario->nome = $nome;
    $usuario->email = $email;
    $usuario->atualizar();
    setcookie('msg', "O seu usuario foi atualizado com sucesso!", time() + 5, '/');
    setcookie('tipo', 'sucesso', time() + 5, '/');

    header('location:../controllers/logout.php');



} catch (Exception $e) {
    echo '' . $e->getMessage();
}



?>