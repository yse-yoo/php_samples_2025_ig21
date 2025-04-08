<?php
// Import env.php
require_once __DIR__ . '/env.php';

$db_host = DB_HOST;
$db_name = DB_DATABASE; 
$db_user = DB_USERNAME;
$db_pass = DB_PASSWORD;

// Database connection
try {
    $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";
    $pdo = new PDO($dsn, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection successful.";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>