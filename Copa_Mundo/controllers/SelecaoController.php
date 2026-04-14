<?php
// O Controller precisa conhecer o Banco e o Modelo
require_once '../config/database.php';
require_once '../models/Selecao.php';

class SelecaoController {
    private $db;
    private $selecao;

    // Quando o Controller nasce, ele já se conecta ao banco
    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->selecao = new Selecao($this->db);
    }

    // =======================================================
    // ESPAÇO ONDE VAMOS COLOCAR AS AÇÕES DEPOIS
    // =======================================================

    // Ação 1: Mostrar a tela principal com a tabela (Read)
    public function index() {
        // A lógica virá aqui...
    }

    // Ação 2: Mostrar a tela de criar e salvar no banco (Create)
    public function create() {
        // A lógica virá aqui...
    }

    // Ação 3: Mostrar a tela de editar e atualizar no banco (Update)
    public function edit() {
        // A lógica virá aqui...
    }

    // Ação 4: Excluir uma seleção (Delete)
    public function delete() {
        // A lógica virá aqui...
    }
}
?>