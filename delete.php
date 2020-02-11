<?php

require 'connect.php';

$sql = "DELETE FROM `student` WHERE `id`=4 ";

if(mysqli_query($conn, $sql)) {
    echo '成功删除了' . mysqli_affected_rows($conn) . '条记录';
}else {
    echo '删除失败' . mysqli_error($conn);
}

mysqli_close($conn);