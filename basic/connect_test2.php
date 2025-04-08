<?php
// import env.php
require_once __DIR__ . '/env.php';
// import Database.php
require_once __DIR__ . '/lib/Database.php';

// Database connection
$db = Database::getInstance();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>DB接続確認</h1>
    <div>
        <?php
        var_dump($db);
        ?>
    </div>
</body>

</html>