<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'admin' && $password == 'admin') {
	//用户名和密码都正确
	$array = array('status' => 1, 'message' => '登录成功');
	$result = json_encode($array);
	echo $result;
} else {
	//用户名和密码不正确
	$array = array('status' => 0, 'message' => '登录失败');
	$result = json_encode($array);
	echo $result;
}
exit();
http://www.cnblogs.com/tylerdonet/p/5001943.html
