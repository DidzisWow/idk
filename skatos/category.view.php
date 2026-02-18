<?php require "./skatos/components/navbar.php"; ?>

<?php require "./skatos/components/header.php"; ?>


<h1>Kategorijas</h1>
<form method='GET' action='/categories.php'>
<input name='search' placeholder='Meklēt kategoriju...' />
<button>Meklēt</button>
</form>

<?php if (count($categories) > 0): ?>
    <ul>
        <?php foreach ($categories as $category): ?>
            <li><?= htmlspecialchars($category["category_name"]) ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Nav atrastas kategorijas.</p>
<?php endif; 


require "./skatos/components/footer.php";

?>


