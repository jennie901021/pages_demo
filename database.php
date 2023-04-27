<?php

$sname= "localhost";
$uname= "root";
$password= "root";

$db_name = "whereigo";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn){
    echo "連接失敗";
}
?>