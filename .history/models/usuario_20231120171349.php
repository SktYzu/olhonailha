<?php
class usuario
{
    public $id_usuario;
    public $nome;
    public $email;
    public $senha;
    public $nivel_acesso;

    public function __construct($id_usuario = false)
    {
        if ($id_usuario) {
            $this->id_usuario = $id_usuario;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $querry = "SELECT * FROM usuarios where id_usuario = :id";
        $conexao = conectarDB::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt->bindValue(":id", $this->id_usuario);
        $stmt->execute();
        $usuario = $stmt->fetch();

        $this->nome = $usuario["nome"];
        $this->email = $usuario["email"];
        $this->senha = $usuario["senha"];
        $this->nivel_acesso = $usuario["nivel_acesso"];
    }

    public function criar()
    {
        $querry = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome,:email,:cel,:ender,:senha)";
        $conexao = conectarDB::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":email", $this->email);
        $stmt->bindValue(":senha", $this->senha);
        $stmt->execute();
    }

    public function atualizar()
    {
        $querry = "UPDATE usuarios SET nome=:nome,email=:email,celular=:cel,endereco=:ender WHERE id_usuario = :id";
        $conexao = conectarDB::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt->bindValue(":id", $this->id_usuario);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":email", $this->email);
        $stmt->execute();
    }

    public function deletar()
    {
        $querry = "DELETE FROM usuarios WHERE id_usuario=:id";
        $conexao = conectarDB::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt->bindValue(":id", $this->id_usuario);
        $stmt->execute();
    }

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
            setcookie('msg', 'Email ou Senha Incorreto!', time() + 10, '/olhonailha/');
            setcookie('tipo', 'perigo', time() + 10, '/olhonailha/');

            header("Location: login.php");
            exit();

        }
    }
}

class utilitarios
{
    public static function validEmail($email)
    {
        $email = trim($email);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
    public static function sanitizaEmail($email)
    {
        return filter_var($email, FILTER_SANITIZE_EMAIL);
    }
}