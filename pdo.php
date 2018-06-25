<?php

$db = new PDO('mysql:host=localhost;dbname=hwphp', 'root', '');

// $sql = "SELECT * FROM `filmoteka`";
// $result = $db->query($sql);

// echo "Записи по одной:<br>";
// while( $film = $result->fetch(PDO::FETCH_ASSOC) ) {
// 	// print_r($film);
// 	echo "Название фильма: " . $film['title'] . '<br>';
// 	echo "Жанр фильма: " . $film['genre'] . '<br>';
// 	echo "<br><br>";
// }

// $sql = "SELECT * FROM `filmoteka`";
// $result = $db->query($sql);
// $films = $result->fetchAll(PDO::FETCH_ASSOC);

// // print_r($result->fetchAll(PDO::FETCH_ASSOC));
// echo "Обход по массиву:<br>";
// foreach ($films as $film) {
// 	echo "Название фильма: " . $film['title'] . '<br>';
// 	echo "Жанр фильма: " . $film['genre'] . '<br>';
// 	echo "<br><br>";
// }

$sql = "SELECT * FROM `filmoteka`";
$result = $db->query($sql);

$result->bindColumn('id', $id);
$result->bindColumn('title', $title);
$result->bindColumn('genre', $genre);
$result->bindColumn('year', $year);

echo "Вывод записей с привязкой данных к переменной:<br>";
while ( $result->fetch(PDO::FETCH_ASSOC) ) {
	echo "ID: {$id} <br>";
	echo "Название: {$title} <br>";
	echo "Жанр: {$genre} <br>";
	echo "Год: {$year} <br>";
	echo "<br><br>";
}