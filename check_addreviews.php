<html>
<head>
   <title>Add a new  review page</title>
   <?php
    error_reporting(E_ALL ^E_DEPRECATED);
    //connecting, selecting database
    $link = mysql_connect ('localhost','root','12345') or die('Could not connect :'.mysql_error());

    //echo 'Connected successfully';
    mysql_select_db('project1') or die('Could not select database');
    $rtitle =$_POST['rtitle'];
    $rating =$_POST["rating"];
    $comments =$_POST['comments'];
    $rid = $_POST['rid'];
    $query = "INSERT INTO Review(rwtitle,rating,rwtext,rid) VALUES('$rtitle','$rating','$comments','$rid')";
    $data = mysql_query($query) or die(mysql_error());

    if($data)
    {
     echo "<script> alert('Review is added...');window.location.href =\"recipeinfo.php?rid=".$rid."\"</script>";

    
    }

    


   ?>

   </head>
</html>