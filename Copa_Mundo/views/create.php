<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Seleção - Copa do Mundo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-fifa-green { background-color: #006b3f; }
        .bg-verde-escuro { background-color: #013220; }
    </style>
</head>
<body class="bg-verde-escuro font-sans text-gray-800 flex justify-center items-center min-h-screen p-6">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md border-t-8 border-yellow-400">
        <div class="flex justify-between items-center mb-6 border-b pb-2">
            <h2 class="text-2xl font-bold text-fifa-green">Cadastrar Seleção</h2>
            <a href="index.php" class="text-sm text-gray-500 hover:text-gray-800">⬅ Voltar</a>
        </div>
        
        <form method="POST" action="index.php?acao=salvar" class="space-y-4">
            <div>
                <label class="block text-sm font-semibold mb-1">Nome da Seleção</label>
                <input type="text" name="nome" required placeholder="Ex: Brasil" 
                       class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-green-500">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">Grupo</label>
                <input type="text" name="grupo" required maxlength="4" placeholder="Ex: G" 
                       class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-green-500 uppercase">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">Títulos (Quantidade/Anos)</label>
                <input type="text" name="titulos" required placeholder="Ex: 5 (1958, 1962...)" 
                       class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-green-500">
            </div>

            <button type="submit" class="w-full bg-fifa-green text-white font-bold py-3 px-4 rounded hover:bg-green-800 transition mt-4">
                Salvar Seleção
            </button>
        </form>
    </div>

</body>
</html>