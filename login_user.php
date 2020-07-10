<?php

require_once 'conn.php';

$query = new MongoDB\Driver\Query([]);

if(isset($_POST['login_btn']))
{

$uname=$_POST['username'];
$pass=$_POST['password'];


$rows = $manager->executeQuery("user.regdata",$query);

foreach($rows as $document)
{
    if($uname == $document->email and $pass == $document->password)
    {
        require 'test.php';
    }
    else
{
    echo '<script>alert("Wrong username or password")</script>';
    require 'login.php';
}

}

}

if(isset($_POST['register_btn']))
{
    require 'register.php';

}







?>