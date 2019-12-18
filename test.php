<?php

require("config.php");

$sql = "SELECT * FROM `user_informations`";
$result = mysqli_query($connection, $sql);

$json_array = array();
while($result2 = mysqli_fetch_assoc($result))
{
    $json_array[]= $result2;
}

$json_data = json_encode($json_array);

print_r($json_data);