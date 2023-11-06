<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'username_here',
  'password_here',
  'database_name_here'
) or die(mysqli_error($mysqli));
?>
