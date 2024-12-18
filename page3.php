<?php

declare(strict_types=1);

// заголовки
header("Content-Type: text/html; charset=utf-8");
header("Cache-Control: no-cache");

// session_start();
session_start();
$_SESSION['countPage3'] = isset($_SESSION['countPage3']) ? ++$_SESSION['countPage3'] : 0;

// содержимое
require "getHTML.php";
echo getHTML("Страница 3", basename(__FILE__));
