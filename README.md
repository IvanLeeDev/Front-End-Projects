# Ajax的使用

1.凡是能发送URL请求的，都是客户端，可以是软件(浏览器)、命令(终端工具)和一段代码(Ajax)。

2.Ajax：异步的JavaScript和XML，是用js写的一段代码，可以代替浏览器向服务器发出请求，
并可以处理返回的数据。

3.Ajax脚本接管浏览器地址栏发出的URL请求，并向服务器发出URL请求，因为这个请求是异步的，
所以用户可以继续操作这个页面，而不用担心页面刷新。

4.同步和异步的区别就是客户端和服务器端是否在处理同一个请求。

5.
```
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function(response){
	if(this.readyState === 4 && this.status === 200){
		console.log(response)
	}
}
xhr.open('GET', 'www.baidu.com?t=' + Math.random());
xhr.send(null);
```
---------
如果需要像表单那样POST数据，可以使用setRequestHeader()来添加HTTP头，然后在send()方法中规定
你希望发送的数据，如下：
```
xhr.open('POST', '/try/ajax/demo.post.php', true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.send('fname=Henry&lname=Ford');
```
6.setRequestHeader()必须在open()和send()之间调用，常用于POST调用。

7.responseText: 服务器返回的字符串，包括纯文本和JSON数据等。

8.responseXML:服务器返回的XML/HTML对象，可以直接用DOM方法解析。

9.Ajax get请求的URL地址可以是无参数(check.php)和有参数(check.php?name=xiaotu&password=123456)。

10.如果用form表单的get方法提交，假如action="./login_get.php",则跳转后的页面url为"login_get.php?name=xiaotugou&password=123123"。

11.如果用form表单的post方法提交，假如action="./login_get.php",则跳转后的页面url还是为"login_get.php"。

12.如果用ajax get处理相当于form表单的get方法提交，则需要在ajax请求的url中组装好url，如'check.php?name=' + user + '&password=' + password;

13.如果用get方式向服务器传递数据，数据是必需写在url参数中的，这种方式既不安全有限制数据的大小，如果想安全的传递大量数据，就要用post方式。
