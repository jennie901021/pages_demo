<?php
session_start();
$sname= "localhost";
$uname= "root";
$password= "root";
$db_name = "whereigo";
$conn = mysqli_connect($sname, $uname, $password, $db_name);
// 取得表單傳遞的變數
$name =$_POST['name'];
$host = $_POST['host'];
$number = $_POST['number'];

// 將表單內容存入資料庫
$sql = "INSERT INTO community (社群名稱,社群主辦人,社群ID) VALUES ('$name', '$host','$number')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
