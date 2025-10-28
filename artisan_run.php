<?php
// Jalankan artisan commands tanpa SSH
$cmds = [
    'config:clear',
    'cache:clear',
    'route:clear',
    'view:clear',
    'config:cache',
    'route:cache',
    'view:cache',
];

foreach ($cmds as $cmd) {
    echo "<pre>Running: php artisan {$cmd}</pre>";
    echo shell_exec("/opt/plesk/php/8.4/bin/php artisan {$cmd}");
    echo "<hr>";
}

echo "<pre>Done ✅</pre>";
