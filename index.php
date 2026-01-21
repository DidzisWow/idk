<?php


$dsn = "mysql:host=localhost;port=3306;dbname=idk;charset=utf8mb4";
$user = "root";
$password = "";

$pdo = new PDO($dsn, $user, $password);


$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();


$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";
    foreach($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";







