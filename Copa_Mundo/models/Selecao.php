<?php
class Selecao {
    private $conn;
    private $table_name = "selecoes";

    public $id;
    public $nome;
    public $grupo;
    public $titulos;
    public $criado_em;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY criado_em DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (nome, grupo, titulos) VALUES (:nome, :grupo, :titulos)";
        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->grupo = htmlspecialchars(strip_tags($this->grupo));
        $this->titulos = htmlspecialchars(strip_tags($this->titulos));

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":grupo", $this->grupo);
        $stmt->bindParam(":titulos", $this->titulos);

        try {
            if($stmt->execute()) {
                return true;
            }
            return false;
        } catch(PDOException $e) {
            echo "🚨 Erro ao salvar no banco: " . $e->getMessage();
            die();
        }
    }
}
?>