<?php
//设置页面html编码字符集
header('Content-type: text/html; charset=utf-8');

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'frontendproject_db';

$conn = mysqli_connect($host, $username, $password, $dbname);

if(mysqli_connect_errno($conn)){
    die('<h2 style="color: red">连接失败</h2>' . mysqli_connect_error($conn));
}else {
    echo '<h2>连接成功</h2>';
}

//设置客户端字符集
mysqli_set_charset($conn, 'utf8');