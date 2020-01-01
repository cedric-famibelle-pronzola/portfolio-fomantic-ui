<?php

$server = "localhost";
$dbname = "fomantic";
$user = "fomantic";
$pass_db = "Fomantic57*";

try {
    $db = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass_db);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo '<span style="color: red; font-weight: bold;">' . $e->getMessage() . '</span>';
    return;
}
