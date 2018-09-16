
// Reading a file using fread
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);

echo "<br>----------------------------------------------<br>";

// Reading a file line using fgets
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);


echo "<br>----------------------------------------------<br>";


// Reading a complete file using fgets
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);


echo "<br>----------------------------------------------<br>";


// Reading a complete file using fgetc

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);

// Reading/writing an entire file


$text = file_get_contents("webdictionary.txt");
$text = strrev($text);
file_put_contents("webdictionary.txt", $text);

echo "<br>----------------------------------------------<br>";


foreach (file("books.txt") as $book) {
  echo "$book<br>";
	list($title, $author) = explode(",", $book);
	echo "<p> Book title: "."$title","Author :"."$author","</p>";
}



?>
