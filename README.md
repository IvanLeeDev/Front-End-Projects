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

9.变量名必须以$开头，是区分大小写的。空格和连字符(-)不允许出现在变量名中。如$fang-spot(非法的)；
建议:变量名都用小写，且用下划线分隔多词变量名。

10.php文本，又称为字符串。

11.$_POST(是个数组)是PHP内置的特殊变量，称为超级全局变量。因为是内置的，所以脚本一旦运行，$_POST就已经存在，而不必创建。

12.浏览器不会对php做什么，因为浏览器永远看不到php代码。

13.(纯文本也能格式化，非html)在PHP中，单引号串被认为是原始文本(即PHP不会处理)，而PHP处理双引号串时会寻找变量(在双引号串中
遇到变量时，PHP会在串中插入该变量的值，就像连接串一样。)。
13.1 注意：因为php会处理双引号串，基于性能考虑，一般使用单引号串，除非有必要原因才使用双引号串。
13.2 换行(\n)、单引号(\')、双引号(\")。
13.3 单引号串只支持\'和\\转义字符，所有其他转义字符都只能用于双引号串。
```
//在单引号串中引用单引号
'He\'s lost!' //正确
//在双引号串中引用单引号
"He's lost!" //直接写即可
//在双引号串中引用双引号
"He\"s lost!" //正确
```
13.4 单引号串和双引号串对比：
```
//单引号无法转义
$msg1 = ' was abducted ' .  $when_it_happened . '\n' . ' was gone for '. $how_long;//was abducted tonight\n was gone for 10mins
//双引号转义
$msg2 = "was abducted $when_it_happened\n was gone for $how_long"; 
//was abducted tonight
//was gone for 10minsThanks for submitting the form.
```

14.如果mail()函数不起作用，可能是没正确地配置email支持。可查看www.php.net/mail了解详情。
