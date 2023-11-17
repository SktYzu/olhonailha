<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/olhonailha/db/conexao.php";
class TipoDenuncia{     
public $id_tipo;
public $nome;
public $descricao;

public function __construct($id_tipo = false){
    if($id_tipo){
        $this->id_tipo = $id_tipo;
        $this->carregar();
    }
}

public function carregar(){
    $query='SELECT * FROM tiposdenuncias WHERE id_tipo = :id';
    $conexao= Conexao::conectar();
    $stmt = $conexao->prepare($query);
    $stmt ->bind
}

public static function listar(){
    $query='select * from TiposDenuncias';
    $conexao= Conexao::conectar();
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    return $resultado;
}

public function criar(){
    $query = "INSERT INTO tiposdenuncias (nome, descricao) VALUE (:nome,:descr)";
    $conexao= conexao::conectar();
    $stmt = $conexao->prepare($query);
    $stmt->bindValue(':nome', $this->nome);
    $stmt->bindValue(':descr', $this->descricao);
    $stmt->execute();
}
public function deletar(){
    $query = "DELETE FROM tiposdenuncias WHERE id_tipo = :id";
    $conexao = conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt-> bindValue("id", $this->id_tipo);
        $stmt-> execute();
}
}

