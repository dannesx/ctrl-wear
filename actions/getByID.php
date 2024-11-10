<?php

require "connDB.php";

$id = $_GET["id"];

$sql = "SELECT * FROM roupas WHERE id = ?";

$stmt = $db->prepare($sql);
$stmt->execute([$id]);

$roupa = $stmt->fetch();