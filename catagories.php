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

echo "<h1>Kategorijas</h1>";
echo "<form method='GET' action='/categories.php'>";
echo "<input name='search' placeholder='Meklēt kategoriju...' value='" . htmlspecialchars($_GET['search'] ?? '') . "' />";
echo "<button>Meklēt</button>";
echo "</form>";

$categories = $db->query($query, $params)->fetchAll(PDO::FETCH_ASSOC);

if (count($categories) > 0) {
    echo "<ul>";
    foreach ($categories as $category) {
        echo "<li>" . htmlspecialchars($category["category_name"]) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Nav atrastas kategorijas.</p>";
}


