<?php
require "actions/getByID.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Editar produto</h1>

        <div>
            <a href="dashboard.php">Voltar para página inicial</a>
            <a href="index.php">Sair</a>
        </div>
    </header>

    <form action="actions/update.php?id=<?= $id ?>" method="POST">
        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo">
            <option value="" <?= $roupa["tipo"] == "" ? "selected" : "" ?>>Selecione uma opção</option>
            <option value="Camiseta" <?= $roupa["tipo"] == "Camiseta" ? "selected" : "" ?>>Camiseta</option>
            <option value="Bermuda" <?= $roupa["tipo"] == "Bermuda" ? "selected" : "" ?>>Bermuda</option>
            <option value="Moletom" <?= $roupa["tipo"] == "Moletom" ? "selected" : "" ?>>Moletom</option>
            <option value="Calça" <?= $roupa["tipo"] == "Calça" ? "selected" : "" ?>>Calça</option>
        </select>

        <br>

        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" value="<?= $roupa["marca"]?>">

        <br>

        <input type="radio" name="tamanho" id="P" value="P" <?= $roupa["tamanho"] == "P" ? "checked" : "" ?>>
        <label for="P">P</label>

        <input type="radio" name="tamanho" id="M" value="M" <?= $roupa["tamanho"] == "M" ? "checked" : "" ?>>
        <label for="M">M</label>

        <input type="radio" name="tamanho" id="G" value="G" <?= $roupa["tamanho"] == "G" ? "checked" : "" ?>>
        <label for="G">G</label>

        <br>

        <label for="cor">Cor</label>
        <input type="text" name="cor" id="cor" value="<?= $roupa["cor"]?>">

        <br>

        <label for="preco">Preço</label>
        <input type="number" name="preco" id="preco" step="0.01" min='0' value="<?= $roupa["preco"]?>">

        <br>

        <button type="reset">Limpar formulário</button>
        <button type="submit">Salvar produto</button>
    </form>
</body>
</html>