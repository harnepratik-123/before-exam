<?php
session_start();

?>
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
	$a=$_SESSION['id'];
	echo $a;
	$servername="localhost";
	$username ="root";
	$password="";
	$dbname="donotdelete";
	$conn=new mysqli($servername,$username,$password,$dbname);
			if($conn->connect_error)
			{	die("connection failed:".$conn -> connect_error);
			}
			$sql="select id,firstname,lastname,email,image from stayaway where id='$a'";
			$result=$conn->query($sql);
			if($result->num_rows>0)
			{
			while($row=$result->fetch_assoc())
			{
			echo "id=".$row['id']."<br/>";
			echo "firstname=".$row['firstname']."<br/>";
			echo "lastname=".$row['lastname']. "<br/>";
			echo "Email=".$row['email']."<br/>";
			echo "<img src='".$row['image']."'/>";
			}
			}
			else
			{
			echo "no result";
			}
			$conn->close();
	?>
	</body>
</html;>