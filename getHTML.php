<?php

declare(strict_types=1);

/**
 * Генерирует HTML-страницу
 * 
 * @param string $h1 - текст заголовка h1
 * @param string $currentPage - текущая страница
 * @return string
 */
function getHTML(string $h1, string $currentPage): string
{
  $urls = [
    ['index.php', 'Главная'],
    ['page1.php', 'Страница 1'],
    ['page2.php', 'Страница 2'],
    ['page3.php', 'Страница 3'],
    ['page4.php', 'Страница 4'],
  ];

  $links = getLinks($currentPage, $urls);

  $html = <<<HTML
    <!DOCTYPE html>
    <html lang='en'>
      <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Задание 2</title>
      </head>
      <body>
        <h1 style='text-align: center; margin-top: 50px;'>$h1</h1>
        <div style='text-align: center; margin-top: 50px; width: 800px; margin-left: auto; margin-right: auto;'>
          <ul style='list-style-type: none; margin: 0; padding: 0; font-size: 24px; font-weight: bold; display: flex; justify-content: space-between;'>
            $links
          </ul>
        </div>
      </body>
    </html>
  HTML;

  return $html;
}

/**
 * Генерирует список ссылок для текущей страницы
 * в зависимости от переданных данных
 * и возвращает его
 * 
 * @param string $currentPage - текущая страница
 * @param array $urls - массив ссылок
 * @return string
 */
function getLinks(string $currentPage, array $urls): string
{
  $links = '';

  foreach ($urls as $index => $key) {
    [$url, $title] = $key;

    if ($url === $currentPage) continue;
    $links .= "<li><a href='$url'>$title</a></li>";
    $links .= $index + 1 < count($urls) ? "\n\t\t\t" : '';
  }

  return $links;
}
