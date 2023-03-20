<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

// connect to the database, and execute a query.

$dsn = "mysql:host=localhost;port=3306;dbname=demoApp;user=root;charset=utf8mb4";
$db = new Database($dsn);
$posts = $db->execute("select * from posts where id>4")->fetchAll(PDO::FETCH_ASSOC);;

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}