

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
<body>
	<div class="header">
		<div>
			<a href="homepage.php"><img src="images/logo.png" alt="Logo"></a>
		</div>
		
		<div>
		   <a href="addmeeting.php">Add Meeting</a>
		</div>

	</div>

<?php

error_reporting(E_ALL ^ E_DEPRECATED);
//link database
$link = mysql_connect('localhost', 'root','12345')
 or die('Could not connect: ' . mysql_error());
// echo 'Connected successfully';
mysql_select_db('project1') or die('Could not select database');
if ($_GET["gid"]!=null)
{
	$key=$_GET["gid"];
    $query = "select * from meeting where gid = ".$key;
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
}
?>

         <div class ="h" align="center">
           <?php 
              while($row = mysql_fetch_array($result, MYSQL_NUM))
            {
                  echo"<p> Name : ".$row[1]."</p>";
                  echo"<p>statrtime : ".$row[3]."</p>";
                  echo"<p>endtime: ".$row[4]."</p>";
                  echo"<p>State: ".$row[5]."</p>";
                  echo"<p>City: ".$row[6]."</p>";
                  echo"<p>Address: ".$row[7]."</p>";
                  echo"<button onclick=\"window.location.href='rsvp.php?gid=".$row[2]."&mid=".$row[0]."'\">RSVP</button> <br><br>";
                  echo"<button onclick=\"window.location.href='addreport.php?gid=".$row[2]."&mid=".$row[0]."'\">add report</button> <br>";

            }

          ?>
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
