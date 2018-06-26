<?php

require "db.php";

// Новые записи
// $course = R::dispense('courses');
// $course->title = "Курс по React";
// $course->tuts = 10;
// $course->homeworks = 9;
// $course->level = "Для новичков";
// $course->price = 100;
// R::store($course);

// Получение записей из БД
// $courses = R::find('courses');
// 	// print_r($courses);
// foreach ($courses as $course) {
// 	// print_r($course);
// 	echo "ID: " . $course->id . "<br>";
// 	echo "Название: " . $course->title . "<br>";
// 	echo "Количество уроков: " . $course->tuts . "<br>";
// 	echo "Уровень: " . $course->level . "<br>";
// 	echo "<hr>";
// }

// Обновление записей из БД
// $course = R::load('courses', 3);
// // print_r($course);
// echo "ID: " . $course->id . "<br>";
// echo "Название: " . $course->title . "<br>";
// echo "Количество уроков: " . $course->tuts . "<br>";
// echo "Уровень: " . $course->level . "<br>";
// echo "Цена: " . $course->price . "<br>";
// $course->title = "Курс по React. Ступень 2";
// $course->tuts = 12;
// $course->price = 80;
// $course->student = 15;
// R::store($course);

// Удаление записей из БД
$course = R::load('courses', 2);
R::trash($course);
