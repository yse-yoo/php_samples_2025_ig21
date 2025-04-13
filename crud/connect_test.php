<?php
// import env.php
require_once '../env.php';
// import lib/Database.php
require_once '../lib/Database.php';

// connect db
$pdo = Database::getInstance();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="container mx-auto bg-white p-6">
        <?php if ($pdo instanceof PDO): ?>
            <span class="bg-green-300 p-4">DB接続成功</span>
        <?php endif ?>
    </main>
</body>

</html>