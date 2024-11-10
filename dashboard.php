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

<body class="container py-3">
    <header class="d-flex justify-content-between align-items-center">
        <h1>Produtos</h1>

        <div>
            <a href="adicionar.php" class="btn btn-primary">Adicionar produto</a>
            <a href="auth/logout.php" class="btn btn-danger">Sair</a>
        </div>
    </header>

    <table class="table table-striped">
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
            if (count($roupas) == 0) {
                echo "<tr>";
                echo "<td colspan='7' class='text-center text-danger fw-medium'>Nenhum produto cadastrado</td>";
                echo "</tr>";
            }
            foreach ($roupas as $roupa) {
                $id = $roupa["id"];
                $tipo = $roupa["tipo"];
                $marca = $roupa["marca"];
                $tamanho = $roupa["tamanho"];
                $cor = $roupa["cor"];
                $preco = $roupa["preco"];
                $preco = number_format($preco, 2, ',', '.');

                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$tipo</td>";
                echo "<td>$marca</td>";
                echo "<td>$tamanho</td>";
                echo "<td>$cor</td>";
                echo "<td>R$ $preco</td>";
                echo "<td>";
                echo "<a href='editar.php?id=$id' class='btn btn-sm btn-warning me-2'>Editar</a>";
                echo "<a href='actions/delete.php?id=$id' class='btn btn-sm btn-danger'>Apagar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>