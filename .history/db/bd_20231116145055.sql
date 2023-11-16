/* criar o banco */

CREATE DATABASE olhonailha;

/* sao os usuarios e administradores do sistema */
CREATE TABLE Usuarios(
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255),
    email VARCHAR(255) NOT NULL,
    celular VARCHAR(255),
    endereco VARCHAR(255),
    senha VARCHAR(255) NOT NULL,
    nivel_acesso INT DEFAULT 1
);

/*  */
CREATE TABLE TiposDenuncias(
    id_tipo INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT
); 

/* armazena a denuncia */
CREATE TABLE Denuncias(
    id_denuncia INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    foto_denuncia LONGBLOB,
    local_denuncia VARCHAR(255) NOT NULL,
    data_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    id_usuario INT,
    id_tipo INT,
    FOREIGN KEY (id_usuario) REFERENCES Usuarios(id_usuario),
    FOREIGN KEY (id_tipo) REFERENCES TiposDenuncias(id_tipo)
);

CREATE TABLE Faqs(
    id_faq INT PRIMARY KEY AUTO_INCREMENT,
    pergunta_faq TEXT NOT NULL,
    resposta_faq TEXT NOT NULL
);