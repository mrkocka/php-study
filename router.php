<?php
$uri = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
if ($uri === '') $uri = '/';

if (preg_match('/\.(css|js|png|jpg|jpeg|gif|ico|svg)$/', $uri)) {
    return false;
}

switch ($uri) {
    case '/':
    case '/index':
        require_once __DIR__ . '/views/home.php';
        break;
    case '/time':
        require_once __DIR__ . '/views/time.php';
        break;
   
    default:
        http_response_code(404);
        require_once __DIR__ . '/views/404.php';
        break;
}
