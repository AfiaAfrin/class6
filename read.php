<?php
require 'config/config.php';

$tasks = $pdo->query("SELECT * FROM task");

while ($row = $tasks->fetch((PDO::FETCH_ASSOC))) {
    echo "<h1> {$row['title']} </h1>";
}

?>
