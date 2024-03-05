--Use para criar a tabela ultilizada caso não exista


CREATE DATABASE IF NOT EXISTS sistema_cadastro;

USE sistema_cadastro;

CREATE TABLE IF NOT EXISTS cliente (
    OS INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255),
    telefone VARCHAR(20)
);