<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>测试 jQuery Ajax</title>
</head>
<body>
	<div class="login-form">
		<form action="#">
			<label for="username">Username <input id="username" name="username" type="text"></label>
			<label for="password">Password <input id="password" name="password" type="password"></label>
			<button type="button" id="login-btn">Login</button>
		</form>
	</div>
	<script src="https://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
	<script>
		$(function() {
			// username: admin
			// password: admin
			var requestUrl = 'login.php';
			var username = $('input[name="username"]');
			var password = $('input[name="password"]');
			
			$('button#login-btn').click(function()  {
				$.post(requestUrl, {username: username.val(), password: password.val()}, function(result) {
					if(result.status) {
						alert(result.message);
						window.location.href="hsttp://www.baidu.com";
					} else {
						alert(result.message);
						return false;
					}
				}, 'JSON');
			});
			

		});
	</script>
</body>
</html>