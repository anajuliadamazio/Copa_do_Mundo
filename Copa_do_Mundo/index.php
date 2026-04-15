<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏆 Gestão de Seleções - Copa do Mundo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-fifa-green { background-color: #006b3f; }
        .text-fifa-green { color: #006b3f; }
        .bg-verde-escuro { background-color: #013220; }
    </style>
</head>
<body class="bg-verde-escuro font-sans text-gray-800">

    <div class="container mx-auto p-6 max-w-5xl">
        
        <header class="mb-8 text-center bg-white p-6 rounded-lg shadow-md border-t-8 border-yellow-400">
            <h1 class="text-4xl font-bold text-fifa-green mb-2">🏆 FIFA World Cup</h1>
            <p class="text-gray-600">Sistema de Gerenciamento de Seleções</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <div class="bg-white p-6 rounded-lg shadow-md md:col-span-1 h-fit">
                <h2 id="titulo-form" class="text-xl font-bold mb-4 border-b pb-2">Cadastrar Seleção</h2>
                
                <form id="form-selecao" method="POST" action="" class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Nome da Seleção</label>
                        <input type="text" id="nome" name="nome" required placeholder="Ex: Brasil" 
                               class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-green-500">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-1">Grupo</label>
                        <input type="text" id="grupo" name="grupo" required maxlength="4" placeholder="Ex: G" 
                               class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-green-500 uppercase">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-1">Títulos (Quantidade/Anos)</label>
                        <input type="text" id="titulos" name="titulos" required placeholder="Ex: 5 (1958, 1962...)" 
                               class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-green-500">
                    </div>

                    <div class="flex flex-col gap-2 mt-4">
                        <button type="submit" id="btn-salvar" class="w-full bg-fifa-green text-white font-bold py-2 px-4 rounded hover:bg-green-800 transition">
                            Salvar Seleção
                        </button>
                    </div>
                </form>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md md:col-span-2 overflow-x-auto">
                <div class="flex justify-between items-center mb-4 border-b pb-2">
                    <h2 class="text-xl font-bold">Seleções Cadastradas</h2>
                </div>
                
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                            <th class="p-3 border-b">ID</th>
                            <th class="p-3 border-b">Nome</th>
                            <th class="p-3 border-b">Grupo</th>
                            <th class="p-3 border-b">Títulos</th>
                            <th class="p-3 border-b">Criado em</th>
                            <th class="p-3 border-b text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="tabela-corpo">
                        
                        <?php 
                        // Verifica se existe algum resultado vindo da base de dados
                        if (isset($resultado) && $resultado->rowCount() > 0): 
                            // O while percorre cada linha retornada
                            while ($row = $resultado->fetch(PDO::FETCH_ASSOC)): 
                        ?>
                            <tr class="hover:bg-gray-50 transition border-b">
                                <td class="p-3 font-semibold text-gray-600">#<?= htmlspecialchars($row['id']) ?></td>
                                <td class="p-3 font-bold"><?= htmlspecialchars($row['nome']) ?></td>
                                <td class="p-3"><span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs font-bold"><?= htmlspecialchars($row['grupo']) ?></span></td>
                                <td class="p-3 text-sm"><?= htmlspecialchars($row['titulos']) ?></td>
                                <td class="p-3 text-sm text-gray-500"><?= date('d/m/Y', strtotime($row['criado_em'])) ?></td>
                                <td class="p-3 text-center">
                                    <button class="text-blue-500 hover:text-blue-700 mr-2" title="Editar">✏️</button>
                                    <button class="text-red-500 hover:text-red-700" title="Excluir">🗑️</button>
                                </td>
                            </tr>
                        <?php 
                            endwhile; 
                        else: 
                        ?>
                            <tr>
                                <td colspan="6" class="text-center p-8 text-gray-500">
                                    <p class="mb-2">Nenhuma seleção cadastrada ainda.</p>
                                </td>
                            </tr>
                        <?php endif; ?>
                        
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</body>
</html>