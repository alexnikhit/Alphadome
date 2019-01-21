<?php
mysql_connect('localhost','root','');
mysql_select_db('AntidoteDB');

$id = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

$query = "DELETE FROM customer WHERE id='".$id."'";
mysql_query($query);
header("Location: http://localhost/Antidote-Dash/search.html");
?> 