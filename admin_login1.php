<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="login and register.css">

    <div class="main">
		<div class="card">
			<div class="cardtitle">
				<h3><i class="fa fa-user-circle">Admin</i><span id="actiontitle">Login</span></h3>
			</div>
			<div class="cardbody">
				<div class="cardbodytop">
					<div id="bottomline"></div>
				</div>
				<div class="cardbodybottom">
					<form id="adminloginform" action="Admin.php">
						<br>
						<input type="Id" name="Id" class="input-field" required="" placeholder="Enter your Id"><br><br>
					    <input type="email" name="email" class="input-field" required="" placeholder="Enter your email"><br><br>
						<input type="password" name="password" class="input-field" required="" placeholder="Enter your password"><br><br>
						<br>
						<input type="submit" name="submit" class="submit-field" value="Admin Login" >
					</form>
				</div>
			</div>
		</div>
	</div>
</head>
</body>
</html>

