<?php
session_start();
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Food & Recipe home page</title>
	<meta name = "description" content ="">
	<meta name = "viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    <?php
			if(!isset($_SESSION["username"]))
			{
				echo"<a style=\"position:absolute;font-size:20px\" href =\"javascript:void(0)\" onclick=\"window.location.href='login.php'\">Login</a>
					     <a style=\"position:absolute;margin-top:20px;font-size:20px\" href =\"javascript:void(0)\" onclick=\"window.location.href='Signup.php'\">Signup</a>";
					     
			}
			else
			{
				echo"<p style=\"position:absolute;float:left\" onclick=\"window.location.href ='userprofile.php'\">Welcome ".$_SESSION["username"]."</p>";
			}
	?>
<body>			
	<div class="header">
		<div>
			<a href="homepage.php"><img src="images/logo.png" alt="Logo"></a>
		</div>
		<form action="searchrecipe.php" method= "post">
			<input type="text" name ="keyword" placeholder="Search from our Recipes around the world" id="search">
			<input type="submit" value="" id="searchbtn"> <br>
		</form>
	</div>
	<div class="body">
		<div>
			<div class="header">
				<ul>
					<li class="current">
						<a href="homepage.php">Home</a>
					</li>
					<li>
						<a href="recipes.php">A to Z Recipes</a>
					</li>
					<li>
						<a href="group.php">Groups</a>
					</li>
					<li>
						<a href="addrecipe.php">Add Recipe</a>
					</li>
				</ul>
			</div>
			<div class="body">
				<div>
					<a href="homepage.php"><img src="images/bg-2.jpg" alt="Image"></a>
				</div>
				
			</div>
			<div class="footer">
				<ul>
					<li>
						<h2><a href="group.php">Group</a></h2>
						<a href="group.php"><img src="images/featured1.jpg" alt="Image"></a>
					</li>
					<li>
						<h2><a href="recipes.php">A to Z Recipes</a></h2>
						<a href="recipes.php"><img src="images/bg3.jpg" alt="Image"></a>
					</li>
				</ul>
				<ul>
					<!-- <li>
						<h2><a href="blog.php">Blog</a></h2>
						<a href="blog.php"><img src="images/blog.jpg" alt="Image"></a>
					</li> -->
				</ul>
			</div>
		</div>
		<div>
			<div>
				<h3>Recipes</h3>
				<ul id="featured">
					<li>
						<a href="recipes.php"><img src="images/sandwich.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">Ham Sandwich</a></h2>
							<span>by: Anna</span>
						</div>
					</li>
					<li>
						<a href="recipes.php"><img src="images/biscuit-and-coffee.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">Biscuit &amp; Sandwich</a></h2>
							<span>by: Sarah</span>
						</div>
					</li>
					<li>
						<a href="recipes.php"><img src="images/pizza.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">Delicious Pizza</a></h2>
							<span>by: Rico</span>
						</div>
					</li>
				</ul>
			</div>
			
			<div>
				<h3>Get Updates</h3>
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" id="facebook">Facebook</a>
				<a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" id="twitter">Twitter</a>
				<a href="http://freewebsitetemplates.com/go/youtube/" target="_blank" id="youtube">Youtube</a>
				<a href="http://freewebsitetemplates.com/go/flickr/" target="_blank" id="flickr">Flickr</a>
				<a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" id="googleplus">Google&#43;</a>
			</div>
		</div>
	</div>
	<div class="footer">
		<div>
			<p>
				&copy; Copyright 2012. All rights reserved
			</p>
		</div>
	</div>
</body>
</html>
