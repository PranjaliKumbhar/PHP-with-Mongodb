<?php

$data=new MongoDB\Driver\BulkWrite;

if(isset($_POST['login_btn']))
{
    require 'login.php';
}



if(isset($_POST['register_btn']))
{

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$psw=$_POST['setpassword'];



$user=[

    '_id'=>new MongoDB\BSON\ObjectId,
    'fname'=> $firstname,
    'lname'=> $lastname,
    'email'=> $email,
    'password'=> $psw
];


try{

    $data->insert($user);
    $manager=new MongoDB\Driver\Manager('mongodb://localhost:27017');
    $result=$manager->executeBulkWrite('user.regdata',$data);
    //echo "user added";

}
catch(MongoDB\Driver\Exception\Exception $e){

    die("error".$e);

}
}





?>