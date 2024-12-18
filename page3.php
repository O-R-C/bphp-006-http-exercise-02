<?php

declare(strict_types=1);

session_start();
$_SESSION['countPage3'] = isset($_SESSION['countPage3']) ? ++$_SESSION['countPage3'] : 0;

if (isset($_SESSION['countPage3']) && $_SESSION['countPage3'] % 3 === 0) {
  header("Location: page4.php");
  exit;
}

// заголовки
header("Content-Type: text/html; charset=utf-8");
header("Cache-Control: no-cache");


// содержимое
require "getHTML.php";
echo getHTML("Страница 3", basename(__FILE__));

echo <<<BTN
  <div style='text-align: center; margin-top: 50px; width: 800px; margin-left: auto; margin-right: auto;'>
    <button style='font-weight: bold; font-size: 24px; padding: 10px; border-radius: 10px; cursor: pointer;' onclick='window.location.reload()'>Перегрузить страницу</button>
  </div>
BTN;
