<?php

session_start();
unset($_SESSION["favcolor"]);
echo "favcolor variable is destroyed.";

// session_unset();

// session_destroy();

 ?>
