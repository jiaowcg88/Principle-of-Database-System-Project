<?php
session_start();


?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
  <meta charset="UTF-8">
  <title>A to Z Recipes - Food &amp; Recipes Web Template</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <div class="header" align = "left">
         <ul class="nav navbar-nav navbar-right" id="top-nav" >
          <?php
                        if(!isset($_SESSION["username"]))
                        {
            
                          echo"<a style=\"position:absolute;font-size:20px\" href =\"javascript:void(0)\" onclick=\"window.location.href='login.php'\">Login</a>
                                 <a style=\"position:absolute;margin-top:20px;font-size:20px\" href =\"javascript:void(0)\" onclick=\"window.location.href='Signup.php'\">Signup</a>";
                                 
                        }
                        else
                        {
                          echo"<a style=\"position:absolute;aligh:left\" onclick=\"window.location.href ='userprofile.php'\">Welcome ".$_SESSION["username"]."</a> <br>
                              <a style=\"position:absolute;align:right\" onclick=\"window.location.href ='logout.php'\">Logout</a>";
                                
                        }
                    ?>
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
         <!--  <li>
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
            <div class ="container" style="images/bg3.jpg">
                <div class ="p" align = "center">
                     
                     <?php
                       error_reporting(E_ALL ^E_DEPRECATED);
                       
                       //connecting, selecting database
                       $link = mysql_connect('localhost','root','12345') or die('Could not connect:'.mysql_error());
                       //echo 'Connected successfully';
                       mysql_select_db('project1') or die('Could not select database');
                       $username=$_SESSION["username"];

                      if (isset($username))
                      {
                      // $loginname = $_POST['username'];  // how to pass the variable from the previous page
                       $query = "SELECT uname,age,gender,ucity,ustate,ucountry,rtitle FROM User u, Recipe r Where r.uid = u.uid and loginname='".$username."'"; // SELECT user infor and recipe
                       $query1 = "SELECT gname from User u, Groups g, Groupmember m where u.uid = m.uid and 
                       g.gid = m.gid and loginname ='".$username."'"; 
                       $query2= "SELECT rtitle,logs.rid from logs,recipe where logs.uid ='".$_SESSION["uid"]."'and logs.rid=recipe.rid order by timestamp desc";
                       // select user's group metting
                       $result = mysql_query($query) or die ('Query failed:' . mysql_error());
                       $result1 = mysql_query($query) or die ('Query failed:' . mysql_error());
                       $result2 = mysql_query($query1) or die ('Query failed:' . mysql_error());
                       $result3 = mysql_query($query2) or die ('Query failed:' . mysql_error());
                       $row = mysql_fetch_array($result,MYSQL_NUM);
                      // $row1 = mysql_fetch_array($result2,MYSQL_NUM);    
                        $username = $row[0];
                        $age = $row[1];
                        $gender = $row[2];
                        $city = $row[3];
                        $state = $row[4];
                        $country = $row[5];
                        $rtitle = $row[6];        
                      }
                     else 
                      {
                       echo "<script>alert('You are not log in!');window.location.href='login.php'</script>";
                      }
                  ?>
                   <h1>Welcome to your personal page</h1>
                   <?php
                     echo"<p> username: ".$username." </p>
                          <p> age:".$age."</p>
                          <p> gender:".$gender."</p>
                          <p> city: ".$city."</p>
                          <p> state:". $state. "</p>";
                   ?>   
                </div>
                <div class ="header2" align ="center">
                  <h2> Recipes I posted </h2>
                  <?php
                    while($row = mysql_fetch_array($result1,MYSQL_NUM))
                    {
                          echo"<p>".$row[6]."</p>";
                    }
                  ?>
                </div>
                <div class ="header3" align = "center">
                 <h3> List of Group Meetings I joined</h3>
                 <?php
                   while ($row1 = mysql_fetch_array($result2,MYSQL_NUM))
                   {
                         echo"<p>".$row1[0]."</p>";
                       }
                 ?>
                </div>
                <div class ="header3" align = "center">
                 <h3> Recipe I Recently Searched</h3>
                 <?php
                   while ($row1 = mysql_fetch_array($result3,MYSQL_NUM))
                   {
                         echo"<p onclick=\"window.location.href='recipeinfo.php?rid=".$row1[1]."'\">".$row1[0]."</p>";

                       }
                 ?>
                </div>
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