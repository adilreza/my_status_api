<?php

include('config.php');

if(isset($_POST['email'])||isset($_POST['phone']))
{
    $email="";
    $phone="";
    $password = $_POST['password'];
    
    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
    }
    if(isset($_POST['phone']))
    {
        $phone = $_POST['phone'];
    }
    if($email)
    {
        $sql = "SELECT * FROM user_informations WHERE email='$email' and password= '$password'";
        
        $result = mysqli_query($connection, $sql);
        $cnt = mysqli_num_rows($result);
        
        
        if($cnt)
        {
            $make_arr = Array('status'=>'login');
            print_r(json_encode($make_arr));
        }
        else
        {
            $make_arr = Array('status'=>'not');
            print_r(json_encode($make_arr));
        }
    }
    
    if($phone!="")
    {
        $sql = "SELECT * FROM user_informations WHERE phone =$phone and password = $password";
        $result = mysqli_query($connection, $sql);
        $cnt = mysqli_num_rows($result);
        if($cnt)
        {
            //print_r($result);
            print_r("Found2");
        }
        else
        {
            print_r("Not Found2");
            //print_r($result);
        }
    }
    
    
}