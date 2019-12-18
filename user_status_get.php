<?php

include('config.php');

if(isset($_POST['phone']))
{
    $phone = $_POST['phone'];
    $sql1 = "SELECT * FROM `user_status_set` WHERE phone='$phone'";
    $t_result = mysqli_query($connection, $sql1);
    if(mysqli_num_rows($t_result)>0)
    {
        $status_result="not Found";
        while($result = mysqli_fetch_array($t_result))
        {
            $status_result = $result['status'];
        }
        
        if($status_result)
        {
            
            print_r(json_encode(Array('status'=>$status_result)));
        }
        else
        {
            print_r("something went wrong");
        }
        
    }
    else
    {
       print_r("Not Found");
    }
    
}