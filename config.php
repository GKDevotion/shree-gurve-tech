<?php
/**
 * Shree Gurve Technology - Database Configuration
 * PHP 8.3 | Secure PDO Connection
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'core_shreegurvetech');
define('DB_USER', 'root');
define('DB_PASS', '@dmin');
define('DB_CHARSET', 'utf8mb4');

define('SITE_NAME', 'Shree Gurve Technology');
define('SITE_URL', 'http://192.168.2.112/core/shree-gurve-tech/');
define('SITE_EMAIL', 'contact@shreegurvetech.com');
define('SITE_PHONE', '+91 82000 17181');
define('SITE_ADDRESS', 'Surat - 395004, Gujarat, India');

function getDB(): PDO {
    static $pdo = null;
    if ($pdo === null) {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            // Log error securely, don't expose details
            error_log('DB Connection failed: ' . $e->getMessage());
            die('Database connection error. Please try again later.');
        }
    }
    return $pdo;
}

// Security headers
function setSecurityHeaders(): void {
    header("X-Content-Type-Options: nosniff");
    header("X-Frame-Options: SAMEORIGIN");
    header("X-XSS-Protection: 1; mode=block");
    header("Referrer-Policy: strict-origin-when-cross-origin");
    header("Permissions-Policy: geolocation=(), microphone=(), camera=()");
}

// CSRF Token
function generateCSRFToken(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validateCSRFToken(string $token): bool {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Sanitize input
function sanitize(string $input): string {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

session_start();
setSecurityHeaders();
