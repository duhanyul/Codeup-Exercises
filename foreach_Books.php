<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    ),
    'Lord of the Rings' => array(
      'published' => 1968,
      'author' => 'J. R. R. Tolkien',
      'pages' => 1178
    )
);

// foreach ($books as $book => $details) {
//   if (intval($details["published"]) > 1950 && intval($details['pages']) < 300) {
//     echo "Book: $book" . PHP_EOL;
//     echo "Published year: {$details['published']}" . PHP_EOL;
//     echo "Author: {$details['author']}" . PHP_EOL;
//     echo "Number of Pages: {$details['pages']}" . PHP_EOL;
//     echo PHP_EOL;
//   }
// }
//
// echo PHP_EOL;
// $averageYear = 0;
// $averagePages = 0;

// foreach ($books as $book => $details) {
//   $averageYear += $details['published'];
//   $averagePages += $details['pages'];
//   $count++;
// }
// $averageYear = intval($averageYear/$count);
// $averagePages = intval($averagePages/$count);
// echo "The average published year is: $averageYear" .PHP_EOL;
// echo "The average page length is: $averagePages" . PHP_EOL;
$authors = array();
$count = 0;
foreach ($books as $book => $details) {
  $author = $details['author'];
  if (!in_array($author,$authors)) {
    $authors[$count] = $details['author'];
    echo "Book: $book" . PHP_EOL;
    echo "Published year: {$details['published']}" . PHP_EOL;
    echo "Author: {$details['author']}" . PHP_EOL;
    echo "Number of Pages: {$details['pages']}" . PHP_EOL;
    echo PHP_EOL;
  }else {
    echo "ONLY 1 Book PER author";
  }
  $count += 1;
}
echo PHP_EOL;

var_dump($authors);
