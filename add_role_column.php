<?php
try {
    $pdo = new PDO('mysql:host=sql12.freesqldatabase.com;port=3306;dbname=sql12802963;charset=utf8mb4', 'sql12802963', 'Jd2azIk3Cn');
    $pdo->exec("ALTER TABLE users ADD COLUMN role ENUM('user', 'admin') DEFAULT 'user'");
    echo "Role column added successfully to users table.\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
