<?php
try {
    $pdo = new PDO('mysql:host=sql12.freesqldatabase.com;port=3306;dbname=sql12804170;charset=utf8mb4', 'sql12804170', 'mXeW9D5acV');

    // Insert admin user (password is 'password' hashed)
    $pdo->exec("INSERT INTO users (username, email, password, role) VALUES ('admin', 'admin@example.com', '\$2y\$10\$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin')");

    echo "Admin user inserted successfully.\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
