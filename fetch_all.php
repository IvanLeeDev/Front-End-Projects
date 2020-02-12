<?php

require 'connect.php'; //连接数据库

//执行查询
$sql = "SELECT `id`, `name`, `grade` FROM `student` WHERE `id` > 0";

//获取结果集
$result = mysqli_query($conn, $sql);
//查看结果集记录数量
echo '查询到的记录数量' . mysqli_num_rows($result);

//mysqli_fetch_all()函数的第二个参数可以是MYSQLI_ASSOC、MYSQLI_NUM(默认的)和MYSQLI_BOTH
//抓取所有的结果行并且以关联数据，数值索引数组，或者两者皆有的方式返回结果集。注意： 仅可用于 mysqlnd


$rows = [];

if($result && mysqli_num_rows($result) > 0){
    $rows[] = mysqli_fetch_all($result,MYSQLI_BOTH);
}

var_dump($rows);


//释放结果集
mysqli_free_result($result);

//关闭连接
mysqli_close($conn);