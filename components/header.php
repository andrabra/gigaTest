<?php
const name = "Андрей Майоров";
const skills = [
  'HTML&nbsp;&amp; CSS',
  'Адаптивная вёрстка',
  'JavaScript (ES6+)',
  'Angular',
  'React',
  'Git',
  'Github, Gitlab, Bitbucket',
];
const favorites = [
  'Любимый писатель&nbsp;&mdash; Чак Паланик',
  'Любимый герой в&nbsp;Dota 2&nbsp;&mdash; Rubick',
  'Любимый напиток&nbsp;&mdash; Чай черный с&nbsp;бергамотом',
  'Любимый цвет&nbsp;&mdash; Салатовый',
  'Любимый рэпер&nbsp;&mdash; Saluki',
]
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= name ?></title>

    <link rel="icon" type="image/svg+xml" href="../img/logo.svg" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../styles/reset.css" />
    <link rel="stylesheet" href="../styles/style.css" />
  </head>
  <body>

<header class="header">
    <div class="link-wrapper">
        <a class="link" href="../index.php">Главная</a>
        <a class="link" href="../pages/second_page.php">Доп материалы</a>
    </div>
    <h1><?= name ?></h1>
</header>
