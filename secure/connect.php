<?php

$server = "localhost";
$dbname = "semantic";
$user = "semantic";
$pass_db = "semantic";

try {
    $db = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass_db);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo '<span style="color: red; font-weight: bold;">' . $e->getMessage() . '</span>';
    return;
}
