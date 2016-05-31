<?php
include 'controller.php';
$obj = new task();
session_unset();
header('location:index.php');
?>