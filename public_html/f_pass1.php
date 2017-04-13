<html>
<head>
<title>password reset-lovedesk</title>
</head>
<body>
<?php

session_start();
$ans = $_POST['ans'];
$email = $_SESSION['email1'];








$link = mysql_connect( "localhost", "root");

if ( !$link)
die( "Couldn't connect to MySQL" );
mysql_select_db( "sanket", $link )
	or die ( "Couldn't open sanket: ".mysql_error() );

	
	
	
	
	
	
	
	
	
	
	
$query="SELECT email, question, ans, password FROM `password` WHERE `email` = '$email'";
$result = mysql_query($query);
$a = mysql_fetch_array($result);
if($a['ans']===$ans)
	{
		echo "your password is <h3>".$a['password']."</h3>";
		echo "<a href=\"index.php\"> click here </a> to goto home page.";
	}
else 
	{
		echo "you have enter a wrong ans<br>";
		echo "<a href=\"forgot_pass.php\"> click here </a> to try again.";
	}
?>
</body>
</html>
