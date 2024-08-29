<!doctype html>
<html lang="en-US" >

<head>
	<link rel="stylesheet" href="style.css">
	<title>Online Bank |LogIn</title>
</head>
<body class=body>
<?php
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'shoppingdb');
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 session_start();
  $_POST['login_user']='';
  $_POST['log']="Log in";


   $myusername="Log In Here";
  
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
     
      $sql = "SELECT id FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
     
      $count = mysqli_num_rows($result);
      if($count == 1) {
      	$_POST['login_user'] = $myusername;
         $myusername="Welcome ".$myusername;
         $_POST['log']="Log out";
         header("Location: home.php?login_user=".urlencode($myusername));

      }else {

         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!--  -->
	<div class=header>
		<div class=logoNavbar>
			<div class=logo>
				<img class=logo src="images/favicon.png"/>
			</div>
			<div class="navbar">
				<ul >
					<a href="home.php" ><li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'">Home</span></li> </a>
					 <a href="categories.php"><li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'">Categories</span></li> </a> 
					 <a href="products.php"> <li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'">Products</span></li> </a>
					  <a href="contactus.php"> <li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'">Contact Us</span></li> </a>
					   <a href="login.php" > <li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'"><?php  echo  $_POST['log'];?></span></li> </a> 
					   <a href="login.php" > <li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'"><?php  echo $_POST['login_user'];?></span></li> </a> 
					 
					</ul>

				</div>
		</div>
	</div>
	<!-- Centre Image -->
	<div class=mainSectionLogin>
		<div class=loginForm>
			<div>
				<form name="myform" method="post" action="" >
				<div class="fieldL">
					<h1>
					
					 <?php 
					echo $myusername;
				
					?>
					 
					   
					</h1>
				</div>
				<?php
				if($_POST['log']!="Log out"){
						echo "<div class='fieldL'><input type='text' name='username' placeholder='User Name' /></div>
                <div class='fieldL'><input type='password' name='password' placeholder='Password' /></div>
                <div class='fieldLB'><input type='submit' value='SEND' href='home.php'></div>";
				}

				?>
               
                </form>          
			</div>
			  <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
		</div>
		
	</div>
	<div class=footer>
		<div class=about2>
			 <p style="font-weight: bolder;">For inquiries, please contact the numbers:</p><p> <span style="color: aliceblue;">05012334455</span> | <span style="color: aliceblue;">0512345567778</span> 
				
		<p>© Online Shop 2023. All rights reserved.</p>
	
	</div>
	</div>
</body>
</html>

 