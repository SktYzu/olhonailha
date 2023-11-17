<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/controllers/conectar.php';


class denuncia
{
    public $id_denuncia;
    public $titulo;
    public $descricao;
    public $foto_denuncia;
    public $local_denuncia;
    public $id_usuario;
    public $id_tipo;


    public function __construct($id_denuncia = false)
    {
        if ($id_denuncia) {
            $this->id_denuncia = $id_denuncia;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $querry = "SELECT*FROM denuncias WHERE id_denuncia = :id";
        var_dump($querry);
        $conexao = conectarDB::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt -> bindValue(':id', $this->id_denuncia);
        $stmt->execute();
        $denuncia = $stmt->fetch();
        $this->titulo = $denuncia['titulo'];
        $this->descricao = $denuncia['descricao'];
        $this->foto_denuncia = $denuncia['foto_denuncia'];
        $this->local_denuncia = $denuncia['local_denuncia'];
        $this->id_usuario = $denuncia['id_usuario'];
    }

    public function criar()
    {

        $querry = "INSERT INTO denuncias (titulo,descricao,foto_denuncia,local_denuncia)VALUES(:titulo,:descri,:foto,:loc)";
        $conexao = conectarDB::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt -> bindValue(":titulo", $this->titulo);
        $stmt -> bindValue(":descri", $this->descricao);
        $stmt -> bindValue(":foto", $this->foto_denuncia);
        $stmt -> bindValue(":loc", $this->local_denuncia);
        $stmt -> execute();
        $this->id_denuncia = $conexao->lastInsertId();
        return $this->id_denuncia;
    }

    public static function listar(){
        $querry = "SELECT * FROM denuncias";
        $conexao = conectarDB::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt -> execute();
        $lista = $stmt->fetchAll();
        return $lista ;}
        public static function listaruser($id_usuario)
    {
        $querry = "SELECT * FROM denuncias where id_usuario= :idu";
        $conexao = conectarDB::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt->bindValue(":idu", $id_usuario);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public static function listaruser($id_usuario)
    {
        $querry = "SELECT * FROM denuncias where id_usuario= :idu";
        $conexao = conectarDB::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt->bindValue(":idu", $id_usuario);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public  function editar()
    {
        $querry = "UPDATE denuncias SET titulo = :titu, descricao = :desc, foto_denuncia = :foto, local_denuncia = :loc WHERE id_denuncia = :id ";
        $conexao = conectarDB::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt -> bindValue(":titu", $this->titulo);
        $stmt -> bindValue(":desc", $this->descricao);
        $stmt -> bindValue(":foto", $this->foto_denuncia);
        $stmt -> bindValue(":loc", $this->local_denuncia);
        $stmt -> bindValue(":id", $this->id_denuncia);
        $stmt -> execute();
    }

    public function deletar()
    {
        $querry = "DELETE FROM denuncias WHERE id_denuncia = :id";
        $conexao = conectarDB::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt-> bindValue("id", $this->id_denuncia);
        $stmt-> execute();
    }
}
