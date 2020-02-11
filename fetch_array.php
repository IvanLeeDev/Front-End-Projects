<?php

require 'connect.php'; //连接数据库

//执行查询
$sql = "SELECT `id`, `name`, `grade` FROM `student` WHERE `id` > 0";

//获取结果集
$result = mysqli_query($conn, $sql);
//查看结果集记录数量
echo '查询到的记录数量' . mysqli_num_rows($result);

echo '<hr>';

if($result && mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    var_dump($row);
    echo '<hr>';
    $row = mysqli_fetch_array($result);
    var_dump($row);
}
//复位结果集指针
mysqli_data_seek($result, 0);

echo '<hr>';
echo '循环遍历结果集：<br>';
if($result && mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
        var_dump($row);
    }
}

//将结果集一次解析到二维数组中
echo '<hr>';
echo '将结果集一次解析到二维数组中';
//复位结果集指针
mysqli_data_seek($result, 0);

echo '<hr>';
echo '循环遍历结果集：<br>';
$rows = [];

//mysqli_num_rows()函数的第二个参数可以是MYSQLI_ASSOC、MYSQLI_NUM和MYSQLI_BOTH(默认的)

if($result && mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
        $rows[] = $row;
    }
}
//输出结果集解析出来的二维数组
var_dump($rows);


//释放结果集
mysqli_free_result($result);

//关闭连接
mysqli_close($conn);