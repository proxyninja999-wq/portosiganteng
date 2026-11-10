<?php

// Initialize writable directories in Vercel's /tmp environment
$dirs = [
    '/tmp/views',
    '/tmp/cache',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Forward request to Laravel public entrypoint
require __DIR__ . '/../public/index.php';
