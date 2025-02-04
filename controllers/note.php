<?php

$config = require ('config.php');
$db = new Database($config['database']);

$heading = "Note";

$query = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($query, ['id' => $_GET['id']])->fetch();

// dd($note);

require "views/note.view.php";