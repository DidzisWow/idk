<?php require "./skatos/components/header.php"; ?>
<?php require "./skatos/components/navbar.php"; ?>

<h1>Izveidot bloga ierakstu</h1>

<form method="POST">
    <label>
        <input name="content" value="<?= $_POST['content'] ?? '' ?>" />
    </label>
    <?php if (isset($errors["content"])) { ?>
        <p style="color: red;"><?= $errors["content"] ?></p>
    <?php } ?>
    
    <button type="submit">Izveidot</button>
</form>

<?php require "./skatos/components/footer.php"; ?>