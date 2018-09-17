<?php
if($_FILES['userfile']['size']<10000000) AND  $_FILES['userfile']['type']=="text/plain")
{
if(@copy($_FILES['userfile']['tmp_name'],"./upload/".$_FILES['userfile']['name']))
//if(move_uploaded_file($_FILES['userfile']['tmp_name'],"./upload/".$_FILES['userfile']['name']))
echo "file uploaded";
else
echo "fail1";
}
else
echo "fail2";
?>
