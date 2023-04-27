<?php
 require_once 'database.php';

$input_data = json_decode(file_get_contents('php://input'), true);
$name = $input_data['name'];
$add_id = $input_data['id'];

// 取得原本的成員資料
$sql_select = "SELECT 社群成員 FROM community WHERE community_id = $add_id";
$result_select = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_assoc($result_select);
$members = $row['社群成員'];

// 將新的成員值加到原本的成員後面，以逗號分隔
$members = ",$name";


$sql = "UPDATE community SET 社群成員 = '$members' WHERE community_id = $add_id";

if ($conn->query($sql) === TRUE) {
  echo "儲存成功！";
} else {
  echo "儲存失敗：" . $conn->error;
}

mysqli_close($conn);
?>
