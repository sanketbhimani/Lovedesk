<html>
 <head>
  <title>
   Dhak... Dhak... Dhak...
  </title>
 </head>
 <body>

<?php

session_start();
	$dirname = $_SESSION['sanket'];

	
	
	
	$link = mysql_connect( "localhost", "root");

if ( !$link)
die( "Couldn't connect to MySQL" );
mysql_select_db( "sanket", $link )
	or die ( "Couldn't open sanket: ".mysql_error() );
	
	
	
	
	
/*	
$sql = "SELECT sex, branch, sem, name, surname FROM `$str1`";

$result = mysql_query($sql);
$a = mysql_fetch_array( $result ) ;

$dirname = $a['branch'].$a['sem'].$a['name'].$a['surname'];
*/



$sex2 = $_POST["sex"];
$branch2 = $_POST["branch"];
$sem2 = $_POST["sem"];
$name2 = $_POST["name"];
$surname2 = $_POST["surname"];


if($name2==NULL || $surname2=NULL)
{
	header("Location:tryagain_addcrush.php");
	die();
}

$str2 = $branch2.$sem2.$name2.$surname2;

//umask(0777);




$query="INSERT INTO `$dirname` (`sex`, `branch`, `sem`, `name`, `surname`) VALUES( '".$sex2."', '".$branch2."', '".$sem2."', '".$name2."', '".$surname2."')";

if( !mysql_query($query) ) 
die( "Couldn't write : ". mysql_error() );




		 header("Location:user_home.php");

/*

$sql1 = "SELECT sex, branch, sem, name, surname FROM `$str2`";

$result1 = mysql_query($sql1);

if($result1)
{	
	$result1 = mysql_query($sql1);
	
	$fl = 111; 
	while ($a1 = mysql_fetch_array( $result1 )) 
	{
		$dirname1 = $a1['branch'].$a1['sem'].$a1['name'].$a1['surname'];
		if($dirname === $dirname1)
		{
			$fl = 222;
		}
	 }
 if($fl == 222)
	{
		 header("Location:user_home.php");
	}
else
	{
		 header("Location:user_home.php");
	}
}
else
{
	 header("Location:user_home.php");
}*/
?>
<div>
<a href="user_home.php">click here</a> to come back to user home page 
</div>
 </body>
</html>
 
