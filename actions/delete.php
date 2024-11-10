<?php

require "connDB.php";

$id = $_GET["id"];

$sql = "DELETE FROM roupas WHERE id = ?";

$stmt = $db->prepare($sql);
$stmt->execute([$id]);

header("Location: ../dashboard.php");