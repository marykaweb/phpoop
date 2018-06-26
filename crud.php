<?php

/*---------------------------- 
			PDO 	
-------------------------------*/

// $db = new PDO('mysql:host=localhost;dbname=mini-site', 'root', '');

//1 Выборка без защиты
/*
$username = 'Jocker';
$password = '555';

$sql = "SELECT * FROM `users` WHERE name='{$username}' AND password = '{$password}' LIMIT 1";

$result = $db->query($sql);

echo "Выборка без защиты<br>";
// print_r( $result->fetch(PDO::FETCH_ASSOC) );

if ( $result->rowCount() == 1) {
	$user = $result->fetch(PDO::FETCH_ASSOC);
	echo "Имя пользователя: {$user['name']} <br>";
	echo "Пароль: {$user['password']} <br>";
}
*/

//2 выборка с защитой - ручной режим
/*
$username = 'Jocker';
$password = '555';

$username = $db->quote( $username );
$username = strtr($username, array('_' => '\_', '%' => '\%'));

$password = $db->quote( $password );
$username = strtr($password, array('_' => '\_', '%' => '\%'));

$sql = "SELECT * FROM `users` WHERE name='{$username}' AND password = '{$password}' LIMIT 1";

$result = $db->query($sql);

if ( $result->rowCount() == 1) {
	$user = $result->fetch(PDO::FETCH_ASSOC);
	echo "Имя пользователя: {$user['name']} <br>";
	echo "Пароль: {$user['password']} <br>";
}
*/
//3 выборка с защитой - автоматический режим
// $sql = "SELECT * FROM `users` WHERE name = :username AND password = :password LIMIT 1";
// $stmt = $db->prepare($sql);

// $username = 'Jocker';
// $password = '555';

// $stmt->bindValue(':username', $username);
// $stmt->bindValue(':password', $password);
// $stmt->execute();

// // без bindValue передача массивом сразу в execute
// // $stmt->execute(array(':username' => $username, ':password' => $password));

// $stmt->bindColumn('name', $name);
// $stmt->bindColumn('mail', $mail);

// echo "Выборка записей с защитой от SQL инъекций<br>";
// $stmt->fetch();
// echo "Имя пользователя: {$name} <br>";
// echo "Email: {$mail} <br>";

//4 выборка с защитой - автоматический режим -другой вариант запроса


// $sql = "SELECT * FROM `users` WHERE name = ? AND password = ? LIMIT 1";
// $stmt = $db->prepare($sql);

// $user = 'Jocker';
// $password = '555';

// $user = htmlentities($user);

// $stmt->bindValue(1, $user);
// $stmt->bindValue(2, $password);
// $stmt->execute();

// $stmt->bindColumn('name', $name);
// $stmt->bindColumn('mail', $mail);

// // без bindValue передача массивом сразу в execute
// // $stmt->execute(array($username, $password));
// echo "Выборка записей с защитой от SQL инъекций<br>";
// $stmt->fetch();
// echo "Имя пользователя: {$name} <br>";
// echo "Email: {$mail} <br>";

// $string = "<script>alert('Я работаю');</script>";
// $string = htmlentities($string);
// echo $string;

/*---------------------------- 
			INSER TO DB 	
-------------------------------*/

// $db = new PDO('mysql:host=localhost;dbname=mini-site', 'root', '');
// // Запрос в БД
// $sql = "INSERT INTO `users` (name, mail) VALUES (:name, :mail)";
// $stmt = $db->prepare($sql);

// $username = "Flash";
// $useremail = "flash@gmail.com";

// $stmt->bindValue(':name', $username);
// $stmt->bindValue(':mail', $useremail);
// $stmt->execute();

// // $stmt->execute(array(':username' => $username, ':password' => $password));

// // количество затронутых строк
// echo "<p>Было затронуто строк".$stmt->rowCount()."</p>";
// echo "<p>ID последней записи".$db->lastInsertId()."</p>";

/*---------------------------- 
			UPDATE TO DB 	
-------------------------------*/

// $db = new PDO('mysql:host=localhost;dbname=mini-site', 'root', '');
// $sql = "UPDATE `users` SET name = :name WHERE id = :id";
// $stmt = $db->preCpare($sql);

// $username = "New Flsah";
// $id = '10';

// $stmt->bindValue(':name', $username);
// $stmt->bindValue(':id', $id);
// $stmt->execute();

// echo "<p>Было затронуто строк".$stmt->rowCount()."</p>";

/*---------------------------- 
			DELETE FROM DB 	
-------------------------------*/

$db = new PDO('mysql:host=localhost;dbname=mini-site', 'root', '');
$sql = "DELETE FROM `users` WHERE name = :name";
$stmt = $db->prepare($sql);

$username = "New Flsah";

$stmt->bindValue(':name', $username);
$stmt->execute();

echo "<p>Было затронуто строк".$stmt->rowCount()."</p>";




