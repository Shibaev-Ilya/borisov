<?php
require_once 'inc/cookie.inc.php';
setcookie("visitCounter", $visitCounter);
setcookie("lastVisit", time());
require_once 'inc/headers.inc.php';

//Имя файла журнала
define('PATH_LOG', 'log/path.log');
include 'inc/log.inc.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>
        <?= $title ?>
    </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="inc/style.css"/>
</head>

<body>

<div id="header">
    <!-- Верхняя часть страницы -->
    <span class="slogan">обо всём сразу</span>
    <!-- Верхняя часть страницы -->
</div>
<div id="content">
    <!-- Заголовок -->
    <h1><?= $header ?></h1>
    <h2><?php if ($visitCounter == 1) { ?> Спасибо что посетили наш сайт в первые
        <?php } else { ?>Это ваше <?= $visitCounter ?> посещение </h2>
    <h2>Последний визит <?= date('Y/m/d H:i:s', $lastVisit ? $lastVisit : time()) ?><?php } ?> </h2>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
    include 'inc/routing.inc.php';
    ?>
    <!-- Область основного контента -->
</div>
<div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <ul>
        <li><a href='index.php'>Домой</a>
        </li>
        <li><a href='index.php?id=contact'>Контакты</a>
        </li>
        <li><a href='index.php?id=about'>О нас</a>
        </li>
        <li><a href='index.php?id=info'>Информация</a>
        </li>
        <li><a href='test/index.php'>Он-лайн тест</a>
        </li>
        <li><a href='index.php?id=gbook'>Гостевая книга</a>
        </li>
        <li><a href='eshop/catalog.php'>Магазин</a>
        </li>
        <li><a href='index.php?id=log'>Журнал посещений</a></li>
    </ul>
    <!-- Навигация -->
</div>
<div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер-мега сайт, 2000 &ndash; <?= date('Y') ?>
    <!-- Нижняя часть страницы -->
</div>
</body>

</html>
