<?php
// TODO: env.phpの読み込み
require_once '../env.php';
// TODO: lib/Databaseクラスの読み込み
require_once '../lib/Database.php';

$users = get();

function get($limit = 50)
{
    try {
        // TODO: DB接続
        $pdo = null;
        // TODO: SQL作成
        $sql = "";
        // TODO: Userデータを取得
        $stmt = null;
        // Userデータを取得
        $users = [];
        // 取得したデータを返却
        return $users;
    } catch (PDOException $e) {
        error_log($e->getMessage());
        exit('システムエラーが発生しました。');
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザ一覧</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="mx-auto bg-white p-6">
        <h2 class="py-2 text-2xl mt-6">ユーザ一覧</h2>
        <div class="overflow-hidden">
            <div class="grid grid-cols-4 bg-gray-200 p-2 rounded-t">
                <div>id</div>
                <div>account_name</div>
                <div>email</div>
                <div>display_name</div>
            </div>
            <?php if (!empty($users)): ?>
                <?php foreach ($users as $user): ?>
                    <div class="grid grid-cols-4 border-b border-gray-200 p-2">
                        <div><?= $user['id'] ?></div>
                        <div><?= $user['account_name'] ?></div>
                        <div><?= $user['email'] ?></div>
                        <div><?= $user['display_name'] ?></div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </main>
</body>

</html>