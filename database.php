<?php
header("Access-Control-Allow-Origin: *");
$server = "sql12.freemysqlhosting.net";
$name = "sql12214609";
$username = "sql12214609";
$password = "tpkdEAGJeb";

$connection = mysqli_connect($server,$username,$password,$name);

$query_result = $connection->query("SELECT * FROM `books table`");

$books = [];
$book = new stdClass();

while($data = $query_result->fetch_assoc()){
	$books[] = $data;
}

$book->books=$books;

header('Content-Type: application/json');
print json_encode($book);
?>