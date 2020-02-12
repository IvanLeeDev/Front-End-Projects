<?php

require 'connect.php'; //连接数据库

//执行查询
$sql = "SELECT `id`, `name`, `grade` FROM `student` WHERE `id` > 1";

//获取结果集
$result = mysqli_query($conn, $sql);
//查看结果集记录数量
echo '查询到的记录数量' . mysqli_num_rows($result);


if($result && mysqli_num_rows($result) > 0){
    //获取满足当前查询条件的表的全部字段信息，返回对象数组
    $fields = mysqli_fetch_fields($result);
    var_dump($fields);

    echo '<hr>';
    echo '获取指定字段的信息：';
    $field = mysqli_fetch_field_direct($result,2);
    var_dump($field);

    echo '当前字段的name属性是：' . $field->name;

}




//释放结果集
mysqli_free_result($result);

//关闭连接
mysqli_close($conn);