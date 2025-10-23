<?php
try {
    $pdo = new PDO('mysql:host=sql12.freesqldatabase.com;port=3306;dbname=sql12804170;charset=utf8mb4', 'sql12804170', 'mXeW9D5acV');

    $stmt = $pdo->query('SELECT COUNT(*) as count FROM users');
    $result = $stmt->fetch();
    echo 'Total users: ' . $result['count'] . "\n";

    $stmt = $pdo->query('SELECT COUNT(*) as count FROM students');
    $result = $stmt->fetch();
    echo 'Total students: ' . $result['count'] . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
