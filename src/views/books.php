<!DOCTYPE html>
<html>
<head>
    <title>Bookmarks</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .book { margin-bottom: 10px; }
    </style>
</head>
<body>

<h1>Bookmarked Books</h1>

<?php foreach ($books as $b): ?>
    <div class="book">
        <a href="<?= htmlspecialchars($b['link']) ?>" target="_blank">
            <?= htmlspecialchars($b['title']) ?>
        </a>
    </div>
<?php endforeach; ?>

</body>
</html>
