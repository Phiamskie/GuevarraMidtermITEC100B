
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
	body{
			margin: 0;
			padding: 0;
			background: url(backgroundpic.png);
			background-size: auto;
			background-position: center;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		}
		h1 {
    		width:800px;
    		height:200px;
    		margin: 30px auto;
    		background: #05445E;
    		float:center;
    		text-align: center;
		}
		.btn{
			position: relative;
    		top: 80px;
    		left: 15px;
    		background: #75E6DA;
    		font-size:30px;
    		color: white;
    		padding: 10px;
    		width: 350px;
		}

		
		</style>
	<title>HOME</title>
	
</head>
<body>
	
     <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
	
   <center><button class="btn">  <a href="logout.php">Logout</a></h1> </button></center><br/>
	<center><button class="btn">  <a href="display.php">View Activity</a></h1> </button></center>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>                            		                            