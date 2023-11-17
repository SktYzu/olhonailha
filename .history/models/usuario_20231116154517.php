<?php
class Usuario
{

    public static function logar($email, $senha)
    {
        $query = "SELECT * FROM Usuarios WHERE email = :email";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $registro = $stmt->fetch();


        if (isset($registro['id_usuario']) && password_verify($senha, $registro['senha'])) {
            session_start();
            $_SESSION['usuario']['id_usuario'] = $registro['id_usuario'];
            $_SESSION['usuario']['nome'] = $registro['nome'];
            $_SESSION['usuario']['email'] = $registro['email'];
            $_SESSION['usuario']['nivel_acesso'] = $registro['nivel_acesso'];
            header("Location: /olhonailha/index.php");
            exit();
        } else {
            setcookie('msg', 'Email ou Senha Incorreto!', time() + 3600, '/olhonailha/');
            setcookie('tipo', 'perigo', time() + 3600, '/olhonailha/');

            header("Location: login.php");
            exit();
            
        }
    }
}
