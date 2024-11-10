<?php

require "connDB.php";

$tipo = $_POST["tipo"];
$marca = $_POST["marca"];
$tamanho = $_POST["tamanho"];
$cor = $_POST["cor"];
$preco = $_POST["preco"];

$sql = "INSERT INTO roupas(tipo, marca, tamanho, cor, preco) VALUES (?, ?, ?, ?, ?)";

// Statement - Etapa, fase intermediária
$stmt = $db->prepare($sql);
$stmt->execute([$tipo, $marca, $tamanho, $cor, $preco]);

header("Location: ../dashboard.php");

