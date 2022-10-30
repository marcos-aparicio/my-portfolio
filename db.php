<?php
require('env.php');
$host = $_ENV['HOST'];
$database = $_ENV['DATABASE'];
$user = $_ENV['USER'];
$password = $_ENV['PASSWORD'];

try {
  $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
} catch (PDOException $e) {
  die("PDO Connection Error: " . $e->getMessage());
}