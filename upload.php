<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);// basename() function returns the filename from a path.
echo "$target_file<br>";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//to get uploaded file extension
echo "$imageFileType<br>";
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]); // to check various attributes of image
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}






// For uploading text file


// <!DOCTYPE html>
// <html>
// <head>
//   <title>Upload your files</title>
// </head>
// <body>
//   <form enctype="multipart/form-data" action="upload.php" method="POST">
//     <p>Upload your file</p>
//     <input type="file" name="uploaded_file"></input><br />
//     <input type="submit" value="Upload"></input>
//   </form>
// </body>
// </html>
// <?PHP
//   if(!empty($_FILES['uploaded_file']))
//   {
//     $path = "uploads/";
//     $path = $path . basename( $_FILES['uploaded_file']['name']);
//     if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
//       echo "The file ".  basename( $_FILES['uploaded_file']['name']).
//       " has been uploaded";
//     } else{
//         echo "There was an error uploading the file, please try again!";
//     }
//   }


?>
