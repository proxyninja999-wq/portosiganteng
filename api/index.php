<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Ensure essential environment variables are set for Vercel
$defaults = [
    'APP_ENV' => 'production',
    'APP_DEBUG' => 'true',
    'APP_KEY' => 'base64:6tCQGtPWOT7I8GBVS+dGRwFnp0M3W2ykoEc94Ccz6PY=',
    'APP_CONFIG_CACHE' => '/tmp/config.php',
    'APP_EVENTS_CACHE' => '/tmp/events.php',
    'APP_PACKAGES_CACHE' => '/tmp/packages.php',
    'APP_ROUTES_CACHE' => '/tmp/routes.php',
    'APP_SERVICES_CACHE' => '/tmp/services.php',
    'VIEW_COMPILED_PATH' => '/tmp/storage/framework/views',
    'CACHE_STORE' => 'array',
    'CACHE_DRIVER' => 'array',
    'SESSION_DRIVER' => 'cookie',
    'LOG_CHANNEL' => 'stderr',
    'DB_CONNECTION' => 'sqlite',
    'DB_DATABASE' => '/tmp/database.sqlite',
    'ASSET_URL' => '/',
];

foreach ($defaults as $k => $v) {
    if (!getenv($k)) {
        putenv("{$k}={$v}");
    }
    if (!isset($_ENV[$k])) {
        $_ENV[$k] = $v;
    }
    if (!isset($_SERVER[$k])) {
        $_SERVER[$k] = $v;
    }
}

// Create writable /tmp directories for Laravel
$dirs = [
    '/tmp/storage',
    '/tmp/storage/app',
    '/tmp/storage/app/public',
    '/tmp/storage/framework',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

if (!file_exists('/tmp/database.sqlite')) {
    @touch('/tmp/database.sqlite');
}

try {
    // Forward request to Laravel public entrypoint
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);
    echo "<h1>Vercel Serverless Error</h1>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . ":" . $e->getLine() . "</p>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}
