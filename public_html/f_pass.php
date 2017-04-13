<html>
<head>
<title>password reset-lovedesk</title>
</head>
<?php
$email=$_POST["email"];
//$pass=$_POST["password"];
//$keyword=$_POST["keyword"];
session_start();
$_SESSION['email1'] = $email;






$link = mysql_connect( "localhost", "root");

if ( !$link)
die( "Couldn't connect to MySQL" );
mysql_select_db( "sanket", $link )
	or die ( "Couldn't open sanket: ".mysql_error() );

	
	
	
	
	
	
$query="SELECT email, question, ans, password FROM `password` WHERE `email` = '$email'";
$result = mysql_query($query);
$a = mysql_fetch_array($result);
//echo $question;


?>
<body>
<form action="f_pass1.php" method="post">
      <fieldset>
	<legend>for password recovery</legend>
	<div>
		give the ans of the following question:
	</div>
	<div>
	<label for="ans"><?php echo$a['question'];?>:</label><br>
	<input type="text" name="ans">
	</div>
	
  	
	<div>	 
      	<input type="submit" name="recover my password" value="recover my password">
        </div>
      </fieldset>
    </form>
</body>
</html>

