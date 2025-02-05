<?php
class DBcon {
    private static PDO $db;

    public static function getDB(array $config): PDO {
        if (!isset(self::$db)) {
            self::$db = new PDO($config['dsn'], $config['username'], $config['password'], $config['options']);
        }
        return self::$db;
    }
}
