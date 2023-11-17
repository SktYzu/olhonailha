<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/olhonailha/db/conexao.php";
class TipoDenuncia{     
public $id_tipo;
public $nome;
public $descricao;

public static function listar(){
    $query='select * from TiposDenuncias';
    $conexao= Conexao::conectar();
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    return $resultado;
}

public function criar(){
    $query = "INSERT INTO tiposdenuncias(nome, descricao) VALUE (:nome,:descr)"
    $conexao= conexao::conectar
}
}

