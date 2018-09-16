<?php
$sw="T";

switch ($sw) {
  case 'Garvit':
    echo "You are $sw";
    break;
  case 'X':
    echo "You are $sw";
    break;
  case "Y":
    echo "You are $sw";
    break;
  default:
    echo "I don't know who you are";
    break;
}


//If- else
$t = date("H");
echo "<div>The hour (of the server) is " . $t;
echo ", and will give the following message:";
echo " what up bro </div>";

if ($t < "10") {
    echo "Have a good morning!<br>";
} elseif ($t < "20") {
    echo "Have a good day!<br>";
} else {
    echo "Have a good night!<br>";
}


// while

$c=1;
echo "<ol>";
while ($c<=10) {
  echo "<li>","This line is printer for ".$c."<sup>th</sup> iteration","</li>";
  $c++;
}
echo "</ol>";

echo "<br>";
//do while

$t=10;


do{
  echo "This line is printer for ".$t."<sup>th</sup> iteration<br>";
  $t--;
}
while ($t>0);
echo "<br>";

//for

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
echo "<br>";

//for each
$colors = array("red"=>12, "green"=>19, "blue"=>11, "yellow"=>13);

foreach ($colors as $k=>$v) {
  echo "$k == $v <br>";
}

?>
