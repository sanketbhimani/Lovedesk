 <!DOCTYPE html>
<html>
<body>
<head>
<title>
Successful signin
</title>
 <link rel="stylesheet" href="css/login.css" media="screen" type="text/css" />
</head>

<?php

session_start();
$email1=$_POST["email"];
$password1=$_POST["password"];
$sex1=$_POST["sex"];
$branch1=$_POST["branch"];
$sem1=$_POST["sem"];
$name1=$_POST["name"];
$surname1=$_POST["surname"];
$ans1=$_POST["ans"];
$question1=$_POST["question"];

//$filename = $email1.'_'.$password1;
//$email_key = $email.'_'.$keyword;


if($email1==NULL || $password1==NULL || $name1==NULL || $surname1==NULL)
{
	header("Location:tryagain_write.php");
	die();
}






$link = mysql_connect( "localhost", "root");

	if ( ! $link )
		die( "Couldn't connect to MySQL" );

mysql_select_db( "sanket", $link )
	or die ( "Couldn't open sanket: ".mysql_error() );
	
	
	$abc='SELECT `email` FROM `password` WHERE 1';
	$result=mysql_query($abc);
	
	$flg=1;
	while($a=mysql_fetch_array( $result ))
	{
		if($email1===$a['email'])
		{
			$flg=2;
		}
	}
	if($flg==2)
	{
		header("Location:tryagain_write_same_email.php");
		die();
	}
	
	
	
	
	
	
	
	/*
	
//umask(0777);
$qqq = "CREATE TABLE `$filename` ( sex VARCHAR(30), branch VARCHAR(3), sem VARCHAR(10), name VARCHAR(30), surname VARCHAR(30))";
$result1 = mysql_query($qqq);

	if(!$result1)
		die("fail to creat a table ($filename): ".mysql_error());

$query="INSERT INTO `$filename` (`sex`, `branch`, `sem`, `name`, `surname`) VALUES( '".$sex1."', '".$branch1."', '".$sem1."', '".$name1."', '".$surname1."')";



	if( !mysql_query($query) ) 
		die( "Couldn't write : ".mysql_error() );

$asd="INSERT INTO `password` (`email`, `password`, `question`, `ans`) VALUES ('".$email1."', '".$password1."', '".$question."', '".$ans."')";
mysql_query($asd);
$sql = "SELECT sex, branch, sem, name, surname FROM `$filename`";
	if(!$sql) 
		die("could not select: ".mysql_error());
$result = mysql_query($sql);
	if(!$result) die("could not query: ".mysql_error());
	

$a = mysql_fetch_array( $result );


*/








$asd="INSERT INTO `password` (`email`, `password`, `que`, `sem`,`name`,`surname`,`branch`,`ans`) VALUES ('".$email1."', '".$password1."', '".$question1."', '".$sem1."', '".$name1."', '".$surname1."', '".$branch1."', '".$ans1."')";
mysql_query($asd);

















$dirname = $branch1.$sem1.$name1.$surname1;

$result = mysql_query( "CREATE TABLE `$dirname` ( sex VARCHAR(30), branch VARCHAR(3), sem VARCHAR(10), name VARCHAR(30), surname VARCHAR(30));" );

if(!$result)
die("fail to creat a table ($dirname): ".mysql_error());



?> 




<div class="stand">
  <div class="outer-screen">
    <div class="inner-screen">
	
	
	      <div class="form">
         <h3 style="height:10px; margin-top:5px; text-align:center;  color:#666; font-family: Arial;  ">Successful Log in </h3>
		<div style=" margin-top:30px;"> <a href="index.php" style=" font-size:18px">click here</a></div>
		 <h3 style="height:10px; text-align:center;  color:#666; font-family: Arial;  margin-bottom:25px; margin-top:20px;">to goto login page</h3>
		 
			
      </div> 
    </div> 
  </div> 
</div>










 

</body>
</html>
