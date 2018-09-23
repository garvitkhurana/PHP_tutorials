<?php
require("mysql_connect.php");

// if (mysqli_query($link,"CREATE DATABASE sample"))
//  	  echo "Database created<br>";
// else
//   echo "Error creating database: " . mysqli_error($link);
//
//
$db_connect=mysqli_select_db($link,"IMDB");


echo "<br>----------------------------------------------<br>";


// $query="show databases";
// $result=mysqli_query($link,$query);
// if($result)
// echo "Query has been executed<br>";
// while ($ans=mysqli_fetch_assoc($result)) {
//   foreach ($ans as $key) {
//     echo "$key<br>";
//   }
// }


echo "<br>----------------------------------------------<br>";


//
$query="select name from movies where name like'%'";
$result=mysqli_query($link,$query);
if($result)
{echo "Query has been executed<br>";}
else
{echo "error is: ". mysqli_error($link);}
while ($ans=mysqli_fetch_assoc($result))
{
  foreach ($ans as $key) {
    echo "$key<br>";
  }
}


echo "<br>----------------------------------------------<br>";





mysqli_close($link);




?>
