<?php
session_start();

// Echo session variables that were set on previous page

$c=$_SESSION["favcolor"];
$a=$_SESSION["favanimal"];
echo "Favorite color is " . $c. ".<br>";
echo "Favorite animal is " . $a . ".<br>";

// $_SESSION["favanimal"]="dog";

print_r($_SESSION);
?>
