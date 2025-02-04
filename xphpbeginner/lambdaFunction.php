<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lambda Functions</title>
</head>
<body>
  <?php 		
    $books = 
    [
      [
        'name' => 'Diary of a Wimpy Kid',
        'author' => 'Humper Dick',
        'releaseYear' => 2001,
        'purchaseUrl' => 'https://example.com'
      ],

      [
        'name' => 'Game of Thrones',
        'author' => 'George Martin',
        'releaseYear' => 2002,
        'purchaseUrl' => 'https://example1.com'
      ],

      [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 1995,
        'purchaseUrl' => 'https://example1.com'
      ]
    ];

    function filter($items, $fn) {
      $filteredItems = [];

      foreach($items as $item) {
        if($fn($item)) {
          $filteredItems[] = $item;
        }
      }

      return $filteredItems;
    }

    $filteredBooks = filter($books, function ($book) {
      return $book['author'] === 'Andy Weir';
    });
    
  ?>

  <ul>
    <?php foreach($filteredBooks as $book) : ?>
      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
          <?= $book['name']; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

</body>
</html>