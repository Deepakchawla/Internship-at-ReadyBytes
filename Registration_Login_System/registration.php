<?php
include 'controller.php';
$controller =$_POST['controller'];
$function =$_POST['function'];
if(isset($controller,$function)) {
    $cont = new $controller();
    $cont->$function();
}
?>