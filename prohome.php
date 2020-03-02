
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 .a{float: left;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
  margin:5%;
  
  }
</style>
</head>
<body>
	<div class="topnav" bgcolor="red">
	  <a class="a"  href="home.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  <a class="a"  href="register.html">Register&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  <a class="a"  href="">Shop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  <a class="a" href="prodisplay.php">Dispaly&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  <a class="a" href="logout.php">Logout</a>
	</div>
<?php
	$a=$_REQUEST["id"];
	/*$b=$_REQUEST["fname"];
	$c=$_REQUEST["lname"];
	$d=$_REQUEST["email"];
	$e=$_REQUEST["pass"];
	*/
	$servername="localhost";
	$username ="root";
	$password="";
	$dbname="donotdelete";
	$conn=new mysqli($servername,$username,$password,$dbname);
			if($conn->connect_error)
			{	die("connection failed:".$conn -> connect_error);
			}
			$sql="select id from stayaway where id='$a'";
			$r=$conn->query($sql);
			if($r->num_rows>0)
			{
				session_start();
				$_SESSION['id']=$_REQUEST['id'];
				header("location:home.php");
			}
			else
			{
				header("location:login.html");
			}
			$conn->close();
			
     include 'footer.php';?>
</body>
</html>
