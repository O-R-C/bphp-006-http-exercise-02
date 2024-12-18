<?php

declare(strict_types=1);

session_start();

// заголовки
header("Content-Type: text/html; charset=utf-8");
header("Cache-Control: no-cache");

// содержимое
require "getHTML.php";
echo getHTML("Страница 4", basename(__FILE__));
echo <<<CNT
  <div style='text-align: center; margin-top: 50px; width: 800px; margin-left: auto; margin-right: auto;'>
    <p style='font-weight: bold; font-size: 24px'>Количество переходов на страницу 3: <span style='color: red; font-weight: bold; font-size: 36px'>{$_SESSION['countPage3']}</span></p>
  </div>
CNT;
