* 一、Lesson 01

1.```<form method="post" action="mailto:ivanlee@bcnetcom.com">```： "mailto"是一种允许通过email传送表单
数据的协议，但html表单是不知道如何发送一个email的，会委托给用户自己的email程序来完成(email的内容会是表单的数据，类似于
加在url后面的参数)。注意：mailto不是传送表单数据的好方法。

2.服务器不会接触到使用mailto的web表单中输入的数据，因为使用mailto会不经过服务器，直接调用用户自身的email程序来发送邮件。

3.表单中label元素的for属性是对应input等表单控件的id属性。

4.实际上，服务器运行一个PHP脚本后，结果都是纯HTML和CSS。所以一旦PHP脚本在服务器运行结束，每个PHP脚本都会转换为HTML和CSS。

5.网站的所有文件都存储在服务器上--.html、.css、.php等。不过html和css文件以及图像文件会直接发送到客户端，而php文件要经过
服务器的php解析器处理后，把结果(结果正是纯HTML和CSS)发送到客户端。

6.区分web页面是否由服务器传送，一种快捷方式是查找以"http:"开头的URL。作为本地文件打开的web页面总是以"file："开头。

7.在web服务器上，如何放置php脚本和html文件没有任何特殊之处，只需把它们上传到web页面能够访问的某个位置即可。
向服务器上传文件，需要借助FTP工具。

8.判断服务器是否安装了PHP，可以创建一个文件test.php，在其中输入以下代码：
```
<?php
	phpinfo(); //这行代码要求PHP显示自身信息。
?>
```
