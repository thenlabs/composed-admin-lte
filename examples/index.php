<?php

require_once __DIR__.'/../vendor/autoload.php';

$pages = glob('pages/*.php');
$page = $_GET['page'] ?? null;
$pageFile = $page ? __DIR__."/pages/{$page}" : null;

if (file_exists($pageFile)) :
    require_once $pageFile;
else :
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example Pages</title>
</head>
<body>
    <h2>Pages</h2>
    <ul>
        <?php foreach ($pages as $page) : ?>
            <li><a href="index.php?page=<?= basename($page) ?>" target="_blank"><?= $page ?></a></li>
        <?php endforeach ?>
    </ul>
</body>
</html>
<?php endif ?>
