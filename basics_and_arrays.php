<?php

// General echo and concatenation

echo "<h1>Hello World</h1>";
$g=garvit;
echo "hello=$g";
echo "<br>";
echo 'hello=$g';
echo "<br>";
echo 'hello=',$g;
echo "<br>";
echo 'hello=',$g;
echo "<br>";

echo 'hello='."$g";

$goog=Google;
echo "<br>";

echo"<a href='http://www.google.com'>Google</a>";
echo "<br>";

echo"<a href='http://www.google.com'>".$goog."</a>";

echo "<br>";

echo"<a href='http://www.google.com'>"."$goog"."</a><br>";


// Starting with arrays

$names=array("Garvit","Pranjal","Ayush");

echo "$names[2]<br>";

$names[3]="HellYeah";

echo "$names[3]<br>";

print_r($names);
echo "<br>";

// Associative array
$q=array("Garvit"=>"Best","Pranjal"=>"Better","Ayush"=>"Good");

print_r($q);
echo "<br>";


$c=(array_keys($q)[0]);

echo "The ".$q["Garvit"]." out of all ". count($q)," is ",$c;
echo "<br>";

// Multi Dimensinal Array

$a=array(array('x',"1","he"),
        array('y',"2","ll"),
        array('z',"3","yea"));


echo $a[0][0],"<br>";
echo $a[0][1],"<br>";
echo $a[0][2],"<br>";

echo $a[1][0],"<br>";
echo $a[1][1],"<br>";
echo $a[1][2],"<br>";

echo $a[2][0],"<br>";
echo $a[2][1],"<br>";
echo $a[2][2],"<br>";



$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
print_r(array_chunk($age,2,true));

// print_r(array_chunk($age,2));







?>
