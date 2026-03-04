<?php require "./skatos/components/header.php"; ?>
<?php require "./skatos/components/navbar.php"; ?>

<h1><?= $post["content"] ?></h1>

<a href="/edit?id=<?= $post["id"] ?>">Rediģēt</a>

<?php require "./skatos/components/footer.php"; ?>
