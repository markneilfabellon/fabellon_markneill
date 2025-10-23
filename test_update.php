<?php
try {
    $pdo = new PDO('mysql:host=sql12.freesqldatabase.com;port=3306;dbname=sql12804170;charset=utf8mb4', 'sql12804170', 'mXeW9D5acV');
    $stmt = $pdo->prepare('UPDATE students SET first_name = ?, last_name = ?, email = ? WHERE id = ?');
    $result = $stmt->execute(['Test First', 'Test Last', 'test@example.com', 1]);
    echo 'Update result: ' . ($result ? 'Success' : 'Failed') . PHP_EOL;
    echo 'Rows affected: ' . $stmt->rowCount() . PHP_EOL;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
?>
