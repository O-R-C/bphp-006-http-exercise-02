<?php

declare(strict_types=1);

// заголовки
header("Content-Type: text/html; charset=utf-8");
header("Cache-Control: no-cache");

// содержимое
require "getHTML.php";
echo getHTML("Задание 2: создаем HTML-страницы", basename(__FILE__));
