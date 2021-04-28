<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
		<style>
		body{
			margin: 0;
			padding: 0;
			background: url(backgroundpic.png);
			background-size: auto;
			background-position: center;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		}
		.boxer{
			width: 320px;
			height: 400px;
			background: #05445E;
			color: #fff;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 70px 30px;
		}
		.logo{
			width: 200px;
			height: 200px;
			border-radius: 50%;
			position: absolute;
			top: -130px;
			left: calc(50% - 100px);
		}
		h1{
			padding: 0 0 20px;
			text-align: center;
			font-size: 30px;
			font-style: Cambria;
		}
		.boxer p {
			margin: 0;
			padding: 0;
			font-weight: bold;
		}
		.boxer input{
			width: 100%;
			margin-bottom: 20px;
		}
		.boxer input[type="text"], input[type="password"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: #fff;
			font-size: 16px;	
		}
		.boxer input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background: #fb2525;
			color: #fff;
			font-size: 18px;
			border border-radius: 20px;
		}
</style>
</head>
<body>
     <form action="login.php" method="post">
     	<div class="boxer">
		<img src="logo.png" class= "logo">
		<h1> Log In </h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
		<a href="signup.php" class="ca">Create an account</a><br/>
			<a href="changpass.php" class="ca">Forgot Password</a>
     	<input type="submit" value="Log In">
          
     </form>
</body>
</html>