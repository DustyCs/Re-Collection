<?php

require_once __DIR__ . '/db.php';

class BookRepository {

    public static function getFiveBooks() {
        $sql = "SELECT * FROM books ORDER BY created_at DESC LIMIT 5";
        $stmt = db()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
