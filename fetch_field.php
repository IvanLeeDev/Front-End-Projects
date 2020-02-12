<?php

require 'connect.php'; //连接数据库

//执行查询
$sql = "SELECT `id`, `name`, `grade` FROM `student` WHERE `id` > 1";

//获取结果集
$result = mysqli_query($conn, $sql);
//查看结果集记录数量
echo '查询到的记录数量' . mysqli_num_rows($result);
echo '<br>';

if($result && mysqli_num_rows($result) > 0){
    echo '当前字段的索引是：' . mysqli_field_tell($result);
    $field = mysqli_fetch_field($result);
    var_dump($field);
    echo '当前字段的name属性是：' . $field->name;
    echo '<br>';
    echo '下一字段的索引是：' . mysqli_field_tell($result);
    $field = mysqli_fetch_field($result);
    var_dump($field);
    echo '当前字段的name属性是：' . $field->name;
    echo '<br>';
    echo '下一字段的索引是：' . mysqli_field_tell($result);
}

//字段列表指针复位
mysqli_field_seek($result,0);
//用循环遍历字段信息
echo '<hr color="red">';
echo '循环遍历字段信息';
if($result && mysqli_num_rows($result) > 0){
    while($field = mysqli_fetch_field($result)){
        echo '当前字段的name属性是：' . $field->name;
        echo '下一字段的索引是：' . mysqli_field_tell($result);
    }
}

//释放结果集
mysqli_free_result($result);

//关闭连接
mysqli_close($conn);