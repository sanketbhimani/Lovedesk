<html>
<head>
<title>
password reset-lovedesk
</title>
<link rel="stylesheet" href="css/login.css" media="screen" type="text/css" />
</head>
<body>


<div class="stand">
  <div class="outer-screen">
    <div class="inner-screen">
	
	
	      <div class="form">
         
		 
			
     
<?php
	if($_POST['new_pass'] === $_POST['new_pass2']) 
	{
		$email = $_POST['email'];
		$new_pass = $_POST['new_pass'];
		$pass = $_POST['old_pass'];		
		
		
		
				
		$link = mysql_connect( "localhost", "root");
     	mysql_select_db( "sanket", $link )
			or die ( "Couldn't open sanket: ".mysql_error() );
			
			
			
		$qry = "SELECT `password`,`que`,`ans`,`branch`,`sem`,`name`,`surname` FROM `password` WHERE `email` = \"$email\"";
		$a = mysql_query($qry)
			or die("ssa".mysql_error());
		$b = mysql_fetch_array($a);
		$question = $b['que'];
		$surname = $b['surname'];
	//	$que = $b['que'];
		$ans = $b['ans'];
		$name = $b['name'];
		$branch = $b['branch'];
		$sem = $b['sem'];
		if($pass === $b['password']) 
		{
			$qry1 = "DELETE FROM `password` WHERE `email` = \"$email\"";
			$qry2 = "INSERT INTO `password` (`email`,`password`,`que`,`ans`,`branch`,`sem`,`name`,`surname`) VALUES (\"$email\", \"$new_pass\", \"$question\",\"$ans\", \"$branch\", \"$sem\", \"$name\", \"$surname\")";
			mysql_query($qry1) or die("qry1".mysql_error());
			mysql_query($qry2) or die("qry2".mysql_error());
			//		echo "your password and conform password is not matched";'
			echo '<h3 style="height:10px; margin-top:5px; text-align:center;  color:#666; font-family: Arial;  ">you have successfully changed your password</h3>		<div style="margin-top:30px;"> <a href="user_home.php" style=" font-size:18px">click here</a></div>		 <h3 style="height:10px; text-align:center; color:#666; font-family: Arial;  margin-bottom:25px; margin-top:20px;">to goto user home page</h3>';
			
			//echo "<h3>you have successfully changed your password</h3><br>";
			//echo "<a href=\"user_home.php\">click here</a> for goto your home page";
		}
		else
		{
			echo '<h3 style="height:10px; margin-top:5px; text-align:center;  color:#666; font-family: Arial;  ">your email and password is not matched</h3>		<div style="margin-top:30px;"> <a href="reset_password.php" style=" font-size:18px">click here</a></div>		 <h3 style="height:10px; text-align:center; color:#666; font-family: Arial;  margin-bottom:25px; margin-top:20px;">to try again</h3>';
			
			//echo "<br>Your enterd old password and email is not matched";
			//echo "<br><a href=\"reset_password.php\">click here</a> to try again";
			//			echo "<br>OR<br><a href=\"user_home.php\">click here</a> for goto your home page";

		}
		
	}
	else
	{
		
		echo '<h3 style="height:10px; margin-top:5px; text-align:center;  color:#666; font-family: Arial;  ">your password and conform password is not matched</h3>		<div style="margin-top:30px;"> <a href="reset_password.php" style=" font-size:18px">click here</a></div>		 <h3 style="height:10px; text-align:center; color:#666; font-family: Arial;  margin-bottom:25px; margin-top:20px;">to try again</h3>';
		//echo "<br><a href=\"reset_password.php\">click here</a> to try again";
		//echo "<br>OR<br><a href=\"user_home.php\">click here</a> for goto your home page";

	}


?>
 </div> 
    </div> 
  </div> 
</div>
</body>
</html>
