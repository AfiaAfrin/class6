<?php
include 'config/config.php';
 
$title = $_POST["title"];
$sql = "INSERT INTO task (title) VALUES(:title)";
$stmt = $pdo->prepare($sql);
$stmt ->bindParam(':title' , $title);
$stmt ->execute();


?>