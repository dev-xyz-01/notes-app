<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>

	<?php

		#this is a comment 
		//this is also a comment
		/** This 
		 * is a 
		 * multiline comment
		 */

		// // Variable
		// $plateNumber = 123;
		// $vinNumber = 321;
		// $carModel = "Honda";

		// echo "The car model is " . $carModel . "<br>";

		// var_dump($plateNumber);

		// echo "<br>";

		// $cars = array("Honda", "Mitsubishi");
		// var_dump($cars);

		// echo "<br>";

		// $myName = "John Dough";
		// print_r(explode(" ", $myName));

		// echo "<br>" . "$plateNumber . $vinNumber";

		// $read = true;
		// $name = "Dark Matter";

		// if ($read) {
		// 	$message = "You have read $name";
		// } else {
		// 	$message = "You haven't read $name";
		// }

		$books = [
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

		// $bookCount = 1;
		// foreach($books as $book) {
		// 	echo "Book " . $bookCount . ": <br>";

		// 	foreach($book as $x => $y){
		// 		echo "$x $y <br>";
		// 	}

		// 	$bookCount++;
		// }

		function filterByAuthor($books, $author){
			$filteredBooks = [];

			foreach($books as $book) {
				if ($book['author'] === $author) {
					$filteredBooks[] = $book;
				}
			}
			return $filteredBooks;
		}
	?> 


	<ul>
		<?php foreach(filterByAuthor($books, 'Humper Dick') as $book) : ?>
			<a href="{$book['purchaseUrl']}">
				<li><?= $book['name'] ?></li>
			</a>
		<?php endforeach; ?>
	</ul>
	

</body>
</html>