<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/olhonailha/db/conexao.php";

class Denuncia{
   public $id_denuncia; 
   public $titulo;  
   public $foto_denuncia;
   public $local_denuncia;
   public $id_usuario;
   public $id_tipo;
   public $descricao;

   public function criar(){
    $query = "INSERT INTO denuncias(titulo,foto_denuncia,local_denuncia,id_usuario,id_tipo,descricao) values( :titulo, :fotos, :local_denuncia,:id_usuario, :id_tipo, :descr)";
    $conexao = Conexao:: conectar();
    $stmt = $conexao->prepare($query);
    $stmt->bindValue(':titulo', $this->titulo);
    $stmt->bindValue(':fotos',$this->foto_denuncia);
    $stmt->bindValue(':local_denuncia',$this->local_denuncia);
    $stmt->bindValue(':id_usuario', $this->id_usuario);
    $stmt->bindValue(':id_tipo', $this-> id_tipo);
    $stmt->bindValue( ':descr', $this->descricao);
    $stmt->execute();
   }




 
}

