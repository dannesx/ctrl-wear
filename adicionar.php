<?php
require "auth/auth.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container py-3">
    <header class="d-flex justify-content-between align-items-center">
        <h1>Adicionar produto</h1>

        <div>
            <a href="dashboard.php" class="btn btn-primary">Voltar para página inicial</a>
            <a href="auth/logout.php" class="btn btn-danger">Sair</a>
        </div>
    </header>

    <form action="actions/create.php" method="POST" class="w-25">
        <label for="tipo" class="form-label">Tipo</label>
        <select name="tipo" id="tipo" class="form-select" required>
            <option value="" selected>Selecione uma opção</option>
            <option value="Camiseta">Camiseta</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Moletom">Moletom</option>
            <option value="Calça">Calça</option>
        </select>

        <label for="marca" class="form-label mt-2">Marca</label>
        <input type="text" name="marca" id="marca" class="form-control" required>

        <label class="form-label mt-2 d-block">Tamanho</label>

        <div class="form-check form-check-inline mt-2">
            <input type="radio" name="tamanho" id="P" value="P" class="form-check-input" required>
            <label for="P" class="form-check-label">P</label>
        </div>

        <div class="form-check form-check-inline mt-2">
            <input type="radio" name="tamanho" id="M" value="M" class="form-check-input" required>
            <label for="M" class="form-check-label">M</label>
        </div>

        <div class="form-check form-check-inline mt-2">
            <input type="radio" name="tamanho" id="G" value="G" class="form-check-input" required>
            <label for="G" class="form-check-label">G</label>
        </div>

        <label for="cor" class="form-label mt-2 d-block">Cor</label>
        <input type="text" name="cor" id="cor" class="form-control" required>

        <label for="preco" class="form-label mt-2">Preço</label>
        <input type="number" name="preco" id="preco" step="0.01" min='0' class="form-control" required>

        <button type="submit" class="btn btn-primary w-100 mt-3">Criar produto</button>
        <button type="reset" class="btn btn-outline-danger w-100 mt-2">Limpar formulário</button>
    </form>
</body>

</html>