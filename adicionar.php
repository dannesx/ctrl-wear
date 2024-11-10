<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Adicionar produto</h1>

        <div>
            <a href="dashboard.php">Voltar para página inicial</a>
            <a href="index.php">Sair</a>
        </div>
    </header>

    <form action="actions/create.php" method="POST">
        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo">
            <option value="" selected>Selecione uma opção</option>
            <option value="Camiseta">Camiseta</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Moletom">Moletom</option>
            <option value="Calça">Calça</option>
        </select>

        <br>

        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca">

        <br>

        <input type="radio" name="tamanho" id="P" value="P">
        <label for="P">P</label>

        <input type="radio" name="tamanho" id="M" value="M">
        <label for="M">M</label>

        <input type="radio" name="tamanho" id="G" value="G">
        <label for="G">G</label>

        <br>

        <label for="cor">Cor</label>
        <input type="text" name="cor" id="cor">

        <br>

        <label for="preco">Preço</label>
        <input type="number" name="preco" id="preco" step="0.01" min='0'>

        <br>

        <button type="reset">Limpar formulário</button>
        <button type="submit">Criar produto</button>
    </form>
</body>
</html>