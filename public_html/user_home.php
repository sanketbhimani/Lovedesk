<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>User home-lovedesk</title>

    <link rel="stylesheet" href="css/home.css" media="screen" type="text/css" />

   

</head>

<body>




 <?php
		 session_start();
 
  		 //$str1 = $_SESSION['sanket'];
		
		 $email=$_SESSION['email'];
		 
		 
		 
		 $link = mysql_connect( "localhost", "root");
     		 
		 mysql_select_db( "sanket", $link )
		 or die ( "Couldn't open sanket: ".mysql_error() );
		 
		 
		 
		 
		 

		 $sql = "SELECT `name`, `surname`, `branch`, `sem` FROM `password` WHERE `email`=\"$email\"";	 
 		 $result = mysql_query($sql)
			or die("sahh".mysql_error());
 		 $a = mysql_fetch_array( $result ) ;
	   ?>
	   
	   






  <h1 class="home">Welcome <?php echo $a['name']." ".$a['surname'] ;?>!</h1>

<div class="stand">
  <div class="outer-screen">
   		 <div class="inner-screen">
         
         	<table bordercolor="#1abc9d" style="margin-left:100px" >
  <tr>
    <th scope="col" style="background-color:#FFF;border-color:#1abc9d;font-family: Arial;text-align: center; height:35px;width:240px; font-size:18px">name</th>
    <th scope="col" style="background-color:#FFF;border-color:#1abc9d;font-family: Arial; text-align: center;height:35px;width:340px; font-size:18px">status</th>
    
  </tr>


  
  
  
  <?php
$str_m = $a['branch'].$a['sem'].$a['name'].$a['surname'];
$_SESSION['string']=$str_m;
$query = "SELECT sex, branch, sem, name, surname FROM `$str_m`";

$q_result = mysql_query($query)
 or die("sdas".mysql_error());
 $counter=0;

while($f = mysql_fetch_array( $q_result))
{
	$str_c = $f['branch'].$f['sem'].$f['name'].$f['surname'];
	$result1 = mysql_query("SELECT sex, branch, sem, name, surname FROM `$str_c`");
	$_SESSION['name']=$f['name'];
	$_SESSION['surname']=$f['surname'];
	$_SESSION['branch']=$f['branch'];
	$_SESSION['sem']=$f['sem'];
				
	$dirname1 = $f['branch'].$f['sem'].$f['name'].$f['surname'];
	
	
	if($result1)
	{	
		$fl = 111; 
		//$a1 = mysql_fetch_array( $result1 );
		while ($a1=mysql_fetch_array( $result1 )) 
		{
			$dirname1 = $a1['branch'].$a1['sem'].$a1['name'].$a1['surname'];
			if($str_m === $dirname1)
			{		
				$counter++;
				
				/*$counter()
				{
					$qry="DELETE FROM `".$str_m."`WHERE `name`=".$f.$counter['name']." && `surname`=".$f.$counter['surname']."&& `branch`=".$f.$counter['branch']."&& `sem`=".$f.$counter['sem'];
					mysql_query($qry);
					header("Location:user_home.php");	
				}*/
				
				echo '<tr><td class="td">'.$f['name']." ".$f['surname'].'</td><td class="td">you are a crush of him/her! :)</td></tr>';			
							
				$fl = 222;
				
			}
	 	}
 		if($fl == 111)
		{
			$counter++;
				
				
				/*fun.$counter()
				{
					$qry="DELETE FROM `".$str_m."`WHERE `name`=".$f.$counter['name']." && `surname`=".$f.$counter['surname']."&& `branch`=".$f.$counter['branch']."&& `sem`=".$f.$counter['sem'];
					mysql_query($qry);
					header("Location:user_home.php");	
				}*/
				
				//<td><a href="remove.php"><button style=" display: block; background:#FFF;  width: 110px;  cursor: pointer;    border: 0px;  height:30px;  border-radius: 5px;  -moz-border-radius: 5px; -webkit-border-radius: 5px;  font-size: 17px;  transition: all 0.3s ease;">Remove</button></a></td>
			
			echo '<tr><td class="td">'.$f['name']." ".$f['surname'].'</td><td class="td">you are not crush of him/her! :(</td></tr>';		
		}
	
	}
	else
	{
		$counter++;
				
			
				
				/*fun.$counter()
				{
					$qry="DELETE FROM `".$str_m."`WHERE `name`=".$f.$counter['name']." && `surname`=".$f.$counter['surname']."&& `branch`=".$f.$counter['branch']."&& `sem`=".$f.$counter['sem'];
					mysql_query($qry);
					header("Location:user_home.php");	
				}*/
		
		echo '<tr><td class="td">'.$f['name']." ".$f['surname'].'</td><td class="td">account not exist! :|</td></tr>';
	}
}


if($counter==0)
{
	echo "<tr><td style=\"background-color:#FFF;font-family: Arial;	width:240px;text-align:center;height:35px;font-size:16px;\">You haven't add any crush.....</td><td style=\"background-color:#FFF;font-family: Arial;	width:240px;text-align:center;height:35px;font-size:16px;\"> click on \"add crush\" button to add your crush...</td></tr>";
}


?>


<!--
  <tr>
    <td class="td">sanket bhimani</td>
    <td class="td">you are not crush of him/her</td>
    <td>
   <button style=" display: block;  background: #FFF;  width: 110px;  cursor: pointer;     border: 0px;  height:35px;  border-radius: 5px;  -moz-border-radius: 5px;  -webkit-border-radius: 5px;  font-size: 17px;  transition: all 0.3s ease;">Remove</button>
   </td>
    
  </tr>
  <tr>
    <td class="td">sanket bhimani</td>
    <td class="td">you are crush of him/her</td>
    <td>
   <button style=" display: block;  background: #FFF;  width: 110px;  cursor: pointer;      border: 0px;  height:35px;  border-radius: 5px;  -moz-border-radius: 5px;  -webkit-border-radius: 5px;  font-size: 17px;  transition: all 0.3s ease;">Remove</button>
   </td>

  </tr>
   <tr>
    <td class="td">sanket bhimani</td>
    <td class="td">account not exist</td>
    <td>
   <button style=" display: block;  background: #FFF;  width: 110px;  cursor: pointer;     border: 0px;  height:35px;  border-radius: 5px;  -moz-border-radius: 5px;  -webkit-border-radius: 5px;  font-size: 17px;  transition: all 0.3s ease;">Remove</button>
   </td>

  </tr>
  
  
  
  
  -->
  
  
  
</table>
	
	

           
             </div>
			 
         <div>
        <span style=" height:35px; margin-right:75px; margin-top:8px;float:right;">        
        
<a href="index.php" style="width:210px;">
    <button style=" display: block;
  background: #1abc9d;  width: 210px;  cursor: pointer;  color: #fff;    border: 0px;  height:35px;  border-radius: 5px;  -moz-border-radius: 5px; -webkit-border-radius: 5px;  font-size: 17px;  transition: all 0.3s ease;">Log out</button></a>

     </span>  <span style=" height:35px;  margin-right:54px; margin-top:8px;float:right">

<a href="reset_password.php" style="width:210px;">
    <button style=" display: block;  background: #1abc9d;  width: 210px;  transition: all 0.3s ease;  cursor: pointer;  color: #fff;  border: 0px; height:35px;  border-radius: 5px;  -moz-border-radius: 5px;  -webkit-border-radius: 5px;  font-size: 17px;">Password Reset</button>
	</a>


     </span>  <span style="height:35px; margin-right:54px; margin-top:8px;float:right;">
 
<a href="add.php" style="width:210px">
    <button style=" display: block;  background: #1abc9d;  width: 210px;  cursor: pointer;  color: #fff;  border: 0px;  height:35px;  border-radius: 5px; -moz-border-radius: 5px;  -webkit-border-radius: 5px;  font-size: 17px;  transition: all 0.3s ease;">Add Crush</button>
	</a>


     </span>
     
     </div></div>
       		
    
       
   		    

</div>

</div> 




</body>

</html>