<?php
// Script untuk membuat 3 database microservices
$host = '127.0.0.1';
$port = 3308;
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host={$host};port={$port}", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $databases = ['db_auth', 'db_campaign', 'db_ledger'];

    foreach ($databases as $db) {
        $pdo->exec("CREATE DATABASE IF NOT EXISTS `{$db}` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
        echo "✅ Database '{$db}' created/exists\n";
    }

    // Verify
    $stmt = $pdo->query("SHOW DATABASES");
    echo "\n--- All Databases ---\n";
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        echo "  - {$row[0]}\n";
    }

    echo "\n🎉 All databases ready!\n";
} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
    exit(1);
}
