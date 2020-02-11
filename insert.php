<?php

require 'connect.php'; //连接数据库

//准备sql语句
$sql = "INSERT INTO `student` (`name`,`course`,`grade`,`create_time`, `update_time`) VALUES ('小土','js', 85, 6, 3)";

if(mysqli_query($conn, $sql)){
    echo '成功的添加了' . mysqli_affected_rows($conn) . '条记录，新增主键id' . mysqli_insert_id($conn);
}else {
    echo '添加失败' . mysqli_error($conn);
}

//关闭连接
mysqli_close($conn);