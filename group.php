<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>A to Z Recipes - Food &amp; Recipes Web Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<div>
			<a href="homepage.php"><img src="images/logo.png" alt="Logo"></a>
		</div>
		<form action="searchrecipe.php" method ="post">
			<input type="text" name ="keyword" placeholder="Search from our 10,000+ Recipes around the world" id="search">
			<input type="submit" value="" id="searchbtn">
		</form>
	</div>
	<div class="body">
		<div>
			<div class="header">
				<ul>
					<li>
						<a href="homepage.php">Home</a>
					</li>
					<li class="current">
						<a href="recipes.php">A to Z Recipes</a>
					</li>
					<!-- <li>
						<a href="featured.php">Featured Recipes</a>
					</li> -->
					<li>
						<a href="group.php">Group</a>
					</li>
					<li>
						<a href="addrecipe.php">Add recipe</a>
					</li>
					<!-- <li>
						<a href="blog.php">Blog</a>
					</li> -->
				</ul>
			</div>
			<div class="body">
				<div id="content">
					<div>
						<ul>
							<?php
							error_reporting(E_ALL ^ E_DEPRECATED);
							//link database
							$link = mysql_connect('localhost', 'root','12345')
							 or die('Could not connect: ' . mysql_error());
							//echo 'Connected successfully';
							mysql_select_db('project1') or die('Could not select database');

							$query ="select gname,description,gid from groups";

							$result = mysql_query($query) or die('Query failed: ' . mysql_error());
							?>
							 
							 <div class ="h" align="center">
							           <?php 
							              echo "<a href=\"addgroup.php\">Creat New Group</a>";
							              while($row = mysql_fetch_array($result,MYSQL_NUM))
							            {
							                  echo"<p> Group Name : ".$row[0]."</p>";
							                  echo"<p> Description : ".$row[1]."</p>";
							                  echo"<button onclick=\"window.location.href='meeting.php?gid=".$row[2]."'\">Meeting Info</button><br>";

							                  echo"<button onclick=\"window.location.href='joingroup.php?gid=".$row[2]."'\">Join</button>";
							            }

				                         


							           ?>
			        		 </div>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div>
			<div>
				<h3>Featured Recipes</h3>
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