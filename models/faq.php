<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/olhonailha/db/conexao.php";

class Faq{
    public $id_faq;
    public $pergunta_faq;
    public $resposta_faq;

    public function __construct($id = false)
    {
        if($id){
            $this->id_faq = $id;
            $this->carregar();
        }
    }

    public function carregar(){
        $query = "SELECT * FROM Faqs WHERE id_faq = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_faq);
        $stmt->execute();
        $faq = $stmt->fetch();

        $this->pergunta_faq = $faq['pergunta_faq'];
        $this->resposta_faq = $faq['resposta_faq'];
    }

    public function criar(){
        $query = "INSERT INTO Faqs (pergunta_faq, resposta_faq) VALUES (:p, :r)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':p', $this->pergunta_faq);
        $stmt->bindValue(':r', $this->resposta_faq);
        $stmt->execute();
    }

    public static function listar(){
        $query = "SELECT * FROM Faqs";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        return $resultado;
    }

    public function atualizar(){
        $query = "UPDATE Faqs SET pergunta_faq = :p, resposta_faq = :r WHERE id_faq = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':p', $this->pergunta_faq);
        $stmt->bindValue(':r', $this->resposta_faq);
        $stmt->bindValue(':id', $this->id_faq);
        $stmt->execute();
    }

    public function deletar(){
        $query = "DELETE FROM Faqs WHERE id_faq = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_faq);
        $stmt->execute();
    }
}