<?php
include 'controller.php';
if(isset($_SESSION['id']))
{
echo "Hello ".$_SESSION['name']." you have login successfully<br><a href='logout.php'>Logout</a>";
}
else
{
    header("location:login.php");
}

?>