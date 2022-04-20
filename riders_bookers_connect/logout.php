<?php
session_start();
unset($_SESSION["uid2"]);
unset($_SESSION["username2"]);
session_destroy();
header("Location:index.php");
?>