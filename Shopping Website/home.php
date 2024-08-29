<?php
$log="Log in";

 if (!empty($_GET["login_user"])) {
		$log="Log out";
	}
?> 


<html lang="en-US" >
<head>
	<link rel="stylesheet" href="style.css">
	<title>Online Shopping | Home</title>
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
	<div class=mainSection>
		<div class=leftHeading>
			<h1><span>One Shop</span> for all your Clothes </h1>
			<p>Smooth fabric, flexible pricing and personalised<br />
				fashion approach for all your daily active<br />
				operations. The new benchmark of EASY.</p>
		</div>
		<div class=rightImage>
			<img class=rightImage src="images/slider-bg.jpg"/>
		</div>
	</div>
	<div class=footer>
		<div class=about>
			<h2> ABOUT US</h2>
			
		</div>
		<div class=middleFooter>
		<div class=leftFooter>
				<p>We build good fashionable clothes website</p>
				<p> the key values of Online shop, You know exactly where</p>
				 <p> your choices' find, the companys we work with, and what</p>
				 <p>  we show you as a brand. </p>
				 <p style="font-weight: bolder;">For inquiries, please contact the numbers:</p><p> <span style="color: aliceblue;">05012334455</span> | <span style="color: aliceblue;">0512345567778</span> 
			
			
		</div>
		<div class=rightFooter>
			<ul>
				<li>Home</li><li>Categories</li><li>Products</li><li>contact</li>
			</ul>
		</div>
		</div>
		<div class=about>
		<p>© Online Shop 2023. All rights reserved.</p>
	
	</div>
	</div>
</body>
</html>