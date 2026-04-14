<?php
class Selecao {
    // Conexão com o banco de dados e o nome da tabela
    private $conn;
    private $table_name = "selecoes";

    // Propriedades da seleção (são as colunas que você criou no MySQL)
    public $id;
    public $nome;
    public $grupo;
    public $titulos;
    public $criado_em;

    // Construtor: Quando criarmos a seleção, passamos a conexão do banco para ela [cite: 77]
    public function __construct($db) {
        $this->conn = $db;
    }

    // =======================================================
    // ESPAÇO ONDE VAMOS COLOCAR A LÓGICA DO BANCO MAIS TARDE
    // =======================================================

    // Função para Ler Todas as Seleções (Read) [cite: 78]
    public function read() {
        // A lógica do SQL virá aqui depois
    }

    // Função para Criar uma Seleção (Create) [cite: 78]
    public function create() {
        // A lógica do SQL virá aqui depois
    }

    // Função para Ler Apenas Uma Seleção (Read One) [cite: 79]
    public function readOne() {
        // A lógica do SQL virá aqui depois
    }

    // Função para Atualizar (Update) [cite: 80]
    public function update() {
        // A lógica do SQL virá aqui depois
    }

    // Função para Deletar (Delete) [cite: 81]
    public function delete() {
        // A lógica do SQL virá aqui depois
    }
}
?>