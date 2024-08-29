<!doctype html>
<html lang="en-US" >

<head>
	<link rel="stylesheet" href="style.css">
	<title>Online Bank |LogIn</title>
</head>
<body class=body>
	<div class=header>
		<div class=logoNavbar>
			<div class=logo>
				<img class=logo src="images/logo.png"/>
			</div>
			<div class="navbar">
				<ul >
					<a href="home.php" ><li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'">Home</span></li> </a>
					 <a href="cards.php"><li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'">Cards</span></li> </a> 
					 <a href="pricing.php"> <li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'">Pricing</span></li> </a>
					  <a href="contactus.php"> <li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'">Contact Us</span></li> </a>
					   <a href="login.php" > <li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'">Login</span></li> </a> 
					   <a href="openaccount.php" > <li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'">Open Account</span></li> </a>
					</ul>

				</div>
		</div>
	</div>
	<!-- Centre Image -->
	<div class=mainSectionLogin>
		<div class=loginForm>
			<div>
				<form name="myform" method="post" action="#" onsubmit="return validateform()" >
				<div class="fieldL">
					<h1>
					
					 Log in here
					</h1>
				</div>
                <div class="fieldL">
                    <input type="text" name="name" placeholder="User Name" />
                </div>
                <div class="fieldL">
                    <input type="password" name="password" placeholder="Passwprd" />
                </div>
                
                <div class="fieldLB">
                    <input type="submit" value="SEND" src=#>  
                </div>
                </form>          
			</div>
		</div>
		
	</div>
	<div class=footer>
		
		
		<div class=about>
			<p style="font-weight: bolder;">For inquiries, please contact the numbers:</p>
			<p> <span>0508188113</span> | <span >0531889350</span> 
				| <span > 0507969112 </span>|<span > 0550813585</span></p>
			
		<p>© Online Bank 2022. All rights reserved.</p>
	
	</div>
	</div>
</body>
</html>

<script>  
function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
  
	if (name==null || name==""){  
	  alert("Name can't be empty!!");  
	  return false;  
	}else if(password.length<5){  
  alert("Password must be at least 5 chars!!");  
  return false;  
  } 

}  
</script> 