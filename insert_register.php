<?php
$servername="localhost";
$username ="root";
$password="";
$dbname="donotdelete";
$target="up/".$_FILES['di']['name'];
move_uploaded_file($_FILES['di']['tmp_name'],$target);
$b=$_REQUEST["fname"];
$c=$_REQUEST["lname"];
$d=$_REQUEST["email"];
$e=$_REQUEST["pass"];
$a=$_REQUEST["id"];
//$_REQUEST["di"];
$conn=new mysqli($servername,$username,$password,$dbname);
		if($conn->connect_error)
		{	die("connection failed:".$conn -> connect_error);
		}
		$stmt=$conn->prepare("insert into stayaway(id,firstname,lastname,email,image)value(?,?,?,?,?)");
	
		
		$stmt->bind_param("issss",$a,$b,$c,$d,$target);
		$stmt->execute();

	header("location:prologin.php");
?>