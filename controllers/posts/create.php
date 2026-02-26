<?php

$pageTitle = "Izveidot ierakstu";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (!isset($_POST["content"]) || strlen($_POST["content"]) === 0 || strlen($_POST["content"]) > 50) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO posts (content) VALUES (:content)";
        
        $params = ["content" => $_POST["content"]];
        
        $db->query($sql, $params);
        
        header("Location: /");
        exit();
    }
}

require "skatos/posts/create.view.php";