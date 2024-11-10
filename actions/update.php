<?php

require "connDB.php";

$id = $_GET["id"];

$tipo = $_POST["tipo"];
$marca = $_POST["marca"];
$tamanho = $_POST["tamanho"];
$cor = $_POST["cor"];
$preco = $_POST["preco"];

$sql = "UPDATE roupas SET tipo = ?, marca = ?, tamanho = ?, cor = ?, preco = ? WHERE id = ?";

$stmt = $db->prepare($sql);
$stmt->execute([$tipo, $marca, $tamanho, $cor, $preco, $id]);

header("Location: ../dashboard.php");