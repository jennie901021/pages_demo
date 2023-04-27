<?php
    // 建立数据库连接
    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    // 查询数据库中的人员名单
    $sql = "SELECT 社群成員 FROM community";
    $result = mysqli_query($conn, $sql);
    $members = array();
    if (mysqli_num_rows($winner) > 0) {
        while ($row = mysqli_fetch_assoc($winner)) {
            $members[] = $row['社群成員'];
        }
    }
    mysqli_close($conn);
?>
