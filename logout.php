<?php
/*  
   Complete the code to destroy the session and the session coookie as well


*/

session_start();
session_unset();
session_destroy();
header("Location: index.php");
