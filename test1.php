<?php
$host = 'localhost';
$db_name = 'bdjobs';
$username = 'my_username';
$password = 'my_password';

$dsn = "mysql:host=$host;dbname=$db_name";

try {
  $pdo = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}
?>
