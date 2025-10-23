<?php
try {
    $pdo = new PDO('mysql:host=sql12.freesqldatabase.com;port=3306;dbname=sql12804170;charset=utf8mb4', 'sql12804170', 'mXeW9D5acV');

    // Create users table if it doesn't exist
    $pdo->exec("CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL UNIQUE,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        role ENUM('user', 'admin') DEFAULT 'user',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

    // Create students table if it doesn't exist
    $pdo->exec("CREATE TABLE IF NOT EXISTS students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(255) NOT NULL,
        last_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

    echo "Database setup completed successfully.\n";
    echo "Tables created: users, students\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
