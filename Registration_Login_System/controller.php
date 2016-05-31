<?php
session_start();
error_reporting(0);
include 'model.php';
class task

{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD']=='POST') {


            $formvalues[0] = $_POST['fname'];
            $formvalues[1] = $_POST['email'];
            $formvalues[2] = $_POST['password'];
            $formvalues[3] = $_POST['gender'];
            $formvalues[4] = $_POST['dob'];
            $m = new model();
            $m->insert($formvalues);
            $m1 = $m->select($formvalues[1],$formvalues[2]);
            if($m1[3]==$formvalues[2])
             {

                    $_SESSION['id'] = $m1[0];
                    $_SESSION['name'] = $m1[1];
                    header("location:account.php?user_id=".$_SESSION['id']);
             }
            else
                {
                    header('location:index.php');
                }
        }

    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $m = new model();
            $m1 = $m->select($email,$password);
            if($m1[3]==$password)
            {
                $_SESSION['id'] = $m1[0];
                $_SESSION['name'] = $m1[1];
                header("location:account.php?user_id=".$_SESSION['id']);
            }
            else
            {
                header('location:login_again.html');
            }
        }

    }
}