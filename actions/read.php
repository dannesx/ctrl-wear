<?php

require "connDB.php";

$sql = "SELECT * FROM roupas";

$result = $db->query($sql);
$roupas = $result->fetchAll();