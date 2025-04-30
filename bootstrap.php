<?php 
require_once 'autoload.php';

$conn = new Database('localhost', 'oop-teach', 'root', '');

Post::$pdo = $conn;
echo 'success';



?>