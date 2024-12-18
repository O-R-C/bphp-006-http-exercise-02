<?php

declare(strict_types=1);

// заголовки
header("Content-Type: text/html; charset=utf-8");
header("Cache-Control: no-cache");

// session_start();
session_start();

// содержимое
require "getHTML.php";
echo getHTML("Страница 4", basename(__FILE__));
echo <<<CNT
  <div style='text-align: center; margin-top: 50px; width: 800px; margin-left: auto; margin-right: auto;'>
    <p>Количество переходов на страницу 3: <span style='color: red; font-weight: bold; font-size: 24px'>{$_SESSION['countPage3']}</span></p>
  </div>
CNT;
