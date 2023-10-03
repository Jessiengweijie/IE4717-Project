<?php
  @session_start();
  
  // store to test if they *were* logged in
  $old_user = $_SESSION['valid_user'];  
  unset($_SESSION['valid_user']);
  session_destroy();
  header("Location: /ConviGo"); // Redirect to the login page
?>