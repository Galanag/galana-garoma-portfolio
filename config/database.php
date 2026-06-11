<?php
// config/database.php
$dbPath = __DIR__ . '/../database.sqlite';
$db = new SQLite3($dbPath);

// Create table if it doesn't exist
$createTable = "
    CREATE TABLE IF NOT EXISTS messages (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        message TEXT NOT NULL,
        submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";
$db->exec($createTable);
?>