<?php
require 'functions.php';
session_start();
session_destroy();
 //relocate to the http domain page
header('Location: ../account/login.php');
?>