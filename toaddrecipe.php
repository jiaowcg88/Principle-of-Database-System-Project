<html>
<head>
   <title>Add a new recipe page</title>
   <?php
    error_reporting(E_ALL ^E_DEPRECATED);
    //connecting, selecting database
    $link = mysql_connect ('localhost','root','12345') or die('Could not connect :'.mysql_error());

    //echo 'Connected successfully';
    mysql_select_db('project1') or die('Could not select database');
        $rid = rand(100, 999);
        $rtitle = $_POST['rtitle'];
        $num_serving = $_POST['num_serving'];
        $username = $_POST['username'];
        $description =$_POST['description'];
        $query = "INSERT INTO Recipe(rid,rtitle,num_serving,uid,description) VALUES('".$rid."','".$rtitle."','".$num_serving."',(select uid from user where uname ='$username'),'".$description."')";
        $data = mysql_query($query) or die(mysql_error());
        if($data)
        {
         echo "<script> alert('Recipe is added...');window.location.href ='recipes.php'</script>";
        }

    
     //echo "<script> alert('sign up is not completed!');window.location.href ='Signup.php'</script>";
     //Free resultset


   ?>

   </head>
</html>