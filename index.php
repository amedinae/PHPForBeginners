<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

// connect to the database, and execute a query.
$config = require 'config.php';

$db = new Database($config['database']);
$posts = $db->execute("select * from posts where id>4")->fetchAll(PDO::FETCH_ASSOC);;

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}