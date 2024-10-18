<?php 


class Database {
    
    private $localhost = 'localhost';
    private $db_name = 'hamburgueria';
    private $userName = 'root';
    private $password = 'root';

    public $conn;

    public function getConnect() {
        $this->conn = null;

        try {
            $this->conn = new \PDO("mysql:host=" . $this->localhost . ";dbname=" . $this->db_name, $this->userName, $this->password);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $exception) {
            echo "Erro de conexão: " . $exception->getMessage();
        }

        return $this->conn;
    }
    
}