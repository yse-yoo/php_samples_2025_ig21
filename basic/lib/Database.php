<?php
class Database
{
    private static $pdo = null;

    public static function getInstance()
    {
        if (self::$pdo === null) {
            // 設定読み込み
            $db_connection = DB_CONNECTION;
            $db_name = DB_DATABASE;
            $db_host = DB_HOST;
            $db_port = DB_PORT;
            $db_user = DB_USERNAME;
            $db_password = DB_PASSWORD;

            // DSN
            $dsn = "{$db_connection}:dbname={$db_name};host={$db_host};port={$db_port};charset=utf8mb4;";
            // DP接続（try-catchで例外処理）
            try {
                self::$pdo = new PDO($dsn, $db_user, $db_password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            } catch (PDOException $e) {
                die("接続失敗: " . $e->getMessage());
            }
        }
        // シングルトンパターンでPDOインスタンスを返す
        return self::$pdo;
    }
}