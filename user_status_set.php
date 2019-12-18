<?php

include('config.php');

if(isset($_POST['status']))
{
    $phone = $_POST['phone'];
    $my_status = $_POST['status'];
    $sql1 = "SELECT * FROM `user_status_set` WHERE phone='$phone'";
    $t_result = mysqli_query($connection, $sql1);
    if(mysqli_num_rows($t_result)>0)
    {
        $sql = "UPDATE `user_status_set` SET `status` = '$my_status' WHERE `user_status_set`.`phone` = '$phone'";
        $result = mysqli_query($connection, $sql);
        if($result)
        {
            $sql = "UPDATE `user_status_set` SET `updated_time` = NOW() WHERE `user_status_set`.`phone` = '$phone'";
            $result = mysqli_query($connection, $sql);
            
            print_r("ok");
        }
        else
        {
            print_r($connection->error);
        }
        
    }
    else
    {
        $sql = "INSERT INTO user_status_set (phone, status) VALUES ('$phone','$my_status')";
        $result = mysqli_query($connection, $sql);
        if($result)
        {
            print_r("ok");
        }
        else
        {
            print_r($connection->error);
        }
    }
    
}