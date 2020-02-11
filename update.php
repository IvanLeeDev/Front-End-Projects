<?php

require 'connect.php';

$sql = "UPDATE `student` SET `course`='javascript', `grade`=98 WHERE `id`=5";

if(mysqli_query($conn, $sql)){
    echo '成功更新了' . mysqli_affected_rows($conn) . '条记录';
}else{
    echo '更新失败' . mysqli_error($conn);
}

mysqli_close($conn);