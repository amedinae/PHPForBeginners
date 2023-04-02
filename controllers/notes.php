<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = "My Notes";

$notes = $db->execute('select * from notes where user_id = ?',['1'])->getAll();

require "views/notes.view.php";

