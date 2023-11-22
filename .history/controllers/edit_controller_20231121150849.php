<?php
require_once 'usuarioControl.php';

try {
    $id_usuario = $_POST['id'];
    $nome =  $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $endereco = $_POST['endereco'];

        $usuario = new usuario($id_usuario);
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->celular = $celular;
        $usuario->endereco = $endereco;

        $usuario->atualizar();
        setcookie('msg', "O seu usuario foi atualizado com sucesso!", time() + 5, '/');
        setcookie('tipo', 'sucesso', time() + 5, '/');

        header('location:../controllers/logout.php');
        


    }
    catch (Exception $e) {
        echo ''. $e->getMessage();
    }    



?>