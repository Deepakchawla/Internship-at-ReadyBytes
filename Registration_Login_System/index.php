<?php
if(isset($_SESSION['id']))
{
    header('location:account.php');
}
else
{
    include 'login.php';

}
?>
