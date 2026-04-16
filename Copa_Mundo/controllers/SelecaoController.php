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
    // Ação 1: Mostrar a tela principal com a tabela (READ)
    // =======================================================
    public function index() {
        // 1. Pede para o Model buscar os dados no banco
        $resultado = $this->selecao->read();
        
        // 2. Carrega a tela (View). A View vai usar a variável $resultado para preencher a tabela!
        require_once '../views/index.php';
    }

    // =======================================================
    // Ação 2: Salvar no banco o que veio do formulário (CREATE)
    // =======================================================
    public function create() {
        // Verifica se a requisição é do tipo POST (quando clica em "Salvar Seleção")
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            // Pega os dados do formulário e coloca dentro do Model
            $this->selecao->nome = $_POST['nome'] ?? '';
            $this->selecao->grupo = $_POST['grupo'] ?? '';
            $this->selecao->titulos = $_POST['titulos'] ?? '';

            // Manda o Model executar o INSERT INTO (que fizemos no passo anterior)
            if ($this->selecao->create()) {
                // Se deu certo, recarrega a página inicial
                header("Location: index.php"); 
                exit();
            } else {
                echo "❌ Erro ao cadastrar a seleção.";
                die();
            }
        } else {
            // Se não for POST, mostra o formulário vazio
            require_once '../views/create.php';
        }
    }

    // Ação 3: Mostrar a tela de editar e atualizar no banco (Update)
    public function edit() {
        // A lógica do UPDATE virá aqui depois
    }

    // Ação 4: Excluir uma seleção (Delete)
    public function delete() {
        // A lógica do DELETE virá aqui depois
    }
}
?>