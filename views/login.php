<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/login.css">
	
</head>
<body>
	<div class="center">
		<div class="login-box">
			<form class="login-form" name="login-form" method="post" action="<?php echo site_url('login/verify')?>">
				<div class="login-content">
					<p><input class="login-id" type="text" name="user_id" placeholder="USER ID" ></p>

					<p><input class="login-pass" type="PASSWORD" name="user_pass" placeholder="USER PASSWORD" ></p>

					<label><p class="id-save">아이디저장</p><input type="checkbox" name="id-save"></label>
					<p><input class="login-btn" type="button" value="Login" ></p>
					<a href="#" class="id-search">아이디/비밀번호 찾기</a>
				</div>
			</form>
		</div>
	</div>
	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/login.js"></script>
</body>
</html>