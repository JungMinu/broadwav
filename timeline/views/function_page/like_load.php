<?php
$errflag = false;

$dbhost 	= "localhost";
$dbname		= "broadwav";
$dbuser		= "broadwav";
$dbpass		= "qksrkql1";
 
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
$orx=40;

$sql =  'SELECT * FROM timeline where idx='.$orx.' ORDER BY idx desc';

foreach  ($conn->query($sql) as $row) {
  
 
$array= unserialize($row['likes']);
print_r($array);
}
?>