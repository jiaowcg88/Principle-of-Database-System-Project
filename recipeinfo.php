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
		<form action="searchrecipe.php" method= "post">
			<input type="text" name ="keyword" placeholder="Search from our Recipes around the world" id="search">
			<input type="submit" value="" id="searchbtn"> <br>
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
					<!-- <FORM METHOD=post ACTION=example-form.html>
 					<INPUT TYPE="text" NAME="Example-Form" SIZE="40"
        			MAXLENGTH="35">
 					</FORM> -->
						<ul>
							<?php 
							 
				              error_reporting(E_ALL ^ E_DEPRECATED);
				               // Connecting, selecting database
				               $link = mysql_connect('localhost', 'root','12345')
				               or die('Could not connect: ' . mysql_error());
				               // echo 'Connected successfully';
				               mysql_select_db('project1') or die('Could not select database');

				             if($_GET["rid"]!=null)
				              {
				          	//echo "linked";
				              $info=$_GET["rid"];

				              $query = "select rtitle,description,uname, r.rid
				          		  from user u,recipe r, recipeingredient ri
				          		  where u.uid=r.uid and r.rid = ri.rid and r.rid=";
				              $query .="'".$info."'";
				              $query1 = "select ri.ingredname
				                     from recipe r, recipeingredient ri 
				                     where r.rid = ri.rid and r.rid=";
				              $query1 .="'".$info."'";
				              $query2 = "select rp.pname, r.rid from recipe r left join recipepicture rp on(r.rid = rp.rid) where r.rid=";
				              $query2 .="'".$info."'";
                              $query3 ="select rw.rwtitle, rw.rwtext, rw.rating from recipe r, review rw where r.rid = rw.rid and r.rid= ";
                              $query3 .="'".$info."'";

				              $result = mysql_query($query) or die('Query failed: ' . mysql_error());
				              $result1 = mysql_query($query1) or die('Query failed: ' . mysql_error());
				              $result2 = mysql_query($query2) or die('Query failed: ' . mysql_error());
				              $result3 = mysql_query($query3) or die('Query failed: ' . mysql_error());
				              $row =  mysql_fetch_array($result,MYSQL_NUM);
				              }
				            ?>
			             <div class ="h" align= "center">
			                	<?php 
			                       while ($line = mysql_fetch_array($result2, MYSQL_NUM))
			                     {
                                   echo "<img src = \"images/".$line[0].".jpg\" alt=\"Image\" width = \"250\" height =\"250\"/>";

			                     }
			                       echo"<h1> recipe title : ".$row[0]."</h1>";
			                       echo"<p style='font-size:20px'> Description : ".$row[1]."</p>";
			                       echo"<p style='font-size:20px'> uname : ".$row[2]."</p>";
			                       echo "<p style='font-size:20px'> ingredients: </p>";
			                     
			                      while($row1 = mysql_fetch_array($result1,MYSQL_NUM))
			                      {
			                            
			                            echo"<p style='font-size:20px'>".$row1[0]."</p>";
			                            
			                      }

			                      while($row2 = mysql_fetch_array($result3,MYSQL_NUM))
			                      {
			                       echo"<h1> review title : ".$row2[0]."</h1>";
			                       echo"<p style='font-size:20px'> rating : ".$row2[2]."</p>";
			                       echo"<p style='font-size:20px'> comments : ".$row2[1]."</p>";
			                    
			                      }
           
			                      echo "<h style='font-size:25px'><a href =\"reviews.php?rid=".$row[3]."\">Add a review </a></h>";
			                      // <h3><a href="recipeinfo.php?rid=2">Grilled Teriyaki Tuna</a></h3>
			                      // echo "<a href=\"recipeinfo.php?rid=".$row[0]." \"><img src = \"images/".$row[2].".jpg\" alt=\"Image\" width = \"250\" height =\"250\"></a>";

			                 ?>
                          </div>

						</ul>
					</div>
				</div>
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