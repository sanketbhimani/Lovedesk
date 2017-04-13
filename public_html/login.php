<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Pure CSS Login Form</title>

   

   

</head>

<body>


  <?php
 
   session_start();
   $email0 = $_POST["email"];
   $password0 = $_POST["password"];
  //$str = $email0.'_'.$password0;
   
   $_SESSION['email'] = $email0;
   $_SESSION['pass'] = $password0;
   
   $link = mysql_connect( "localhost", "root");


   if ( ! $link )
	die( "Couldn't connect to MySQL" );

   mysql_select_db( "sanket", $link )
	or die ( "Couldn't open sanket: ".mysql_error() );

   
   
   
   
   
   $q1 = "SELECT `name`, `surname`, `branch`, `sem`, `email`, `password` FROM `password` WHERE `email` = $email0";
   echo $q1;
   $r1=mysql_query("SELECT `name`, `surname`, `branch`, `sem`, `email`, `password` FROM `password` WHERE `email` = '$email0'")
	or die("first".mysql_error().mysql_errno());
   
   
   $a=mysql_fetch_array( $r1 );
   
   
   
   if($a['password'] === $password0)
   {
	   
	    $str = $a['branch'].$a['sem'].$a['name'].$a['surname'];
   
		$_SESSION['sanket'] = $str;
   
	   
	   header("Location:user_home.php");	
   }
   else
   {
		header("Location:tryagainwrongpass.php");
		
   }
   
   

  ?>



 

</body>

</html>


































<!--


<html>
 <head>
  <title>
    DDU Love Desk
  </title>
 </head>
  
 <body>
  

   /*
   
   $str = $email0.'_'.$password0;
   
   $_SESSION['sanket'] = $str;
   
   
   
   if(mysql_query( "SELECT sex FROM `$str`" ))
   {
	header("Location:user_home.php");	
   }
  else
   {
        
        header("Location:index.php");
   }
   */
  ?>

 </body>
 
</html>
-->