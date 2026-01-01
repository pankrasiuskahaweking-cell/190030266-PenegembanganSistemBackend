<?php
/**
 * PDO factory for the application. Uses constants from `config.php`.
 * Returns a singleton PDO instance configured with secure defaults.
 */
require_once __DIR__ . '/config.php';

function getPDO()
{
    static $pdo = null;
    if ($pdo !== null) {
        return $pdo;
    }

    
    $dsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=%s', DB_HOST, DB_PORT, DB_NAME, DB_CHARSET);

    try {
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
        return $pdo;
    } catch (PDOException $e) {
        
        http_response_code(500);
        
        echo 'Database connection failed.';
        exit;
    }
}