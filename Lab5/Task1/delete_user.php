<?php
session_start();
$dsn = 'mysql:host=localhost;dbname=lab5';
$pdo = new PDO($dsn, 'root', '');

$sql = 'DELETE FROM users WHERE id = ' . $_SESSION['id'] . '';
$pdo->query($sql);

session_unset();
session_destroy();
header('Location: log_in.php');
exit;