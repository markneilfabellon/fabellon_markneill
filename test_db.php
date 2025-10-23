<?php
try {
    $pdo = new PDO('mysql:host=sql12.freesqldatabase.com;port=3306;dbname=sql12804170;charset=utf8mb4', 'sql12804170', 'mXeW9D5acV');
    echo 'Database connection successful';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
