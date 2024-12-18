<?php

declare(strict_types=1);

// заголовки
header("Content-Type: text/html; charset=utf-8");
header("Cache-Control: no-cache");

// содержимое
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "    <meta charset='UTF-8'>";
echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "    <title>Задание 2</title>";
echo "</head>";
echo "<body>";
echo "<h1>Задание 2: создаем HTML-страницы</h1>";
echo "<div style='text-align: center; margin-top: 50px; width: 800px; margin-left: auto; margin-right: auto;'>";
echo "<ul style='list-style-type: none; margin: 0; padding: 0; font-size: 24px; font-weight: bold; display: flex; justify-content: space-between;'>";
echo "<li><a href='page1.php'>Страница 1</a></li>";
echo "<li><a href='page2.php'>Страница 2</a></li>";
echo "<li><a href='page3.php'>Страница 3</a></li>";
echo "<li><a href='page4.php'>Страница 4</a></li>";
echo "</ul>";
echo "</div>";
echo "</body>";
echo "</html>";
