<?php
require (__DIR__ . '/../env.php');
$host = $_ENV['HOST'];
$database = $_ENV['DATABASE'];
$user = $_ENV['DATABASE_USER'];
$password = $_ENV['PASSWORD'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
} catch (PDOException $e) {
    echo $database . PHP_EOL;
    echo $password . PHP_EOL;
    echo $host . PHP_EOL;
    echo $user . PHP_EOL;
    die('PDO Connection Error: ' . $e->getMessage());
}
