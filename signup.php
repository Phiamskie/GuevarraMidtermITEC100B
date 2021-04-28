<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
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
			height: 645px;
			background: #000;
			color: #fff;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 70px 30px;
		}
		.pik{
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
	<div class="boxer">
		<img src="logo.png" class= "pik">
		<h1> Log In </h1>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

         <p> Email </p>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Email"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Email"><br>
          <?php }?>

          <p> Username </p>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<p>Password</p>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <p>Re Password</p>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>
			<a href="index.php" class="ca">Already have an account?</a>
     		<input type="submit" value="Sign Up">
          
     </form>
</body>
</html>