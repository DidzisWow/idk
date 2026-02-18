<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

if ($uri === "/") {
    require "controlers/index.php";
} elseif ($uri === "/about") {
    require "controlers/story.php";
} elseif ($uri === "/categories") {
    require "controlers/categories.php";
} else {
    http_response_code(404);
    echo "<p>Atvainojiet, lapa netika atrasta!</p>";
    die();
}