<?php
//Logout Page, called when session gets expired or user chooses to logout
session_start(); //starting session
session_destroy(); //ending session
header('Location:http://vkmbs.com/hound'); //redirecting to home page
?>
