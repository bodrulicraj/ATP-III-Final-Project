<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
	<div class="form_container">
		<div class="login_wraper">
			<form method="post" action="/login">	
				<div class="login_form">
					<div class="form_title">
						<h2> Portal Login Form</h2>						
						<h4 style="text-align: center;color: #ff0000;font-weight: 200;">{{session('logmsg')}}</h4><br>
					</div>					

					<div class="form_content">
						<div class="content_area">
							<input type="text" name="username" placeholder="User Name" />
						</div>
						<br />
						<div class="content_area">
							<input type="password" name="password" placeholder="Password" />
						</div>
						<div class="content3">
							<input type="submit" name="submit" value="Login" />
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="footer_wraper">
		<div class="footer">
			<div class="footer_top">
			</div>
			<div class="footer_bottom">
				<div class=" bottom container_center">
					<p>Copyright 2018-19 &copy; onlineschool.com <br/> &reg All Right Reserved</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>