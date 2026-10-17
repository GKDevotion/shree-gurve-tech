<?php
declare(strict_types=1);

define('ROOT_DIR', dirname(__DIR__));
define('APP_DIR', __DIR__);

// Keep the site runnable on shared hosting where mbstring is not enabled.
// These fallbacks preserve UTF-8 character boundaries for the functions used here.
if (!function_exists('mb_internal_encoding')) {
    function mb_internal_encoding(?string $encoding = null): string|bool { return $encoding === null ? 'UTF-8' : true; }
}
if (!function_exists('mb_strlen')) {
    function mb_strlen(string $string, ?string $encoding = null): int {
        $count = preg_match_all('/./us', $string, $matches);
        return $count === false ? strlen($string) : $count;
    }
}
if (!function_exists('mb_substr')) {
    function mb_substr(string $string, int $start, ?int $length = null, ?string $encoding = null): string {
        $characters = preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY);
        if ($characters === false) return $length === null ? substr($string, $start) : substr($string, $start, $length);
        return implode('', array_slice($characters, $start, $length));
    }
}
mb_internal_encoding('UTF-8');
date_default_timezone_set('Asia/Kolkata');

require_once APP_DIR . '/helpers.php';
