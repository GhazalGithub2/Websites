<?php
$log="Log in";

 if (!empty($_GET["login_user"])) {
		$log="Log out";
	}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone_no'];
$message=$_POST['message'];
$sql = "insert into contactus(message,phone,name,email) values('$message','$phone','$name','$email')";
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'shoppingdb');
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 if ($db->connect_error){
	die("Connection failed: ". $db->connect_error);
}
 if($_SERVER["REQUEST_METHOD"] == "POST") {
 	if(!empty($name)&&!empty($email)&&!empty($phone)&&!empty($message))
 	{
 	if ($db->query($sql) === TRUE) {
	$res= "ADDED: ".$name.", ".$message.", ".$email;
} else {
	$res= "Error: ".$sql."<br>".$db->error;
}
}
else{$res= "Error: Please insert all information!!!";}
}
$db->close();
?> 
<!doctype html>
<html lang="en-US" >
<head>
	<link rel="stylesheet" href="style.css">
	<title>Online Bank |Contact Us</title>
</head>
<body class=body>
	<div class=header>
		<div class=logoNavbar>
			<div class=logo>
				<img class=logo src="images/favicon.png"/>
			</div>
			<div class="navbar">
			<ul >
					<a href="home.php?login_user=<?php echo $_GET['login_user']; ?>"><li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#002c3e'">Home</span></li> </a>
					 <a href="categories.php?login_user=<?php echo $_GET['login_user']; ?>"><li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#002c3e'">Categories</span></li> </a> 
					 <a href="products.php?login_user=<?php echo $_GET['login_user']; ?>"> <li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#002c3e'">Products</span></li> </a>
					  <a href="contactus.php?login_user=<?php echo $_GET['login_user']; ?>"> <li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'">Contact Us</span></li> </a>
					   <a href="login.php" > <li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'"><?php  echo $log;?></span></li> </a> 
					    <a href="#" > <li><span onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#385773'"><?php  echo $_GET['login_user'];?></span></li> </a>     
					</ul>
				</div>
		</div>
	</div>
	<!-- Centre Image -->
	<div class=mainSectionContact>
		<div class=contactForm>

			<form name="myform" method="post" action="" >
				<div class="field">
					<h1> Contact with Us</h1>
				</div>
                <div class="field">
                    <input type="text" name="name" placeholder="Your name" />
                </div>
                <div class="field">
                    <input type="email" name="email" placeholder="Email" />
                </div>
                <div class="field">
                    <input type="text" name="phone_no" placeholder="Phone number" />
                </div>
                <div class="field">
                    <input placeholder="Message" name="message">
                </div>
                <div class="field">
                   <input type='submit' value='SEND'>
                </div>
                          
			</form>
			<div style = "font-size:14px; color:aqua; margin-top:10px; padding-left:20px;"><?php echo $res; ?></div>
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