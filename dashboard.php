<?php
require "auth/auth.php";
require "actions/read.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CTRL+WEAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1>Produtos</h1>

        <div>
            <a href="adicionar.php">Adicionar produtos</a>
            <a href="auth/logout.php">Sair</a>
        </div>
    </header>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Tamanho</th>
                <th>Cor</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($roupas as $roupa) {
                $id = $roupa["id"];
                $tipo = $roupa["tipo"];
                $marca = $roupa["marca"];
                $tamanho = $roupa["tamanho"];
                $cor = $roupa["cor"];
                $preco = $roupa["preco"];

                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$tipo</td>";
                echo "<td>$marca</td>";
                echo "<td>$tamanho</td>";
                echo "<td>$cor</td>";
                echo "<td>$preco</td>";
                echo "<td>";
                echo "<a href='editar.php?id=$id'>Editar</a>";
                echo "<a href='actions/delete.php?id=$id'>Apagar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>