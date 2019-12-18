<?php

include('config.php');
if(isset($_POST['email']))
{

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "INSERT INTO `user_informations` (`full_name`, `email`, `phone`, `password`) VALUES ('$full_name', '$email', '$phone', '$password')";

$result = mysqli_query($connection, $sql);
if($result)
{
    $mak_arr = Array('status'=>"inserted");
    print_r(json_encode($mak_arr));
}
else
{
    $mak_arr = Array('status'=>"not");
    print_r(json_encode($mak_arr));
}
}
