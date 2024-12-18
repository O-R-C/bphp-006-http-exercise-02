<?php

declare(strict_types=1);

$txt = $_GET['text'] ?? 'Ничего не передано';

// заголовки
header("Content-Type: text/plain; charset=utf-8");
header("Content-Disposition: attachment; filename=page2.txt");
header("Content-Length: " . mb_strlen($txt));


// содержимое
echo $txt;
