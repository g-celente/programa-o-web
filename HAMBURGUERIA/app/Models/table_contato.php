<?php 

require_once '../Models/conection.php';

class Contato {

    private $connection;

    public function __construct() {
        // Instancia a classe Database e chama o método getConnect()
        $database = new Database();
        $this->connection = $database->getConnect();
    }

    public function createTableContato() {
        $query = 'CREATE TABLE IF NOT EXISTS contatos (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    nome VARCHAR(100) NOT NULL,
                    email VARCHAR(100) NOT NULL,
                    telefone VARCHAR(20) NOT NULL,
                    descricao TEXT NOT NULL
                  )';

        $stmt = $this->connection->prepare($query);

        if ($stmt->execute()) {
            return "Tabela de contatos criada com sucesso!";
        } else {
            return "Erro ao criar a tabela de contatos.";
        }
    }

    public function insertValues ($nome, $email, $telefone, $descricao) {

        $this->createTableContato();

        $query = 'INSERT INTO contatos (nome, email, telefone, descricao) VALUES (:nome, :email, :telefone, :descricao)';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':descricao', $descricao);

        if ($stmt->execute()) {
            return 'Contato Inserido com Sucesso';
        }
        else {
            return 'Error';
        }


    }

}