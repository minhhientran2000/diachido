<?php
/**
 * Dango Bootstrap File
 * This file loads Composer autoloader, Dotenv, and common helpers.
 */

// 1. Load Composer Autoloader
$autoloadPath = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
}

// 2. Load .env Configuration
try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
} catch (Exception $e) {
    // Handle case where .env is missing or invalid
    error_log("Dango Error: Could not load .env file. " . $e->getMessage());
}

// 3. Define Global Helper Function env()
if (!function_exists('env')) {
    /**
     * Get environment variable or return default value.
     * 
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function env($key, $default = null) {
        $value = $_ENV[$key] ?? getenv($key);
        
        if ($value === false || $value === null) {
            return $default;
        }

        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;
            case 'false':
            case '(false)':
                return false;
            case 'empty':
            case '(empty)':
                return '';
            case 'null':
            case '(null)':
                return null;
        }

        return $value;
    }
}
