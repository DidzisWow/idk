<?php

$sql_query = "SELECT * FROM posts";
$params = [];

if (isset($_GET["search_query"]) && trim($_GET["search_query"]) !== "") {
    $sql_query .= " WHERE content LIKE :search";
    $params["search"] = "%" . trim($_GET["search_query"]) . "%";
}

$posts = $db->query($sql_query, $params)->fetchAll(PDO::FETCH_ASSOC);

$pageTitle = "Visi ieraksti = Emuārs";
$customStyles = "index.css";

require "./skatos/index.view.php";

