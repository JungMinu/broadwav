<?php
session_start();
unset($_SESSION["usrid"]);  
echo "<script>location.href='/timeline/';</script>";
?>