<?php
try {
    $pdo = new PDO('mysql:host=sql12.freesqldatabase.com;port=3306;dbname=sql12804170;charset=utf8mb4', 'sql12804170', 'mXeW9D5acV');
    $stmt = $pdo->query('SELECT * FROM students LIMIT 1');
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo 'Sample student data: ' . json_encode($result) . PHP_EOL;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
?>
