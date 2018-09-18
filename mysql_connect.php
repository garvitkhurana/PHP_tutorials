<?php

$user = 'root';
$password = 'root';
$host = 'localhost';

$link = mysqli_connect($host,$user,$password) or die("Check credentials");
$db=mysqli_select_db($link,"sample") or die("Couldn't connect with Database");
if($link)
{
  echo "Connected to mysql<br>";
}
if($db)
{
  echo "Connected to Database<br>";
}


?>
