<?php

$userList = ['ivan', 'jake', 'ken'];//已注册用户
$user = isset($_POST['name']) ? $_POST['name'] : '';

echo in_array($user, $userList) ? 1 : 0; //如果用户在列表中返回1，否则返回0