<?php
class Database {
    private $host = "localhost";
    private $db_name = "copa_db"; 
    private $username = "root";   
    private $password = "alunolab";
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "<div style='background: #ffcccc; color: red; padding: 20px; font-weight: bold;'>";
            echo "🚨 ERRO DE CONEXÃO: " . $exception->getMessage();
            echo "</div>";
            die();
        }

        return $this->conn;
    }
}
?>