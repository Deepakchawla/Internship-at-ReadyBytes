<?php
include 'controller.php';
if(isset($_POST['controller'], $_POST['function']))
{

    $c = $_POST['controller'];
    $f = $_POST['function'];
    $cont = new $c();
    $cont->$f();
}

else {
    include 'login.html';
}
?>
