<?php
try {
    $pdo = new PDO('mysql:host=sql12.freesqldatabase.com;port=3306;dbname=sql12804170;charset=utf8mb4', 'sql12804170', 'mXeW9D5acV');

    // Check if tables exist
    $tables = $pdo->query("SHOW TABLES LIKE 'users'")->fetchAll();
    if (count($tables) > 0) {
        echo "users table exists.\n";
    } else {
        echo "users table does not exist.\n";
    }

    $tables = $pdo->query("SHOW TABLES LIKE 'students'")->fetchAll();
    if (count($tables) > 0) {
        echo "students table exists.\n";
    } else {
        echo "students table does not exist.\n";
    }

    // Check users table structure
    $columns = $pdo->query("DESCRIBE users")->fetchAll(PDO::FETCH_ASSOC);
    echo "\nUsers table columns:\n";
    foreach ($columns as $column) {
        echo "- " . $column['Field'] . " (" . $column['Type'] . ")\n";
    }

    // Check students table structure
    $columns = $pdo->query("DESCRIBE students")->fetchAll(PDO::FETCH_ASSOC);
    echo "\nStudents table columns:\n";
    foreach ($columns as $column) {
        echo "- " . $column['Field'] . " (" . $column['Type'] . ")\n";
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
