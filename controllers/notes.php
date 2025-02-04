<?php

$config = require ('config.php');
$db = new Database($config['database']);

$heading = "Notes";

// $id = $_GET['id'];
$query = "SELECT * FROM notes WHERE user_id = :id";

$notes = $db->query($query, ['id' => $_GET['id']])->fetchAll();

// dd($notes);

require "views/notes.view.php";