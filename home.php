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
	  <?php session_start();
		if(isset($_SESSION['id']))
		{?>
			<a class="a"  href="prodisplay.php">Display&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
		<?php}
		else
		{
	  ?>	<font class="a">Display&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
	 	  <?php
		}
	  ?>
	  <a class="a" href="logout.php">Logout</a>
	</div>
	WELCOME HOME
</body>
</html>
