<?php

/** @var array $categories */
/** @var array $lots */

declare(strict_types=1);

$is_auth = rand(0, 1);

$user_name = 'Sleepy cat';

require_once 'init.php';

$page_content = include_template ( 'main.php', compact(
    'categories',
    'lots'
));

$page_header = include_template ('layouts/_main-header.php', compact(
    'is_auth',
    'user_name'
));

$page_footer = include_template ('layouts/_main-footer.php');

$layout_content = include_template ('layout.php', ['content' => $page_content, 'title' => 'Главная', 'header' => $page_header, 'footer' => $page_footer]);

print $layout_content;
