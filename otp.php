<html>
	<head>
		<title> OTP </title>
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
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(50% - 50px);
		}
		.h1{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
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
		<form action="otpx.php" method="post">
			<div class="boxer">
		<img src="logo.png" class= "logo">
		<h1> Enter </h1>
			
		<p> OTP </p>
          <?php if (isset($_GET['num1'])) { ?>
               <input type="text" 
                      name="num1" 
                      placeholder="Username"
                      value="<?php echo $_GET['num1']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="num1" 
                      placeholder="OTP"><br>
          <?php }?>
			<input type="submit" value="Send" class="btn">
		</form>
	<?php 
?> </div>
		</body>
	</html>