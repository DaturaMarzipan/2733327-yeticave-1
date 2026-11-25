<?php

/** @var string $title */
/** @var string $content */
/** @var string $header */
/** @var string $footer */

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link href="../assets/css/normalize.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="page-wrapper">

    <header class="main-header">
        <?= $header ?>
    </header>

    <main class="container">
        <?= $content ?>
    </main>
</div>

<footer class="main-footer">
    <?= $footer ?>
</footer>

<script src="flatpickr.js"></script>
<script src="script.js"></script>
</body>
</html>
