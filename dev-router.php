<?php
$p = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$f = __DIR__ . $p;
if ($p !== '/' && is_file($f) && !preg_match('#^/(app|storage)/#', $p)) return false;
if (preg_match('#^/proposal/([a-z0-9-]+)$#', $p, $m) && is_file(__DIR__."/proposal/{$m[1]}.php")) { require __DIR__."/proposal/{$m[1]}.php"; return true; }
require __DIR__ . '/index.php';
