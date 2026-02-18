<?php

require_once "functions.php";
require_once "Database.php";
$config = require "config.php";

$db = new Database($config["database"]);

$query = "SELECT category_name FROM categories";
$params = [];

if (isset($_GET["search"]) && trim($_GET["search"]) !== "") {
    $query .= " WHERE category_name LIKE :search";
    $params["search"] = "%" . trim($_GET["search"]) . "%";
}

$categories = $db->query($query, $params)->fetchAll(PDO::FETCH_ASSOC);

require "./skatos/category.view.php";


