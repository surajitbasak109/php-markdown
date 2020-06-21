<?php
/**
 * PHP Markdown Index
 * An entry point for the first time server response
 * when requested the http://localhost:8000 page
 * using `php -S localhost:8000 -t public/` command from the shell
 *
 * @package php-markdown
 */

 define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
 define('SRC', ROOT . 'src');

 require ROOT . 'vendor/autoload.php';

 //TODO: Convert below code to class
 define('MDT_DEBUG', true);
if (MDT_DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;
if (is_null($url)) {
    return;
}

$url_parts = explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));


\Tech\Render\HttpDebug::render($url, $url_parts);
