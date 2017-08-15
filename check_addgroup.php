<!DOCTYPE html>


<html>
<head>
   <title>complete add your group</title>   
 </head>
 

 <body>
 	
 <?php
    error_reporting(E_ALL ^E_DEPRECATED);
    //connecting, selecting database
  $link = mysql_connect('localhost', 'root','12345')
 or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('project1') or die('Could not select database');
        $gname = $_POST['gname'];
        $description = $_POST["description"];
        $gid =rand(1000, 9999);
        $query = "INSERT INTO groups(gname,description,gid) VALUES('$gname','$description',$gid)";
        $data = mysql_query($query) or die(mysql_error());
        echo "<script> alert('Add Group Successfully');window.location.href ='group.php'</script>";
   ?>     
 </body>
</html>