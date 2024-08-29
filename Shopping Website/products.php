<?php
$log="Log in";

 if (!empty($_GET["login_user"])) {
		$log="Log out";
	}
?> 
<!doctype html>
<html lang="en-US" >
<head>
	<link rel="stylesheet" href="style.css">
	<title>Online Bank | Products</title>
</head>
<body class=body>
<!--  -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoppingdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, imageurl, price FROM product";
$result = $conn->query($sql);
?>

<!--  -->
<!--  -->
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
	<div class=mainSectionPricing>
		<div class=mainHeading>
			<h1>Products</h1>
			<p>Trendy products. Best brands.<br />
				 Excellent pricing.<br />
				</p>
		</div>
		<div class=contents>
			<?php if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "<div class=item><img src= ". $row["imageurl"]. " /><h2> ". $row["name"]. "</h2><span>" . $row["price"] . "</span><br><button><a href='#'>Buy Now</a></button></div>";
			    }
			} else {
			    echo "0 results";
			}

			$conn->close();
?> 
		

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