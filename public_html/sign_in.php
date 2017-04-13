<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Create account-lovedesk</title>

    <link rel="stylesheet" href="css/sign_in.css" media="screen" type="text/css" />

   

</head>

<body>

  <h1 class="home">fill up this form with valid information to sign up</h1>

<div class="stand">
  <div class="outer-screen">
    <div class="inner-screen"><div style="float:left">
	<form action="write.php" method="post">
	
	
    <input type="text" class="left" class="zocial-dribbble"  placeholder="Name"  name="name" />
      
<input class="left" class="zocial-dribbble" type="text" placeholder="E-mail"  type="text" name="email"/>




      <select class="left"  id="branch" name="branch" style=" display: block;  width: 322px;  height: 48px; color:#666;">
       <option id="branch" value="CE">Computer Engineering</option>
       <option id="branch"  value="CL">Civil Engineering</option>
	   <option id="branch"  value="IT">Information Technology</option>
	   <option  id="branch"  value="CH">Chemical Engineering</option>
	   <option   id="branch"  value="MH">Mechanical  Engineering</option>
	   <option   id="branch"  value="IC">Instrument and Control</option>
	   <option id="branch" value="EC">Electronics and Communication</option>
      </select>
	  
	  
	  
       <input class="left" class="zocial-dribbble" type="text"  placeholder="Any Question For Password Pecovery" name="question" />
       
       <select id="sex" class="left" name="sex" style=" display: block;  width: 322px;  height: 48px; color:#666; margin-left:50px ">
       <option value="Male">Male</option>
       <option value="Female">Female</option>
     </select>

    </div>
     
     
     
     <div style="float:right">
      <input type="text" class="right" class="zocial-dribbble"  placeholder="Surname" name="surname"/>
      
<input class="right" class="zocial-dribbble" type="password" placeholder="Password" name="password"/>




     <select id="sem" class="right" name="sem" style=" display: block;  width: 322px;  height: 48px; color:#666;">
       <option value="first">First sem</option>
       <option value="second">Second sem</option>
	   <option value="third">Third sem</option>
	   <option value="fourth">Fourth sem</option>
	   <option value="fifth">Fifth sem</option>
	   <option value="sixth">Sixth sem</option>
	   <option value="seventh">Seventh sem</option>
	   <option value="eighth">Eighth sem</option>
      </select>
      
      
      
      <input class="right" class="zocial-dribbble" type="text" placeholder="Answer Of Question Written Beside" name="ans"/>
      
     
     
    
     
      
        
     </div>
     <div style="margin-top:365px">
         <input type="submit" style="height:40px; font-family:arial"  value="Submit" name="login" />
      
     
  		 </div>
     
   
    </div> 
  </div> 
</div>

 

</body>

</html>