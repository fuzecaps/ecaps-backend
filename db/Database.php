<?php
namespace db;
use SQLite3;
class Database {
    public static ?SQLite3 $database = null;

    public static function get(): SQLite3 {
        if (self::$database) {
          echo "getting existing";
            return self::$database;
        };

      echo "creating...";
        self::$database = new SQLite3(__DIR__ . '/../db/ecaps.db');
        return self::$database;
    }
}