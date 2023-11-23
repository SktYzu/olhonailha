<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/usuario.php';

try {

    $id_usuario = $_GET['id'];

    $usuario = new usuario($id_usuario);


    $usuario->deletar();
    setcookie('msg', "O seu usuario foi Deletado com sucesso!", time() + 5, '/olhonailha/');
    setcookie('tipo', 'sucesso', time() + 5, '/olhonailha/');
    /* header('Location: /olhonailha/controllers/logout_controller.php');
    exit(); */
} catch (Exception $e) {
    echo '' . $e->getMessage();
}



?>