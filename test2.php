<?php

require("config.php");

$name = $_POST['name'];
$email = $_POST['email'];


$sql = "INSERT INTO `user_info` ( `name`, `email`) VALUES ('$name', '$email')";

$res = mysqli_query($connection, $sql);
if($res)
print_r("saved");
else
print_r("Not saved");

